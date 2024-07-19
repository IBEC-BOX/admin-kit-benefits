<?php

namespace AdminKit\Benefits\Database\Factories;

use AdminKit\Benefits\Models\Benefit;
use AdminKit\Core\Facades\AdminKit;
use Illuminate\Database\Eloquent\Factories\Factory;

class BenefitFactory extends Factory
{
    protected $model = Benefit::class;

    public function definition()
    {
        $title = $description = [];
        foreach (AdminKit::locales() as $locale) {
            $title[$locale] = $this->faker->words(3, true);
            $description[$locale] = $this->faker->words(10, true);
        }

        return [
            'title' => $title,
            'description' => $description,
        ];
    }
}
