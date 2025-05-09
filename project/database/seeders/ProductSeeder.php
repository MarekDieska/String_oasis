<?php

namespace Database\Seeders;

use App\Models\Photo;
use App\Models\Product;
use App\Models\Subcategory;
use App\Models\Category;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    public function run(): void
    {
        $subE = Subcategory::where('name', 'elektrické')->first();Product::create(['subcategory_id' => $subE->id, 'name' => 'Gibson SG Standard Electric Guitar Heritage Cherry', 'brand' => 'Gibson', 'price' => 1799, 'discount' => 0, 'stock' => 1, 'stars' => 5, 'image' => 'gi1.webp',]);
        Product::create(['subcategory_id' => $subE->id, 'name' => 'Fender Squier Affinity Series Stratocaster Lake Placid Blue', 'brand' => 'Fender', 'price' => 233, 'discount' => 0, 'stock' => 1, 'stars' => 3, 'image' => 'g2.webp',]);
        Product::create(['subcategory_id' => $subE->id, 'name' => 'Vintage 1963 Gibson Barney Kessel Sunburst Finish', 'brand' => 'Gibson', 'price' => 4999, 'discount' => 0, 'stock' => 1, 'stars' => 5, 'image' => 'g3.webp',]);
        Product::create(['subcategory_id' => $subE->id, 'name' => 'Fender American Professional Jazzmaster Silverburst', 'brand' => 'Fender', 'price' => 1899, 'discount' => 0, 'stock' => 1, 'stars' => 4, 'image' => 'g4.webp',]);
        Product::create(['subcategory_id' => $subE->id, 'name' => 'Neal Moser Guitar', 'brand' => 'Gibson', 'price' => 650, 'discount' => 0, 'stock' => 1, 'stars' => 5, 'image' => 'g5.webp',]);
        Product::create(['subcategory_id' => $subE->id, 'name' => 'James Tyler Classic Burning Water', 'brand' => 'Fender', 'price' => 930, 'discount' => 0, 'stock' => 1, 'stars' => 5, 'image' => 'g6.webp',]);
        Product::create(['subcategory_id' => $subE->id, 'name' => 'Fender Vibe Series Custom', 'brand' => 'Fender', 'price' => 1099, 'discount' => 0, 'stock' => 1, 'stars' => 4, 'image' => 'g2.webp']);
        Product::create(['subcategory_id' => $subE->id, 'name' => 'Gibson Heritage Supreme Burst', 'brand' => 'Gibson', 'price' => 3299, 'discount' => 0, 'stock' => 1, 'stars' => 5, 'image' => 'g3.webp']);
        Product::create(['subcategory_id' => $subE->id, 'name' => 'Ibanez RG Prestige Flame Top', 'brand' => 'Ibanez', 'price' => 879, 'discount' => 0, 'stock' => 1, 'stars' => 4, 'image' => 'g4.webp']);
        Product::create(['subcategory_id' => $subE->id, 'name' => 'Pasadena Modern Rocker', 'brand' => 'Pasadena', 'price' => 1340, 'discount' => 0, 'stock' => 1, 'stars' => 3, 'image' => 'g5.webp']);
        Product::create(['subcategory_id' => $subE->id, 'name' => 'Fender Shadow Strat', 'brand' => 'Fender', 'price' => 1520, 'discount' => 0, 'stock' => 1, 'stars' => 5, 'image' => 'g6.webp']);
        Product::create(['subcategory_id' => $subE->id, 'name' => 'Gibson Les Paul Voodoo', 'brand' => 'Gibson', 'price' => 1890, 'discount' => 0, 'stock' => 1, 'stars' => 5, 'image' => 'g2.webp']);
        Product::create(['subcategory_id' => $subE->id, 'name' => 'Ibanez Talman Classic 300', 'brand' => 'Ibanez', 'price' => 970, 'discount' => 0, 'stock' => 1, 'stars' => 4, 'image' => 'g3.webp']);
        Product::create(['subcategory_id' => $subE->id, 'name' => 'Pasadena Deluxe 66', 'brand' => 'Pasadena', 'price' => 530, 'discount' => 0, 'stock' => 1, 'stars' => 3, 'image' => 'g4.webp']);
        Product::create(['subcategory_id' => $subE->id, 'name' => 'Fender Jazz Fusion Pro', 'brand' => 'Fender', 'price' => 2180, 'discount' => 0, 'stock' => 1, 'stars' => 5, 'image' => 'g5.webp']);
        Product::create(['subcategory_id' => $subE->id, 'name' => 'Gibson Firebird Custom 70s', 'brand' => 'Gibson', 'price' => 4100, 'discount' => 0, 'stock' => 1, 'stars' => 5, 'image' => 'g6.webp']);
        Product::create(['subcategory_id' => $subE->id, 'name' => 'Ibanez AeroBlaze 100', 'brand' => 'Ibanez', 'price' => 1120, 'discount' => 0, 'stock' => 1, 'stars' => 4, 'image' => 'g2.webp']);
        Product::create(['subcategory_id' => $subE->id, 'name' => 'Pasadena RoadRunner Elite', 'brand' => 'Pasadena', 'price' => 870, 'discount' => 0, 'stock' => 1, 'stars' => 4, 'image' => 'g3.webp']);
        Product::create(['subcategory_id' => $subE->id, 'name' => 'Fender Sonic Edge', 'brand' => 'Fender', 'price' => 620, 'discount' => 0, 'stock' => 1, 'stars' => 3, 'image' => 'g4.webp']);
        Product::create(['subcategory_id' => $subE->id, 'name' => 'Gibson Custom Midnight Sun', 'brand' => 'Gibson', 'price' => 2750, 'discount' => 0, 'stock' => 1, 'stars' => 5, 'image' => 'g5.webp']);
        Product::create(['subcategory_id' => $subE->id, 'name' => 'Ibanez Studio Pro Flame', 'brand' => 'Ibanez', 'price' => 1410, 'discount' => 0, 'stock' => 1, 'stars' => 4, 'image' => 'g6.webp']);
        Product::create(['subcategory_id' => $subE->id, 'name' => 'Pasadena Retro Classic', 'brand' => 'Pasadena', 'price' => 380, 'discount' => 0, 'stock' => 1, 'stars' => 3, 'image' => 'g2.webp']);
        Product::create(['subcategory_id' => $subE->id, 'name' => 'Fender Mirage Jet', 'brand' => 'Fender', 'price' => 960, 'discount' => 0, 'stock' => 1, 'stars' => 4, 'image' => 'g3.webp']);
        Product::create(['subcategory_id' => $subE->id, 'name' => 'Gibson Legacy Burst 59 Signed by famous MAREK', 'brand' => 'Gibson', 'price' => 4998, 'discount' => 0, 'stock' => 1, 'stars' => 5, 'image' => 'g4.webp']);
        Product::create(['subcategory_id' => $subE->id, 'name' => 'Ibanez Extreme Curve', 'brand' => 'Ibanez', 'price' => 810, 'discount' => 0, 'stock' => 1, 'stars' => 4, 'image' => 'g5.webp']);
        Product::create(['subcategory_id' => $subE->id, 'name' => 'Pasadena Fire Vintage', 'brand' => 'Pasadena', 'price' => 1190, 'discount' => 0, 'stock' => 1, 'stars' => 4, 'image' => 'g6.webp']);
        Product::create(['subcategory_id' => $subE->id, 'name' => 'Fender Roadcaster Elite', 'brand' => 'Fender', 'price' => 1580, 'discount' => 0, 'stock' => 1, 'stars' => 5, 'image' => 'g2.webp']);
        Product::create(['subcategory_id' => $subE->id, 'name' => 'Gibson Fireburst Limited', 'brand' => 'Gibson', 'price' => 1950, 'discount' => 0, 'stock' => 1, 'stars' => 4, 'image' => 'g3.webp']);
        Product::create(['subcategory_id' => $subE->id, 'name' => 'Ibanez SilverEdge 450', 'brand' => 'Ibanez', 'price' => 1450, 'discount' => 0, 'stock' => 1, 'stars' => 4, 'image' => 'g4.webp']);
        Product::create(['subcategory_id' => $subE->id, 'name' => 'Pasadena Supernova R2', 'brand' => 'Pasadena', 'price' => 700, 'discount' => 0, 'stock' => 1, 'stars' => 3, 'image' => 'g5.webp']);
        Product::create(['subcategory_id' => $subE->id, 'name' => 'Fender Coastal Flame', 'brand' => 'Fender', 'price' => 880, 'discount' => 0, 'stock' => 1, 'stars' => 4, 'image' => 'g6.webp']);
        Product::create(['subcategory_id' => $subE->id, 'name' => 'Gibson Raven Custom', 'brand' => 'Gibson', 'price' => 2300, 'discount' => 0, 'stock' => 1, 'stars' => 5, 'image' => 'g2.webp']);
        Product::create(['subcategory_id' => $subE->id, 'name' => 'Ibanez Blaze 540 XT', 'brand' => 'Ibanez', 'price' => 920, 'discount' => 0, 'stock' => 1, 'stars' => 4, 'image' => 'g3.webp']);
        Product::create(['subcategory_id' => $subE->id, 'name' => 'Pasadena Horizon 3', 'brand' => 'Pasadena', 'price' => 360, 'discount' => 0, 'stock' => 1, 'stars' => 2, 'image' => 'g4.webp']);
        Product::create(['subcategory_id' => $subE->id, 'name' => 'Fender Blues Series Supreme', 'brand' => 'Fender', 'price' => 1120, 'discount' => 0, 'stock' => 1, 'stars' => 5, 'image' => 'g5.webp']);
        Product::create(['subcategory_id' => $subE->id, 'name' => 'Gibson Angelic Flame 88', 'brand' => 'Gibson', 'price' => 2780, 'discount' => 0, 'stock' => 1, 'stars' => 5, 'image' => 'g6.webp']);

        $sub4 = Subcategory::where('name', '4 strunové')->first();
        Product::create(['subcategory_id' => $sub4->id, 'name' => 'Ibanez sr300eb', 'brand' => 'Ibanez', 'price' => 350.51, 'discount' => 0, 'stock' => 1, 'stars' => 5, 'image' => 'b1.webp']);
        Product::create(['subcategory_id' => $sub4->id, 'name' => 'Ibanez Sr300e-cub', 'brand' => 'Ibanez', 'price' => 820.40, 'discount' => 0, 'stock' => 1, 'stars' => 4, 'image' => 'b2.webp']);
        Product::create(['subcategory_id' => $sub4->id, 'name' => 'ibanez gsrm20bwk mikro', 'brand' => 'Ibanez', 'price' => 240.00, 'discount' => 0, 'stock' => 1, 'stars' => 5, 'image' => 'b3.webp']);
        Product::create(['subcategory_id' => $sub4->id, 'name' => 'Ibanez SR300EB', 'brand' => 'Ibanez', 'price' => 360.82, 'discount' => 0, 'stock' => 1, 'stars' => 3, 'image' => 'b4.webp']);
        Product::create(['subcategory_id' => $sub4->id, 'name' => 'Ibanez SR180 Bass Guitar', 'brand' => 'Ibanez', 'price' => 1800.20, 'discount' => 0, 'stock' => 1, 'stars' => 5, 'image' => 'b5.webp']);
        Product::create(['subcategory_id' => $sub4->id, 'name' => 'Yamaha TRBX174EW', 'brand' => 'Yamaha', 'price' => 212.21, 'discount' => 0, 'stock' => 1, 'stars' => 4, 'image' => 'b6.webp']);
        Product::create(['subcategory_id' => $sub4->id, 'name' => 'Yamaha TRBX174EW', 'brand' => 'Yamaha', 'price' => 122.22, 'discount' => 0, 'stock' => 1, 'stars' => 3, 'image' => 'b7.webp']);
        Product::create(['subcategory_id' => $sub4->id, 'name' => 'Yamaha BB434 Bass ', 'brand' => 'Yamaha', 'price' => 821.31, 'discount' => 0, 'stock' => 1, 'stars' => 5, 'image' => 'b8.webp']);
        Product::create(['subcategory_id' => $sub4->id, 'name' => 'Yamaha StageBass 336', 'brand' => 'Yamaha', 'price' => 1500.80, 'discount' => 0, 'stock' => 1, 'stars' => 3, 'image' => 'b1.webp']);
        Product::create(['subcategory_id' => $sub4->id, 'name' => 'Ibanez SoundGear 109', 'brand' => 'Ibanez', 'price' => 2016.36, 'discount' => 0, 'stock' => 1, 'stars' => 4, 'image' => 'b2.webp']);
        Product::create(['subcategory_id' => $sub4->id, 'name' => 'Yamaha TRBX 494', 'brand' => 'Yamaha', 'price' => 918.55, 'discount' => 0, 'stock' => 1, 'stars' => 5, 'image' => 'b3.webp']);
        Product::create(['subcategory_id' => $sub4->id, 'name' => 'Ibanez SoundGear 359', 'brand' => 'Ibanez', 'price' => 1773.34, 'discount' => 0, 'stock' => 1, 'stars' => 4, 'image' => 'b4.webp']);
        Product::create(['subcategory_id' => $sub4->id, 'name' => 'Yamaha TRBX 961', 'brand' => 'Yamaha', 'price' => 1224.76, 'discount' => 0, 'stock' => 1, 'stars' => 4, 'image' => 'b5.webp']);
        Product::create(['subcategory_id' => $sub4->id, 'name' => 'Yamaha BBXtreme 411', 'brand' => 'Yamaha', 'price' => 976.65, 'discount' => 0, 'stock' => 1, 'stars' => 3, 'image' => 'b6.webp']);
        Product::create(['subcategory_id' => $sub4->id, 'name' => 'Yamaha TRBX 333', 'brand' => 'Yamaha', 'price' => 443.87, 'discount' => 0, 'stock' => 1, 'stars' => 2, 'image' => 'b7.webp']);
        Product::create(['subcategory_id' => $sub4->id, 'name' => 'Fender RoadWorn 584', 'brand' => 'Fender', 'price' => 892.25, 'discount' => 0, 'stock' => 1, 'stars' => 5, 'image' => 'b8.webp']);
        Product::create(['subcategory_id' => $sub4->id, 'name' => 'Ibanez TerraBass 993', 'brand' => 'Ibanez', 'price' => 1060.19, 'discount' => 0, 'stock' => 1, 'stars' => 5, 'image' => 'b1.webp']);
        Product::create(['subcategory_id' => $sub4->id, 'name' => 'Gibson FireBass 855', 'brand' => 'Gibson', 'price' => 560.70, 'discount' => 0, 'stock' => 1, 'stars' => 4, 'image' => 'b2.webp']);
        Product::create(['subcategory_id' => $sub4->id, 'name' => 'Fender RoadWorn 776', 'brand' => 'Fender', 'price' => 1486.24, 'discount' => 0, 'stock' => 1, 'stars' => 5, 'image' => 'b3.webp']);
        Product::create(['subcategory_id' => $sub4->id, 'name' => 'Yamaha TRBX 986', 'brand' => 'Yamaha', 'price' => 1595.56, 'discount' => 0, 'stock' => 1, 'stars' => 3, 'image' => 'b4.webp']);
        Product::create(['subcategory_id' => $sub4->id, 'name' => 'Fender JazzPro 623', 'brand' => 'Fender', 'price' => 609.19, 'discount' => 0, 'stock' => 1, 'stars' => 1, 'image' => 'b5.webp']);
        Product::create(['subcategory_id' => $sub4->id, 'name' => 'Gibson Thunderbird 162', 'brand' => 'Gibson', 'price' => 100.00, 'discount' => 0, 'stock' => 1, 'stars' => 5, 'image' => 'b6.webp']);
        Product::create(['subcategory_id' => $sub4->id, 'name' => 'Yamaha PulseCore 895', 'brand' => 'Yamaha', 'price' => 932.44, 'discount' => 0, 'stock' => 1, 'stars' => 4, 'image' => 'b7.webp']);
        Product::create(['subcategory_id' => $sub4->id, 'name' => 'Ibanez SoundGear 390', 'brand' => 'Ibanez', 'price' => 1250.26, 'discount' => 0, 'stock' => 1, 'stars' => 1, 'image' => 'b8.webp']);
        Product::create(['subcategory_id' => $sub4->id, 'name' => 'Yamaha BBXtreme 813', 'brand' => 'Yamaha', 'price' => 1454.36, 'discount' => 0, 'stock' => 1, 'stars' => 2, 'image' => 'b1.webp']);
        Product::create(['subcategory_id' => $sub4->id, 'name' => 'Yamaha BBXtreme 104', 'brand' => 'Yamaha', 'price' => 303.60, 'discount' => 0, 'stock' => 1, 'stars' => 4, 'image' => 'b2.webp']);
        Product::create(['subcategory_id' => $sub4->id, 'name' => 'Gibson EB 690', 'brand' => 'Gibson', 'price' => 1223.34, 'discount' => 0, 'stock' => 1, 'stars' => 5, 'image' => 'b3.webp']);
        Product::create(['subcategory_id' => $sub4->id, 'name' => 'Squier RetroTone 239', 'brand' => 'Squier', 'price' => 1104.87, 'discount' => 0, 'stock' => 1, 'stars' => 3, 'image' => 'b4.webp']);
        Product::create(['subcategory_id' => $sub4->id, 'name' => 'Gibson Thunderbird 459', 'brand' => 'Gibson', 'price' => 1042.61, 'discount' => 0, 'stock' => 1, 'stars' => 5, 'image' => 'b5.webp']);
        Product::create(['subcategory_id' => $sub4->id, 'name' => 'Gibson GrooveLuxe 482', 'brand' => 'Gibson', 'price' => 100.00, 'discount' => 0, 'stock' => 1, 'stars' => 3, 'image' => 'b6.webp']);
        Product::create(['subcategory_id' => $sub4->id, 'name' => 'Fender RoadWorn 450', 'brand' => 'Fender', 'price' => 1174.93, 'discount' => 0, 'stock' => 1, 'stars' => 1, 'image' => 'b7.webp']);
        Product::create(['subcategory_id' => $sub4->id, 'name' => 'Gibson EB 252', 'brand' => 'Gibson', 'price' => 1392.93, 'discount' => 0, 'stock' => 1, 'stars' => 1, 'image' => 'b8.webp']);
        Product::create(['subcategory_id' => $sub4->id, 'name' => 'Squier RetroTone 683', 'brand' => 'Squier', 'price' => 842.68, 'discount' => 0, 'stock' => 1, 'stars' => 3, 'image' => 'b1.webp']);
        Product::create(['subcategory_id' => $sub4->id, 'name' => 'Squier ClassicVibe 140', 'brand' => 'Squier', 'price' => 852.52, 'discount' => 0, 'stock' => 1, 'stars' => 5, 'image' => 'b2.webp']);
        Product::create(['subcategory_id' => $sub4->id, 'name' => 'Yamaha PulseCore 642', 'brand' => 'Yamaha', 'price' => 260.31, 'discount' => 0, 'stock' => 1, 'stars' => 5, 'image' => 'b3.webp']);
        Product::create(['subcategory_id' => $sub4->id, 'name' => 'Yamaha TRBX174', 'brand' => 'Yamaha', 'price' => 110.21, 'discount' => 0, 'stock' => 1, 'stars' => 5, 'image' => 'b4.webp']);
        Product::create(['subcategory_id' => $sub4->id, 'name' => 'Ibanez ArtCore 815', 'brand' => 'Ibanez', 'price' => 1492.09, 'discount' => 0, 'stock' => 1, 'stars' => 3, 'image' => 'b5.webp']);
        Product::create(['subcategory_id' => $sub4->id, 'name' => 'Yamaha StageBass 578', 'brand' => 'Yamaha', 'price' => 1129.75, 'discount' => 0, 'stock' => 1, 'stars' => 3, 'image' => 'b6.webp']);
        Product::create(['subcategory_id' => $sub4->id, 'name' => 'Yamaha BBXtreme 373', 'brand' => 'Yamaha', 'price' => 429.05, 'discount' => 0, 'stock' => 1, 'stars' => 4, 'image' => 'b7.webp']);

        $sub5 = Subcategory::where('name', '5 strunové')->first();
        Product::create(['subcategory_id' => $sub5->id, 'name' => 'Ibanez SR505EB', 'brand' => 'Ibanez', 'price' => 450.00, 'discount' => 0, 'stock' => 1, 'stars' => 5, 'image' => 'b1.webp']);
        Product::create(['subcategory_id' => $sub5->id, 'name' => 'Ibanez SR705', 'brand' => 'Ibanez', 'price' => 920.50, 'discount' => 0, 'stock' => 1, 'stars' => 4, 'image' => 'b2.webp']);
        Product::create(['subcategory_id' => $sub5->id, 'name' => 'Ibanez GSRM25 Mikro Bass', 'brand' => 'Ibanez', 'price' => 290.00, 'discount' => 0, 'stock' => 1, 'stars' => 5, 'image' => 'b3.webp']);
        Product::create(['subcategory_id' => $sub5->id, 'name' => 'Ibanez SR505', 'brand' => 'Ibanez', 'price' => 489.00, 'discount' => 0, 'stock' => 1, 'stars' => 3, 'image' => 'b4.webp']);
        Product::create(['subcategory_id' => $sub5->id, 'name' => 'Ibanez SR705E Bass Guitar', 'brand' => 'Ibanez', 'price' => 2100.20, 'discount' => 0, 'stock' => 1, 'stars' => 5, 'image' => 'b5.webp']);
        Product::create(['subcategory_id' => $sub5->id, 'name' => 'Yamaha TRBX174EW-5', 'brand' => 'Yamaha', 'price' => 270.21, 'discount' => 0, 'stock' => 1, 'stars' => 4, 'image' => 'b6.webp']);
        Product::create(['subcategory_id' => $sub5->id, 'name' => 'Yamaha TRBX305', 'brand' => 'Yamaha', 'price' => 160.22, 'discount' => 0, 'stock' => 1, 'stars' => 3, 'image' => 'b7.webp']);
        Product::create(['subcategory_id' => $sub5->id, 'name' => 'Yamaha BB735A Bass Guitar', 'brand' => 'Yamaha', 'price' => 1050.31, 'discount' => 0, 'stock' => 1, 'stars' => 5, 'image' => 'b8.webp']);
        Product::create(['subcategory_id' => $sub5->id, 'name' => 'Yamaha StageBass 336-5', 'brand' => 'Yamaha', 'price' => 1600.80, 'discount' => 0, 'stock' => 1, 'stars' => 3, 'image' => 'b1.webp']);
        Product::create(['subcategory_id' => $sub5->id, 'name' => 'Ibanez SR370E', 'brand' => 'Ibanez', 'price' => 1980.36, 'discount' => 0, 'stock' => 1, 'stars' => 4, 'image' => 'b2.webp']);
        Product::create(['subcategory_id' => $sub5->id, 'name' => 'Yamaha TRBX 504', 'brand' => 'Yamaha', 'price' => 930.55, 'discount' => 0, 'stock' => 1, 'stars' => 5, 'image' => 'b3.webp']);
        Product::create(['subcategory_id' => $sub5->id, 'name' => 'Ibanez SR1005E', 'brand' => 'Ibanez', 'price' => 1800.70, 'discount' => 0, 'stock' => 1, 'stars' => 4, 'image' => 'b4.webp']);
        Product::create(['subcategory_id' => $sub5->id, 'name' => 'Yamaha TRBX 505', 'brand' => 'Yamaha', 'price' => 950.76, 'discount' => 0, 'stock' => 1, 'stars' => 4, 'image' => 'b5.webp']);
        Product::create(['subcategory_id' => $sub5->id, 'name' => 'Ibanez SR805', 'brand' => 'Ibanez', 'price' => 650.90, 'discount' => 0, 'stock' => 1, 'stars' => 4, 'image' => 'b1.webp']);
        Product::create(['subcategory_id' => $sub5->id, 'name' => 'Yamaha BB735A', 'brand' => 'Yamaha', 'price' => 850.00, 'discount' => 0, 'stock' => 1, 'stars' => 5, 'image' => 'b2.webp']);
        Product::create(['subcategory_id' => $sub5->id, 'name' => 'Ibanez SR505E', 'brand' => 'Ibanez', 'price' => 1020.25, 'discount' => 0, 'stock' => 1, 'stars' => 5, 'image' => 'b3.webp']);
        Product::create(['subcategory_id' => $sub5->id, 'name' => 'Yamaha TRBX 604', 'brand' => 'Yamaha', 'price' => 970.77, 'discount' => 0, 'stock' => 1, 'stars' => 4, 'image' => 'b4.webp']);
        Product::create(['subcategory_id' => $sub5->id, 'name' => 'Ibanez BTB845V', 'brand' => 'Ibanez', 'price' => 2000.40, 'discount' => 0, 'stock' => 1, 'stars' => 5, 'image' => 'b5.webp']);

        $subPlatne = Category::where('name', 'Platne')->first()->subcategories()->first();
        Product::create(['subcategory_id' => $subPlatne->id, 'name' => 'Celestial Harmonies - Ethereal Soundscapes', 'brand' => 'Starlight Records', 'price' => 35.99, 'discount' => 0, 'stock' => 1, 'stars' => 4, 'image' => 'p1.webp']);
        Product::create(['subcategory_id' => $subPlatne->id, 'name' => 'Urban Beatdown - Hip Hop Anthology', 'brand' => 'Groove Masters', 'price' => 29.95, 'discount' => 0, 'stock' => 1, 'stars' => 4, 'image' => 'p2.webp']);
        Product::create(['subcategory_id' => $subPlatne->id, 'name' => 'Indie Spectrum - Alternative Explorations', 'brand' => 'Sonic Sounds', 'price' => 24.50, 'discount' => 0, 'stock' => 1, 'stars' => 3, 'image' => 'p3.webp']);
        Product::create(['subcategory_id' => $subPlatne->id, 'name' => 'Acoustic Serenity - Unplugged Collection', 'brand' => 'Harmony House', 'price' => 42.00, 'discount' => 0, 'stock' => 1, 'stars' => 5, 'image' => 'p4.webp']);
        Product::create(['subcategory_id' => $subPlatne->id, 'name' => 'Funky Fusion - Jazz & Groove Revolution', 'brand' => 'Rhythm Nation', 'price' => 38.75, 'discount' => 0, 'stock' => 1, 'stars' => 4, 'image' => 'p5.webp']);
        Product::create(['subcategory_id' => $subPlatne->id, 'name' => 'Digital Frontier - Electronic Odyssey', 'brand' => 'Starlight Records', 'price' => 55.00, 'discount' => 0, 'stock' => 1, 'stars' => 4, 'image' => 'p6.webp']);
        Product::create(['subcategory_id' => $subPlatne->id, 'name' => 'Blues Legacy - Roots & Revival', 'brand' => 'Groove Masters', 'price' => 32.25, 'discount' => 0, 'stock' => 1, 'stars' => 4, 'image' => 'p7.webp']);
        Product::create(['subcategory_id' => $subPlatne->id, 'name' => 'World Rhythms - Global Soundscapes', 'brand' => 'Sonic Sounds', 'price' => 48.00, 'discount' => 0, 'stock' => 1, 'stars' => 5, 'image' => 'p8.webp']);
        Product::create(['subcategory_id' => $subPlatne->id, 'name' => 'Classic Harmony - Orchestral Masterpieces', 'brand' => 'Harmony House', 'price' => 62.00, 'discount' => 0, 'stock' => 1, 'stars' => 5, 'image' => 'p9.webp']);
        Product::create(['subcategory_id' => $subPlatne->id, 'name' => 'Power Ballads - The Rock Anthems', 'brand' => 'Rhythm Nation', 'price' => 28.00, 'discount' => 0, 'stock' => 1, 'stars' => 4, 'image' => 'p1.webp']);
        Product::create(['subcategory_id' => $subPlatne->id, 'name' => 'Mellow Vibes - Lo-Fi Beats', 'brand' => 'Starlight Records', 'price' => 22.00, 'discount' => 0, 'stock' => 1, 'stars' => 3, 'image' => 'p2.webp']);
        Product::create(['subcategory_id' => $subPlatne->id, 'name' => 'Country Roads - Americana Collection', 'brand' => 'Groove Masters', 'price' => 39.50, 'discount' => 0, 'stock' => 1, 'stars' => 4, 'image' => 'p3.webp']);
        Product::create(['subcategory_id' => $subPlatne->id, 'name' => 'Reggae Sunsplash - Island Grooves', 'brand' => 'Sonic Sounds', 'price' => 33.80, 'discount' => 0, 'stock' => 1, 'stars' => 4, 'image' => 'p4.webp']);
        Product::create(['subcategory_id' => $subPlatne->id, 'name' => 'Gothic Symphony - Dark Wave', 'brand' => 'Harmony House', 'price' => 45.20, 'discount' => 0, 'stock' => 1, 'stars' => 4, 'image' => 'p5.webp']);
        Product::create(['subcategory_id' => $subPlatne->id, 'name' => 'Disco Fever - Dancefloor Classics', 'brand' => 'Rhythm Nation', 'price' => 31.10, 'discount' => 0, 'stock' => 1, 'stars' => 5, 'image' => 'p6.webp']);
        Product::create(['subcategory_id' => $subPlatne->id, 'name' => 'Jazzy Lounge - Cocktail Hour', 'brand' => 'Starlight Records', 'price' => 27.60, 'discount' => 0, 'stock' => 1, 'stars' => 3, 'image' => 'p7.webp']);
        Product::create(['subcategory_id' => $subPlatne->id, 'name' => 'Latin Fire - Salsa & Mambo', 'brand' => 'Groove Masters', 'price' => 41.30, 'discount' => 0, 'stock' => 1, 'stars' => 4, 'image' => 'p8.webp']);
        Product::create(['subcategory_id' => $subPlatne->id, 'name' => 'Ambient Visions - Tranquil Soundscapes', 'brand' => 'Sonic Sounds', 'price' => 52.80, 'discount' => 0, 'stock' => 1, 'stars' => 4, 'image' => 'p9.webp']);
        Product::create(['subcategory_id' => $subPlatne->id, 'name' => 'Bluegrass Journey - Appalachian Sounds', 'brand' => 'Harmony House', 'price' => 36.55, 'discount' => 0, 'stock' => 1, 'stars' => 4, 'image' => 'p1.webp']);
        Product::create(['subcategory_id' => $subPlatne->id, 'name' => 'Celtic Dreams - Mystical Melodies', 'brand' => 'Rhythm Nation', 'price' => 44.90, 'discount' => 0, 'stock' => 1, 'stars' => 5, 'image' => 'p2.webp']);
        Product::create(['subcategory_id' => $subPlatne->id, 'name' => 'Hard Rock Heroes - Guitar Legends', 'brand' => 'Starlight Records', 'price' => 30.40, 'discount' => 0, 'stock' => 1, 'stars' => 4, 'image' => 'p3.webp']);
        Product::create(['subcategory_id' => $subPlatne->id, 'name' => 'Soulful Voices - R&B Divas', 'brand' => 'Groove Masters', 'price' => 29.20, 'discount' => 0, 'stock' => 1, 'stars' => 4, 'image' => 'p4.webp']);
        Product::create(['subcategory_id' => $subPlatne->id, 'name' => 'Experimental Noise - Avant-Garde Sounds', 'brand' => 'Sonic Sounds', 'price' => 47.10, 'discount' => 0, 'stock' => 1, 'stars' => 3, 'image' => 'p5.webp']);
        Product::create(['subcategory_id' => $subPlatne->id, 'name' => '80s Rewind - Synth Pop Hits', 'brand' => 'Harmony House', 'price' => 33.00, 'discount' => 0, 'stock' => 1, 'stars' => 5, 'image' => 'p6.webp']);
        Product::create(['subcategory_id' => $subPlatne->id, 'name' => 'World Percussion - Tribal Rhythms', 'brand' => 'Rhythm Nation', 'price' => 40.60, 'discount' => 0, 'stock' => 1, 'stars' => 4, 'image' => 'p7.webp']);
        Product::create(['subcategory_id' => $subPlatne->id, 'name' => 'Opera Gala - Vocal Masterpieces', 'brand' => 'Starlight Records', 'price' => 58.30, 'discount' => 0, 'stock' => 1, 'stars' => 5, 'image' => 'p8.webp']);
        Product::create(['subcategory_id' => $subPlatne->id, 'name' => 'Country Classics - Honky Tonk Heroes', 'brand' => 'Groove Masters', 'price' => 31.80, 'discount' => 0, 'stock' => 1, 'stars' => 4, 'image' => 'p9.webp']);

        $subUkulele = Subcategory::where('name', 'ukulele')->first();
        Product::create(['subcategory_id' => $subUkulele->id, 'name' => 'Soprano Ukulele - Natural Finish', 'brand' => 'Island Strings', 'price' => 65.00, 'discount' => 0, 'stock' => 5, 'stars' => 4, 'image' => 'u1.webp']);
        Product::create(['subcategory_id' => $subUkulele->id, 'name' => 'Concert Ukulele - Mahogany Body', 'brand' => 'Coastal Tunes', 'price' => 89.00, 'discount' => 0, 'stock' => 3, 'stars' => 4, 'image' => 'u2.webp']);
        Product::create(['subcategory_id' => $subUkulele->id, 'name' => 'Tenor Ukulele - Koa Wood', 'brand' => 'Pacific Harmonics', 'price' => 120.00, 'discount' => 0, 'stock' => 2, 'stars' => 5, 'image' => 'u3.webp']);
        Product::create(['subcategory_id' => $subUkulele->id, 'name' => 'Baritone Ukulele - Spruce Top', 'brand' => 'Mountain Song', 'price' => 105.00, 'discount' => 0, 'stock' => 4, 'stars' => 4, 'image' => 'u4.webp']);
        Product::create(['subcategory_id' => $subUkulele->id, 'name' => 'Soprano Ukulele - Blue Burst', 'brand' => 'Kona Coast', 'price' => 75.00, 'discount' => 0, 'stock' => 6, 'stars' => 3, 'image' => 'u5.webp']);
        Product::create(['subcategory_id' => $subUkulele->id, 'name' => 'Concert Ukulele - Flame Maple', 'brand' => 'Island Strings', 'price' => 105.00, 'discount' => 0, 'stock' => 2, 'stars' => 4, 'image' => 'u6.webp']);
        Product::create(['subcategory_id' => $subUkulele->id, 'name' => 'Tenor Ukulele - Solid Cedar', 'brand' => 'Coastal Tunes', 'price' => 140.00, 'discount' => 0, 'stock' => 1, 'stars' => 5, 'image' => 'u7.webp']);
        Product::create(['subcategory_id' => $subUkulele->id, 'name' => 'Baritone Ukulele - Rosewood', 'brand' => 'Pacific Harmonics', 'price' => 130.00, 'discount' => 0, 'stock' => 3, 'stars' => 4, 'image' => 'u8.webp']);
        Product::create(['subcategory_id' => $subUkulele->id, 'name' => 'Soprano Ukulele - Pineapple Shape', 'brand' => 'Mountain Song', 'price' => 80.00, 'discount' => 0, 'stock' => 5, 'stars' => 4, 'image' => 'u9.webp']);
        Product::create(['subcategory_id' => $subUkulele->id, 'name' => 'Concert Ukulele - Sunburst Finish', 'brand' => 'Kona Coast', 'price' => 95.00, 'discount' => 0, 'stock' => 4, 'stars' => 3, 'image' => 'u10.webp']);
        Product::create(['subcategory_id' => $subUkulele->id, 'name' => 'Tenor Ukulele - Cutaway Acoustic-Electric', 'brand' => 'Island Strings', 'price' => 170.00, 'discount' => 0, 'stock' => 1, 'stars' => 4, 'image' => 'u4.webp']);
        Product::create(['subcategory_id' => $subUkulele->id, 'name' => 'Baritone Ukulele - Mahogany/Spruce', 'brand' => 'Coastal Tunes', 'price' => 120.00, 'discount' => 0, 'stock' => 2, 'stars' => 4, 'image' => 'u1.webp']);
        Product::create(['subcategory_id' => $subUkulele->id, 'name' => 'Soprano Ukulele - Long Neck', 'brand' => 'Pacific Harmonics', 'price' => 90.00, 'discount' => 0, 'stock' => 3, 'stars' => 4, 'image' => 'u2.webp']);
        Product::create(['subcategory_id' => $subUkulele->id, 'name' => 'Concert Ukulele - Ovangkol', 'brand' => 'Mountain Song', 'price' => 110.00, 'discount' => 0, 'stock' => 2, 'stars' => 5, 'image' => 'u3.webp']);
        Product::create(['subcategory_id' => $subUkulele->id, 'name' => 'Tenor Ukulele - Abalone Inlay', 'brand' => 'Kona Coast', 'price' => 155.00, 'discount' => 0, 'stock' => 1, 'stars' => 4, 'image' => 'u4.webp']);
        Product::create(['subcategory_id' => $subUkulele->id, 'name' => 'Baritone Ukulele - All Solid Mahogany', 'brand' => 'Island Strings', 'price' => 145.00, 'discount' => 0, 'stock' => 1, 'stars' => 5, 'image' => 'u5.webp']);
        Product::create(['subcategory_id' => $subUkulele->id, 'name' => 'Soprano Ukulele - Red Cedar Top', 'brand' => 'Coastal Tunes', 'price' => 85.00, 'discount' => 0, 'stock' => 3, 'stars' => 4, 'image' => 'u6.webp']);
        Product::create(['subcategory_id' => $subUkulele->id, 'name' => 'Concert Ukulele - Ziricote', 'brand' => 'Pacific Harmonics', 'price' => 125.00, 'discount' => 0, 'stock' => 2, 'stars' => 4, 'image' => 'u7.webp']);
        Product::create(['subcategory_id' => $subUkulele->id, 'name' => 'Tenor Ukulele - Slotted Headstock', 'brand' => 'Mountain Song', 'price' => 135.00, 'discount' => 0, 'stock' => 1, 'stars' => 4, 'image' => 'u8.webp']);
        Product::create(['subcategory_id' => $subUkulele->id, 'name' => 'Baritone Ukulele - Figured Koa', 'brand' => 'Kona Coast', 'price' => 160.00, 'discount' => 0, 'stock' => 1, 'stars' => 5, 'image' => 'u9.webp']);
        Product::create(['subcategory_id' => $subUkulele->id, 'name' => 'Soprano Ukulele - Vintage Style', 'brand' => 'Island Strings', 'price' => 70.00, 'discount' => 0, 'stock' => 4, 'stars' => 3, 'image' => 'u10.webp']);
        Product::create(['subcategory_id' => $subUkulele->id, 'name' => 'Concert Ukulele - Thin Body', 'brand' => 'Coastal Tunes', 'price' => 98.00, 'discount' => 0, 'stock' => 3, 'stars' => 4, 'image' => 'u4.webp']);
        Product::create(['subcategory_id' => $subUkulele->id, 'name' => 'Tenor Ukulele - Hawaiian Islands Inlay', 'brand' => 'Pacific Harmonics', 'price' => 175.00, 'discount' => 0, 'stock' => 1, 'stars' => 5, 'image' => 'u1.webp']);
        Product::create(['subcategory_id' => $subUkulele->id, 'name' => 'Baritone Ukulele - Left-Handed', 'brand' => 'Kona Coast', 'price' => 165.00, 'discount' => 0, 'stock' => 1, 'stars' => 4, 'image' => 'u2.webp']);
        Product::create(['subcategory_id' => $subUkulele->id, 'name' => 'Soprano Ukulele - Solid Mahogany Top', 'brand' => 'Mountain Song', 'price' => 92.00, 'discount' => 0, 'stock' => 3, 'stars' => 4, 'image' => 'u3.webp']);
        Product::create(['subcategory_id' => $subUkulele->id, 'name' => 'Concert Ukulele - Koa Top', 'brand' => 'Kona Coast', 'price' => 130.00, 'discount' => 0, 'stock' => 2, 'stars' => 5, 'image' => 'u4.webp']);
        Product::create(['subcategory_id' => $subUkulele->id, 'name' => 'Tenor Ukulele - Thinline', 'brand' => 'Island Strings', 'price' => 150.00, 'discount' => 0, 'stock' => 3, 'stars' => 4, 'image' => 'u5.webp']);
        Product::create(['subcategory_id' => $subUkulele->id, 'name' => 'Baritone Ukulele - 5-String', 'brand' => 'Coastal Tunes', 'price' => 170.00, 'discount' => 0, 'stock' => 1, 'stars' => 4, 'image' => 'u6.webp']);
        Product::create(['subcategory_id' => $subUkulele->id, 'name' => 'Soprano Ukulele - Lanikai', 'brand' => 'Pacific Harmonics', 'price' => 85.00, 'discount' => 0, 'stock' => 5, 'stars' => 4, 'image' => 'u7.webp']);
        Product::create(['subcategory_id' => $subUkulele->id, 'name' => 'Concert Ukulele - Eucalyptus', 'brand' => 'Mountain Song', 'price' => 125.00, 'discount' => 0, 'stock' => 2, 'stars' => 5, 'image' => 'u8.webp']);
        Product::create(['subcategory_id' => $subUkulele->id, 'name' => 'Tenor Ukulele - Deluxe Edition', 'brand' => 'Kona Coast', 'price' => 200.00, 'discount' => 0, 'stock' => 1, 'stars' => 5, 'image' => 'u9.webp']);
        Product::create(['subcategory_id' => $subUkulele->id, 'name' => 'Baritone Ukulele - Solid Koa', 'brand' => 'Island Strings', 'price' => 185.00, 'discount' => 0, 'stock' => 2, 'stars' => 4, 'image' => 'u10.webp']);
        Product::create(['subcategory_id' => $subUkulele->id, 'name' => 'Soprano Ukulele - Acoustic Electric', 'brand' => 'Coastal Tunes', 'price' => 95.00, 'discount' => 0, 'stock' => 4, 'stars' => 4, 'image' => 'u4.webp']);


        $subBanjo = Subcategory::where('name', 'banjo')->first();
        Product::create(['subcategory_id' => $subBanjo->id, 'name' => '5-String Banjo - Mahogany', 'brand' => 'Bluegrass Banjos', 'price' => 299.00, 'discount' => 0, 'stock' => 4, 'stars' => 4, 'image' => 'banjo1.webp']);
        Product::create(['subcategory_id' => $subBanjo->id, 'name' => 'Resonator Banjo - Maple', 'brand' => 'Appalachian Strings', 'price' => 429.00, 'discount' => 0, 'stock' => 2, 'stars' => 5, 'image' => 'banjo2.webp']);
        Product::create(['subcategory_id' => $subBanjo->id, 'name' => 'Open-Back Banjo - Walnut', 'brand' => 'Folk Instruments', 'price' => 349.00, 'discount' => 0, 'stock' => 3, 'stars' => 4, 'image' => 'banjo1.webp']);
        Product::create(['subcategory_id' => $subBanjo->id, 'name' => 'Tenor Banjo - 4-String', 'brand' => 'Celtic Melodies', 'price' => 379.00, 'discount' => 0, 'stock' => 1, 'stars' => 4, 'image' => 'banjo2.webp']);
        Product::create(['subcategory_id' => $subBanjo->id, 'name' => '6-String Banjo Guitar - Mahogany', 'brand' => 'Harmony Banjos', 'price' => 399.00, 'discount' => 0, 'stock' => 2, 'stars' => 4, 'image' => 'banjo1.webp']);

        Product::create(['subcategory_id' => $subBanjo->id, 'name' => '5-String Banjo - Rosewood', 'brand' => 'Bluegrass Banjos', 'price' => 329.00, 'discount' => 0, 'stock' => 3, 'stars' => 4, 'image' => 'banjo2.webp']);
        Product::create(['subcategory_id' => $subBanjo->id, 'name' => 'Resonator Banjo - Quilted Maple', 'brand' => 'Appalachian Strings', 'price' => 549.00, 'discount' => 0, 'stock' => 1, 'stars' => 5, 'image' => 'banjo1.webp']);
        Product::create(['subcategory_id' => $subBanjo->id, 'name' => 'Open-Back Banjo - Cherry', 'brand' => 'Folk Instruments', 'price' => 379.00, 'discount' => 0, 'stock' => 2, 'stars' => 4, 'image' => 'banjo2.webp']);
        Product::create(['subcategory_id' => $subBanjo->id, 'name' => 'Tenor Banjo - 19-Fret', 'brand' => 'Celtic Melodies', 'price' => 409.00, 'discount' => 0, 'stock' => 1, 'stars' => 4, 'image' => 'banjo1.webp']);
        Product::create(['subcategory_id' => $subBanjo->id, 'name' => '6-String Banjo Guitar - Sunburst', 'brand' => 'Harmony Banjos', 'price' => 429.00, 'discount' => 0, 'stock' => 3, 'stars' => 4, 'image' => 'banjo2.webp']);

        Product::create(['subcategory_id' => $subBanjo->id, 'name' => '5-String Banjo - Beginner', 'brand' => 'Bluegrass Banjos', 'price' => 249.00, 'discount' => 0, 'stock' => 5, 'stars' => 3, 'image' => 'banjo1.webp']);
        Product::create(['subcategory_id' => $subBanjo->id, 'name' => 'Resonator Banjo - Deluxe', 'brand' => 'Appalachian Strings', 'price' => 629.00, 'discount' => 0, 'stock' => 2, 'stars' => 5, 'image' => 'banjo2.webp']);
        Product::create(['subcategory_id' => $subBanjo->id, 'name' => 'Open-Back Banjo - A-Scale', 'brand' => 'Folk Instruments', 'price' => 399.00, 'discount' => 0, 'stock' => 3, 'stars' => 4, 'image' => 'banjo1.webp']);
        Product::create(['subcategory_id' => $subBanjo->id, 'name' => 'Tenor Banjo - Irish Tuning', 'brand' => 'Celtic Melodies', 'price' => 439.00, 'discount' => 0, 'stock' => 2, 'stars' => 4, 'image' => 'banjo2.webp']);
        Product::create(['subcategory_id' => $subBanjo->id, 'name' => '6-String Banjo Guitar - Acoustic-Electric', 'brand' => 'Harmony Banjos', 'price' => 479.00, 'discount' => 0, 'stock' => 4, 'stars' => 4, 'image' => 'banjo1.webp']);

        Product::create(['subcategory_id' => $subBanjo->id, 'name' => '5-String Banjo - Bluegrass Special', 'brand' => 'Bluegrass Banjos', 'price' => 379.00, 'discount' => 0, 'stock' => 3, 'stars' => 4, 'image' => 'banjo2.webp']);
        Product::create(['subcategory_id' => $subBanjo->id, 'name' => 'Resonator Banjo - Flying Eagle Inlay', 'brand' => 'Appalachian Strings', 'price' => 799.00, 'discount' => 0, 'stock' => 1, 'stars' => 5, 'image' => 'banjo1.webp']);
        Product::create(['subcategory_id' => $subBanjo->id, 'name' => 'Open-Back Banjo - Whyte Laydie Tone Ring', 'brand' => 'Folk Instruments', 'price' => 449.00, 'discount' => 0, 'stock' => 2, 'stars' => 5, 'image' => 'banjo2.webp']);
        Product::create(['subcategory_id' => $subBanjo->id, 'name' => 'Tenor Banjo - Plectrum', 'brand' => 'Celtic Melodies', 'price' => 429.00, 'discount' => 0, 'stock' => 2, 'stars' => 4, 'image' => 'banjo1.webp']);
        Product::create(['subcategory_id' => $subBanjo->id, 'name' => '6-String Banjo Guitar - 12-String', 'brand' => 'Harmony Banjos', 'price' => 529.00, 'discount' => 0, 'stock' => 3, 'stars' => 4, 'image' => 'banjo2.webp']);

        Product::create(['subcategory_id' => $subBanjo->id, 'name' => '5-String Banjo - Mahogany Neck', 'brand' => 'Bluegrass Banjos', 'price' => 319.00, 'discount' => 0, 'stock' => 4, 'stars' => 4, 'image' => 'banjo1.webp']);
        Product::create(['subcategory_id' => $subBanjo->id, 'name' => 'Resonator Banjo - Hearts and Flowers Inlay', 'brand' => 'Appalachian Strings', 'price' => 699.00, 'discount' => 0, 'stock' => 1, 'stars' => 5, 'image' => 'banjo2.webp']);
        Product::create(['subcategory_id' => $subBanjo->id, 'name' => 'Open-Back Banjo - Rolled Brass Tone Ring', 'brand' => 'Folk Instruments', 'price' => 419.00, 'discount' => 0, 'stock' => 3, 'stars' => 4, 'image' => 'banjo1.webp']);
        Product::create(['subcategory_id' => $subBanjo->id, 'name' => 'Tenor Banjo - Standard', 'brand' => 'Celtic Melodies', 'price' => 389.00, 'discount' => 0, 'stock' => 3, 'stars' => 4, 'image' => 'banjo2.webp']);
        Product::create(['subcategory_id' => $subBanjo->id, 'name' => '6-String Banjo Guitar - Left Handed', 'brand' => 'Harmony Banjos', 'price' => 499.00, 'discount' => 0, 'stock' => 2, 'stars' => 4, 'image' => 'banjo1.webp']);

        Product::create(['subcategory_id' => $subBanjo->id, 'name' => '5-String Banjo - Chrome Hardware', 'brand' => 'Bluegrass Banjos', 'price' => 289.00, 'discount' => 0, 'stock' => 5, 'stars' => 3, 'image' => 'banjo2.webp']);
        Product::create(['subcategory_id' => $subBanjo->id, 'name' => 'Resonator Banjo - Tiger Stripe Maple', 'brand' => 'Appalachian Strings', 'price' => 579.00, 'discount' => 0, 'stock' => 2, 'stars' => 4, 'image' => 'banjo1.webp']);
        Product::create(['subcategory_id' => $subBanjo->id, 'name' => 'Open-Back Banjo - Dobson Tone Ring', 'brand' => 'Folk Instruments', 'price' => 469.00, 'discount' => 0, 'stock' => 1, 'stars' => 5, 'image' => 'banjo2.webp']);
        Product::create(['subcategory_id' => $subBanjo->id, 'name' => 'Tenor Banjo - Jazz Model', 'brand' => 'Celtic Melodies', 'price' => 459.00, 'discount' => 0, 'stock' => 2, 'stars' => 4, 'image' => 'banjo1.webp']);
        Product::create(['subcategory_id' => $subBanjo->id, 'name' => '6-String Banjo Guitar - Baritone', 'brand' => 'Harmony Banjos', 'price' => 549.00, 'discount' => 0, 'stock' => 3, 'stars' => 4, 'image' => 'banjo2.webp']);

        Product::create(['subcategory_id' => $subBanjo->id, 'name' => '5-String Banjo - Geared Tuners', 'brand' => 'Bluegrass Banjos', 'price' => 279.00, 'discount' => 0, 'stock' => 6, 'stars' => 4, 'image' => 'banjo1.webp']);
        Product::create(['subcategory_id' => $subBanjo->id, 'name' => 'Resonator Banjo - Abalone Binding', 'brand' => 'Appalachian Strings', 'price' => 649.00, 'discount' => 0, 'stock' => 1, 'stars' => 5, 'image' => 'banjo2.webp']);
        Product::create(['subcategory_id' => $subBanjo->id, 'name' => 'Open-Back Banjo - Scoop Neck', 'brand' => 'Folk Instruments', 'price' => 389.00, 'discount' => 0, 'stock' => 3, 'stars' => 4, 'image' => 'banjo1.webp']);
        Product::create(['subcategory_id' => $subBanjo->id, 'name' => 'Tenor Banjo - Premium', 'brand' => 'Celtic Melodies', 'price' => 419.00, 'discount' => 0, 'stock' => 1, 'stars' => 5, 'image' => 'banjo2.webp']);
        Product::create(['subcategory_id' => $subBanjo->id, 'name' => '6-String Banjo Guitar - Cutaway', 'brand' => 'Harmony Banjos', 'price' => 509.00, 'discount' => 0, 'stock' => 2, 'stars' => 4, 'image' => 'banjo1.webp']);

        $subMandolina = Subcategory::where('name', 'mandolína')->first();
        Product::create(['subcategory_id' => $subMandolina->id, 'name' => 'A-Style Mandolin - Spruce Top', 'brand' => 'Mountain Strings', 'price' => 449.00, 'discount' => 0, 'stock' => 3, 'stars' => 4, 'image' => 'mandolina1.webp']);
        Product::create(['subcategory_id' => $subMandolina->id, 'name' => 'F-Style Mandolin - Maple', 'brand' => 'Blue Ridge Instruments', 'price' => 699.00, 'discount' => 0, 'stock' => 1, 'stars' => 5, 'image' => 'mandolina2.webp']);
        Product::create(['subcategory_id' => $subMandolina->id, 'name' => 'A-Style Mandolin - Mahogany', 'brand' => 'Celtic Mandolins', 'price' => 399.00, 'discount' => 0, 'stock' => 2, 'stars' => 4, 'image' => 'mandolina3.webp']);
        Product::create(['subcategory_id' => $subMandolina->id, 'name' => 'Bowlback Mandolin - Rosewood', 'brand' => 'Italian Tradition', 'price' => 549.00, 'discount' => 0, 'stock' => 1, 'stars' => 4, 'image' => 'mandolina1.webp']);
        Product::create(['subcategory_id' => $subMandolina->id, 'name' => 'Electric Mandolin - Sunburst', 'brand' => 'Modern Acoustics', 'price' => 479.00, 'discount' => 0, 'stock' => 2, 'stars' => 4, 'image' => 'mandolina2.webp']);
        Product::create(['subcategory_id' => $subMandolina->id, 'name' => 'A-Style Mandolin - Solid Top', 'brand' => 'Mountain Strings', 'price' => 529.00, 'discount' => 0, 'stock' => 2, 'stars' => 4, 'image' => 'mandolina3.webp']);
        Product::create(['subcategory_id' => $subMandolina->id, 'name' => 'F-Style Mandolin - Carved Top', 'brand' => 'Blue Ridge Instruments', 'price' => 849.00, 'discount' => 0, 'stock' => 1, 'stars' => 5, 'image' => 'mandolina1.webp']);
        Product::create(['subcategory_id' => $subMandolina->id, 'name' => 'A-Style Mandolin - Koa', 'brand' => 'Celtic Mandolins', 'price' => 479.00, 'discount' => 0, 'stock' => 1, 'stars' => 4, 'image' => 'mandolina2.webp']);
        Product::create(['subcategory_id' => $subMandolina->id, 'name' => 'Bowlback Mandolin - Flamed Maple', 'brand' => 'Italian Tradition', 'price' => 629.00, 'discount' => 0, 'stock' => 1, 'stars' => 4, 'image' => 'mandolina3.webp']);
        Product::create(['subcategory_id' => $subMandolina->id, 'name' => 'Electric Mandolin - 5-String', 'brand' => 'Modern Acoustics', 'price' => 599.00, 'discount' => 0, 'stock' => 1, 'stars' => 4, 'image' => 'mandolina1.webp']);
        Product::create(['subcategory_id' => $subMandolina->id, 'name' => 'A-Style Mandolin - Vintage Finish', 'brand' => 'Mountain Strings', 'price' => 489.00, 'discount' => 0, 'stock' => 2, 'stars' => 4, 'image' => 'mandolina2.webp']);
        Product::create(['subcategory_id' => $subMandolina->id, 'name' => 'F-Style Mandolin - Glossy Red', 'brand' => 'Blue Ridge Instruments', 'price' => 729.00, 'discount' => 0, 'stock' => 1, 'stars' => 5, 'image' => 'mandolina3.webp']);
        Product::create(['subcategory_id' => $subMandolina->id, 'name' => 'A-Style Mandolin - Satin Black', 'brand' => 'Celtic Mandolins', 'price' => 419.00, 'discount' => 0, 'stock' => 2, 'stars' => 4, 'image' => 'mandolina1.webp']);
        Product::create(['subcategory_id' => $subMandolina->id, 'name' => 'Bowlback Mandolin - Classic', 'brand' => 'Italian Tradition', 'price' => 559.00, 'discount' => 0, 'stock' => 1, 'stars' => 4, 'image' => 'mandolina2.webp']);
        Product::create(['subcategory_id' => $subMandolina->id, 'name' => 'Electric Mandolin - Metallic Blue', 'brand' => 'Modern Acoustics', 'price' => 489.00, 'discount' => 0, 'stock' => 1, 'stars' => 4, 'image' => 'mandolina3.webp']);
        Product::create(['subcategory_id' => $subMandolina->id, 'name' => 'A-Style Mandolin - Walnut Back', 'brand' => 'Mountain Strings', 'price' => 539.00, 'discount' => 0, 'stock' => 2, 'stars' => 4, 'image' => 'mandolina1.webp']);
        Product::create(['subcategory_id' => $subMandolina->id, 'name' => 'F-Style Mandolin - Pearl Inlays', 'brand' => 'Blue Ridge Instruments', 'price' => 889.00, 'discount' => 0, 'stock' => 1, 'stars' => 5, 'image' => 'mandolina2.webp']);
        Product::create(['subcategory_id' => $subMandolina->id, 'name' => 'A-Style Mandolin - Natural Finish', 'brand' => 'Celtic Mandolins', 'price' => 459.00, 'discount' => 0, 'stock' => 2, 'stars' => 4, 'image' => 'mandolina3.webp']);
        Product::create(['subcategory_id' => $subMandolina->id, 'name' => 'Bowlback Mandolin - Light Top', 'brand' => 'Italian Tradition', 'price' => 579.00, 'discount' => 0, 'stock' => 1, 'stars' => 4, 'image' => 'mandolina1.webp']);
        Product::create(['subcategory_id' => $subMandolina->id, 'name' => 'Electric Mandolin - Transparent Green', 'brand' => 'Modern Acoustics', 'price' => 609.00, 'discount' => 0, 'stock' => 1, 'stars' => 4, 'image' => 'mandolina2.webp']);
        Product::create(['subcategory_id' => $subMandolina->id, 'name' => 'A-Style Mandolin - Ebony Fretboard', 'brand' => 'Mountain Strings', 'price' => 519.00, 'discount' => 0, 'stock' => 2, 'stars' => 4, 'image' => 'mandolina3.webp']);
        Product::create(['subcategory_id' => $subMandolina->id, 'name' => 'F-Style Mandolin - Deep Blue', 'brand' => 'Blue Ridge Instruments', 'price' => 759.00, 'discount' => 0, 'stock' => 1, 'stars' => 5, 'image' => 'mandolina1.webp']);
        Product::create(['subcategory_id' => $subMandolina->id, 'name' => 'A-Style Mandolin - Heritage Series', 'brand' => 'Celtic Mandolins', 'price' => 499.00, 'discount' => 0, 'stock' => 2, 'stars' => 4, 'image' => 'mandolina2.webp']);
        Product::create(['subcategory_id' => $subMandolina->id, 'name' => 'Bowlback Mandolin - Gold Tuners', 'brand' => 'Italian Tradition', 'price' => 599.00, 'discount' => 0, 'stock' => 1, 'stars' => 4, 'image' => 'mandolina3.webp']);
        Product::create(['subcategory_id' => $subMandolina->id, 'name' => 'Electric Mandolin - Red Flame', 'brand' => 'Modern Acoustics', 'price' => 549.00, 'discount' => 0, 'stock' => 1, 'stars' => 4, 'image' => 'mandolina1.webp']);
        Product::create(['subcategory_id' => $subMandolina->id, 'name' => 'A-Style Mandolin - Custom Engraved', 'brand' => 'Mountain Strings', 'price' => 569.00, 'discount' => 0, 'stock' => 2, 'stars' => 4, 'image' => 'mandolina2.webp']);
        Product::create(['subcategory_id' => $subMandolina->id, 'name' => 'F-Style Mandolin - Hand Carved', 'brand' => 'Blue Ridge Instruments', 'price' => 819.00, 'discount' => 0, 'stock' => 1, 'stars' => 5, 'image' => 'mandolina3.webp']);
        Product::create(['subcategory_id' => $subMandolina->id, 'name' => 'A-Style Mandolin - Alpine Finish', 'brand' => 'Celtic Mandolins', 'price' => 489.00, 'discount' => 0, 'stock' => 2, 'stars' => 4, 'image' => 'mandolina1.webp']);
        Product::create(['subcategory_id' => $subMandolina->id, 'name' => 'Bowlback Mandolin - Gloss Ebony', 'brand' => 'Italian Tradition', 'price' => 589.00, 'discount' => 0, 'stock' => 1, 'stars' => 4, 'image' => 'mandolina2.webp']);
        Product::create(['subcategory_id' => $subMandolina->id, 'name' => 'Electric Mandolin - Vintage Burst', 'brand' => 'Modern Acoustics', 'price' => 569.00, 'discount' => 0, 'stock' => 1, 'stars' => 4, 'image' => 'mandolina3.webp']);
        Product::create(['subcategory_id' => $subMandolina->id, 'name' => 'A-Style Mandolin - Archtop', 'brand' => 'Mountain Strings', 'price' => 549.00, 'discount' => 0, 'stock' => 2, 'stars' => 4, 'image' => 'mandolina1.webp']);
        Product::create(['subcategory_id' => $subMandolina->id, 'name' => 'F-Style Mandolin - Blackwood', 'brand' => 'Blue Ridge Instruments', 'price' => 769.00, 'discount' => 0, 'stock' => 1, 'stars' => 5, 'image' => 'mandolina2.webp']);
        Product::create(['subcategory_id' => $subMandolina->id, 'name' => 'A-Style Mandolin - Bronze Frets', 'brand' => 'Celtic Mandolins', 'price' => 479.00, 'discount' => 0, 'stock' => 2, 'stars' => 4, 'image' => 'mandolina3.webp']);
        Product::create(['subcategory_id' => $subMandolina->id, 'name' => 'Bowlback Mandolin - Maple Shell', 'brand' => 'Italian Tradition', 'price' => 639.00, 'discount' => 0, 'stock' => 1, 'stars' => 4, 'image' => 'mandolina1.webp']);
        Product::create(['subcategory_id' => $subMandolina->id, 'name' => 'Electric Mandolin - Deluxe 6-String', 'brand' => 'Modern Acoustics', 'price' => 619.00, 'discount' => 0, 'stock' => 1, 'stars' => 4, 'image' => 'mandolina2.webp']);
        Product::create(['subcategory_id' => $subMandolina->id, 'name' => 'A-Style Mandolin - Redwood Top', 'brand' => 'Mountain Strings', 'price' => 559.00, 'discount' => 0, 'stock' => 2, 'stars' => 4, 'image' => 'mandolina3.webp']);
        Product::create(['subcategory_id' => $subMandolina->id, 'name' => 'F-Style Mandolin - Vintage Carve', 'brand' => 'Blue Ridge Instruments', 'price' => 789.00, 'discount' => 0, 'stock' => 1, 'stars' => 5, 'image' => 'mandolina1.webp']);
        Product::create(['subcategory_id' => $subMandolina->id, 'name' => 'A-Style Mandolin - Dark Flame', 'brand' => 'Celtic Mandolins', 'price' => 499.00, 'discount' => 0, 'stock' => 2, 'stars' => 4, 'image' => 'mandolina2.webp']);
        Product::create(['subcategory_id' => $subMandolina->id, 'name' => 'Bowlback Mandolin - Antique Look', 'brand' => 'Italian Tradition', 'price' => 609.00, 'discount' => 0, 'stock' => 1, 'stars' => 4, 'image' => 'mandolina3.webp']);
        Product::create(['subcategory_id' => $subMandolina->id, 'name' => 'Electric Mandolin - Graphite Grey', 'brand' => 'Modern Acoustics', 'price' => 579.00, 'discount' => 0, 'stock' => 1, 'stars' => 4, 'image' => 'mandolina1.webp']);


        $subKora = Subcategory::where('name', 'kora')->first();
        Product::create(['subcategory_id' => $subKora->id, 'name' => 'Sound of the Nature', 'brand' => 'African Heritage', 'price' => 799.00, 'discount' => 0, 'stock' => 2, 'stars' => 4, 'image' => 'kora.webp']);
        Product::create(['subcategory_id' => $subKora->id, 'name' => 'Celestial Echoes', 'brand' => 'Griot Instruments', 'price' => 1299.00, 'discount' => 0, 'stock' => 1, 'stars' => 5, 'image' => 'kora.webp']);
        Product::create(['subcategory_id' => $subKora->id, 'name' => 'Harmonic Convergence', 'brand' => 'Mande Sounds', 'price' => 1799.00, 'discount' => 0, 'stock' => 1, 'stars' => 5, 'image' => 'kora.webp']);
        Product::create(['subcategory_id' => $subKora->id, 'name' => 'Whispers of the Savannah', 'brand' => 'Rhythmic Roots', 'price' => 599.00, 'discount' => 0, 'stock' => 3, 'stars' => 4, 'image' => 'kora.webp']);
        Product::create(['subcategory_id' => $subKora->id, 'name' => 'Electric Dawn', 'brand' => 'Global Groove', 'price' => 949.00, 'discount' => 0, 'stock' => 1, 'stars' => 4, 'image' => 'kora.webp']);

        $subK = Category::where('name', 'Klavíre')->first()->subcategories()->first();
        Product::create(['subcategory_id' => $subK->id, 'name' => 'Digital Piano - GrandTouch S88', 'brand' => 'Yamaha', 'price' => 1999.00, 'discount' => 0, 'stock' => 2, 'stars' => 5, 'image' => 'piano1.webp']);
        Product::create(['subcategory_id' => $subK->id, 'name' => 'Stage Piano - PX-360M', 'brand' => 'Casio', 'price' => 999.00, 'discount' => 0, 'stock' => 3, 'stars' => 4, 'image' => 'piano2.webp']);
        Product::create(['subcategory_id' => $subK->id, 'name' => 'Electric Piano - MKII Classic', 'brand' => 'Rhodes', 'price' => 2899.00, 'discount' => 0, 'stock' => 1, 'stars' => 5, 'image' => 'piano3.webp']);
        Product::create(['subcategory_id' => $subK->id, 'name' => 'Compact Digital Piano - CDP-S150', 'brand' => 'Casio', 'price' => 479.00, 'discount' => 0, 'stock' => 4, 'stars' => 4, 'image' => 'piano4.webp']);
        Product::create(['subcategory_id' => $subK->id, 'name' => 'Portable Grand - YPG-535', 'brand' => 'Yamaha', 'price' => 749.00, 'discount' => 0, 'stock' => 2, 'stars' => 4, 'image' => 'piano1.webp']);
        Product::create(['subcategory_id' => $subK->id, 'name' => 'Electric Stage Piano - MKV Custom', 'brand' => 'Rhodes', 'price' => 3399.00, 'discount' => 0, 'stock' => 1, 'stars' => 5, 'image' => 'piano2.webp']);
        Product::create(['subcategory_id' => $subK->id, 'name' => 'Digital Ensemble Piano - AP-710', 'brand' => 'Casio', 'price' => 1699.00, 'discount' => 0, 'stock' => 2, 'stars' => 4, 'image' => 'piano3.webp']);
        Product::create(['subcategory_id' => $subK->id, 'name' => 'Clavinova Digital Piano - CLP-775', 'brand' => 'Yamaha', 'price' => 2599.00, 'discount' => 0, 'stock' => 1, 'stars' => 5, 'image' => 'piano4.webp']);
        Product::create(['subcategory_id' => $subK->id, 'name' => 'Hybrid Piano - GP-310', 'brand' => 'Casio', 'price' => 3199.00, 'discount' => 0, 'stock' => 1, 'stars' => 5, 'image' => 'piano1.webp']);
        Product::create(['subcategory_id' => $subK->id, 'name' => 'Vintage Electric Piano - 1973 Suitcase', 'brand' => 'Rhodes', 'price' => 3999.00, 'discount' => 0, 'stock' => 1, 'stars' => 5, 'image' => 'piano2.webp']);
        Product::create(['subcategory_id' => $subK->id, 'name' => 'Portable Piano - P-45B', 'brand' => 'Yamaha', 'price' => 449.00, 'discount' => 0, 'stock' => 5, 'stars' => 3, 'image' => 'piano3.webp']);
        Product::create(['subcategory_id' => $subK->id, 'name' => 'Stage Piano - PX-5S', 'brand' => 'Casio', 'price' => 849.00, 'discount' => 0, 'stock' => 2, 'stars' => 4, 'image' => 'piano4.webp']);
        Product::create(['subcategory_id' => $subK->id, 'name' => 'Rhodes Piano - Stage MKIII', 'brand' => 'Rhodes', 'price' => 3199.00, 'discount' => 0, 'stock' => 1, 'stars' => 5, 'image' => 'piano1.webp']);
        Product::create(['subcategory_id' => $subK->id, 'name' => 'Arius Series - YDP-145', 'brand' => 'Yamaha', 'price' => 899.00, 'discount' => 0, 'stock' => 3, 'stars' => 4, 'image' => 'piano2.webp']);
        Product::create(['subcategory_id' => $subK->id, 'name' => 'Digital Grand Piano - CGP-700', 'brand' => 'Casio', 'price' => 1399.00, 'discount' => 0, 'stock' => 2, 'stars' => 5, 'image' => 'piano3.webp']);
        Product::create(['subcategory_id' => $subK->id, 'name' => 'Electric Piano - Vintage 88', 'brand' => 'Rhodes', 'price' => 2899.00, 'discount' => 0, 'stock' => 1, 'stars' => 5, 'image' => 'piano4.webp']);
        Product::create(['subcategory_id' => $subK->id, 'name' => 'Professional Stage Piano - CP88', 'brand' => 'Yamaha', 'price' => 2249.00, 'discount' => 0, 'stock' => 1, 'stars' => 5, 'image' => 'piano1.webp']);
        Product::create(['subcategory_id' => $subK->id, 'name' => 'Celviano Series - AP-270', 'brand' => 'Casio', 'price' => 849.00, 'discount' => 0, 'stock' => 3, 'stars' => 4, 'image' => 'piano2.webp']);
        Product::create(['subcategory_id' => $subK->id, 'name' => 'Vintage Series - MK1 88', 'brand' => 'Rhodes', 'price' => 3299.00, 'discount' => 0, 'stock' => 1, 'stars' => 5, 'image' => 'piano3.webp']);
        Product::create(['subcategory_id' => $subK->id, 'name' => 'Digital Grand - CVP-701', 'brand' => 'Yamaha', 'price' => 2999.00, 'discount' => 0, 'stock' => 1, 'stars' => 5, 'image' => 'piano4.webp']);

        $subCombo = Category::where('name', 'Kombá')->first()->subcategories()->first();
        Product::create(['subcategory_id' => $subCombo->id, 'name' => 'Marshall MG10G Combo Amp', 'brand' => 'Marshall', 'price' => 109.00, 'discount' => 0, 'stock' => 5, 'stars' => 4, 'image' => 'kombo1.webp']);
        Product::create(['subcategory_id' => $subCombo->id, 'name' => 'Fender Champion 20', 'brand' => 'Fender', 'price' => 139.00, 'discount' => 0, 'stock' => 3, 'stars' => 5, 'image' => 'kombo2.webp']);
        Product::create(['subcategory_id' => $subCombo->id, 'name' => 'Marshall Code 25', 'brand' => 'Marshall', 'price' => 249.00, 'discount' => 0, 'stock' => 2, 'stars' => 4, 'image' => 'kombo3.webp']);
        Product::create(['subcategory_id' => $subCombo->id, 'name' => 'Fender Mustang LT25', 'brand' => 'Fender', 'price' => 179.00, 'discount' => 0, 'stock' => 4, 'stars' => 4, 'image' => 'kombo1.webp']);
        Product::create(['subcategory_id' => $subCombo->id, 'name' => 'Marshall DSL1CR', 'brand' => 'Marshall', 'price' => 399.00, 'discount' => 0, 'stock' => 2, 'stars' => 5, 'image' => 'kombo2.webp']);
        Product::create(['subcategory_id' => $subCombo->id, 'name' => 'Fender Champion 40', 'brand' => 'Fender', 'price' => 229.00, 'discount' => 0, 'stock' => 3, 'stars' => 4, 'image' => 'kombo3.webp']);
        Product::create(['subcategory_id' => $subCombo->id, 'name' => 'Marshall MG15GR', 'brand' => 'Marshall', 'price' => 159.00, 'discount' => 0, 'stock' => 4, 'stars' => 4, 'image' => 'kombo1.webp']);
        Product::create(['subcategory_id' => $subCombo->id, 'name' => 'Fender Mustang GT40', 'brand' => 'Fender', 'price' => 249.00, 'discount' => 0, 'stock' => 2, 'stars' => 4, 'image' => 'kombo2.webp']);
        Product::create(['subcategory_id' => $subCombo->id, 'name' => 'Marshall Origin 5C', 'brand' => 'Marshall', 'price' => 499.00, 'discount' => 0, 'stock' => 1, 'stars' => 5, 'image' => 'kombo3.webp']);
        Product::create(['subcategory_id' => $subCombo->id, 'name' => 'Fender Blues Junior IV', 'brand' => 'Fender', 'price' => 699.00, 'discount' => 0, 'stock' => 2, 'stars' => 5, 'image' => 'kombo1.webp']);
        Product::create(['subcategory_id' => $subCombo->id, 'name' => 'Marshall MG30GFX', 'brand' => 'Marshall', 'price' => 259.00, 'discount' => 0, 'stock' => 3, 'stars' => 4, 'image' => 'kombo2.webp']);
        Product::create(['subcategory_id' => $subCombo->id, 'name' => 'Fender Frontman 10G', 'brand' => 'Fender', 'price' => 99.00, 'discount' => 0, 'stock' => 6, 'stars' => 4, 'image' => 'kombo3.webp']);
        Product::create(['subcategory_id' => $subCombo->id, 'name' => 'Marshall DSL20CR', 'brand' => 'Marshall', 'price' => 749.00, 'discount' => 0, 'stock' => 1, 'stars' => 5, 'image' => 'kombo1.webp']);
        Product::create(['subcategory_id' => $subCombo->id, 'name' => 'Fender Rumble 25 (Bass)', 'brand' => 'Fender', 'price' => 129.00, 'discount' => 0, 'stock' => 3, 'stars' => 4, 'image' => 'kombo2.webp']);
        Product::create(['subcategory_id' => $subCombo->id, 'name' => 'Marshall MG50GFX', 'brand' => 'Marshall', 'price' => 349.00, 'discount' => 0, 'stock' => 2, 'stars' => 5, 'image' => 'kombo3.webp']);
        Product::create(['subcategory_id' => $subCombo->id, 'name' => 'Fender Tone Master Deluxe', 'brand' => 'Fender', 'price' => 949.00, 'discount' => 0, 'stock' => 1, 'stars' => 5, 'image' => 'kombo1.webp']);
        Product::create(['subcategory_id' => $subCombo->id, 'name' => 'Marshall AS50D (Acoustic)', 'brand' => 'Marshall', 'price' => 439.00, 'discount' => 0, 'stock' => 2, 'stars' => 4, 'image' => 'kombo2.webp']);
        Product::create(['subcategory_id' => $subCombo->id, 'name' => 'Fender Acoustasonic 40', 'brand' => 'Fender', 'price' => 199.00, 'discount' => 0, 'stock' => 3, 'stars' => 4, 'image' => 'kombo3.webp']);
        Product::create(['subcategory_id' => $subCombo->id, 'name' => 'Marshall MS-2 Mini Amp', 'brand' => 'Marshall', 'price' => 59.00, 'discount' => 0, 'stock' => 5, 'stars' => 3, 'image' => 'kombo1.webp']);
        Product::create(['subcategory_id' => $subCombo->id, 'name' => 'Fender Mini Tone Master', 'brand' => 'Fender', 'price' => 59.00, 'discount' => 0, 'stock' => 5, 'stars' => 3, 'image' => 'kombo2.webp']);

        $subAC = Subcategory::where('name', 'akustické')->first();
        Product::create(['subcategory_id' => $subAC->id, 'name' => 'Fender CD-60S Acoustic Guitar', 'brand' => 'Fender', 'price' => 199.00, 'discount' => 0, 'stock' => 10, 'stars' => 4, 'image' => 'ac1.webp']);
        Product::create(['subcategory_id' => $subAC->id, 'name' => 'Pasadena P-12 Acoustic Guitar', 'brand' => 'Pasadena', 'price' => 249.00, 'discount' => 0, 'stock' => 8, 'stars' => 4, 'image' => 'ac2.webp']);
        Product::create(['subcategory_id' => $subAC->id, 'name' => 'Takamine GD20-NS Acoustic Guitar', 'brand' => 'Takamine', 'price' => 279.00, 'discount' => 0, 'stock' => 6, 'stars' => 4, 'image' => 'ac3.webp']);
        Product::create(['subcategory_id' => $subAC->id, 'name' => 'Fender FA-100 Acoustic Guitar', 'brand' => 'Fender', 'price' => 159.00, 'discount' => 0, 'stock' => 12, 'stars' => 4, 'image' => 'ac4.webp']);
        Product::create(['subcategory_id' => $subAC->id, 'name' => 'Pasadena P-15 Acoustic Guitar', 'brand' => 'Pasadena', 'price' => 269.00, 'discount' => 0, 'stock' => 7, 'stars' => 4, 'image' => 'ac5.webp']);
        Product::create(['subcategory_id' => $subAC->id, 'name' => 'Takamine GJ72CE-12 Acoustic Guitar', 'brand' => 'Takamine', 'price' => 349.00, 'discount' => 0, 'stock' => 5, 'stars' => 5, 'image' => 'ac1.webp']);
        Product::create(['subcategory_id' => $subAC->id, 'name' => 'Fender CC-60SCE Acoustic Guitar', 'brand' => 'Fender', 'price' => 249.00, 'discount' => 0, 'stock' => 6, 'stars' => 4, 'image' => 'ac2.webp']);
        Product::create(['subcategory_id' => $subAC->id, 'name' => 'Pasadena P-18 Acoustic Guitar', 'brand' => 'Pasadena', 'price' => 239.00, 'discount' => 0, 'stock' => 9, 'stars' => 4, 'image' => 'ac3.webp']);
        Product::create(['subcategory_id' => $subAC->id, 'name' => 'Takamine EF341SC Acoustic Guitar', 'brand' => 'Takamine', 'price' => 499.00, 'discount' => 0, 'stock' => 3, 'stars' => 5, 'image' => 'ac4.webp']);
        Product::create(['subcategory_id' => $subAC->id, 'name' => 'Fender Redondo Special Acoustic Guitar', 'brand' => 'Fender', 'price' => 379.00, 'discount' => 0, 'stock' => 4, 'stars' => 5, 'image' => 'ac5.webp']);
        Product::create(['subcategory_id' => $subAC->id, 'name' => 'Pasadena P-9 Acoustic Guitar', 'brand' => 'Pasadena', 'price' => 219.00, 'discount' => 0, 'stock' => 10, 'stars' => 4, 'image' => 'ac1.webp']);
        Product::create(['subcategory_id' => $subAC->id, 'name' => 'Takamine P3DC Acoustic Guitar', 'brand' => 'Takamine', 'price' => 799.00, 'discount' => 0, 'stock' => 2, 'stars' => 5, 'image' => 'ac2.webp']);
        Product::create(['subcategory_id' => $subAC->id, 'name' => 'Fender PM-2 Parlor Acoustic Guitar', 'brand' => 'Fender', 'price' => 299.00, 'discount' => 0, 'stock' => 5, 'stars' => 4, 'image' => 'ac3.webp']);
        Product::create(['subcategory_id' => $subAC->id, 'name' => 'Pasadena P-10 Acoustic Guitar', 'brand' => 'Pasadena', 'price' => 189.00, 'discount' => 0, 'stock' => 15, 'stars' => 4, 'image' => 'ac4.webp']);
        Product::create(['subcategory_id' => $subAC->id, 'name' => 'Takamine GN93CE Acoustic Guitar', 'brand' => 'Takamine', 'price' => 399.00, 'discount' => 0, 'stock' => 8, 'stars' => 5, 'image' => 'ac5.webp']);
        Product::create(['subcategory_id' => $subAC->id, 'name' => 'Fender Newporter Special Acoustic Guitar', 'brand' => 'Fender', 'price' => 449.00, 'discount' => 0, 'stock' => 3, 'stars' => 5, 'image' => 'ac1.webp']);
        Product::create(['subcategory_id' => $subAC->id, 'name' => 'Pasadena P-14 Acoustic Guitar', 'brand' => 'Pasadena', 'price' => 259.00, 'discount' => 0, 'stock' => 7, 'stars' => 4, 'image' => 'ac2.webp']);
        Product::create(['subcategory_id' => $subAC->id, 'name' => 'Takamine P1DC Acoustic Guitar', 'brand' => 'Takamine', 'price' => 749.00, 'discount' => 0, 'stock' => 2, 'stars' => 5, 'image' => 'ac3.webp']);
        Product::create(['subcategory_id' => $subAC->id, 'name' => 'Fender Malibu Player Acoustic Guitar', 'brand' => 'Fender', 'price' => 329.00, 'discount' => 0, 'stock' => 4, 'stars' => 4, 'image' => 'ac4.webp']);
        Product::create(['subcategory_id' => $subAC->id, 'name' => 'Pasadena P-16 Acoustic Guitar', 'brand' => 'Pasadena', 'price' => 219.00, 'discount' => 0, 'stock' => 11, 'stars' => 4, 'image' => 'ac5.webp']);

        $subC = Subcategory::where('name', 'klasické')->first();
        Product::create(['subcategory_id' => $subC->id, 'name' => 'Valencia VC203', 'brand' => 'Valencia', 'price' => 110.00, 'discount' => 0, 'stock' => 5, 'stars' => 4, 'image' => 'classic1.webp']);
        Product::create(['subcategory_id' => $subC->id, 'name' => 'Valencia VC104', 'brand' => 'Valencia', 'price' => 150.00, 'discount' => 0, 'stock' => 4, 'stars' => 5, 'image' => 'classic2.webp']);
        Product::create(['subcategory_id' => $subC->id, 'name' => 'Pasadena C-60', 'brand' => 'Pasadena', 'price' => 180.00, 'discount' => 0, 'stock' => 6, 'stars' => 4, 'image' => 'classic3.webp']);
        Product::create(['subcategory_id' => $subC->id, 'name' => 'Pasadena C-90', 'brand' => 'Pasadena', 'price' => 210.00, 'discount' => 0, 'stock' => 3, 'stars' => 5, 'image' => 'classic4.webp']);
        Product::create(['subcategory_id' => $subC->id, 'name' => 'Yamaha C40II', 'brand' => 'Yamaha', 'price' => 180.00, 'discount' => 0, 'stock' => 8, 'stars' => 4, 'image' => 'classic5.webp']);
        Product::create(['subcategory_id' => $subC->id, 'name' => 'Yamaha C70', 'brand' => 'Yamaha', 'price' => 220.00, 'discount' => 0, 'stock' => 7, 'stars' => 5, 'image' => 'classic1.webp']);
        Product::create(['subcategory_id' => $subC->id, 'name' => 'Ortega R121', 'brand' => 'Ortega', 'price' => 250.00, 'discount' => 0, 'stock' => 6, 'stars' => 4, 'image' => 'classic2.webp']);
        Product::create(['subcategory_id' => $subC->id, 'name' => 'Ortega R190', 'brand' => 'Ortega', 'price' => 290.00, 'discount' => 0, 'stock' => 5, 'stars' => 5, 'image' => 'classic3.webp']);
        Product::create(['subcategory_id' => $subC->id, 'name' => 'Valencia VC-100', 'brand' => 'Valencia', 'price' => 130.00, 'discount' => 0, 'stock' => 6, 'stars' => 4, 'image' => 'classic4.webp']);
        Product::create(['subcategory_id' => $subC->id, 'name' => 'Valencia VC-80', 'brand' => 'Valencia', 'price' => 160.00, 'discount' => 0, 'stock' => 5, 'stars' => 4, 'image' => 'classic5.webp']);
        Product::create(['subcategory_id' => $subC->id, 'name' => 'Pasadena C-70', 'brand' => 'Pasadena', 'price' => 200.00, 'discount' => 0, 'stock' => 4, 'stars' => 5, 'image' => 'classic1.webp']);
        Product::create(['subcategory_id' => $subC->id, 'name' => 'Pasadena C-110', 'brand' => 'Pasadena', 'price' => 240.00, 'discount' => 0, 'stock' => 3, 'stars' => 5, 'image' => 'classic2.webp']);
        Product::create(['subcategory_id' => $subC->id, 'name' => 'Yamaha C70', 'brand' => 'Yamaha', 'price' => 260.00, 'discount' => 0, 'stock' => 7, 'stars' => 4, 'image' => 'classic3.webp']);
        Product::create(['subcategory_id' => $subC->id, 'name' => 'Yamaha C80', 'brand' => 'Yamaha', 'price' => 230.00, 'discount' => 0, 'stock' => 6, 'stars' => 5, 'image' => 'classic4.webp']);
        Product::create(['subcategory_id' => $subC->id, 'name' => 'Ortega R152', 'brand' => 'Ortega', 'price' => 320.00, 'discount' => 0, 'stock' => 5, 'stars' => 5, 'image' => 'classic5.webp']);
        Product::create(['subcategory_id' => $subC->id, 'name' => 'Ortega R165', 'brand' => 'Ortega', 'price' => 350.00, 'discount' => 0, 'stock' => 4, 'stars' => 5, 'image' => 'classic1.webp']);
        Product::create(['subcategory_id' => $subC->id, 'name' => 'Valencia VC-120', 'brand' => 'Valencia', 'price' => 180.00, 'discount' => 0, 'stock' => 6, 'stars' => 4, 'image' => 'classic2.webp']);
        Product::create(['subcategory_id' => $subC->id, 'name' => 'Valencia VC-200', 'brand' => 'Valencia', 'price' => 270.00, 'discount' => 0, 'stock' => 3, 'stars' => 5, 'image' => 'classic3.webp']);
        Product::create(['subcategory_id' => $subC->id, 'name' => 'Ortega R122', 'brand' => 'Ortega', 'price' => 270.00, 'discount' => 0, 'stock' => 6, 'stars' => 5, 'image' => 'classic4.webp']);
        Product::create(['subcategory_id' => $subC->id, 'name' => 'Ortega R132', 'brand' => 'Ortega', 'price' => 300.00, 'discount' => 0, 'stock' => 5, 'stars' => 4, 'image' => 'classic5.webp']);
        Product::create(['subcategory_id' => $subC->id, 'name' => 'Valencia VC-250', 'brand' => 'Valencia', 'price' => 280.00, 'discount' => 0, 'stock' => 6, 'stars' => 5, 'image' => 'classic1.webp']);
        Product::create(['subcategory_id' => $subC->id, 'name' => 'Valencia VC-300', 'brand' => 'Valencia', 'price' => 320.00, 'discount' => 0, 'stock' => 4, 'stars' => 4, 'image' => 'classic2.webp']);
        Product::create(['subcategory_id' => $subC->id, 'name' => 'Pasadena C-130', 'brand' => 'Pasadena', 'price' => 290.00, 'discount' => 0, 'stock' => 5, 'stars' => 5, 'image' => 'classic3.webp']);
        Product::create(['subcategory_id' => $subC->id, 'name' => 'Pasadena C-150', 'brand' => 'Pasadena', 'price' => 340.00, 'discount' => 0, 'stock' => 4, 'stars' => 4, 'image' => 'classic4.webp']);
        Product::create(['subcategory_id' => $subC->id, 'name' => 'Yamaha C90', 'brand' => 'Yamaha', 'price' => 350.00, 'discount' => 0, 'stock' => 3, 'stars' => 5, 'image' => 'classic5.webp']);
        Product::create(['subcategory_id' => $subC->id, 'name' => 'Yamaha C120', 'brand' => 'Yamaha', 'price' => 390.00, 'discount' => 0, 'stock' => 4, 'stars' => 4, 'image' => 'classic1.webp']);
        Product::create(['subcategory_id' => $subC->id, 'name' => 'Ortega R182', 'brand' => 'Ortega', 'price' => 320.00, 'discount' => 0, 'stock' => 5, 'stars' => 5, 'image' => 'classic2.webp']);
        Product::create(['subcategory_id' => $subC->id, 'name' => 'Ortega R220', 'brand' => 'Ortega', 'price' => 350.00, 'discount' => 0, 'stock' => 6, 'stars' => 4, 'image' => 'classic3.webp']);
        Product::create(['subcategory_id' => $subC->id, 'name' => 'Valencia VC-500', 'brand' => 'Valencia', 'price' => 360.00, 'discount' => 0, 'stock' => 3, 'stars' => 5, 'image' => 'classic4.webp']);
        Product::create(['subcategory_id' => $subC->id, 'name' => 'Valencia VC-600', 'brand' => 'Valencia', 'price' => 400.00, 'discount' => 0, 'stock' => 2, 'stars' => 4, 'image' => 'classic5.webp']);
        Product::create(['subcategory_id' => $subC->id, 'name' => 'Pasadena C-180', 'brand' => 'Pasadena', 'price' => 380.00, 'discount' => 0, 'stock' => 3, 'stars' => 5, 'image' => 'classic1.webp']);
        Product::create(['subcategory_id' => $subC->id, 'name' => 'Pasadena C-200', 'brand' => 'Pasadena', 'price' => 420.00, 'discount' => 0, 'stock' => 2, 'stars' => 4, 'image' => 'classic2.webp']);
        Product::create(['subcategory_id' => $subC->id, 'name' => 'Yamaha C140', 'brand' => 'Yamaha', 'price' => 410.00, 'discount' => 0, 'stock' => 4, 'stars' => 5, 'image' => 'classic3.webp']);
        Product::create(['subcategory_id' => $subC->id, 'name' => 'Yamaha C160', 'brand' => 'Yamaha', 'price' => 460.00, 'discount' => 0, 'stock' => 2, 'stars' => 4, 'image' => 'classic4.webp']);
        Product::create(['subcategory_id' => $subC->id, 'name' => 'Ortega R252', 'brand' => 'Ortega', 'price' => 480.00, 'discount' => 0, 'stock' => 3, 'stars' => 5, 'image' => 'classic5.webp']);
        Product::create(['subcategory_id' => $subC->id, 'name' => 'Ortega R300', 'brand' => 'Ortega', 'price' => 500.00, 'discount' => 0, 'stock' => 2, 'stars' => 4, 'image' => 'classic1.webp']);


        $products = Product::all();

        foreach ($products as $product) {
            $product->description = $product->name . ' je kvalitná elektro-akustická gitara, ktorá kombinuje klasický dizajn s moderným spracovaním. Jej telo je vyrobené z výberového mahagónu, ktorý zabezpečuje hlboký, bohatý tón s teplými basmi a jasnými výškami. Vrchná doska zo smreku pridáva rezonanciu a dynamiku, vďaka čomu je ideálna pre hráčov všetkých úrovní. Výnimočný sunburst lak dodáva gitare elegantný a nadčasový vzhľad, zatiaľ čo ergonomický výrez umožňuje jednoduchý prístup k vyšším pražcom. Integrovaný predzosilňovač s ekvalizérom a zabudovanou ladičkou zaručuje, že váš zvuk bude vždy presný a vyvážený, či už hráte doma, v štúdiu alebo na pódiu.';
            $product->save();
            if (in_array($product->subcategory->id, [1, 2, 3, 4, 5])) {
                Photo::create([
                    'product_id' => $product->id,
                    'url' => 'detail_1.webp',
                ]);
                Photo::create([
                    'product_id' => $product->id,
                    'url' => 'detail_2.jpg',
                ]);
                Photo::create([
                    'product_id' => $product->id,
                    'url' => 'detail_3.jpg',
                ]);
                Photo::create([
                    'product_id' => $product->id,
                    'url' => 'detail_4.webp',
                ]);
            } elseif (in_array($product->subcategory->id, [6, 7, 8, 9])) {
                Photo::create([
                    'product_id' => $product->id,
                    'url' => 'detailUkulele1.jpeg',
                ]);
                Photo::create([
                    'product_id' => $product->id,
                    'url' => 'detailUkulele2.jpeg',
                    ]);
                Photo::create([
                    'product_id' => $product->id,
                    'url' => 'detailUkulele3.jpeg',
                    ]);
                Photo::create([
                    'product_id' => $product->id,
                    'url' => 'detailUkulele4.jpeg',
                    ]);
            } elseif ($product->subcategory->id == 10) {
                Photo::create([
                    'product_id' => $product->id,
                    'url' => 'detailCombo1.jpeg',
                ]);
                    Photo::create([
                        'product_id' => $product->id,
                        'url' => 'detailCombo2.jpeg',
                    ]);
                    Photo::create([
                        'product_id' => $product->id,
                        'url' => 'detailCombo3.jpeg',
                    ]);
                    Photo::create([
                        'product_id' => $product->id,
                        'url' => 'detailCombo4.jpeg',
                    ]);
                }   elseif ($product->subcategory->id == 11) {
                Photo::create([
                    'product_id' => $product->id,
                    'url' => 'detailPiano1.jpeg',
                ]);
                Photo::create([
                    'product_id' => $product->id,
                    'url' => 'detailPiano2.jpeg',
                ]);
                Photo::create([
                    'product_id' => $product->id,
                    'url' => 'detailPiano3.jpeg',
                ]);
                Photo::create([
                    'product_id' => $product->id,
                    'url' => 'detailPiano4.jpeg',
                ]);
            }elseif ($product->subcategory->id == 12) {
                Photo::create([
                    'product_id' => $product->id,
                    'url' => 'detailPlatna1.jpeg',
                ]);
                Photo::create([
                    'product_id' => $product->id,
                    'url' => 'detailPlatna2.jpeg',
                ]);
                Photo::create([
                    'product_id' => $product->id,
                    'url' => 'detailPlatna3.jpeg',
                ]);
                Photo::create([
                    'product_id' => $product->id,
                    'url' => 'detailPlatna4.jpeg',
                ]);
            }

        }
    }
}
