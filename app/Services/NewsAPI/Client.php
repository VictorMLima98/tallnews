<?php

namespace App\Services\NewsAPI;

use Illuminate\Http\Client\PendingRequest;
use Illuminate\Support\Facades\Http;

abstract class Client
{
    private const BASE_URL = "https://newsapi.org/v2/";

    private ?string $apiKey;

    protected PendingRequest $request;

    public function __construct()
    {
        $this->apiKey = config('services.news_api.key');

        $this->request = Http::baseUrl(self::BASE_URL)->withHeaders([
            'X-Api-Key' => $this->apiKey,
        ]);
    }
}
