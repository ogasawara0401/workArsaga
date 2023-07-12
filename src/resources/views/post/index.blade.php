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
                    {{ $post->created_at }}
                  </span>
                  <span class="text-gray-400 mr-3 inline-flex items-center leading-none text-sm pr-3 py-1 border-r-2 border-gray-200">
                    {{ $post->updated_at }}
                  </span>
                  <span class="text-gray-600 ml-3 mr-3 inline-flex items-center leading-none text-sm">
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
