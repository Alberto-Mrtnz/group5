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
            [
                'comment' => 'I had an amazing experience with the event service. Everything was perfectly organized and the team was very professional, I will definitely hire them again for future celebrations!',
                'stars' => 5,
                'user_id' => $users->random(),
                'supply_id' => $supplies->random(),
            ],
            [
                'comment' => 'The best in the business. From planning to execution, everything was top notch. The attention to detail was exceptional and all the guests were impressed.Highly recommended!',
                'stars' => 5,
                'user_id' => $users->random(),
                'supply_id' => $supplies->random(),
            ],
            [
                'comment' => 'The service was very good, although there was a small delay. However, the staff was friendly and resolved everything quickly. Overall, a positive experience.',
                'stars' => 4,
                'user_id' => $users->random(),
                'supply_id' => $supplies->random(),
            ],
            [
                'comment' => 'The event went well, but I think they could improve communication. Sometimes it was difficult to get quick answers to my questions. Still, the end result was satisfactory.',
                'stars' => 4,
                'user_id' => $users->random(),
                'supply_id' => $supplies->random(),
            ],
            [
                'comment' => 'The service was decent, but did not meet all my expectations. The decor was nice, but some things were not the best. It was not a bad event, but it could have been better.',
                'stars' => 3,
                'user_id' => $users->random(),
                'supply_id' => $supplies->random(),
            ],
            [
                'comment' => 'The event had some logistical problems that affected the experience. Although the team was friendly, the lack of organization was noticeable. I hope they can improve in the future.',
                'stars' => 3,
                'user_id' => $users->random(),
                'supply_id' => $supplies->random(),
            ],
            [
                'comment' => 'Unfortunately, I was not satisfied with the service. There were many details that were not delivered as promised. I was a bit disappointed as I expected more from them.',
                'stars' => 2,
                'user_id' => $users->random(),
                'supply_id' => $supplies->random(),
            ],
            [
                'comment' => 'The service was excellent, it exceeded my expectations. The team was very attentive and professional at all times, I will definitely come back.',
                'stars' => 5,
                'user_id' => $users->random(),
                'supply_id' => $supplies->random(),
            ],
            [
                'comment' => 'Overall good experience, although there were some details that could be improved. However, the service was punctual and met what was needed.',
                'stars' => 4,
                'user_id' => $users->random(),
                'supply_id' => $supplies->random(),
            ],
            [
                'comment' => 'Very satisfied with the result. Customer service is outstanding and response times were quick. I would definitely recommend it.',
                'stars' => 4,
                'user_id' => $users->random(),
                'supply_id' => $supplies->random(),
            ],
            [
                'comment' => 'The service was very good. They delivered what was promised and the effort to take care of every detail was noticeable. Undoubtedly, a positive experience that I would recommend.',
                'stars' => 5,
                'user_id' => $users->random(),
                'supply_id' => $supplies->random(),
            ],
            [
                'comment' => 'The team was very friendly and professional. Everything was handled efficiently and smoothly. I leave with a good impression.',
                'stars' => 4,
                'user_id' => $users->random(),
                'supply_id' => $supplies->random(),
            ],
            [
                'comment' => 'It was not a bad experience, but I think there are aspects that could be improved. Nevertheless, the service lived up to what they offered.',
                'stars' => 3,
                'user_id' => $users->random(),
                'supply_id' => $supplies->random(),
            ],
            [
                'comment' => 'I am very happy with the service I received. It was fast, efficient and the staff was very attentive. I would definitely recommend it to others.',
                'stars' => 5,
                'user_id' => $users->random(),
                'supply_id' => $supplies->random(),
            ],
            [
                'comment' => 'I rented the service for my sons birthday. Some things were great, but others were a disappointment, needs improvement.',
                'stars' => 3,
                'user_id' => $users->random(),
                'supply_id' => $supplies->random(),
            ],
            [
                'comment' => 'I hired the service for a surprise party. Everything was well coordinated, but some workers did not follow orders, which annoyed some guests, however, it was a good event.',
                'stars' => 3,
                'user_id' => $users->random(),
                'supply_id' => $supplies->random(),
            ],
            [
                'comment' => 'I hired them for an event service for a baptism. They were attentive and did a great job, even though they were late for set up. I would hire them again.',
                'stars' => 4,
                'user_id' => $users->random(),
                'supply_id' => $supplies->random(),
            ],
            [
                'comment' => 'They were very professional, but there were logistical problems. Despite that, the rest was excellent.',
                'stars' => 4,
                'user_id' => $users->random(),
                'supply_id' => $supplies->random(),
            ],
            [
                'comment' => 'The event was beautiful, but the final cost was higher than expected due to hidden extras. Quality was great, though.',
                'stars' => 4,
                'user_id' => $users->random(),
                'supply_id' => $supplies->random(),
            ],
            [
                'comment' => 'Everything was well organized, but the communication beforehand was slow and stressful.',
                'stars' => 2,
                'user_id' => $users->random(),
                'supply_id' => $supplies->random(),
            ],
            [
                'comment' => 'I hired a service for a family party and everything was perfect: food, decoration and punctuality. No complaints, I would hire them again.',
                'stars' => 5,
                'user_id' => $users->random(),
                'supply_id' => $supplies->random(),
            ],
            [
                'comment' => 'Everything arrived on time, but some details were not very good. I would consider another option for next time.',
                'stars' => 3,
                'user_id' => $users->random(),
                'supply_id' => $supplies->random(),
            ],
            [
                'comment' => 'The decoration was beautiful, but the team was not punctual, causing delays in the catering and games.',
                'stars' => 3,
                'user_id' => $users->random(),
                'supply_id' => $supplies->random(),
            ],
            [
                'comment' => 'They were late, the service was not as contracted and the organization was poor. They made no attempt to solve the problems.',
                'stars' => 1,
                'user_id' => $users->random(),
                'supply_id' => $supplies->random(),
            ],
            [
                'comment' => 'Absolutely delighted with this service! The quality is exceptional.',
                'stars' => 5,
                'user_id' => $users->random(),
                'supply_id' => $supplies->random(),
            ],
            [
                'comment' => 'Very satisfied with my purchase. It is exactly what I needed for my project.',
                'stars' => 4,
                'user_id' => $users->random(),
                'supply_id' => $supplies->random(),
            ],
            [
                'comment' => 'Disappointing quality. Lousy customer service, never responded to my questions.',
                'stars' => 2,
                'user_id' => $users->random(),
                'supply_id' => $supplies->random(),
            ],
            [
                'comment' => 'The product does not correspond to the description. The costs do not correspond to what they offer',
                'stars' => 2,
                'user_id' => $users->random(),
                'supply_id' => $supplies->random(),
            ],
            [
                'comment' => 'Good in general, but could be improved in some things, however, they comply with the established standards.',
                'stars' => 4,
                'user_id' => $users->random(),
                'supply_id' => $supplies->random(),
            ],
            [
                'comment' => 'Excellent service, the staff was very friendly and attentive. I would definitely hire them again.',
                'stars' => 5,
                'user_id' => $users->random(),
                'supply_id' => $supplies->random(),
            ],
            [
                'comment' => 'I loved the experience, everything was impeccable. High quality service, you can see the care in every detail. Highly recommended. Without a doubt, one of my favorites. ',
                'stars' => 5,
                'user_id' => $users->random(),
                'supply_id' => $supplies->random(),
            ],
            [
                'comment' => 'Attention was rather slow and the staff did not seem interested in helping.',
                'stars' => 3,
                'user_id' => $users->random(),
                'supply_id' => $supplies->random(),
            ],
            [
                'comment' => 'Mediocre product for the price I paid. Their prices are too high for what they really offer I will not hire them again.',
                'stars' => 2,
                'user_id' => $users->random(),
                'supply_id' => $supplies->random(),
            ],
            [
                'comment' => 'It did not meet my expectations, it seems to me that the quality has gone down over time.',
                'stars' => 3,
                'user_id' => $users->random(),
                'supply_id' => $supplies->random(),
            ],
            [
                'comment' => 'The service is very good, very friendly customer service and at a good price, perfect for a good time. 5 stars!',
                'stars' => 5,
                'user_id' => $users->random(),
                'supply_id' => $supplies->random(),
            ],
        ];

        Rating::factory(count($ratings))->sequence(fn ($sequence) => $ratings[$sequence->index])->create();
    }
}
