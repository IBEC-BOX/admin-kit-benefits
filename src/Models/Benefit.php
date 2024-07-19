<?php

namespace AdminKit\Benefits\Models;

use AdminKit\Core\Abstracts\Models\AbstractModel;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Spatie\Translatable\HasTranslations;
use AdminKit\Benefits\Database\Factories\BenefitFactory;

class Benefit extends AbstractModel
{
    use HasFactory;
    use HasTranslations;

    protected $table = 'admin_kit_benefits';

    protected $fillable = [
        'title',
    ];

    protected $casts = [
        //
    ];

    protected $translatable = [
        'title',
    ];

    protected static function newFactory(): BenefitFactory
    {
        return new BenefitFactory();
    }
}
