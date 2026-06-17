<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class CustomerFactory extends Factory
{
    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'agency_name' => fake()->word(),
            'agency_type' => fake()->randomElement(["military","government","commercial"]),
            'email' => fake()->safeEmail(),
            'cellphone' => fake()->word(),
            'bio' => fake()->text(),
            'monthly_billing' => fake()->randomFloat(2, 0, 9999.99),
        ];
    }
}
