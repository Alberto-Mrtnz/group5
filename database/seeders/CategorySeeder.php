<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $category = [
            'Local',
            'Decoración',
            'Banquetes',
            'Aparatos Audiovisuales',
            'Mobiliario',
            'Animación',
            'Servicios'
        ];

        Category::factory(count($category))->sequence(fn ($sqn) => ['name' => $category[$sqn->index]])->create();
    }
}
