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
        if (!$categoryGitary) {
            dd('Category "Gitary" not found!');
        }
        $categoryBasgitary = Category::where('name', 'Basgitary')->first();
        if (!$categoryGitary) {
            dd('Category "Basy" not found!');
        }
        $categoryIne = Category::where('name', 'Iné struny')->first();
        if (!$categoryGitary) {
            dd('Category "ine" not found!');
        }

        Subcategory::create([
            'name' => 'elektrické',
            'category_id' => $categoryGitary->id
        ]);
        Subcategory::create([
            'name' => 'elektro-akustické',
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
            'name' => 'detské',
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
    }
}
