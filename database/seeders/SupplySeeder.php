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
                'img' => '',
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
                'img' => '',
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
                'img' => '',
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
                'img' => '',
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
                'img' => '',
                'user_id' => $users->random(),
                'category_id' => Category::where('name', 'Aparatos Audiovisuales')->first()->id,
                'schedule_id' => $schedules->random(),
            ],
            [
                'name' => 'Catering Service',
                'quantity' => null,
                'price' => 3000,
                'description' => 'Full catering service for events.',
                'is_service' => true,
                'address' => '987 Foodie Lane, Gourmet City',
                'experience' => 'Served over 500 events with gourmet food options.',
                'img' => '',
                'user_id' => $users->random(),
                'category_id' => Category::where('name', 'Servicios')->first(),
                'schedule_id' => $schedules->random(),
            ],
            [
                'name' => 'Projector',
                'quantity' => 10,
                'price' => 350,
                'description' => 'High-resolution projector for presentations and events.',
                'is_service' => false,
                'address' => '432 Projection Drive, Visual City',
                'experience' => 'Used in various conferences and movie nights.',
                'img' => '',
                'user_id' => $users->random(),
                'category_id' => Category::where('name', 'Aparatos Audiovisuales')->first()->id,
                'schedule_id' => $schedules->random(),
            ],
            [
                'name' => 'DJ Service',
                'quantity' => null,
                'price' => 500,
                'description' => 'Professional DJ service for events.',
                'is_service' => true,
                'address' => '876 Music Avenue, Party Town',
                'experience' => 'Over 300 events with a diverse music collection.',
                'img' => '',
                'user_id' => $users->random(),
                'category_id' => Category::where('name', 'Servicios')->first(),
                'schedule_id' => $schedules->random(),
            ],
            [
                'name' => 'Dance Floor',
                'quantity' => 2,
                'price' => 700,
                'description' => 'Portable dance floor for events.',
                'is_service' => false,
                'address' => '210 Dance Street, Celebration City',
                'experience' => 'Perfect for weddings and parties.',
                'img' => '',
                'user_id' => $users->random(),
                'category_id' => Category::where('name', 'Mobiliario')->first()->id,
                'schedule_id' => $schedules->random(),
            ],
            [
                'name' => 'Photo Booth',
                'quantity' => 3,
                'price' => 450,
                'description' => 'Fun photo booth for event memories.',
                'is_service' => false,
                'address' => '321 Memory Lane, Snap City',
                'experience' => 'Captures unforgettable moments at events.',
                'img' => '',
                'user_id' => $users->random(),
                'category_id' => Category::where('name', 'Servicios')->first(),
                'schedule_id' => $schedules->random(),
            ],
            [
                'name' => 'Decorative Lights',
                'quantity' => 50,
                'price' => 20,
                'description' => 'Beautiful decorative lights for ambiance.',
                'is_service' => false,
                'address' => '654 Illumination Street, Glow City',
                'experience' => 'Creates a magical atmosphere at events.',
                'img' => '',
                'user_id' => $users->random(),
                'category_id' => Category::where('name', 'Aparatos Audiovisuales')->first()->id,
                'schedule_id' => $schedules->random(),
            ],
            [
                'name' => 'Flower Arrangement',
                'quantity' => 100,
                'price' => 80,
                'description' => 'Elegant flower arrangements for decor.',
                'is_service' => false,
                'address' => '987 Bloom Street, Garden City',
                'experience' => 'Adds beauty and elegance to any event.',
                'img' => '',
                'user_id' => $users->random(),
                'category_id' => Category::where('name', 'Decoración')->first()->id,
                'schedule_id' => $schedules->random(),
            ],
            [
                'name' => 'Catering Equipment',
                'quantity' => 30,
                'price' => 200,
                'description' => 'Essential equipment for catering services.',
                'is_service' => false,
                'address' => '123 Serve Avenue, Chef City',
                'experience' => 'Used by professional caterers.',
                'img' => '',
                'user_id' => $users->random(),
                'category_id' => Category::where('name', 'Equipamiento')->first(),
                'schedule_id' => $schedules->random(),
            ],
            [
                'name' => 'Tent',
                'quantity' => 10,
                'price' => 800,
                'description' => 'Large tent for outdoor events.',
                'is_service' => false,
                'address' => '456 Shelter Road, Event City',
                'experience' => 'Provides shelter for outdoor events.',
                'img' => '',
                'user_id' => $users->random(),
                'category_id' => Category::where('name', 'Mobiliario')->first()->id,
                'schedule_id' => $schedules->random(),
            ],
            [
                'name' => 'Security Service',
                'quantity' => null,
                'price' => 1000,
                'description' => 'Professional security services for events.',
                'is_service' => true,
                'address' => '789 Safety Boulevard, Secure City',
                'experience' => 'Ensures safety and security at events.',
                'img' => '',
                'user_id' => $users->random(),
                'category_id' => Category::where('name', 'Servicios')->first(),
                'schedule_id' => $schedules->random(),
            ],
            [
                'name' => 'Event Planner',
                'quantity' => null,
                'price' => 2500,
                'description' => 'Professional event planning services.',
                'is_service' => true,
                'address' => '321 Plan Street, Organize City',
                'experience' => 'Coordinates all aspects of events.',
                'img' => '',
                'user_id' => $users->random(),
                'category_id' => Category::where('name', 'Servicios')->first(),
                'schedule_id' => $schedules->random(),
            ],
        ];

        Supply::factory(count($supplies))->sequence(fn ($sqn) => $supplies[$sqn->index])->create();

    }
}
