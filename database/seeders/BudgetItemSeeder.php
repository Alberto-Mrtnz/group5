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
            'price',
            'quantity'
        ];

        BudgetItem::factory(count($budget))->sequence(fn ($sqn) => ['price' => $budget[$sqn->index]])->create();

        //BudgetItem::factory(45)->create();
    }
}
