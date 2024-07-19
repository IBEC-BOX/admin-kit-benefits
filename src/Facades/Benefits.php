<?php

namespace AdminKit\Benefits\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \AdminKit\Benefits\Benefits
 */
class Benefits extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \AdminKit\Benefits\Benefits::class;
    }
}
