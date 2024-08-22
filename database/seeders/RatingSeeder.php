<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Rating;
use App\Models\Supply;

class RatingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function users() {
        return User::where('is_provider', false)->pluck('id');
    }

    public function supplies() {
        return Supply::pluck('id');
    }

    public function run(): void
    {
        $users = $this->users();
        $supplies = $this->supplies();

        $ratings = [
            [
                'comment' => 'Excellent quality, exactly what I needed for my project.',
                'stars' => 5,
                'user_id' => $users->random(),
                'supply_id' => $supplies->random(),
            ],
            [
                'comment' => 'The delivery was quick, but the product did not meet my expectations.',
                'stars' => 3,
                'user_id' => $users->random(),
                'supply_id' => $supplies->random(),
            ],
            [
                'comment' => 'Good value for money. I recommend it.',
                'stars' => 4,
                'user_id' => $users->random(),
                'supply_id' => $supplies->random(),
            ],
            [
                'comment' => 'The material is durable and sturdy. Very satisfied with the purchase.',
                'stars' => 5,
                'user_id' => $users->random(),
                'supply_id' => $supplies->random(),
            ],
            [
                'comment' => 'I had issues with shipping, but customer service resolved it quickly.',
                'stars' => 4,
                'user_id' => $users->random(),
                'supply_id' => $supplies->random(),
            ],
            [
                'comment' => 'Perfectly packaged and in excellent condition.',
                'stars' => 5,
                'user_id' => $users->random(),
                'supply_id' => $supplies->random(),
            ],
            [
                'comment' => 'Not exactly what I expected, but it works well for my purpose.',
                'stars' => 3,
                'user_id' => $users->random(),
                'supply_id' => $supplies->random(),
            ],
            [
                'comment' => 'Incredible attention to detail in this product. Exceeded my expectations.',
                'stars' => 5,
                'user_id' => $users->random(),
                'supply_id' => $supplies->random(),
            ],
            [
                'comment' => 'A bit pricey for what it is, but the quality is undeniable.',
                'stars' => 4,
                'user_id' => $users->random(),
                'supply_id' => $supplies->random(),
            ],
            [
                'comment' => 'Easy to use and very versatile. Will definitely buy again.',
                'stars' => 5,
                'user_id' => $users->random(),
                'supply_id' => $supplies->random(),
            ],
            [
                'comment' => 'The color does not match exactly with the image, but still a good product.',
                'stars' => 4,
                'user_id' => $users->random(),
                'supply_id' => $supplies->random(),
            ],
            [
                'comment' => 'Impressive durability. It has withstood heavy use well.',
                'stars' => 5,
                'user_id' => $users->random(),
                'supply_id' => $supplies->random(),
            ],
            [
                'comment' => 'The quality is inconsistent. I had to return some items.',
                'stars' => 2,
                'user_id' => $users->random(),
                'supply_id' => $supplies->random(),
            ],
            [
                'comment' => 'Perfect for small projects. Very manageable and precise.',
                'stars' => 4,
                'user_id' => $users->random(),
                'supply_id' => $supplies->random(),
            ],
            [
                'comment' => 'The after-sales service is excellent. They resolved my doubts quickly.',
                'stars' => 5,
                'user_id' => $users->random(),
                'supply_id' => $supplies->random(),
            ],
        ];

        Rating::factory(count($ratings))->sequence(fn ($sequence) => $ratings[$sequence->index])->create();
    }
}
