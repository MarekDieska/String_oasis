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

        $sub4 = Subcategory::where('name', '4 strunové')->first();

        Product::create([
            'subcategory_id' => $sub4->id,
            'name' => 'Ibanez sr300eb',
            'brand' => 'Ibanez',
            'price' => 350.51,
            'discount' => 0,
            'stock' => 1,
            'stars' => 5
        ]);

        Product::create([
            'subcategory_id' => $sub4->id,
            'name' => 'Ibanez Sr300e-cub',
            'brand' => 'Ibanez',
            'price' => 820.40,
            'discount' => 0,
            'stock' => 1,
            'stars' => 4
        ]);

        Product::create([
            'subcategory_id' => $sub4->id,
            'name' => 'ibanez gsrm20bwk mikro',
            'brand' => 'Ibanez',
            'price' => 240.00,
            'discount' => 0,
            'stock' => 1,
            'stars' => 5
        ]);

        Product::create([
            'subcategory_id' => $sub4->id,
            'name' => 'Ibanez SR300EB',
            'brand' => 'Ibanez',
            'price' => 360.82,
            'discount' => 0,
            'stock' => 1,
            'stars' => 3
        ]);

        Product::create([
            'subcategory_id' => $sub4->id,
            'name' => 'Ibanez SR180 Bass Guitar',
            'brand' => 'Ibanez',
            'price' => 1800.20,
            'discount' => 0,
            'stock' => 1,
            'stars' => 5
        ]);

        Product::create([
            'subcategory_id' => $sub4->id,
            'name' => 'Yamaha TRBX174EW',
            'brand' => 'Yamaha',
            'price' => 212.21,
            'discount' => 0,
            'stock' => 1,
            'stars' => 4
        ]);

        Product::create([
            'subcategory_id' => $sub4->id,
            'name' => 'Yamaha TRBX174EW',
            'brand' => 'Yamaha',
            'price' => 122.22,
            'discount' => 0,
            'stock' => 1,
            'stars' => 3
        ]);

        Product::create([
            'subcategory_id' => $sub4->id,
            'name' => 'Yamaha BB434 Bass ',
            'brand' => 'Yamaha',
            'price' => 821.31,
            'discount' => 0,
            'stock' => 1,
            'stars' => 5
        ]);

        Product::create([
            'subcategory_id' => $sub4->id,
            'name' => 'Yamaha TRBX174',
            'brand' => 'Yamaha',
            'price' => 110.21,
            'discount' => 0,
            'stock' => 1,
            'stars' => 5
        ]);

        Product::create(['subcategory_id' => $sub4->id, 'name' => 'Yamaha StageBass 336', 'brand' => 'Yamaha', 'price' => 1500.80, 'discount' => 0, 'stock' => 1, 'stars' => 3]);
        Product::create(['subcategory_id' => $sub4->id, 'name' => 'Ibanez SoundGear 109', 'brand' => 'Ibanez', 'price' => 2016.36, 'discount' => 0, 'stock' => 1, 'stars' => 4]);
        Product::create(['subcategory_id' => $sub4->id, 'name' => 'Yamaha TRBX 494', 'brand' => 'Yamaha', 'price' => 918.55, 'discount' => 0, 'stock' => 1, 'stars' => 5]);
        Product::create(['subcategory_id' => $sub4->id, 'name' => 'Ibanez SoundGear 359', 'brand' => 'Ibanez', 'price' => 1773.34, 'discount' => 0, 'stock' => 1, 'stars' => 4]);
        Product::create(['subcategory_id' => $sub4->id, 'name' => 'Yamaha TRBX 961', 'brand' => 'Yamaha', 'price' => 1224.76, 'discount' => 0, 'stock' => 1, 'stars' => 4]);
        Product::create(['subcategory_id' => $sub4->id, 'name' => 'Yamaha BBXtreme 411', 'brand' => 'Yamaha', 'price' => 976.65, 'discount' => 0, 'stock' => 1, 'stars' => 3]);
        Product::create(['subcategory_id' => $sub4->id, 'name' => 'Yamaha TRBX 333', 'brand' => 'Yamaha', 'price' => 443.87, 'discount' => 0, 'stock' => 1, 'stars' => 2]);
        Product::create(['subcategory_id' => $sub4->id, 'name' => 'Fender RoadWorn 584', 'brand' => 'Fender', 'price' => 892.25, 'discount' => 0, 'stock' => 1, 'stars' => 5]);
        Product::create(['subcategory_id' => $sub4->id, 'name' => 'Ibanez ArtCore 815', 'brand' => 'Ibanez', 'price' => 1492.09, 'discount' => 0, 'stock' => 1, 'stars' => 3]);
        Product::create(['subcategory_id' => $sub4->id, 'name' => 'Ibanez TerraBass 993', 'brand' => 'Ibanez', 'price' => 1060.19, 'discount' => 0, 'stock' => 1, 'stars' => 5]);
        Product::create(['subcategory_id' => $sub4->id, 'name' => 'Gibson FireBass 855', 'brand' => 'Gibson', 'price' => 560.70, 'discount' => 0, 'stock' => 1, 'stars' => 4]);
        Product::create(['subcategory_id' => $sub4->id, 'name' => 'Fender RoadWorn 776', 'brand' => 'Fender', 'price' => 1486.24, 'discount' => 0, 'stock' => 1, 'stars' => 5]);
        Product::create(['subcategory_id' => $sub4->id, 'name' => 'Yamaha TRBX 986', 'brand' => 'Yamaha', 'price' => 1595.56, 'discount' => 0, 'stock' => 1, 'stars' => 3]);
        Product::create(['subcategory_id' => $sub4->id, 'name' => 'Fender JazzPro 623', 'brand' => 'Fender', 'price' => 609.19, 'discount' => 0, 'stock' => 1, 'stars' => 1]);
        Product::create(['subcategory_id' => $sub4->id, 'name' => 'Gibson Thunderbird 162', 'brand' => 'Gibson', 'price' => 100.00, 'discount' => 0, 'stock' => 1, 'stars' => 5]);
        Product::create(['subcategory_id' => $sub4->id, 'name' => 'Yamaha PulseCore 895', 'brand' => 'Yamaha', 'price' => 932.44, 'discount' => 0, 'stock' => 1, 'stars' => 4]);
        Product::create(['subcategory_id' => $sub4->id, 'name' => 'Ibanez SoundGear 390', 'brand' => 'Ibanez', 'price' => 1250.26, 'discount' => 0, 'stock' => 1, 'stars' => 1]);
        Product::create(['subcategory_id' => $sub4->id, 'name' => 'Yamaha StageBass 578', 'brand' => 'Yamaha', 'price' => 1129.75, 'discount' => 0, 'stock' => 1, 'stars' => 3]);
        Product::create(['subcategory_id' => $sub4->id, 'name' => 'Yamaha BBXtreme 813', 'brand' => 'Yamaha', 'price' => 1454.36, 'discount' => 0, 'stock' => 1, 'stars' => 2]);
        Product::create(['subcategory_id' => $sub4->id, 'name' => 'Yamaha BBXtreme 104', 'brand' => 'Yamaha', 'price' => 303.60, 'discount' => 0, 'stock' => 1, 'stars' => 4]);
        Product::create(['subcategory_id' => $sub4->id, 'name' => 'Gibson EB 690', 'brand' => 'Gibson', 'price' => 1223.34, 'discount' => 0, 'stock' => 1, 'stars' => 5]);
        Product::create(['subcategory_id' => $sub4->id, 'name' => 'Squier RetroTone 239', 'brand' => 'Squier', 'price' => 1104.87, 'discount' => 0, 'stock' => 1, 'stars' => 3]);
        Product::create(['subcategory_id' => $sub4->id, 'name' => 'Gibson Thunderbird 459', 'brand' => 'Gibson', 'price' => 1042.61, 'discount' => 0, 'stock' => 1, 'stars' => 5]);
        Product::create(['subcategory_id' => $sub4->id, 'name' => 'Gibson GrooveLuxe 482', 'brand' => 'Gibson', 'price' => 100.00, 'discount' => 0, 'stock' => 1, 'stars' => 3]);
        Product::create(['subcategory_id' => $sub4->id, 'name' => 'Fender RoadWorn 450', 'brand' => 'Fender', 'price' => 1174.93, 'discount' => 0, 'stock' => 1, 'stars' => 1]);
        Product::create(['subcategory_id' => $sub4->id, 'name' => 'Gibson EB 252', 'brand' => 'Gibson', 'price' => 1392.93, 'discount' => 0, 'stock' => 1, 'stars' => 1]);
        Product::create(['subcategory_id' => $sub4->id, 'name' => 'Yamaha BBXtreme 373', 'brand' => 'Yamaha', 'price' => 429.05, 'discount' => 0, 'stock' => 1, 'stars' => 4]);
        Product::create(['subcategory_id' => $sub4->id, 'name' => 'Squier RetroTone 683', 'brand' => 'Squier', 'price' => 842.68, 'discount' => 0, 'stock' => 1, 'stars' => 3]);
        Product::create(['subcategory_id' => $sub4->id, 'name' => 'Squier ClassicVibe 140', 'brand' => 'Squier', 'price' => 852.52, 'discount' => 0, 'stock' => 1, 'stars' => 5]);
        Product::create(['subcategory_id' => $sub4->id, 'name' => 'Yamaha PulseCore 642', 'brand' => 'Yamaha', 'price' => 260.31, 'discount' => 0, 'stock' => 1, 'stars' => 5]);

    }
}
