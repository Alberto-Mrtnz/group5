<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Schedule;
use App\Models\Budget;
use App\Models\Category;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
         //User::factory(10)->create();

        $this->call([
            CategorySeeder::class,
            UserSeeder::class,
            ScheduleSeeder::class,
            SupplySeeder::class,
            BudgetSeeder::class,
            BudgetItemSeeder::class,
            RatingSeeder::class,
        ]);

        //User::factory()->create([
          //  'name' => 'Test User',
            //'email' => 'test@example.com',
        //]);
    }
}
