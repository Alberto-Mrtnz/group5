<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Schedule;

class ScheduleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $schedule = [
            'day',
            'open',
            'close',
        ];

        Schedule::factory(count($schedule))->sequence(fn ($sqn) => ['day' => $schedule[$sqn->index]])->create();

        //Schedule::factory(10)->create();
    }
}
