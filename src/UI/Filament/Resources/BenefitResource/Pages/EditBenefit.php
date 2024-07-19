<?php

namespace AdminKit\Benefits\UI\Filament\Resources\BenefitResource\Pages;

use AdminKit\Benefits\UI\Filament\Resources\BenefitResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditBenefit extends EditRecord
{
    protected static string $resource = BenefitResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
