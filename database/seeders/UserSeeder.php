<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = [
            [
                'name' => 'Juan Perez',
                'phone' => '2393-2487',
                'email' => 'juan34@gmail.com',
                'password' => '12345678',
                'is_provider' => '1',
            ],
            [
                'name' => 'Karla Gomez',
                'phone' => '2974-0248',
                'email' => 'Karlas98@gmail.com',
                'password' => '12345678',
                'is_provider' => '0',
            ],
            [
                'name' => 'Rigoberto Ramirez',
                'phone' => '7821-3653',
                'email' => 'RigoAlfonso@gmail.com',
                'password' => '12345678',
                'is_provider' => '1',
            ],
            [
                'name' => 'Maria Hernandez',
                'phone' => '6248-7352',
                'email' => 'mariahernandez@example.com',
                'password' => '12345678',
                'is_provider' => '0',
            ],
            [
                'name' => 'Jose Garcia',
                'phone' => '4312-9876',
                'email' => 'josegarcia@example.com',
                'password' => '12345678',
                'is_provider' => '1',
            ],
        ];

        User::factory()->create([
            'email' => 'seller@example.com',
            'is_provider' => '1',
        ]);

        User::factory()->create([
            'email' => 'client@example.com',
            'is_provider' => '0',
        ]);

        User::factory(count($users))->sequence( fn ($sqn) => $users[$sqn->index])->create();
    }
}
