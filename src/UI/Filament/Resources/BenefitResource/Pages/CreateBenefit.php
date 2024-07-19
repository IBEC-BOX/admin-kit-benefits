<?php

namespace AdminKit\Benefits\UI\Filament\Resources\BenefitResource\Pages;

use AdminKit\Benefits\UI\Filament\Resources\BenefitResource;
use Filament\Resources\Pages\CreateRecord;

class CreateBenefit extends CreateRecord
{
    protected static string $resource = BenefitResource::class;

    protected function getActions(): array
    {
        return [
            //
        ];
    }

    protected function getRedirectUrl(): string
    {
        return BenefitResource::getUrl();
    }
}
