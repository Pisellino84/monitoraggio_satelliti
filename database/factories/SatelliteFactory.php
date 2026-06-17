<?php

namespace Database\Factories;

use App\Models\Customer;
use Illuminate\Database\Eloquent\Factories\Factory;

class SatelliteFactory extends Factory
{
    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'name' => fake()->name(),
            'model' => fake()->word(),
            'customer_id' => Customer::factory(),
            'image' => fake()->word(),
            'status' => fake()->randomElement(["active","inactive","in_alarm","under_maintenance"]),
            'norad' => fake()->numberBetween(-10000, 10000),
            'cospair' => fake()->word(),
            'orbit_type' => fake()->randomElement(["LEO","MEO","GEO","SSO"]),
            'inclination' => fake()->randomFloat(2, 0, 999.99),
            'apogee' => fake()->numberBetween(-10000, 10000),
            'perigee' => fake()->numberBetween(-10000, 10000),
            'lauch_date' => fake()->dateTime(),
        ];
    }
}
