<x-app-layout>
  <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
      {{ __('ホーム') }}
    </h2>
  </x-slot>

  <div class="py-12">
    <div class="max-w-7xl sm:px-6 lg:px-8 flex flex-row-reverse">
      <button class="text-white bg-green-500 border-0 py-2 px-8 focus:outline-none hover:bg-green-600 rounded text-lg" onclick="location.href='{{ route('post.create') }}'">新規投稿</button>
    </div>
    <div class="mx-auto max-w-screen-md">
      <form method="GET" action="{{ route('home') }}">
        <label for="keyword" class="mb-2 inline-block text-sm text-gray-800 sm:text-base">キーワード検索</label>
        <input name="keyword" value="{{ \Request::get('keyword') }}" placeholder="キーワードを入力"
          class="w-full rounded border bg-gray-50 px-3 py-2 text-gray-800 outline-none ring-indigo-300 transition duration-100 focus:ring" />
        <button class="text-white bg-green-500 border-0 py-2 px-8 focus:outline-none hover:bg-green-600 rounded text-lg">検索</button>
      </form>
    </div>
  </div>
  <section class="text-gray-600 body-font">
    <div class="container px-5 pb-10 mx-auto">
      @foreach ($posts as $post)
        <div class="p-4">
          <div class="h-full border-2 border-gray-400 border-opacity-60 rounded-lg overflow-hidden">
            <div class="p-6">
              <h1 class="title-font text-lg font-medium text-gray-900 mb-3">{{ $post->title }}</h1>
              <p class="leading-relaxed mb-3">{{ $post->message }}</p>
              <div class="flex items-center flex-wrap">
                <span class="text-gray-400 mr-3 inline-flex items-center leading-none text-sm pr-3 py-1 border-r-2 border-gray-200">
                  {{ $post->created_at }}
                </span>
                <span class="text-gray-400 mr-3 inline-flex items-center leading-none text-sm pr-3 py-1 border-r-2 border-gray-200">
                  {{ $post->updated_at }}
                </span>
                <span class="text-gray-600 ml-3 mr-3 inline-flex items-center leading-none text-sm">
                  {{ $post->name }}
                </span>
              </div>
            </div>
          </div>
        </div>
      @endforeach
      {{ $posts->links() }}
    </div>
  </section>
</x-app-layout>
