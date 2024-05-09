<?php

namespace Database\Factories;

use App\Models\Budget;
use App\Models\Supply;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\budgetItem>
 */
class BudgetItemFactory extends Factory
{
    public function budgets()
    {
        return once(fn() => Budget::pluck('id'));
    }

    public function supplies()
    {
        return once(fn() => Supply::pluck('id'));
    }

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "price" => fake()->randomFloat(),
            "quantity" => fake()->randomNumber(3, false),
            "budget_id" => $this->budgets()->random(),
            "supply_id" => $this->supplies()->random(),
        ];
    }
}
