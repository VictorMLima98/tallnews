<div class="flex flex-wrap">
    <div class="w-2/3 gap-y-6 flex flex-wrap divide-y-2 divide-article-border pr-2">
        <!-- All Articles -->
        <x-article />
        <x-article />
        <x-article />
        <x-article />
    </div>

    <!-- Recommended Section -->
    <div class="w-1/3 pl-2">
        <div class="border border-article-border divide-y rounded-sm bg-white">
            <!-- Recommended Section Title -->
            <div class="text-subtitle font-bold px-6 py-2">
                Viu isso aqui?
            </div>

            <!-- Recommended Articles -->
            <div class="text-red font-bold tracking-tighter leading-5 w-full px-6 py-4 gap-y-6 flex flex-wrap">

                <x-recommended-article />
                <x-recommended-article />
                <x-recommended-article />
                <x-recommended-article />
                <x-recommended-article />

                <div>
                    <!-- More Recommended Articles -->
                    <a href="#" class="hover:text-hyperlink-hover">Mais conteúdos recomendados &nbsp;
                        <i class="fa fa-angle-down"></i>
                    </a>
                </div>

            </div>
        </div>
    </div>
</div>
