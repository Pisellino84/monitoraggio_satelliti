<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class SensorFactory extends Factory
{
    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'name' => fake()->name(),
            'description' => fake()->text(),
            'sensor_type' => fake()->randomElement(["magnometer","star_tracker","payload_temperature_sensor","solar_attitude_sensor","gyroscope"]),
            'hardware_model' => fake()->word(),
            'status' => fake()->randomElement(["active","inactive","in_alarm","under_maintenance"]),
        ];
    }
}
