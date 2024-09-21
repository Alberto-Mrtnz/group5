<?php

namespace Database\Seeders;

use App\Models\BudgetItem;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BudgetItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $budget = [
            [
                'price' => 100,
                'quantity' => 10,
                'budget_id' => 1,
                'supply_id' => 1,
            ],
            [
                'price' => 100,
                'quantity' => 20,
                'budget_id' => 1,
                'supply_id' => 31,
            ],
            [
                'price' => 100,
                'quantity' => 20,
                'budget_id' => 1,
                'supply_id' => 35,
            ],
            [
                'price' => 100,
                'quantity' => 20,
                'budget_id' => 1,
                'supply_id' => 47,
            ],
            [
                'price' => 100,
                'quantity' => 20,
                'budget_id' => 1,
                'supply_id' => 32,
            ],
            [
                'price' => 100,
                'quantity' => 20,
                'budget_id' => 2,
                'supply_id' => 13,
            ],
            [
                'price' => 100,
                'quantity' => 20,
                'budget_id' => 2,
                'supply_id' => 27,
            ],
            [
                'price' => 100,
                'quantity' => 20,
                'budget_id' => 2,
                'supply_id' => 6,
            ],
            [
                'price' => 100,
                'quantity' => 20,
                'budget_id' => 2,
                'supply_id' => 12,
            ],
            [
                'price' => 100,
                'quantity' => 20,
                'budget_id' => 2,
                'supply_id' => 33,
            ],
            [
                'price' => 100,
                'quantity' => 20,
                'budget_id' => 4,
                'supply_id' => 35,
            ],
            [
                'price' => 100,
                'quantity' => 20,
                'budget_id' => 4,
                'supply_id' => 11,
            ],
            [
                'price' => 100,
                'quantity' => 20,
                'budget_id' => 4,
                'supply_id' => 24,
            ],
        ];

            BudgetItem::factory(count($budget))->sequence(fn ($sqn) => $budget[$sqn->index])->create();

        }
    }
