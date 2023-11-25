<?php

declare(strict_types=1);

namespace Database\Factories;

use App\Models\MetaModel;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<\App\Models\MetaModel>
 */
final class MetaModelFactory extends Factory
{
    /**
    * The name of the factory's corresponding model.
    *
    * @var string
    */
    protected $model = MetaModel::class;

    /**
    * Define the model's default state.
    *
    * @return array
    */
    public function definition(): array
    {
        return [
            'url' => fake()->url,
            'page_name' => fake()->text,
            'title' => fake()->title,
            'keywords' => fake()->text,
            'description' => fake()->text,
            'og_url' => fake()->text,
            'og_title' => fake()->text,
            'og_image_url' => fake()->text,
            'og_description' => fake()->text,
            'page_topic' => fake()->optional()->text,
            'distribution' => fake()->optional()->text,
            'twitter_title' => fake()->optional()->text,
            'twitter_img_url' => fake()->optional()->text,
            'twitter_des' => fake()->optional()->text,
            'js_schema' => fake()->optional()->text,
        ];
    }
}
