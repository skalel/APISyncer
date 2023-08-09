<x-app-layout>
  <x-slot name="header">
      <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
          {{ __('Detalhes de Sincronização') }}
      </h2>
  </x-slot>

  <div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
      <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
        <div class="p-6 text-gray-900 dark:text-gray-100">
          <h1 class="flex justify-center text-2xl my-3">{{ $synclogs[0]->name_table }}</h1>
          <table class="w-full border border-gray-300 text-center">
            <thead>
                <tr>
                  <th class="px-4 py-2 border-b">ID</th>
                  <th class="px-4 py-2 border-b">Status</th>
                  <th class="px-4 py-2 border-b">Erro</th>
                  <th class="px-4 py-2 border-b">Data de Execução</th>
                </tr>
              </thead>
              <tbody>
                @foreach($synclogs as $synclog)
                <tr>
                  <td class="px-4 py-2 border-b">{{ $synclog->id }}</td>
                  <td class="px-4 py-2 border-b">{{ $synclog->status }}</td>
                  <td class="px-4 py-2 border-b">
                    @if($synclog->error)
                    <div x-data="{ isOpen: false }">
                      <button @click="isOpen = true" class="hover:bg-gray-300 underline">{{substr($synclog->error, 0, 100) . '...'}}</button>
                      <div x-show="isOpen" @click.away="isOpen = false" class="fixed inset-0 flex items-center justify-center z-10">
                        <div class="bg-gray-800 bg-opacity-25 text-white p-4 rounded-lg shadow-lg w-1/2 backdrop-filter backdrop-blur-lg">
                          <h3 class="text-lg font-semibold mb-2">Detalhes do Erro</h3>
                          <textarea class="w-full h-96 bg-gray-300 text-gray-800 rounded-lg p-2" readonly>{{ $synclog->error }}</textarea>
                          <button @click="isOpen = false" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mt-2">Fechar</button>
                        </div>
                      </div>
                    </div>
                    @endif
                  </td>
                  <td class="px-4 py-2 border-b">{{ $synclog->execution_date }}</td>
                </tr>
                @endforeach
              </tbody>
        </table>
        <div class="flex justify-center py-6">
          <div class="justify-start">
            <a class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded" href={{ url()->previous() }}>Voltar</a>
          </div>
        </div>
        </div>
      </div>
    </div>
  </div>
</x-app-layout>
