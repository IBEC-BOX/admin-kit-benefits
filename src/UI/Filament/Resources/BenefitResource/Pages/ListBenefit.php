<?php

namespace AdminKit\Benefits\UI\Filament\Resources\BenefitResource\Pages;

use Filament\Actions;
use Filament\Resources\Pages\ListRecords;
use AdminKit\Benefits\UI\Filament\Resources\BenefitResource;

class ListBenefit extends ListRecords
{
    protected static string $resource = BenefitResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
