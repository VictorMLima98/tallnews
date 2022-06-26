<div class="bg-white gap-x-2 gap-y-2 w-full grid grid-cols-1 md:grid-cols-2 md:grid-rows-2">
    @if(!$hasArticles)
        <x-loading-states.main-article />

        <x-loading-states.right-side-article />

        <x-loading-states.right-side-article />
    @endif

    @if($hasArticles)
    <!-- Main Article -->
    <div class="row-span-2 p-2 gap-y-12 flex flex-wrap px-6 py-4 border-2 border-article-border rounded-sm">

        <!-- Subject -->
        <div class="text-subtitle font-semibold w-full">{{ $articles['articles'][0]['source']['name'] }}</div>

        <!-- Title -->
        <div class="text-red text-5xl font-bold tracking-tighter w-full">
            <a target="_blank" href="{{ $articles['articles'][0]['url'] }}" class="hover:text-hyperlink-hover">
                {{ $articles['articles'][0]['title'] }}
            </a>
        </div>

        <!-- Description -->
        <div class="w-full text-subtitle font-normal">
            {{ $articles['articles'][0]['description'] }}
        </div>
    </div>

    <!-- Right Side Articles -->
    <div class="flex flex-wrap bg-cover" style="background-image: url('{{ $articles['articles'][1]['urlToImage'] }}')">
        <div class="gap-y-2 flex flex-wrap backdrop-brightness-50 backdrop-contrast-25 w-full px-6 py-4 rounded-sm border-2 border-transparent">
            <!-- Subject -->
            <div class="tracking-wide w-full">
                <span class="text-container font-semibold drop-shadow-lg">{{ $articles['articles'][1]['source']['name'] }}</span>
            </div>

            <!-- Title -->
            <div class="text-white drop-shadow-2xl text-3xl font-bold tracking-tight w-full">
                <a target="_blank" href="{{ $articles['articles'][1]['url'] }}" class="hover:text-slate-100">{{ $articles['articles'][1]['title'] }}</a>
            </div>

            <!-- Description -->
            <div class="w-full text-white font-normal tracking-tight">{{ $articles['articles'][1]['description'] }}</div>
        </div>
    </div>
    <div class="flex flex-wrap bg-cover" style="background-image: url('{{ $articles['articles'][2]['urlToImage'] }}')">
        <div class="gap-y-2 flex flex-wrap backdrop-brightness-50 backdrop-contrast-25 w-full px-6 py-4 rounded-sm border-2 border-transparent">
            <!-- Subject -->
            <div class="tracking-wide w-full">
                <span class="text-container font-semibold drop-shadow-lg">{{ $articles['articles'][2]['source']['name'] }}</span>
            </div>

            <!-- Title -->
            <div class="text-white drop-shadow-2xl text-3xl font-bold tracking-tight w-full">
                <a target="_blank" href="{{ $articles['articles'][2]['url'] }}" class="hover:text-slate-100">{{ $articles['articles'][2]['title'] }}</a>
            </div>

            <!-- Description -->
            <div class="w-full text-white font-normal tracking-tight">{{ $articles['articles'][2]['description'] }}</div>
        </div>
    </div>
    @endif
</div>
