<div class="grid grid-cols-2 grid-rows-1 gap-x-6 py-4">
    <div>
        <img class="object-cover rounded-sm" src="{{ $article['urlToImage'] }}" alt="">
    </div>

    <div class="gap-y-2 flex flex-wrap">
        <!-- Subject -->
        <div class="text-subtitle font-semibold w-full">{{ $article['source']['name'] }}</div>

        <!-- Title -->
        <div class="text-red text-2xl font-bold tracking-tighter w-full">
            <a target="_blank" href="{{ $article['url'] }}" class="hover:text-hyperlink-hover">
                {{ $article['title'] }}
            </a>
        </div>

        <!-- Subtitle -->
        <div class="w-full text-article-subtitle font-normal">{{ $article['description'] }}</div>

        <!-- Date, Time & Category -->
        <div class="w-full text-article-subtitle text-sm font-normal">{{ $publishedAt }} - Em {{ $article['source']['name'] }}</div>
    </div>
</div>
