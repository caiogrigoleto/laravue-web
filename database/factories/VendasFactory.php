<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Vendas>
 */
class VendasFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'customer_id' => $this->faker->numberBetween(1, 10),
            'vr_total' => $this->faker->numberBetween(1, 100),
            'created_at' => $this->faker->date('Y-m-d'),
        ];
    }
}
