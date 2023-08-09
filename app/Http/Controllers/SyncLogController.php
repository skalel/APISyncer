<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\SyncLog;

use Illuminate\Support\Facades\DB;

class SyncLogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
      // Page with all logdata
      $synclogs = SyncLog::paginate(15);

      return view('tables.logs', ['synclogs' => $synclogs]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $table_id)
    {
      // Obter as informações da tabela "synctable" pelo ID
      $synclogs = SyncLog::where('table_id', $table_id)->get();

      if ($synclogs) {
        return view('tables.log', ['synclogs' => $synclogs]);
      } else {
        return response()->json(['error' => 'Tabela não encontrada'], 404);
      }
    }
}
