<?php

declare(strict_types=1);

namespace Database\Factories;

use App\Models\BlogComments;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<\App\Models\BlogComments>
 */
final class BlogCommentsFactory extends Factory
{
    /**
    * The name of the factory's corresponding model.
    *
    * @var string
    */
    protected $model = BlogComments::class;

    /**
    * Define the model's default state.
    *
    * @return array
    */
    public function definition(): array
    {
        return [
            'user_id' => fake()->word,
            'post_id' => fake()->randomNumber(),
            'comment' => fake()->text,
            'deleted_at' => fake()->optional()->dateTime(),
        ];
    }
}
