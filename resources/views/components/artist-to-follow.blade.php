<div class="p-4 border border-pixl-light/10 rounded-lg mt-4">
    <h2 class="text-pixl-light/60 text-sm">Artists to follow</h2>
    <ol class="flex flex-col gap-4 mt-4">
        @foreach ($artists as $artist)
        <li class="flex items-center gap-4 justify-between">
            <div class="flex items-center gap-2.5">
                <img src="/images/{{ $artist['img'] }}" alt="Avatar of {{ $artist['name'] }}" class="size-8 object-cover" />
                <p class="text-sm truncate">{{ $artist['name'] }}</p>
            </div>
            <button class="bg-pixl-dark/50 hover:bg-pixl-dark/60 active:bg-pixl-dark/75 border border-pixl/50 hover:border-pixl/60 active:border-pixl/75 px-2 py-1 text-pixl">Follow</button>
        </li>
        @endforeach
    </ol>
    <a href="#" class="text-sm text-pixl-light/50 mt-4 inline-block">Show More</a>
</div>