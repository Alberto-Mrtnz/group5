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
                'price' => 200,
                'quantity' => 20,
                'budget_id' => 2, 
                'supply_id' => 2, 
            ]
        ];

            BudgetItem::factory(count($budget))->sequence(fn ($sqn) => $budget[$sqn->index])->create();

        }
    }
