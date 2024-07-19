<?php

declare(strict_types=1);

namespace AdminKit\Benefits\UI\API\Repositories;

use Illuminate\Support\Facades\Cache;

class CachedBenefitRepository implements BenefitRepositoryInterface
{
    public function __construct(
        private readonly BenefitRepository $repository
    ) {}

    public function getApiList(): array
    {
        $locale = app()->getLocale();

        return Cache::remember("ak_benefit_$locale", config('admin-kit.cache.ttl'), function () use ($locale) {
            return $this->repository->getApiList();
        });
    }
}
