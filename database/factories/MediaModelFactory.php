<?php

declare(strict_types=1);

namespace Database\Factories;

use App\Models\MediaModel;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<\App\Models\MediaModel>
 */
final class MediaModelFactory extends Factory
{
    /**
    * The name of the factory's corresponding model.
    *
    * @var string
    */
    protected $model = MediaModel::class;

    /**
    * Define the model's default state.
    *
    * @return array
    */
    public function definition(): array
    {
        return [
            'img_name' => fake()->text,
            'title' => fake()->optional()->title,
            'caption' => fake()->optional()->text,
            'alt' => fake()->optional()->text,
            'description' => fake()->optional()->text,
        ];
    }
}
