<?php

namespace App\Http\Livewire;


use App\Services\NewsAPI\DTO\TopHeadlineDTO;
use Facades\App\Services\NewsAPI\Resources\TopHeadlines;
use Livewire\Component;

class Index extends Component
{
    public array $mainArticles = [];

    public function mount()
    {
       // $this->fillMainArticles();
    }

    public function fillMainArticles()
    {
       $this->mainArticles = TopHeadlines::get(['country' => TopHeadlineDTO::COUNTRY_BRAZIL]);
    }


    public function render()
    {
        return view('livewire.index');
    }
}
