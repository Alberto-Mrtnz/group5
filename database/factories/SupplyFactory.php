<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Supply>
 */
class SupplyFactory extends Factory
{
    public function users() {
        return User::pluck("id");
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
            "description" => fake()->paragraphs(),
            "address" => fake()->macAddress(),
            "user_id" => $this->users()->random(),
        ];
    }
}
