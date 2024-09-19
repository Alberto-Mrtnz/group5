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
                'name' => "Lola's anniversary",
                'total_price' => 193.00,
                'user_id' => 1
            ],
            [
                'name' => "Joseph's graduation party",
                'total_price' => 103.00,
                'user_id' => 1
            ],
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
            [
                'name' => "New year",
                'total_price' => 108.00,
                'user_id' => $users->random()
            ],
            [
                'name' => "Angel's birthday",
                'total_price' => 180.00,
                'user_id' => $users->random()
            ],
        ];

        Budget::factory(count($budgets))->sequence(fn ($sqn) => $budgets[$sqn->index])->create();
    }
}
