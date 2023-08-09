<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                  <div class="w-full flex align-middle">
                    <h1 class="flex-1 text-2xl py-2">Lista de registros de autenticação</h1>
                    <form action={{ route('token.pref')}} method="get">
                      <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Preferências</button>
                    </form>
                  </div>
                  <div class="overflow-x-auto">
                    <div class="table-container">
                      <table class="w-full border border-gray-300 text-center">
                          <thead>
                              <tr>
                                  <th class="px-4 py-2 border-b">ID</th>
                                  <th class="px-4 py-2 border-b">Token</th>
                                  <th class="px-4 py-2 border-b">Código de Erro</th>
                                  <th class="px-4 py-2 border-b">Descrição de Erro</th>
                                  <th class="px-4 py-2 border-b">Data de Criação</th>
                              </tr>
                          </thead>
                          <tbody>
                              @foreach($authlogs as $authlog)
                              <tr>
                                  <td class="px-4 py-2 border-b">{{ $authlog->id }}</td>
                                  <td class="px-4 py-2 border-b">{{ substr($authlog->token, 0, 10) . '...' }}</td>
                                  <td class="px-4 py-2 border-b">{{ $authlog->error_codigo }}</td>
                                  <td class="px-4 py-2 border-b">{{ $authlog->error_descricao }}</td>
                                  <td class="px-4 py-2 border-b">{{ $authlog->created_at }}</td>
                              </tr>
                              @endforeach
                          </tbody>
                      </table>
                      {{ $authlogs->links() }}
                      <div class="flex justify-center mt-4">
                        <form method="post" action="{{ route('token.auth') }}">
                          @csrf
                          <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white hover:text-gray-300 font-bold py-2 px-4 rounded">
                            Atualizar chave
                          </button>
                      </form>
                    </div>
                  </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
