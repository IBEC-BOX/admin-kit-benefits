<?php

declare(strict_types=1);

namespace AdminKit\Benefits\UI\API\Repositories;

interface BenefitRepositoryInterface
{
    public function getApiList(): array;
}
