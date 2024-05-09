<?php

namespace Database\Factories;

use App\Models\Schedule;
use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Supply>
 */
class SupplyFactory extends Factory
{
    public function users() {
        return once(fn() => User::pluck("id"));
    }

    public function schedules() {
        return once(fn() => Schedule::pluck('id'));
    }

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "name" => fake()->word(),
            "quantity" => fake()->randomNumber(3, false),
            "price" => fake()->randomFloat(),
            "description" => fake()->paragraphs(3, true),
            "address" => fake()->macAddress(),
            "user_id" => $this->users()->random(),
            "is_service" => fake()->boolean(),
            "schedule_id" => $this->schedules()->random(),
        ];
    }
}
