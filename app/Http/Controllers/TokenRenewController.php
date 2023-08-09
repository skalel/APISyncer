<?php

namespace App\Http\Controllers;

use App\Models\AuthLog;
use Illuminate\Http\Request;

use Carbon\Carbon;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;

class TokenRenewController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $authlogs = AuthLog::paginate(15);

        return view('dashboard', ['authlogs' => $authlogs]);
    }

    /**
     * Create a new token and store.
     */
    public function login()
    {
        $url = 'https://api.sankhya.com.br/login';

        // Recuperar os headers da tabela 'api_credentials'
        $apiCredentials = DB::table('api_credentials')->first();

        if (!$apiCredentials) {
          DB::table('authlog')->insert([
            'token' => null,
            'error_codigo' => 404,
            'error_descricao' => 'Cabeçalhos não foram definidos nas preferências.',
            'created_at' => Carbon::now()->format('d-m-Y H:i:s')
          ]);
          return Redirect::back();
        }

        $headers = [
            'token' => $apiCredentials->token,
            'appkey' => $apiCredentials->appkey,
            'username' => $apiCredentials->username,
            'password' => $apiCredentials->password
        ];

        // Realizar a requisição
        $client = new \GuzzleHttp\Client();
        $response = $client->post($url, [
            'headers' => $headers
        ]);

        // Decodificar a resposta JSON
        $responseData = json_decode($response->getBody(), true);

        // Salvar a resposta no banco de dados
        DB::table('authlog')->insert([
            'token' => $responseData['bearerToken'],
            'error_codigo' => $responseData['error']['codigo'] ?? null,
            'error_descricao' => $responseData['error']['descricao'] ?? null,
            'created_at' => Carbon::now()->format('d-m-Y H:i:s')
        ]);

        // Retornar a resposta
        return Redirect::back();
    }

    public function prefShow()
    {
      $apicredentials = DB::table('api_credentials')->first();
      if (!$apicredentials) {
          $apicredentials = [
            null
          ];
      }
      return view('authpref', ['apicredentials' => $apicredentials]);
    }

    public function setAuth(Request $request)
    {
      $request->validate([
        'username' => ['required', 'string', 'email', 'max:255'],
        'password' => ['nullable', 'min:8'],
    ]);

    $updateData = [
        'username' => $request->username,
    ];

    if ($request->filled('password') && $request->password !== '********') {
        $updateData['password'] = $request->password;
    }

    DB::table('api_credentials')->update($updateData);

    return redirect()->back();
  }
}
