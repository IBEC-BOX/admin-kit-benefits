<?php

namespace AdminKit\Benefits;

use Filament\Contracts\Plugin;
use Filament\Panel;
use AdminKit\Benefits\UI\Filament\Resources\BenefitResource;

class FilamentPlugin implements Plugin
{
    public function getId(): string
    {
        return 'filament-plugin-admin-kit-benefits';
    }

    public function register(Panel $panel): void
    {
        $panel->resources([
            BenefitResource::class,
        ]);
    }

    public function boot(Panel $panel): void {}

    public static function make(): static
    {
        return app(static::class);
    }
}
