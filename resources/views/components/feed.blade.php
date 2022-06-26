<div class="flex flex-wrap">
    @if(!$hasArticles)
        <div class="fixed top-0 left-0 z-50 block w-full h-full opacity-100 bg-black bg-opacity-90">
            <div class="flex items-center justify-center w-screen h-screen">
                <i class="fas text-container fa-3x fa-circle-notch fa-spin"></i>
            </div>
        </div>
    @endif
    @if($hasArticles)
    <div class="w-2/3  flex flex-wrap divide-y-2 divide-article-border pr-4">
        @foreach($articles['articles'] as $article)
            @if($loop->index < 3)
                @continue
            @endif
            <x-article :article="$article" />
        @endforeach
    </div>

    <!-- Recommended Section -->
    <div class="w-1/3 pl-4">
        <div class="border border-article-border divide-y divide-article-border rounded-sm bg-white">
            <!-- Recommended Section Title -->
            <div class="text-subtitle font-bold px-6 py-2">
                Viu isso aqui?
            </div>

            <!-- Recommended Articles -->
            <div class="text-red font-bold tracking-tighter divide-y divide-article-border leading-5 w-full px-6 flex flex-wrap">

                <x-recommended-article />
                <x-recommended-article />
                <x-recommended-article />
                <x-recommended-article />
                <x-recommended-article />

                <div class="py-4 w-full">
                    <!-- More Recommended Articles -->
                    <a href="#" class="hover:text-hyperlink-hover">Mais conteúdos recomendados &nbsp;
                        <i class="fa fa-angle-down"></i>
                    </a>
                </div>

            </div>
        </div>
    </div>
    @endif
</div>
