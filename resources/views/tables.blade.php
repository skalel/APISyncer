<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Tabelas') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                  <div class="w-full flex align-middle">
                    <h1 class="flex-1 text-2xl py-2">Tabelas</h1>
                    <form action={{ route('tables.create')}} method="get">
                      <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Adicionar...</button>
                    </form>
                  </div>
                  <table class="w-full border border-gray-300 text-center">
                    <thead>
                        <tr>
                          <th class="px-4 py-2 border-b">
                            <input type="checkbox" id="select-checkboxes" onchange="handleSelectAll()">
                          </th>
                          <th class="px-4 py-2 border-b">ID</th>
                          <th class="px-4 py-2 border-b">Nome</th>
                          <th class="px-4 py-2 border-b">Tabela</th>
                          <th class="px-4 py-2 border-b">Entidade</th>
                          <th class="px-4 py-2 border-b">URL</th>
                          <th class="px-4 py-2 border-b">Requisição</th>
                          <th class="px-4 py-2 border-b">Log</th>
                        </tr>
                      </thead>
                    <form method="post" action="{{ route('tables.sync') }}">
                      <tbody>
                        @csrf
                        @foreach($synctables as $synctable)
                        <tr>
                          <td class="px-4 py-2 border-b">
                            <input type="checkbox" name="tables[]" value="{{ $synctable->id }}">
                          </td>
                          <td class="px-4 py-2 border-b">{{ $synctable->id }}</td>
                          <td class="px-4 py-2 border-b">
                            <a href="/tabela/{{$synctable->id}}" class="underline hover:text-gray-300">
                              {{ $synctable->name }}
                            </a>
                          </td>
                          <td class="px-4 py-2 border-b">{{ $synctable->name_table }}</td>
                          <td class="px-4 py-2 border-b">{{ $synctable->name_entity }}</td>
                          <td class="px-4 py-2 border-b">{{ substr($synctable->url, 0, 15) . '...' }}</td>
                          <td class="px-4 py-2 border-b">{{ substr($synctable->request_model, 0, 20) . '...' }}</td>
                          <td class="px-4 py-2 border-b">
                            @if ($synctable->log->count() > 0)
                              <a href="{{ route('table.log', ['id' => $synctable->id]) }}" class="underline hover:text-gray-300">{{ $synctable->log->last()->status }}</a>
                            @endif
                          </td>
                        </tr>
                        @endforeach
                        <tr>
                          <td colspan="8" class="py-4 border-transparent">
                            <div class="flex justify-center">
                              <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white hover:text-gray-300 font-bold py-2 px-4 rounded" onclick="return validateForm()">
                                Sincronizar tabelas
                              </button>
                            </div>
                          </td>
                        </tr>
                      </tbody>
                    </form>
                </table>
              </div>
            </div>
        </div>
    </div>

    <script>
      function validateForm() {
        var checkboxes = document.getElementsByName('tables[]');
        var checked = false;
        for (var i = 0; i < checkboxes.length; i++) {
          if (checkboxes[i].checked) {
              checked = true;
              break;
            }
          }
          if (!checked) {
              alert("Por favor, marque pelo menos uma tabela.");
              return false;
          }
        return true;
      }

      function handleSelectAll() {
        // Get the "select all" checkbox element
        const selectAllCheckbox = document.getElementById('select-checkboxes');
        // Select all the checkboxes in the table body
        const checkboxes = document.querySelectorAll('tbody tr td input[type="checkbox"]');
        // Loop through the checkboxes and set their checked property
        checkboxes.forEach(checkbox => {
          checkbox.checked = selectAllCheckbox.checked;
        });
      }
    </script>
</x-app-layout>
