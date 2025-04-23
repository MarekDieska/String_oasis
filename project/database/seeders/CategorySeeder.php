<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::create([
            'name' => 'Gitary',
            'url' => 'git.svg'
        ]);
        Category::create([
            'name' => 'Basgitary',
            'url' => 'bass.svg'
        ]);
        Category::create([
            'name' => 'Iné struny',
            'url' => 'banjo.svg'
        ]);
        Category::create([
            'name' => 'Kombá',
            'url' => 'kombo.svg'
        ]);
        Category::create([
            'name' => 'Klavíre',
            'url' => 'piano.svg'
        ]);
        Category::create([
            'name' => 'Platne',
            'url' => 'platna.svg'
        ]);
    }
}
