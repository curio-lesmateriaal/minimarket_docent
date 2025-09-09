<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->word(),
            'start_price' => fake()->randomFloat(2, 1, 1000),
            'description' => fake()->sentence(),
            'image_url' => fake()->imageUrl(),
            'status' => fake()->randomElement(['Nieuwstaat', 'Tweedehands']),
            'sold_to' => fake()->optional()->numberBetween(1, User::count()),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
