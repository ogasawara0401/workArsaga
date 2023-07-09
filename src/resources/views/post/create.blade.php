<x-app-layout>
  <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
      {{ __('新規投稿') }}
    </h2>
  </x-slot>

  <div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
      <div class="bg-white py-6 sm:py-8 lg:py-12">
        <div class="mx-auto max-w-screen-2xl px-4 md:px-8">
          <!-- form - start -->
          <form class="mx-auto grid max-w-screen-md gap-4 sm:grid-cols-2" method="POST" action="{{ route('post.store') }}">
            @csrf
            <div class="sm:col-span-2">
              <label for="title" class="mb-2 inline-block text-sm text-gray-800 sm:text-base">タイトル</label>
              <input name="title" class="w-full rounded border bg-gray-50 px-3 py-2 text-gray-800 outline-none ring-indigo-300 transition duration-100 focus:ring" />
            </div>

            <div class="sm:col-span-2">
              <label for="message" class="mb-2 inline-block text-sm text-gray-800 sm:text-base">本文</label>
              <textarea name="message" rows="10" class="h-64 w-full rounded border bg-gray-50 px-3 py-2 text-gray-800 outline-none ring-indigo-300 transition duration-100 focus:ring"></textarea>
            </div>

            <div class="flex items-center justify-between sm:col-span-2 flex-row-reverse">
              <button class="text-white bg-green-500 border-0 py-2 px-8 focus:outline-none hover:bg-green-600 rounded text-lg">投稿する</button>
            </div>
          </form>
          <!-- form - end -->
        </div>
      </div>
    </div>
  </div>
</x-app-layout>
