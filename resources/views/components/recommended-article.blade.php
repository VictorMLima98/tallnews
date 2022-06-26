<div class="grid grid-cols-2 gap-x-2 py-8">
    <!-- Title -->
    <div>
        <a target="_blank" href="{{ $article['url'] }}" class="hover:text-hyperlink-hover">
            {{ $article['title'] }}
        </a>
    </div>
    <div>
        <!-- Image -->
        <img class="object-fit h-24 w-48" src="{{ $article['urlToImage'] ?? asset('test.png') }}" alt="Article Image">
    </div>
</div>
