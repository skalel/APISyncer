<x-app-layout>
  <x-slot name="header">
      <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
          {{ __('Preferências de Autenticação') }}
      </h2>
  </x-slot>

  <div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
      <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
        <div class="p-6 text-gray-900 dark:text-gray-100">
          <h1 class="flex justify-center text-2xl my-3">Preferências</h1>
          <div class="flex justify-center">
            <form action={{ route('token.pref.update') }} method="POST" class="w-1/2 justify-center">
              @csrf
              @method('PUT')

              <label for="token" class="w-full block mb-2">Token
                <input type="text" @if($apicredentials !== null)value="{{ $apicredentials->token }}"@endif name="token" class="w-full px-4 py-2 border text-black border-gray-300 mb-4" disabled>
              </label>

              <label for="appkey" class="w-full block mb-2">AppKey
                <input type="text" @if($apicredentials !== null)value="{{ $apicredentials->appkey }}"@endif name="appkey" class="w-full px-4 py-2 border text-black border-gray-300 mb-4" disabled>
              </label>

              <label for="username" class="w-full block mb-2">Nome de Usuário
                <input type="text" @if($apicredentials !== null)value="{{ $apicredentials->username }}"@endif name="username" class="w-full px-4 py-2 border text-black border-gray-300 mb-4">
              </label>

              <label for="password" class="w-full block mb-2">Senha
                <input type="password" name="password" @if($apicredentials !== null)value="********"@endif class="w-full px-4 py-2 border text-black border-gray-300 mb-4">
              </label>

              <div class="flex justify-between">
                <a class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded" href={{ url()->previous() }}>Voltar</a>
                <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Salvar</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</x-app-layout>
