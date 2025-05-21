<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    public function definition(): array
    {
        $categories = ['FOOD', 'ACCESSORIES', 'BUNDLES'];

        return [
            'name' => $this->faker->words(2, true),
            'price' => $this->faker->randomFloat(2, 5, 100),
            'discount_percentage' => $this->faker->numberBetween(5, 30),
            'likes' => $this->faker->numberBetween(0, 50),
            'category' => $this->faker->randomElement($categories),
            'image_url' => 'https://via.placeholder.com/300x200?text=Product',
            'rating' => $this->faker->randomFloat(1, 1, 5),
        ];
    }
}