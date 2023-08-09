<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SyncTable;

use Illuminate\Support\Facades\DB;

class SyncTableController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $synctables = SyncTable::all();

        return view('tables', ['synctables' => $synctables]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('tables.register');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       // Obter os dados da requisição POST
       $name = $request->input('name');
       $name_entity = $request->input('entity');
       $name_table = $request->input('table');
       $request_model = $request->input('request');
       $url = $request->input('address');
       $expression = $request->input('expression');

       // Salvar os dados na tabela "synctable"
       $synctable = new Synctable;
       $synctable->name = $name;
       $synctable->name_entity = $name_entity;
       $synctable->name_table = $name_table;
       $synctable->request_model = $request_model;
       $synctable->url = $url;
       $synctable->expression = $expression;
       $synctable->created_at = now();
       $synctable->save();

       // Redirecionar para a rota "tables"
       return redirect()->route('tables');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
      // Obter as informações da tabela "synctable" pelo ID
      $syncTable = DB::table('synctable')->find($id);

      if ($syncTable) {
        return view('tables.edit', ['synctable' => $syncTable]);
      } else {
        return response()->json(['error' => 'Tabela não encontrada'], 404);
      }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
      // Obter os dados da requisição PUT
      $name = $request->input('name');
      $name_entity = $request->input('entity');
      $name_table = $request->input('table');
      $request_model = $request->input('request');
      $url = $request->input('address');
      $expression = $request->input('expression');

      // Buscar o registro existente na tabela "synctable" pelo ID
      $synctable = Synctable::find($id);

      if (!$synctable) {
          return response()->json(['error' => 'Tabela não encontrada'], 404);
      }

      // Atualizar os dados na tabela "synctable"
      $synctable->name = $name;
      $synctable->name_entity = $name_entity;
      $synctable->name_table = $name_table;
      $synctable->request_model = $request_model;
      $synctable->url = $url;
      $synctable->expression = $expression;
      $synctable->updated_at = now();
      $synctable->save();

      // Redirecionar para a rota "tables" ou retornar uma resposta JSON com sucesso
      return redirect()->route('tables');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
