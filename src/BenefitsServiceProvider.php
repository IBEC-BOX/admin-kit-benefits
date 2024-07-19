<?php

namespace AdminKit\Benefits;

use AdminKit\Benefits\Commands\InstallCommand;
use AdminKit\Benefits\Providers\RouteServiceProvider;
use AdminKit\Benefits\UI\API\Repositories\BenefitRepositoryInterface;
use AdminKit\Benefits\UI\API\Repositories\CachedBenefitRepository;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class BenefitsServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('admin-kit-benefits')
            ->hasConfigFile()
            ->hasViews()
            ->hasTranslations()
            ->hasMigration('create_admin_kit_benefits_table')
            ->hasCommand(InstallCommand::class);
    }

    public function registeringPackage()
    {
        $this->app->register(RouteServiceProvider::class);
    }

    public function bootingPackage()
    {
        $this->app->bind(BenefitRepositoryInterface::class, CachedBenefitRepository::class);
    }
}
