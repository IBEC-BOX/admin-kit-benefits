<?php

namespace AdminKit\Benefits\UI\Filament\Resources;

use AdminKit\Benefits\Models\Benefit;
use AdminKit\Benefits\UI\Filament\Resources\BenefitResource\Pages;
use AdminKit\Core\Forms\Components\TranslatableTabs;
use Filament\Forms;
use Filament\Resources\Resource;
use Filament\Tables;

class BenefitResource extends Resource
{
    protected static ?string $model = Benefit::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Forms\Form $form): Forms\Form
    {
        return $form
            ->schema([
                Forms\Components\SpatieMediaLibraryFileUpload::make('icon')
                    ->label(__('admin-kit-benefits::benefits.resource.icon').' (SVG)')
                    ->collection('icon')
                    ->editableSvgs()
                    ->acceptedFileTypes(['image/svg', 'image/svg+xml'])
                    ->required(),
                TranslatableTabs::make(fn ($locale) => [
                    Forms\Components\TextInput::make("title.$locale")
                        ->label(__('admin-kit-benefits::benefits.resource.title'))
                        ->required($locale === app()->getLocale()),
                    Forms\Components\Textarea::make("description.$locale")
                        ->label(__('admin-kit-benefits::benefits.resource.description')),
                ]),
            ])
            ->columns(1);
    }

    public static function table(Tables\Table $table): Tables\Table
    {
        return $table
            ->columns([
                Tables\Columns\SpatieMediaLibraryImageColumn::make('icon')
                    ->label(__('admin-kit-benefits::benefits.resource.icon'))
                    ->collection('icon')
                    ->width(160)
                    ->height(90),
                Tables\Columns\TextColumn::make('title')
                    ->label(__('admin-kit-benefits::benefits.resource.title')),
                Tables\Columns\TextColumn::make('sort')
                    ->label(__('admin-kit-benefits::benefits.resource.sort'))
                    ->sortable()
                    ->toggleable(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
            ])
            ->defaultSort('sort')
            ->reorderable('sort');
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListBenefit::route('/'),
            'create' => Pages\CreateBenefit::route('/create'),
            'edit' => Pages\EditBenefit::route('/{record}/edit'),
        ];
    }

    public static function getLabel(): ?string
    {
        return __('admin-kit-benefits::benefits.resource.label');
    }

    public static function getPluralLabel(): ?string
    {
        return __('admin-kit-benefits::benefits.resource.plural_label');
    }

    public static function getNavigationGroup(): ?string
    {
        return __('admin-kit-benefits::benefits.resource.plural_label');
    }
}
