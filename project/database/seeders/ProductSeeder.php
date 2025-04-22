<?php

namespace Database\Seeders;

use App\Models\Product;
use App\Models\Subcategory;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    public function run(): void
    {
        $subE = Subcategory::where('name', 'elektrické')->first();

        Product::create([
            'subcategory_id' => $subE->id,
            'name' => 'Gibson SG Standard Electric Guitar Heritage Cherry',
            'brand' => 'Gibson',
            'price' => 1799,
            'discount' => 0,
            'stock' => 1,
            'stars' => 5
        ]);

        Product::create([
            'subcategory_id' => $subE->id,
            'name' => 'Fender Squier Affinity Series Stratocaster Lake Placid Blue',
            'brand' => 'Fender',
            'price' => 233,
            'discount' => 0,
            'stock' => 1,
            'stars' => 3
        ]);

        Product::create([
            'subcategory_id' => $subE->id,
            'name' => 'Vintage 1963 Gibson Barney Kessel Sunburst Finish',
            'brand' => 'Gibson',
            'price' => 4999,
            'discount' => 0,
            'stock' => 1,
            'stars' => 5
        ]);

        Product::create([
            'subcategory_id' => $subE->id,
            'name' => 'Fender American Professional Jazzmaster Silverburst',
            'brand' => 'Fender',
            'price' => 1899,
            'discount' => 0,
            'stock' => 1,
            'stars' => 4
        ]);

        Product::create([
            'subcategory_id' => $subE->id,
            'name' => 'Neal Moser Guitar',
            'brand' => 'Gibson',
            'price' => 650,
            'discount' => 0,
            'stock' => 1,
            'stars' => 5
        ]);

        Product::create([
            'subcategory_id' => $subE->id,
            'name' => 'James Tyler Classic Burning Water',
            'brand' => 'Fender',
            'price' => 930,
            'discount' => 0,
            'stock' => 1,
            'stars' => 5
        ]);
    }
}
