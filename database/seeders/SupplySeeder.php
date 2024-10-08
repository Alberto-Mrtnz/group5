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
                'price' => 100,
                'description' => 'Comfortable and elegant banquet chair with cushioned seat.',
                'is_service' => false,
                'address' => '123 Event Avenue, Party City',
                'experience' => 'Used in over 200 events for guests\' seating.',
                'img' => 'CHAIR/banquet-chair.jpg',
                'user_id' => $users->random(),
                'category_id' => Category::where('name', 'Furniture')->first()->id,
                'schedule_id' => $schedules->random(),
            ],
            [
                'name' => 'Goal chairs ',
                'quantity' => 300,
                'price' => 350,
                'description' => 'Comfortable and elegant banquet chair with cushioned seat.',
                'is_service' => false,
                'address' => '123 Event Avenue, Party City',
                'experience' => 'Used in over 200 events for guests\' seating.',
                'img' => 'CHAIR/goal-chairs.jpg',
                'user_id' => $users->random(),
                'category_id' => Category::where('name', 'Furniture')->first()->id,
                'schedule_id' => $schedules->random(),
            ],
            [
                'name' => 'Wooden Chair',
                'quantity' => 50,
                'price' => 45,
                'description' => 'Comfortable and elegant banquet chair with cushioned seat.',
                'is_service' => false,
                'address' => '123 Event Avenue, Party City',
                'experience' => 'Used in over 200 events for guests\' seating.',
                'img' => 'CHAIR/wooden-chairs.jpg',
                'user_id' => $users->random(),
                'category_id' => Category::where('name', 'Furniture')->first()->id,
                'schedule_id' => $schedules->random(),
            ],
            [
                'name' => 'Cube chairs',
                'quantity' => 45,
                'price' => 45,
                'description' => 'Comfortable and elegant banquet chair with cushioned seat.',
                'is_service' => false,
                'address' => '123 Event Avenue, Party City',
                'experience' => 'Used in over 200 events for guests\' seating.',
                'img' => 'CHAIR/cube-armchairs.jpg',
                'user_id' => $users->random(),
                'category_id' => Category::where('name', 'Furniture')->first()->id,
                'schedule_id' => $schedules->random(),
            ],
            [
                'name' => 'Classic chairs ',
                'quantity' => 500,
                'price' => 45,
                'description' => 'Comfortable and elegant banquet chair with cushioned seat.',
                'is_service' => false,
                'address' => '123 Event Avenue, Party City',
                'experience' => 'Used in over 200 events for guests\' seating.',
                'img' => 'CHAIR/classic-chairs.jpg',
                'user_id' => $users->random(),
                'category_id' => Category::where('name', 'Furniture')->first()->id,
                'schedule_id' => $schedules->random(),
            ],
            [
                'name' => 'Round Tables',
                'quantity' => 40,
                'price' => 120,
                'description' => 'Sturdy round table that seats up to 10 people.',
                'is_service' => false,
                'address' => '456 Celebration Street, Festival Town',
                'experience' => 'Popular choice for weddings and large gatherings.',
                'img' => 'TABLE/round-tables.jpg',
                'user_id' => $users->random(),
                'category_id' => Category::where('name', 'Furniture')->first()->id,
                'schedule_id' => $schedules->random(),
            ],
            [
                'name' => 'Square Tables',
                'quantity' => 35,
                'price' => 120,
                'description' => 'Sturdy round table that seats up to 10 people.',
                'is_service' => false,
                'address' => '456 Celebration Street, Festival Town',
                'experience' => 'Popular choice for weddings and large gatherings.',
                'img' => 'TABLE/square-tables.jpg',
                'user_id' => $users->random(),
                'category_id' => Category::where('name', 'Furniture')->first()->id,
                'schedule_id' => $schedules->random(),
            ],
            [
                'name' => 'Terrace Tables',
                'quantity' => 23,
                'price' => 120,
                'description' => 'Sturdy round table that seats up to 10 people.',
                'is_service' => false,
                'address' => '456 Celebration Street, Festival Town',
                'experience' => 'Popular choice for weddings and large gatherings.',
                'img' => 'TABLE/terrace-table.jpg',
                'user_id' => $users->random(),
                'category_id' => Category::where('name', 'Furniture')->first()->id,
                'schedule_id' => $schedules->random(),
            ],
            [
                'name' => 'U-sharped Table',
                'quantity' => 20,
                'price' => 120,
                'description' => 'Sturdy round table that seats up to 10 people.',
                'is_service' => false,
                'address' => '456 Celebration Street, Festival Town',
                'experience' => 'Popular choice for weddings and large gatherings.',
                'img' => 'TABLE/U-shaped-table.jpg',
                'user_id' => $users->random(),
                'category_id' => Category::where('name', 'Furniture')->first()->id,
                'schedule_id' => $schedules->random(),
            ],
            [
                'name' => 'Oval Table',
                'quantity' => 55,
                'price' => 120,
                'description' => 'Sturdy round table that seats up to 10 people.',
                'is_service' => false,
                'address' => '456 Celebration Street, Festival Town',
                'experience' => 'Popular choice for weddings and large gatherings.',
                'img' => 'TABLE/oval-tables.jpg',
                'user_id' => $users->random(),
                'category_id' => Category::where('name', 'Furniture')->first()->id,
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
                'img' => 'STAGE/stage-plantform.webp',
                'user_id' => $users->random(),
                'category_id' => Category::where('name', 'Audiovisual equipment')->first()->id,
                'schedule_id' => $schedules->random(),
            ],
            [
                'name' => 'Color Lights ',
                'quantity' => 50,
                'price' => 1500,
                'description' => 'Professional lighting system for events.',
                'is_service' => false,
                'address' => '321 Bright Lane, Light City',
                'experience' => 'Provides atmospheric lighting for parties and performances.',
                'img' => 'LIGHT/color-lights.jpg',
                'user_id' => $users->random(),
                'category_id' => Category::where('name', 'Audiovisual equipment')->first()->id,
                'schedule_id' => $schedules->random(),
            ],
            [
                'name' => 'Laser Lightings',
                'quantity' => 700,
                'price' => 1500,
                'description' => 'Professional lighting system for events.',
                'is_service' => false,
                'address' => '321 Bright Lane, Light City',
                'experience' => 'Provides atmospheric lighting for parties and performances.',
                'img' => 'LIGHT/laser-lights.jpg',
                'user_id' => $users->random(),
                'category_id' => Category::where('name', 'Audiovisual equipment')->first()->id,
                'schedule_id' => $schedules->random(),
            ],
            [
                'name' => 'Proffesional Photographer',
                'quantity' => null,
                'price' => 80,
                'description' => 'Elegant flower arrangements for decor.',
                'is_service' => false,
                'address' => '987 Bloom Street, Garden City',
                'experience' => 'Adds beauty and elegance to any event.',
                'img' => 'ARRENGEMENT/professional-photographer.jpg',
                'user_id' => $users->random(),
                'category_id' => Category::where('name', 'Decoration')->first()->id,
                'schedule_id' => $schedules->random(),
            ],
            [
                'name' => 'Desserts Catering',
                'quantity' => 30,
                'price' => 200,
                'description' => 'Essential equipment for catering services.',
                'is_service' => false,
                'address' => '123 Serve Avenue, Chef City',
                'experience' => 'Used by professional caterers.',
                'img' => 'CATERI-E/desserts-catering.jpg',
                'user_id' => $users->random(),
                'category_id' => Category::where('name', 'Catering')->first(),
            ],
            [
                'name' => 'Plastic Catering',
                'quantity' => 20,
                'price' => 200,
                'description' => 'Essential equipment for catering services.',
                'is_service' => false,
                'address' => '123 Serve Avenue, Chef City',
                'experience' => 'Used by professional caterers.',
                'img' => 'CATERI-E/plastic-catering.jpg',
                'user_id' => $users->random(),
                'category_id' => Category::where('name', 'Catering')->first(),
                'schedule_id' => $schedules->random(),
            ],
            [
                'name' => 'Small Catering',
                'quantity' => 15,
                'price' => 200,
                'description' => 'Essential equipment for catering services.',
                'is_service' => false,
                'address' => '123 Serve Avenue, Chef City',
                'experience' => 'Used by professional caterers.',
                'img' => 'CATERI-E/small-catering.jpg',
                'user_id' => $users->random(),
                'category_id' => Category::where('name', 'Catering')->first(),
                'schedule_id' => $schedules->random(),
            ],
            [
                'name' => 'Waterfall Lighting',
                'quantity' => 500,
                'price' => 1500,
                'description' => 'Professional lighting system for events.',
                'is_service' => false,
                'address' => '321 Bright Lane, Light City',
                'experience' => 'Provides atmospheric lighting for parties and performances.',
                'img' => 'LIGHT/waterfall-lights.webp',
                'user_id' => $users->random(),
                'category_id' => Category::where('name', 'Audiovisual equipment')->first()->id,
                'schedule_id' => $schedules->random(),
            ],
            [
                'name' => 'Professional Florist',
                'quantity' => null,
                'price' => 80,
                'description' => 'Elegant flower arrangements for decor.',
                'is_service' => false,
                'address' => '987 Bloom Street, Garden City',
                'experience' => 'Adds beauty and elegance to any event.',
                'img' => 'ARRENGEMENT/professional-florist.jpg',
                'user_id' => $users->random(),
                'category_id' => Category::where('name', 'Decoration')->first()->id,
                'schedule_id' => $schedules->random(),
            ],
            [
                'name' => 'Lighting System',
                'quantity' => 25,
                'price' => 1500,
                'description' => 'Professional lighting system for events.',
                'is_service' => false,
                'address' => '321 Bright Lane, Light City',
                'experience' => 'Provides atmospheric lighting for parties and performances.',
                'img' => 'LIGHT/light-system.webp',
                'user_id' => $users->random(),
                'category_id' => Category::where('name', 'Audiovisual equipment')->first()->id,
                'schedule_id' => $schedules->random(),
            ],
            [
                'name' => 'Sound System',
                'quantity' => 8,
                'price' => 2000,
                'description' => 'High-quality sound system for clear audio at events.',
                'is_service' => true,
                'address' => '654 Audio Road, Music Town',
                'experience' => 'Ensures excellent sound quality for speeches, music, and presentations.',
                'img' => 'SOUND/sound-system.webp',
                'user_id' => $users->random(),
                'category_id' => Category::where('name', 'Audiovisual equipment')->first()->id,
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
                'img' => 'CATERI-S/catering-service.jpg',
                'user_id' => $users->random(),
                'category_id' => Category::where('name', 'Catering')->first(),
                'schedule_id' => $schedules->random(),
            ],
            [
                'name' => 'Small Catering Service',
                'quantity' => 35,
                'price' => 3000,
                'description' => 'Full catering service for events.',
                'is_service' => true,
                'address' => '987 Foodie Lane, Gourmet City',
                'experience' => 'Served over 500 events with gourmet food options.',
                'img' => 'CATERI-S/small-celebration.jpg',
                'user_id' => $users->random(),
                'category_id' => Category::where('name', 'Catering')->first(),
                'schedule_id' => $schedules->random(),
            ],
            [
                'name' => 'Buffet Chef',
                'quantity' => null,
                'price' => 3000,
                'description' => 'Full catering service for events.',
                'is_service' => true,
                'address' => '987 Foodie Lane, Gourmet City',
                'experience' => 'Served over 500 events with gourmet food options.',
                'img' => 'CATERI-S/buffet-chef.jpg',
                'user_id' => $users->random(),
                'category_id' => Category::where('name', 'Catering')->first(),
                'schedule_id' => $schedules->random(),
            ],
            [ 'name' => 'Saucier Chef',
            'quantity' => null,
            'price' => 3000,
            'description' => 'Full catering service for events.',
            'is_service' => true,
            'address' => '987 Foodie Lane, Gourmet City',
            'experience' => 'Served over 500 events with gourmet food options.',
            'img' => 'CATERI-S/chef-saucier.jpg',
            'user_id' => $users->random(),
            'category_id' => Category::where('name', 'Catering')->first(),
            'schedule_id' => $schedules->random(),
            ],
            [
                'name' => 'large Speaker',
                'quantity' => 4,
                'price' => 2000,
                'description' => 'High-quality sound system for clear audio at events.',
                'is_service' => true,
                'address' => '654 Audio Road, Music Town',
                'experience' => 'Ensures excellent sound quality for speeches, music, and presentations.',
                'img' => 'SOUND/large-speaker.jpg',
                'user_id' => $users->random(),
                'category_id' => Category::where('name', 'Audiovisual equipment')->first()->id,
                'schedule_id' => $schedules->random(),
            ],
            [
                'name' => 'Medium Speaker',
                'quantity' => 7,
                'price' => 2000,
                'description' => 'High-quality sound system for clear audio at events.',
                'is_service' => true,
                'address' => '654 Audio Road, Music Town',
                'experience' => 'Ensures excellent sound quality for speeches, music, and presentations.',
                'img' => 'SOUND/medium-speaker.jpg',
                'user_id' => $users->random(),
                'category_id' => Category::where('name', 'Audiovisual equipment')->first()->id,
                'schedule_id' => $schedules->random(),
            ],
            [
                'name' => 'Small Speaker',
                'quantity' => 5,
                'price' => 2000,
                'description' => 'High-quality sound system for clear audio at events.',
                'is_service' => true,
                'address' => '654 Audio Road, Music Town',
                'experience' => 'Ensures excellent sound quality for speeches, music, and presentations.',
                'img' => 'SOUND/small-speaker.jpg',
                'user_id' => $users->random(),
                'category_id' => Category::where('name', 'Audiovisual equipment')->first()->id,
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
                'img' => 'DJ/dj-service.jpg',
                'user_id' => $users->random(),
                'category_id' => Category::where('name', 'Services')->first(),
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
                'img' => 'DECORATE/decorative-lights.jpg',
                'user_id' => $users->random(),
                'category_id' => Category::where('name', 'Audiovisual equipment')->first()->id,
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
                'img' => 'PROJECTOR/projector.webp',
                'user_id' => $users->random(),
                'category_id' => Category::where('name', 'Audiovisual equipment')->first()->id,
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
                'img' => 'FLOOR/dance-floor.jpg',
                'user_id' => $users->random(),
                'category_id' => Category::where('name', 'Furniture')->first()->id,
                'schedule_id' => $schedules->random(),
            ],
            [
                'name' => 'Complete Catering',
                'quantity' => 30,
                'price' => 200,
                'description' => 'Essential equipment for catering services.',
                'is_service' => false,
                'address' => '123 Serve Avenue, Chef City',
                'experience' => 'Used by professional caterers.',
                'img' => 'CATERI-E/complete-catering.jpg',
                'user_id' => $users->random(),
                'category_id' => Category::where('name', 'Catering')->first(),
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
                'img' => 'PHOTO/photo-booth.jpg',
                'user_id' => $users->random(),
                'category_id' => Category::where('name', 'Furniture')->first()->id,
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
                'img' => 'ARRENGEMENT/flower-arrangement.jpg',
                'user_id' => $users->random(),
                'category_id' => Category::where('name', 'Decoration')->first()->id,
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
                'img' => 'CATERI-E/catering-equipment.jpg',
                'user_id' => $users->random(),
                'category_id' => Category::where('name', 'Catering')->first(),
                'schedule_id' => $schedules->random(),
            ],

            //$supplies->save(),
            [
                'name' => 'Security Service',
                'quantity' => null,
                'price' => 1000,
                'description' => 'Professional security services for events.',
                'is_service' => true,
                'address' => '789 Safety Boulevard, Secure City',
                'experience' => 'Ensures safety and security at events.',
                'img' => 'SECURITY-S/security.jpg',
                'user_id' => $users->random(),
                'category_id' => Category::where('name', 'Services')->first()->id,
                'schedule_id' => $schedules->random(),
            ],
            [
                'name' => 'La Codorniz Country House',
                'quantity' => 1,
                'price' => 3500,
                'description' => 'Charming rustic venue surrounded by beautiful countryside.',
                'is_service' => true,
                'address' => '123 Rural Road, Countryside Valley',
                'experience' => 'Perfect for intimate weddings and family gatherings.',
                'img' => 'VENUES/LaCodorniz.png',
                'user_id' => $users->random(),
                'category_id' => Category::where('name', 'Venue')->first()->id,
                'schedule_id' => $schedules->random(),
            ],
            [
                'name' => 'Marqbe Events Center',
                'quantity' => 1,
                'price' => 4500,
                'description' => 'Modern and versatile event space for all types of celebrations.',
                'is_service' => true,
                'address' => '456 Central Avenue, Downtown',
                'experience' => 'Hosted numerous corporate events and elegant parties.',
                'img' => 'VENUES/Marqbe.png',
                'user_id' => $users->random(),
                'category_id' => Category::where('name', 'Venue')->first()->id,
                'schedule_id' => $schedules->random(),
            ],
            [
                'name' => 'Rossy Tea Room',
                'quantity' => 1,
                'price' => 2000,
                'description' => 'Quaint and elegant tea room, perfect for intimate gatherings.',
                'is_service' => true,
                'address' => '789 Floral Street, Old Town',
                'experience' => 'Specializes in bridal showers and afternoon tea events.',
                'img' => 'VENUES/SalaRossy.png',
                'user_id' => $users->random(),
                'category_id' => Category::where('name', 'Venue')->first()->id,
                'schedule_id' => $schedules->random(),
            ],
            [
                'name' => 'Miramar Events Hall',
                'quantity' => 1,
                'price' => 5000,
                'description' => 'Spacious event hall with stunning ocean views.',
                'is_service' => true,
                'address' => '101 Coastal Drive, Seaside City',
                'experience' => 'Popular for beach weddings and corporate galas.',
                'img' => 'VENUES/Miramar.png',
                'user_id' => $users->random(),
                'category_id' => Category::where('name', 'Venue')->first()->id,
                'schedule_id' => $schedules->random(),
            ],
            [
                'name' => 'Cachito Mountain Resort',
                'quantity' => 1,
                'price' => 5500,
                'description' => 'Scenic mountain resort offering breathtaking views and outdoor activities.',
                'is_service' => true,
                'address' => '222 Peak Road, Mountain Ridge',
                'experience' => 'Ideal for destination weddings and corporate retreats.',
                'img' => 'VENUES/CachitoMountain.png',
                'user_id' => $users->random(),
                'category_id' => Category::where('name', 'Venue')->first()->id,
                'schedule_id' => $schedules->random(),
            ],
            [
                'name' => 'Botanical Gardens',
                'quantity' => 1,
                'price' => 4000,
                'description' => 'Lush, colorful gardens with various themed areas and a glass conservatory.',
                'is_service' => true,
                'address' => '222 Bloom Avenue, Green City',
                'experience' => 'Beautiful backdrop for outdoor ceremonies and nature-inspired events.',
                'img' => 'VENUES/Botanica.png',
                'user_id' => $users->random(),
                'category_id' => Category::where('name', 'Venue')->first()->id,
                'schedule_id' => $schedules->random(),
            ],
            [
                'name' => 'Hotel Alamo Internacional',
                'quantity' => 1,
                'price' => 5500,
                'description' => 'Prestigious international hotel with state-of-the-art event facilities.',
                'is_service' => true,
                'address' => '100 Avenida Principal, Ciudad Central',
                'experience' => 'Hosts international conferences and luxury wedding receptions.',
                'img' => 'VENUES/HotelAlamo.png',
                'user_id' => $users->random(),
                'category_id' => Category::where('name', 'Venue')->first()->id,
                'schedule_id' => $schedules->random(),
            ],
            [
                'name' => 'Cajamarca Cultural Center',
                'quantity' => 1,
                'price' => 3000,
                'description' => 'Vibrant cultural venue showcasing local heritage and art.',
                'is_service' => true,
                'address' => '234 Calle Inca, Cajamarca',
                'experience' => 'Popular for cultural exhibitions and traditional celebrations.',
                'img' => 'VENUES/Cajamarca.png',
                'user_id' => $users->random(),
                'category_id' => Category::where('name', 'Venue')->first()->id,
                'schedule_id' => $schedules->random(),
            ],
            [
                'name' => 'La Quadra Eventos',
                'quantity' => 1,
                'price' => 4000,
                'description' => 'Versatile event space with a blend of modern and colonial architecture.',
                'is_service' => true,
                'address' => '567 Avenida Histórica, Centro Histórico',
                'experience' => 'Ideal for both corporate events and elegant social gatherings.',
                'img' => 'VENUES/LaQuadra.png',
                'user_id' => $users->random(),
                'category_id' => Category::where('name', 'Venue')->first()->id,
                'schedule_id' => $schedules->random(),
            ],
            [
                'name' => 'Club de Leones de Santa Tecla',
                'quantity' => 1,
                'price' => 2800,
                'description' => 'Community-oriented venue with spacious halls and outdoor areas.',
                'is_service' => true,
                'address' => '789 Calle León, Santa Tecla',
                'experience' => 'Known for hosting charity galas and community events.',
                'img' => 'VENUES/ClubdeLeones.png',
                'user_id' => $users->random(),
                'category_id' => Category::where('name', 'Venue')->first()->id,
                'schedule_id' => $schedules->random(),
            ],
            [
                'name' => 'Sweet Magnolias Garden',
                'quantity' => 1,
                'price' => 3500,
                'description' => 'Charming garden venue with blooming magnolias and elegant pavilions.',
                'is_service' => true,
                'address' => '321 Magnolia Lane, Floral Park',
                'experience' => 'Perfect for romantic garden weddings and spring celebrations.',
                'img' => 'VENUES/SweetMagnolias.png',
                'user_id' => $users->random(),
                'category_id' => Category::where('name', 'Venue')->first()->id,
                'schedule_id' => $schedules->random(),
            ],
        ];

        Supply::factory(count($supplies))->sequence(fn ($sqn) => $supplies[$sqn->index])->create();

    }
}
