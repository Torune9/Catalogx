<?php

namespace Database\Factories;

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
            'price' => fake()->randomFloat(2, 1, 1000),
            'stock' => fake()->randomNumber(3,false),
            'image' => fake()->imageUrl(640, 480, 'animals', true),
            'description' => fake()->sentence(),
            'store_id' => fake()->randomDigit(),
            'category_id' => fake()->randomDigit(),

        ];
    }
}
