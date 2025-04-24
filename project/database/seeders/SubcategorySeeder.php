<?php

namespace Database\Seeders;

use App\Models\Subcategory;
use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SubcategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categoryGitary = Category::where('name', 'Gitary')->first();
        $categoryBasgitary = Category::where('name', 'Basgitary')->first();
        $categoryIne = Category::where('name', 'Iné struny')->first();

        Subcategory::create([
            'name' => 'elektrické',
            'category_id' => $categoryGitary->id
        ]);
        Subcategory::create([
            'name' => 'akustické',
            'category_id' => $categoryGitary->id
        ]);
        Subcategory::create([
            'name' => 'klasické',
            'category_id' => $categoryGitary->id
        ]);

        Subcategory::create([
            'name' => '4 strunové',
            'category_id' => $categoryBasgitary->id
        ]);
        Subcategory::create([
            'name' => '5 strunové',
            'category_id' => $categoryBasgitary->id
        ]);
        Subcategory::create([
            'name' => 'ukulele',
            'category_id' => $categoryIne->id
        ]);
        Subcategory::create([
            'name' => 'banjo',
            'category_id' => $categoryIne->id
        ]);
        Subcategory::create([
            'name' => 'mandolína',
            'category_id' => $categoryIne->id
        ]);
        Subcategory::create([
            'name' => 'kora',
            'category_id' => $categoryIne->id
        ]);

        Subcategory::create([
            'name' => NULL,
            'category_id' => Category::where('name', 'Kombá')->first()->id
        ]);
        Subcategory::create([
            'name' => NULL,
            'category_id' => Category::where('name', 'Klavíre')->first()->id
        ]);
        Subcategory::create([
            'name' => NULL,
            'category_id' => Category::where('name', 'Platne')->first()->id
        ]);

    }
}
