<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Budget;

class BudgetSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $budget = [
            'name',
            'total_price',
            'date'
        ];

        Budget::factory(count($budget))->sequence(fn ($sqn) => ['name' => $budget[$sqn->index]])->create();

        //Budget::factory(15)->create();
    }
}
