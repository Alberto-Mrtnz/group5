<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Schedule>
 */
class ScheduleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "day" => fake()->dateTime(),
            "open" => fake()->dateTimeBetween('-1 week', '+1 week'),
            "close" => fake()->dateTimeBetween('-1 week', '+1 week'),
        ];
    }
}
