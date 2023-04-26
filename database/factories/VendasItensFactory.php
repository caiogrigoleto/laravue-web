<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class VendasItensFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            //
            'venda_id' => $this->faker->randomDigitNotNull,
            'produto_id' => $this->faker->randomDigitNotNull,
            'quantidade' => $this->faker->randomDigitNotNull,
            'vr_unitario' => $this->faker->randomDigitNotNull,
            'vr_total' => $this->faker->numericNotNull,
            'created_at' => $this->faker->date('Y-m-d'),
            'updated_at' => $this->faker->date('Y-m-d'),
        ];
    }
}
