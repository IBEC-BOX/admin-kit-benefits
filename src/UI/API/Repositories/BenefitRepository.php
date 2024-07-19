<?php

declare(strict_types=1);

namespace AdminKit\Benefits\UI\API\Repositories;

use AdminKit\Benefits\Models\Benefit;
use AdminKit\Core\Abstracts\Repositories\AbstractRepository;

/**
 * @method Benefit model()
 */
class BenefitRepository extends AbstractRepository implements BenefitRepositoryInterface
{
    public function getModelClass(): string
    {
        return Benefit::class;
    }

    public function getApiList(): array
    {
        $locale = app()->getLocale();

        return $this->model()
            ->selectRaw("id, title->'$locale' as title, description->'$locale' as description")
            ->with(['media' => function ($query) {
                $query
                    ->select([
                        'id', 'model_id', 'model_type', 'collection_name', 'file_name', 'disk',
                    ])
                    ->where('collection_name', 'icon');
            }])
            ->orderBy('sort')
            ->get()
            ->append('icon')
            ->toArray();
    }
}
