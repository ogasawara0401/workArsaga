<x-app-layout>
  <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
      {{ __('投稿一覧') }}
    </h2>
  </x-slot>

  <section class="text-gray-600 body-font">
    <div class="container px-5 py-24 mx-auto">
      @foreach ($posts as $post)
        <div class="p-4">
          <div class="h-full border-2 border-gray-400 border-opacity-60 rounded-lg overflow-hidden">
            <div class="p-6">
              <h1 class="title-font text-lg font-medium text-gray-900 mb-3">{{ $post->title }}</h1>
              <p class="leading-relaxed mb-3">{{ $post->message }}</p>
              <div class="flex items-center flex-wrap">
                <div>
                  <span class="text-gray-400 mr-3 inline-flex items-center leading-none text-sm pr-3 py-1 border-r-2 border-gray-200">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                      <path stroke-linecap="round" stroke-linejoin="round" d="M6 12L3.269 3.126A59.768 59.768 0 0121.485 12 59.77 59.77 0 013.27 20.876L5.999 12zm0 0h7.5" />
                    </svg>
                    {{ $post->created_at }}
                  </span>
                  <span class="text-gray-400 mr-3 inline-flex items-center leading-none text-sm pr-3 py-1 border-r-2 border-gray-200">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                      <path stroke-linecap="round" stroke-linejoin="round"
                        d="M16.023 9.348h4.992v-.001M2.985 19.644v-4.992m0 0h4.992m-4.993 0l3.181 3.183a8.25 8.25 0 0013.803-3.7M4.031 9.865a8.25 8.25 0 0113.803-3.7l3.181 3.182m0-4.991v4.99" />
                    </svg>
                    {{ $post->updated_at }}
                  </span>
                  <span class="text-gray-600 ml-3 mr-3 inline-flex items-center leading-none text-sm">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                      <path stroke-linecap="round" stroke-linejoin="round"
                        d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z" />
                    </svg>
                    {{ $user->name }}
                  </span>
                </div>
                <div class="ml-auto">
                  <button onclick="location.href='{{ route('post.edit', ['post' => $post->id]) }}'"
                    class="text-white bg-green-400 border-0 py-2 px-8 focus:outline-none hover:bg-green-500 rounded text-lg">編集</button>
                  <form class="inline" method="POST" action="{{ route('post.destroy', ['post' => $post->id]) }}">
                    @csrf
                    @method('DELETE')
                    <button type="submit" onclick="return check()" class="text-white bg-red-400 border-0 py-2 px-8 focus:outline-none hover:bg-red-500 rounded text-lg">削除</button>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      @endforeach
      {{ $posts->links() }}
  </section>
</x-app-layout>

<script type="text/javascript">
  function check() {
    var checked = confirm("削除しますか？");
    if (checked == true) {
      return true;
    } else {
      return false;
    }
  }
</script>
