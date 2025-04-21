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
        Category::create(['name' => 'Gitary']);
        Category::create(['name' => 'Basgitary']);
        Category::create(['name' => 'Iné struny']);
        Category::create(['name' => 'Kombá']);
        Category::create(['name' => 'Príslušenstvo']);
        Category::create(['name' => 'Platne']);
    }
}
