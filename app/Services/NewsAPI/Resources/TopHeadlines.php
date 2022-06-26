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

    public function get(array|TopHeadlineDTO $topHeadline): array
    {
        if (is_array($topHeadline)) {
            $topHeadline = new TopHeadlineDTO($topHeadline);
        }

        if(!Cache::has('topHeadlines')) {
            Cache::rememberForever('topHeadlines', function () use ($topHeadline) {
                return $this->request->get($this->endpoint, [
                    'country' => $topHeadline->country,
                    'pageSize' => $topHeadline->pageSize,
                ])->json();
            });
        }

        sleep(1);

        return Cache::get('topHeadlines');
    }
}
