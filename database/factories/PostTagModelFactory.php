<?php

declare(strict_types=1);

namespace Database\Factories;

use App\Models\PostTagModel;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<\App\Models\PostTagModel>
 */
final class PostTagModelFactory extends Factory
{
    /**
    * The name of the factory's corresponding model.
    *
    * @var string
    */
    protected $model = PostTagModel::class;

    /**
    * Define the model's default state.
    *
    * @return array
    */
    public function definition(): array
    {
        return [
            'tag_id' => fake()->randomNumber(),
            'post_id' => fake()->randomNumber(),
        ];
    }
}
