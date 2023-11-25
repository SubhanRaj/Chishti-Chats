<?php

declare(strict_types=1);

namespace Database\Factories;

use App\Models\TagsModel;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<\App\Models\TagsModel>
 */
final class TagsModelFactory extends Factory
{
    /**
    * The name of the factory's corresponding model.
    *
    * @var string
    */
    protected $model = TagsModel::class;

    /**
    * Define the model's default state.
    *
    * @return array
    */
    public function definition(): array
    {
        return [
            'tag' => fake()->word,
            'slug' => fake()->slug,
        ];
    }
}
