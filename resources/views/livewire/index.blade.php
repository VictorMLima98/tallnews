<div class="gap-y-12 flex flex-wrap" wire:init="fillData">
    <x-main-articles :articles="$mainArticles" />

    <x-feed :articles="$feedArticles" />
</div>

