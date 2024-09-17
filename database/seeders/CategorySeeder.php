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
            'Veniu',
            'Decoration',
            'Catering',
            'Audiovisual equipment',
            'Furniture',
            'Animation',
            'Services'
        ];

        Category::factory(count($category))->sequence(fn ($sqn) => ['name' => $category[$sqn->index]])->create();
    }
}
