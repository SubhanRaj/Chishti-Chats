<?php

declare(strict_types=1);

namespace Database\Factories;

use App\Models\BlogCategoryModel;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<\App\Models\BlogCategoryModel>
 */
final class BlogCategoryModelFactory extends Factory
{
    /**
    * The name of the factory's corresponding model.
    *
    * @var string
    */
    protected $model = BlogCategoryModel::class;

    /**
    * Define the model's default state.
    *
    * @return array
    */
    public function definition(): array
    {
        return [
        ];
    }
}
