<?php

namespace App\View\Components;

use Illuminate\View\Component;

class MainArticles extends Component
{
    public function __construct(array $articles)
    {
    }

    public function render()
    {
        return view('components.main-articles');
    }
}
