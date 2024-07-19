<?php

namespace AdminKit\Benefits\Commands;

use Illuminate\Console\Command;

class BenefitsCommand extends Command
{
    public $signature = 'admin-kit-benefits';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
