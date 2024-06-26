<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Supply;
use App\Models\User;
use App\Models\Schedule;
use App\Models\Category;

class SupplySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */

    public function users() {
        return User::where('is_provider', true)->pluck('id');
    }

    public function schedules() {
        return Schedule::pluck('id');
    }

    public function run(): void
    {
        $users = $this->users();
        $schedules = $this->schedules();

        $supplies = [
            [   
                'name' => 'Banquet Chair',
                'quantity' => 150,
                'price' => 45,
                'description' => 'Comfortable and elegant banquet chair with cushioned seat.',
                'is_service' => false,
                'address' => '123 Event Avenue, Party City',
                'experience' => 'Used in over 200 events for guests\' seating.',
                'user_id' => $users->random(),
                'category_id' => Category::where('name', 'Mobiliario')->first()->id,
                'schedule_id' => $schedules->random(),
            ],
            [
                'name' => 'Round Table',
                'quantity' => 20,
                'price' => 120,
                'description' => 'Sturdy round table that seats up to 10 people.',
                'is_service' => false,
                'address' => '456 Celebration Street, Festival Town',
                'experience' => 'Popular choice for weddings and large gatherings.',
                'user_id' => $users->random(),
                'category_id' => Category::where('name', 'Mobiliario')->first()->id,
                'schedule_id' => $schedules->random(),
            ],
            [
                'name' => 'Stage Platform',
                'quantity' => 5,
                'price' => 500,
                'description' => 'Modular stage platform for performances and speeches.',
                'is_service' => false,
                'address' => '789 Performance Plaza, Showville',
                'experience' => 'Used in concerts and corporate events for better visibility.',
                'user_id' => $users->random(),
                'category_id' => Category::where('name', 'Aparatos Audiovisuales')->first()->id,
                'schedule_id' => $schedules->random(),
            ],
            [
                'name' => 'Lighting System',
                'quantity' => null,
                'price' => 1500,
                'description' => 'Professional lighting system for events.',
                'is_service' => false,
                'address' => '321 Bright Lane, Light City',
                'experience' => 'Provides atmospheric lighting for parties and performances.',
                'user_id' => $users->random(),
                'category_id' => Category::where('name', 'Aparatos Audiovisuales')->first()->id,
                'schedule_id' => $schedules->random(),
            ],
            [
                'name' => 'Sound System',
                'quantity' => null,
                'price' => 2000,
                'description' => 'High-quality sound system for clear audio at events.',
                'is_service' => true,
                'address' => '654 Audio Road, Music Town',
                'experience' => 'Ensures excellent sound quality for speeches, music, and presentations.',
                'user_id' => $users->random(),
                'category_id' => Category::where('name', 'Aparatos Audiovisuales')->first()->id,
                'schedule_id' => $schedules->random(),
            ],
        ];

        Supply::factory(count($supplies))->sequence(fn ($sqn) => $supplies[$sqn->index])->create();

        //Supply::factory(45)->create();
    }
}
