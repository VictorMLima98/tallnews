<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Feed extends Component
{
    public bool $hasArticles = false;

    public function __construct(public array $articles)
    {
        $this->hasArticles = count($this->articles) ?? false;
    }

    public function render()
    {
        return view('components.feed');
    }
}
