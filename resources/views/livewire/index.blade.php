<div class="gap-y-12 flex flex-wrap" wire:init="fillMainArticles">
    <x-main-articles :articles="$mainArticles" />

    <x-feed />
</div>

