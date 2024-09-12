<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use App\Models\Budget;

class BudgetSeeder extends Seeder
{
    public function users()
    {
        return User::pluck('id');
    }
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = $this->users();

        $budgets = [
            [
                'name' => "Agatha's birthday party",
                'total_price' => 123.00,
                'user_id' => $users->random()
            ],
            [
                'name' => "Juan's anniversary",
                'total_price' => 123.00,
                'user_id' => $users->random()
            ],
        ];

        Budget::factory(count($budgets))->sequence(fn ($sqn) => $budgets[$sqn->index])->create();
    }
}
