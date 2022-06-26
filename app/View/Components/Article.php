<?php

namespace App\View\Components;

use Illuminate\Support\Carbon;
use Illuminate\View\Component;

class Article extends Component
{
    public string $publishedAt;

    public function __construct(public array $article)
    {
        $this->publishedAt = Carbon::parse($article['publishedAt'])->diffForHumans();
    }

    public function render()
    {
        return view('components.article');
    }
}
