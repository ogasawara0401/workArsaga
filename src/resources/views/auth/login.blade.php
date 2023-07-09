<x-guest-layout>
  <div class="mx-auto">
    <section class="text-gray-600 body-font">
      <div class="container px-5 py-24 mx-auto flex flex-wrap items-center">
        <div class="bg-gray-100 rounded-lg p-8 flex flex-col mx-auto">
          <x-auth-validation-errors class="mb-4" :errors="$errors" />
          <h2 class="text-gray-900 text-lg font-medium title-font mb-5">ログイン</h2>
          <form method="POST" action="{{ route('login') }}">
            @csrf
            <div class="relative mb-4">
              <label for="email" class="leading-7 text-sm text-gray-600">メールアドレス</label>
              <input type="email" id="email" name="email"
                class="w-full bg-white rounded border border-gray-300 focus:border-green-500 focus:ring-2 focus:ring-green-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
            </div>
            <div class="relative mb-4">
              <label for="password" class="leading-7 text-sm text-gray-600">パスワード</label>
              <input type="password" id="password" name="password"
                class="w-full bg-white rounded border border-gray-300 focus:border-green-500 focus:ring-2 focus:ring-green-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
            </div>
            <button class="text-white bg-green-500 border-0 py-2 px-8 focus:outline-none hover:bg-green-600 rounded text-lg">ログイン</button>
          </form>
        </div>
      </div>
    </section>
  </div>
</x-guest-layout>
