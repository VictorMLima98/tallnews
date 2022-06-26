<?php

namespace App\Services\NewsAPI\Resources;

use App\Services\NewsAPI\Client;
use App\Services\NewsAPI\DTO\TopHeadlineDTO;
use Illuminate\Support\Facades\Cache;

class Recommended extends Client
{
    private string $endpoint;

    public function __construct()
    {
        parent::__construct();
        $this->endpoint = "everything";
    }

    public function get(): array
    {
        if(!Cache::has('recommended')) {
            Cache::rememberForever('recommended', function () {
                return $this->request->get($this->endpoint, [
                    'q' => 'php',
                    'language' => 'pt'
                ])->json();
            });
        }

        return Cache::get('recommended');
    }
}
