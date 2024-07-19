<?php

namespace AdminKit\Benefits\UI\API\Data;

use Spatie\LaravelData\Data;

class BenefitData extends Data
{
    public function __construct(
        public int $id,
        public string $title,
        public ?string $description,
        public string $icon,
    ) {}
}
