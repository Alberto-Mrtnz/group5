<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\calendar;

class CalendarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $calendar = [
            'calendar',
            'subject'
        ];

        Calendar::factory(count($calendar))->sequence(fn ($sqn) => ['day' => $calendar[$sqn->index]])->create();

        //Calendar::factory(10)->create();
    }
}
