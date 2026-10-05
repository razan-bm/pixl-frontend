<x-layout title="Feed - PIXL">
  @include('partials.navigation')
  <!-- content -->
  <main class="flex flex-col gap-4 overflow-y-auto grow py-4 px-4 -mx-4">
    <div class="h-full">
      <nav class="overflow-x-auto scrollbar-none">
        <ul class="flex gap-8 justify-end text-sm w-max">
          <li><a href="#" class="whitespace-nowrap">For you</a></li>
          <li><a href="#" class="text-pixl-light/60 whitespace-nowrap hover:text-pixl-light/80">Idea streams</a></li>
          <li><a href="#" class="text-pixl-light/60 whitespace-nowrap hover:text-pixl-light/80">Following</a></li>
        </ul>
      </nav>
    </div>

    <!-- post prompt -->
    <div class="flex mt-8 gap-4 items-start  border-b border-pixl-light/10 pb-4">
      <a href="/profile" class="shrink-0">
        <img src="/images/adrian.png" alt="Avatar of Adrian" class="size-10 object-cover" />
      </a>
      @include('partials.post-form', ['labelText' => 'Post Body', 'fieldName' => 'post', 'placeholderText' => 'What\'s up _adrian?'])
    </div>

    <!-- Feed -->
    <ol class="mt-4">
      @foreach ( $feedItems as $item)
      @include('partials.feed-item', compact('item'))      
      @endforeach
      <!-- more feed items... -->
    </ol>
    <footer class="mt-30 ml-14">
      <p class="text-center">That's all, folks.</p>
      <hr class="border-pixl-light/10 my-4">
      <!-- white noise -->
      <div class="h-20 bg-[url('/images/white-noise.gif')]"></div>
    </footer>
  </main>
  @include('partials.aside')
</x-layout>