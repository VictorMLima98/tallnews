<?php

namespace App\Http\Livewire;


use App\Services\NewsAPI\DTO\TopHeadlineDTO;
use Facades\App\Services\NewsAPI\Resources\TopHeadlines;
use Livewire\Component;

class Index extends Component
{
    public array $mainArticles = [];
    public array $feedArticles = [];

    public function fillData()
    {
        $this->fillMainArticles();
        $this->fillFeedArticles();
    }

    private function fillMainArticles()
    {
       $this->mainArticles = TopHeadlines::getMainArticles(['country' => TopHeadlineDTO::COUNTRY_BRAZIL]);
    }

    private function fillFeedArticles()
    {
        $this->feedArticles = TopHeadlines::getFeedArticles([
            'country' => TopHeadlineDTO::COUNTRY_BRAZIL,
            'pageSize' => 8,
        ]);
    }

    public function render()
    {
        return view('livewire.index');
    }
}
