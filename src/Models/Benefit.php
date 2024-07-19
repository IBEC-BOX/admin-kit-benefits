<?php

namespace AdminKit\Benefits\Models;

use AdminKit\Benefits\Database\Factories\BenefitFactory;
use AdminKit\Core\Abstracts\Models\AbstractModel;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\Translatable\HasTranslations;

class Benefit extends AbstractModel implements HasMedia
{
    use HasFactory;
    use HasTranslations;
    use InteractsWithMedia;

    protected $table = 'admin_kit_benefits';

    protected $fillable = [
        'title',
        'description',
        'sort',
    ];

    protected $translatable = [
        'title',
        'description',
    ];

    protected static function newFactory(): BenefitFactory
    {
        return new BenefitFactory();
    }

    public function registerMediaCollections(): void
    {
        $this
            ->addMediaCollection('icon')
            ->singleFile();
    }

    public function getIconAttribute(): string
    {
        return $this->media->first()?->getFullUrl() ?? '';
    }
}
