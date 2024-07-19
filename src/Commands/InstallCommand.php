<?php

namespace AdminKit\Benefits\Commands;

use AdminKit\Benefits\BenefitsServiceProvider;
use Illuminate\Console\Command;

class InstallCommand extends Command
{
    public $signature = 'admin-kit:install-benefits';

    public $description = 'Install AdminKit Benefits package';

    public function handle(): int
    {
        if ($this->confirm('Publishing migrations?', true)) {
            $this->call('vendor:publish', [
                '--provider' => BenefitsServiceProvider::class,
                '--tag' => 'admin-kit-benefits-migrations',
            ]);
        }

        if ($this->confirm('Migrate the database tables?', true)) {
            $this->call('migrate');
        }

        return self::SUCCESS;
    }
}
