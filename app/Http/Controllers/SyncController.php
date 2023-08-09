<?php

namespace App\Http\Controllers;

use App\Models\AuthLog;
use App\Models\SyncTable;
use App\Models\SyncLog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Carbon\Carbon;
use Illuminate\Support\Str;
use GuzzleHttp\Client;

class SyncController extends Controller
{
    public function sync(Request $request)
    {
        $syncTableIds = $request->input('tables');
        $syncTables = SyncTable::whereIn('id', $syncTableIds)->get();

        foreach ($syncTables as $syncTable) {
            $nameEntity = $syncTable->name_entity;
            $nameTable = $syncTable->name_table;
            $requestModel = $syncTable->request_model;
            $url = $syncTable->url;

            $authLog = AuthLog::latest()->first();

            if ($authLog) {
                $token = $authLog->token;
            } else {
                app(TokenRenewController::class)->login();
                $token = AuthLog::latest()->first()->token;
            }

            $client = new Client();
            $response = $client->request("POST", $url, [
                "headers" => ["Authorization" => "Bearer " . $token],
                "json" => json_decode($requestModel),
            ]);

            $responseData = $response->getBody()->getContents();
            $responseData = iconv("ISO-8859-1", "UTF-8", $responseData);
            $responseData = json_decode($responseData, true);
            $status = $responseData["status"];

            if ($status == 3) {
                app(TokenRenewController::class)->login();
                $token = AuthLog::latest()->first()->token;
                $response = $client->request("POST", $url, [
                    "headers" => ["Authorization" => "Bearer " . $token],
                    "body" => $requestModel,
                ]);
                $responseData = $response->getBody()->getContents();
                $responseData = iconv("ISO-8859-1", "UTF-8", $responseData);
                $responseData = json_decode($responseData, true);
            }

            if ($status == 1) {
                $result = $this->storeData($nameTable, $responseData["responseBody"]["entities"]);

                if (!$result['success']) {
                    $this->saveSyncLog($syncTable->id, $nameTable, 'Error', $result['error']);
                }

                $hasMoreResults = $responseData["responseBody"]["entities"]["hasMoreResult"];

                while ($hasMoreResults == "true") {
                    $offsetPage = intval($responseData["responseBody"]["entities"]["offsetPage"]) + 1;
                    $requestBody = json_decode($requestModel);
                    $requestBody->requestBody->dataSet->offsetPage = strval($offsetPage);

                    $response = $client->request("POST", $url, [
                        "headers" => ["Authorization" => "Bearer " . $token],
                        "json" => $requestBody,
                    ]);

                    $responseData = $response->getBody()->getContents();
                    $responseData = iconv("ISO-8859-1", "UTF-8", $responseData);
                    $responseData = json_decode($responseData, true);
                    $newResult = $this->storeData($nameTable, $responseData["responseBody"]["entities"]);

                    if (!$newResult['success']) {
                        $this->saveSyncLog($syncTable->id, $nameTable, 'Error', $newResult['error']);
                    }

                    $hasMoreResults = $responseData["responseBody"]["entities"]["hasMoreResult"];
                }

                $this->saveSyncLog($syncTable->id, $nameTable, 'Success');
            }
        }

        return redirect()->route('tables');
    }

    private function storeData($nameTable, $entities)
    {
        $model = "\\App\\Models\\Tables\\" . strtolower($nameTable);
        $fields = $entities["metadata"]["fields"]["field"];
        $successCount = 0;
        $errorCount = 0;
        $errorMessages = [];

        foreach ($entities["entity"] as $entity) {
            $data = [];

            foreach ($fields as $index => $field) {
                $fieldName = $field["name"];

                if (isset($entity["f" . $index]) && array_key_exists('$', $entity["f" . $index])) {
                    $value = $entity["f" . $index]['$'];

                    $value = mb_convert_encoding($value, 'UTF-8', 'auto');

                    // Verify if its a date on string format and format correctly
                    if (strpos($fieldName, 'DT') === 0 || strpos($fieldName, 'DH') === 0 || strpos($fieldName, 'HR') === 0 || strpos($fieldName, 'VENC') === 0) {
                        if (preg_match('/^\d{2}\/\d{2}\/\d{4} \d{2}:\d{2}:\d{2}$/', $value)) {
                            $formattedDate = Carbon::createFromFormat('d/m/Y H:i:s', $value)->format('d/m/Y H:i:s');
                        } elseif (preg_match('/^\d{2}\/\d{2}\/\d{4}$/', $value)) {
                            $formattedDate = Carbon::createFromFormat('d/m/Y', $value)->format('d/m/Y');
                        } elseif (preg_match('/^\d{2}:\d{2}:\d{2}$/', $value)) {
                            $formattedDate = Carbon::createFromFormat('H:i:s', $value)->format('H:i:s');
                        } else {
                            continue;
                        }

                        $value = $formattedDate;
                    }

                    // Even with the database running via Eloquent, its good to avoid SQL exploits
                    if ($value === "--") {
                        $value = "'--'";
                    }

                    $data[$fieldName] = $value;
                } else {
                    $value = '';
                }
            }

            try {
                $result = $model::create($data);

                if ($result) {
                    $successCount++;
                } else {
                    $errorCount++;
                    $errorMessages[] = "Failed to create record: " . $model;
                }
            } catch (\Exception $e) {
                $errorCount++;
                $errorMessages[] = "Error creating record: " . $e->getMessage();
            }
        }

        $result = [];

        if ($errorCount > 0) {
            $result['success'] = false;
            $result['error'] = implode("\n", $errorMessages);
        } else {
            $result['success'] = true;
        }

        return $result;
    }

    private function saveSyncLog($tableId, $nameTable, $status, $error = null)
    {
        SyncLog::create([
            'table_id' => $tableId,
            'name_table' => $nameTable,
            'status' => $status,
            'error' => substr($error, 0, 4000),
            'execution_date' => Carbon::now()->format('d-m-Y H:i:s'),
        ]);
    }
}
