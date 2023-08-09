<x-app-layout>
  <x-slot name="header">
      <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
          {{ __('Cadastrar tabela') }}
      </h2>
  </x-slot>

  <div class="py-12">
      <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
          <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
              <div class="p-6 text-gray-900 dark:text-gray-100">
                <h1 class="flex justify-center text-2xl my-3">Cadastrar tabela</h1>
                <div class="flex justify-center">
                  <form action={{ route('tables.store') }} method="post" class="w-1/2 justify-center">
                    @csrf

                    <label for="name" class="w-full block mb-2">Nome
                      <input type="text" name="name" class="w-full px-4 py-2 border text-black border-gray-300 mb-4">
                    </label>

                    <label for="entity" class="w-full block mb-2">Nome da Entidade
                      <input type="text" name="entity" class="w-full px-4 py-2 border text-black border-gray-300 mb-4">
                    </label>

                    <label for="table" class="w-full block mb-2">Nome da Tabela
                      <input type="text" name="table" class="w-full px-4 py-2 border text-black border-gray-300 mb-4">
                    </label>

                    <label for="address" class="w-full block mb-2">Endereço (URL)
                      <input type="text" name="address" class="w-full px-4 py-2 border text-black border-gray-300 mb-4">
                    </label>

                    <label for="request" class="w-full block mb-2">Modelo da Requisição
                      <textarea name="request" cols="20" rows="3" class="w-full px-4 py-2 border  text-black border-gray-300 mb-4"></textarea>
                    </label>

                    <label for="expression" class="w-full block mb-2">Expressão
                      <input type="text" name="expression" class="w-full px-4 py-2 border text-black border-gray-300 mb-4">
                    </label>

                    <div class="flex justify-center">
                      <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Cadastrar</button>
                    </div>
                  </form>
                </div>
              </div>
          </div>
      </div>
  </div>
</x-app-layout>
