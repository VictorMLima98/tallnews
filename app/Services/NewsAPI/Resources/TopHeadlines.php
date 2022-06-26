<?php

namespace App\Services\NewsAPI\Resources;

use App\Services\NewsAPI\Client;
use App\Services\NewsAPI\DTO\TopHeadlineDTO;
use Illuminate\Support\Facades\Cache;

class TopHeadlines extends Client
{
    private string $endpoint;

    public function __construct()
    {
        parent::__construct();
        $this->endpoint = "top-headlines";
    }

    public function getMainArticles(array|TopHeadlineDTO $topHeadline): array
    {
        if (is_array($topHeadline)) {
            $topHeadline = new TopHeadlineDTO($topHeadline);
        }

        if(!Cache::has('mainArticles')) {
            Cache::rememberForever('mainArticles', function () use ($topHeadline) {
                return $this->request->get($this->endpoint, [
                    'country' => $topHeadline->country,
                    'pageSize' => $topHeadline->pageSize,
                ])->json();
            });
        }

        return Cache::get('mainArticles');
    }

    public function getFeedArticles(array|TopHeadlineDTO $topHeadline): array
    {
        if (is_array($topHeadline)) {
            $topHeadline = new TopHeadlineDTO($topHeadline);
        }

        if(!Cache::has('feedArticles')) {
            Cache::rememberForever('feedArticles', function () use ($topHeadline) {
                return $this->request->get($this->endpoint, [
                    'country' => $topHeadline->country,
                    'pageSize' => $topHeadline->pageSize,
                ])->json();
            });
        }

        return Cache::get('feedArticles');
    }
}
