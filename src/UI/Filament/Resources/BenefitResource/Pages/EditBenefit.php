<?php

namespace AdminKit\Benefits\UI\Filament\Resources\BenefitResource\Pages;

use Filament\Actions;
use Filament\Resources\Pages\EditRecord;
use AdminKit\Benefits\UI\Filament\Resources\BenefitResource;

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
