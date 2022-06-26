<?php

namespace App\View\Components;

use Illuminate\View\Component;

class RecommendedArticle extends Component
{
    public function __construct(public array $article)
    {
    }

    public function render()
    {
        return view('components.recommended-article');
    }
}
