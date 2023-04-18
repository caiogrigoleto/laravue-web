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
    public function definition()
    {
        return [
            'description' => $this->faker->sentence(),
            'quantity' => $this->faker->numberBetween(1, 100),
            'price' => $this->faker->numberBetween(1, 100),
            'category_id' => $this->faker->numberBetween(1, 10),
            'user_id' => $this->faker->numberBetween(1, 10),
            'created_at' => $this->faker->dateTimeThisDecade(),
        ];
    }
}
