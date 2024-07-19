<?php

declare(strict_types=1);

namespace AdminKit\Benefits\UI\API\Controllers;

use AdminKit\Benefits\UI\API\Data\BenefitData;
use AdminKit\Benefits\UI\API\Repositories\BenefitRepository;
use Spatie\LaravelData\DataCollection;

/**
 * @tags Преимущества
 */
class BenefitController extends Controller
{
    public function __construct(
        private readonly BenefitRepository $repository,
    ) {}

    /**
     * Получить список преимуществ
     */
    public function index()
    {
        return BenefitData::collect($this->repository->getApiList(), DataCollection::class);
    }
}
