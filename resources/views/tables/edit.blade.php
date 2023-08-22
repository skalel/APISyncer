<x-app-layout>
  <x-slot name="header">
      <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
          {{ __('Informações de Tabelas') }}
      </h2>
  </x-slot>

  <div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
      <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
        <div class="p-6 text-gray-900 dark:text-gray-100">
          <h1 class="flex justify-center text-2xl my-3">Informações da tabela {{ $synctable->name }}</h1>
          <div class="flex justify-center">
            <form action={{ route('table.update', ['id'=> $synctable->id]) }} method="POST" class="w-1/2 justify-center">
              @csrf
              @method('PUT')

              <label for="name" class="w-full block mb-2">Nome
                <input type="text" value="{{ $synctable->name }}" name="name" class="w-full px-4 py-2 border text-black border-gray-300 mb-4">
              </label>

              <label for="entity" class="w-full block mb-2">Nome da Entidade
                <input type="text" value="{{ $synctable->name_entity }}" name="entity" class="w-full px-4 py-2 border text-black border-gray-300 mb-4">
              </label>

              <label for="table" class="w-full block mb-2">Nome da Tabela
                <input type="text" value="{{ $synctable->name_table }}" name="table" class="w-full px-4 py-2 border text-black border-gray-300 mb-4">
              </label>

              <label for="address" class="w-full block mb-2">Endereço (URL)
                <input type="text" name="address" value="{{ $synctable->url }}" class="w-full px-4 py-2 border text-black border-gray-300 mb-4">
              </label>

              <label for="request" class="w-full block mb-2">Modelo da Requisição
                <textarea name="request" cols="20" rows="3" class="w-full px-4 py-2 border text-black border-gray-300 mb-4">{{ $synctable->request_model }}</textarea>
              </label>

              <label for="expression" class="w-full block mb-2">Expressão
                <input type="text" name="expression" value="{{ $synctable->expression }}" class="w-full px-4 py-2 border text-black border-gray-300 mb-4">
              </label>

              <div class="flex justify-between">
                <div class="w-1/2 mr-1">
                  <label for="lastoffset" class="block mb-2">Último offsetPage
                    <input type="text" name="lastoffset" value="{{ $synctable->last_synced_offset }}" class="w-full px-4 py-2 border text-black border-gray-300 mb-4" disabled>
                  </label>
                </div>
                <div class="w-1/2 ml-1">
                  <label for="itemsquantity" class="block mb-2">Qtd. última lista
                    <input type="text" name="itemsquantity" value="{{ $synctable->last_fetched_registers }}" class="w-full px-4 py-2 border text-black border-gray-300 mb-4" disabled>
                  </label>
                </div>
              </div>

              <div class="flex justify-between">
                <a class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded" href={{ url()->previous() }}>Voltar</a>
                <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Editar</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</x-app-layout>
