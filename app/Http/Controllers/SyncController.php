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
use Normalizer;

class SyncController extends Controller
{
    public function sync(Request $request)
    {
      $syncTableIds = $request->input('tables');
        $authLog = $this->getToken();

        foreach ($syncTableIds as $tableId) {
            $syncTable = SyncTable::find($tableId);

            if (!$syncTable) {
                continue;
            }

            $token = $authLog->token;

            $offset = $this->calculateOffsetPage($syncTable);
            $requestModel = json_decode($syncTable->request_model);
            $requestModel->requestBody->dataSet->offsetPage = strval($offset);

            $response = $this->sendRequest($syncTable, $token, $requestModel);

            if (!$response) {
                continue;
            }

            $responseData = $this->processResponse($response);

            if ($responseData && $responseData['status'] == 1) {
              $result = $this->storeData($syncTable, $responseData["responseBody"]["entities"]);
              $hasMoreResults = $responseData["responseBody"]["entities"]["hasMoreResult"];

              do {
                $offsetPage = $this->calculateOffsetPage($syncTable) + 1;
                $requestModel->requestBody->dataSet->offsetPage = strval($offsetPage);

                $response = $this->sendRequest($syncTable, $token, $requestModel);

                if (!$response) {
                    break;
                }

                $responseData = $this->processResponse($response);

                $result = $this->storeData($syncTable, $responseData["responseBody"]["entities"]);

                if (!$result['success']) {
                    $this->saveSyncLog($syncTable->id, $syncTable->name_table, 'Error', $result['error']);
                }
            } while ($hasMoreResults == "true");

            $this->saveSyncLog($syncTable->id, $syncTable->name_table, 'Success');
            }
        }

        return redirect()->route('tables');
    }

    private function processResponse($response)
    {
        $responseData = $response->getBody()->getContents();
        $responseData = iconv("ISO-8859-1", "UTF-8", $responseData);
        return json_decode($responseData, true);
    }

    private function getToken()
    {
        $authLog = AuthLog::latest()->first();

        if (!$authLog || $this->isTokenExpired($authLog->created_at)) {
            app(TokenRenewController::class)->login();
            $authLog = AuthLog::latest()->first();
        }

        return $authLog;
    }

    private function isTokenExpired($createdAt)
    {
      return Carbon::now()->diffInMinutes(Carbon::createFromFormat('Y-m-d H:i:s', $createdAt)) > 30;
    }

    private function storeData($syncTable, $entities)
    {
      $model = "\\App\\Models\\Tables\\" . strtolower($syncTable->name_table);
    $fields = $entities["metadata"]["fields"]["field"];
    $successCount = 0;
    $errorCount = 0;
    $errorMessages = [];

    $startIndex = isset($syncTable->last_fetched_registers) && $syncTable->last_fetched_registers < 50
        ? $syncTable->last_fetched_registers - 1
        : 0;

    for ($i = $startIndex; $i < $entities["total"]; $i++) {
      if (isset($entities["entity"][$i])) {
        $entity = $entities["entity"][$i];
        $data = $this->prepareDataArray($entity, $fields);

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
            $errorMessages[] = $entities["offsetPage"] . ". Error creating record: " . $e->getMessage();
        }
      } else {
        continue;
      }
    }

    $updateData = [
        "last_synced_offset" => $entities["offsetPage"],
        "last_fetched_registers" => $entities["total"],
    ];
    $syncTable->update($updateData);

    $result = [];

    if ($errorCount > 0) {
        $result['success'] = false;
        $result['error'] = implode("\n", $errorMessages);
    } else {
        $result['success'] = true;
    }

    return $result;
    }

    private function prepareDataArray($entity, $fields)
    {
    $data = [];

    foreach ($fields as $index => $field) {
        $fieldName = $field["name"];
        $value = $entity["f" . $index]['$'] ?? '';

        $value = $this->removeAccents($value);

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

        if ($value === "--") {
            $value = "'--'";
        }

        $data[$fieldName] = $value;
    }

    return $data;
    }

    private function removeAccents($string) {
      $normalizedString = Normalizer::normalize($string, Normalizer::FORM_KD);
      $cleanedString = preg_replace('/[^\x20-\x7E]/u', '', $normalizedString);
      return $cleanedString;
    }

    private function calculateOffsetPage($syncTable)
    {
        $lastSyncedOffset = $syncTable->last_synced_offset ?? 0;
        $lastFetchedRegisters = $syncTable->last_fetched_registers ?? 50;



        return ($lastSyncedOffset && $lastFetchedRegisters === 50) ? $lastSyncedOffset + 1 : $lastSyncedOffset;
    }

    private function sendRequest($syncTable, $token, $requestModel)
    {
        $client = new Client();

        try {
            $response = $client->request("POST", $syncTable->url, [
                "headers" => ["Authorization" => "Bearer " . $token],
                "json" => $requestModel,
            ]);
            return $response;
        } catch (\Exception $e) {
            // Lidar com erros de requisição
            return null;
        }
    }

    private function saveSyncLog($tableId, $nameTable, $status, $error = null)
    {
        SyncLog::create([
            'table_id' => $tableId,
            'name_table' => $nameTable,
            'status' => $status,
            'error' => substr($error, 0, 24000),
            'execution_date' => Carbon::now()->format('d-m-Y H:i:s'),
        ]);
    }
}
