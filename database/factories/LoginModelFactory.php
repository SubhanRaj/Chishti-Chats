<?php

declare(strict_types=1);

namespace Database\Factories;

use App\Models\LoginModel;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<\App\Models\LoginModel>
 */
final class LoginModelFactory extends Factory
{
    /**
    * The name of the factory's corresponding model.
    *
    * @var string
    */
    protected $model = LoginModel::class;

    /**
    * Define the model's default state.
    *
    * @return array
    */
    public function definition(): array
    {
        return [
            'role' => fake()->optional()->word,
            'user_id' => fake()->optional()->word,
            'email' => fake()->optional()->safeEmail,
            'phone' => fake()->optional()->phoneNumber,
            'password' => bcrypt(fake()->optional()->password),
            'two_fa_email' => fake()->optional()->word,
            'two_fa_phone' => fake()->optional()->word,
        ];
    }
}
