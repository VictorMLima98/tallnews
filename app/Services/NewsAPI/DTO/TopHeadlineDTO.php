<?php

namespace App\Services\NewsAPI\DTO;

use Illuminate\Support\Collection;
use Spatie\DataTransferObject\DataTransferObject;

class TopHeadlineDTO extends DataTransferObject
{
    private const DEFAULT_PAGE_SIZE = 3;

    private const DEFAULT_PAGE = 1;

    public const COUNTRY_BRAZIL = 'br';

    public ?string $country;

    public ?string $category;

    public ?string $sources;

    public ?string $query;

    public int $pageSize = self::DEFAULT_PAGE_SIZE;

    public int $page = self::DEFAULT_PAGE;

    public function toCollection(): Collection
    {
        return collect($this->toArray());
    }
}
