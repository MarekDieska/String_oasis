<?php

namespace Database\Seeders;

use App\Models\Product;
use App\Models\Subcategory;
use App\Models\Category;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    public function run(): void
    {
        $subE = Subcategory::where('name', 'elektrické')->first();Product::create(['subcategory_id' => $subE->id, 'name' => 'Gibson SG Standard Electric Guitar Heritage Cherry', 'brand' => 'Gibson', 'price' => 1799, 'discount' => 0, 'stock' => 1, 'stars' => 5, 'image' => 'gi1.png',]);
        Product::create(['subcategory_id' => $subE->id, 'name' => 'Fender Squier Affinity Series Stratocaster Lake Placid Blue', 'brand' => 'Fender', 'price' => 233, 'discount' => 0, 'stock' => 1, 'stars' => 3, 'image' => 'g2.png',]);
        Product::create(['subcategory_id' => $subE->id, 'name' => 'Vintage 1963 Gibson Barney Kessel Sunburst Finish', 'brand' => 'Gibson', 'price' => 4999, 'discount' => 0, 'stock' => 1, 'stars' => 5, 'image' => 'g3.png',]);
        Product::create(['subcategory_id' => $subE->id, 'name' => 'Fender American Professional Jazzmaster Silverburst', 'brand' => 'Fender', 'price' => 1899, 'discount' => 0, 'stock' => 1, 'stars' => 4, 'image' => 'g4.png',]);
        Product::create(['subcategory_id' => $subE->id, 'name' => 'Neal Moser Guitar', 'brand' => 'Gibson', 'price' => 650, 'discount' => 0, 'stock' => 1, 'stars' => 5, 'image' => 'g5.png',]);
        Product::create(['subcategory_id' => $subE->id, 'name' => 'James Tyler Classic Burning Water', 'brand' => 'Fender', 'price' => 930, 'discount' => 0, 'stock' => 1, 'stars' => 5, 'image' => 'g6.png',]);
        Product::create(['subcategory_id' => $subE->id, 'name' => 'Fender Vibe Series Custom', 'brand' => 'Fender', 'price' => 1099, 'discount' => 0, 'stock' => 1, 'stars' => 4, 'image' => 'g2.png']);
        Product::create(['subcategory_id' => $subE->id, 'name' => 'Gibson Heritage Supreme Burst', 'brand' => 'Gibson', 'price' => 3299, 'discount' => 0, 'stock' => 1, 'stars' => 5, 'image' => 'g3.png']);
        Product::create(['subcategory_id' => $subE->id, 'name' => 'Ibanez RG Prestige Flame Top', 'brand' => 'Ibanez', 'price' => 879, 'discount' => 0, 'stock' => 1, 'stars' => 4, 'image' => 'g4.png']);
        Product::create(['subcategory_id' => $subE->id, 'name' => 'Pasadena Modern Rocker', 'brand' => 'Pasadena', 'price' => 1340, 'discount' => 0, 'stock' => 1, 'stars' => 3, 'image' => 'g5.png']);
        Product::create(['subcategory_id' => $subE->id, 'name' => 'Fender Shadow Strat', 'brand' => 'Fender', 'price' => 1520, 'discount' => 0, 'stock' => 1, 'stars' => 5, 'image' => 'g6.png']);
        Product::create(['subcategory_id' => $subE->id, 'name' => 'Gibson Les Paul Voodoo', 'brand' => 'Gibson', 'price' => 1890, 'discount' => 0, 'stock' => 1, 'stars' => 5, 'image' => 'g2.png']);
        Product::create(['subcategory_id' => $subE->id, 'name' => 'Ibanez Talman Classic 300', 'brand' => 'Ibanez', 'price' => 970, 'discount' => 0, 'stock' => 1, 'stars' => 4, 'image' => 'g3.png']);
        Product::create(['subcategory_id' => $subE->id, 'name' => 'Pasadena Deluxe 66', 'brand' => 'Pasadena', 'price' => 530, 'discount' => 0, 'stock' => 1, 'stars' => 3, 'image' => 'g4.png']);
        Product::create(['subcategory_id' => $subE->id, 'name' => 'Fender Jazz Fusion Pro', 'brand' => 'Fender', 'price' => 2180, 'discount' => 0, 'stock' => 1, 'stars' => 5, 'image' => 'g5.png']);
        Product::create(['subcategory_id' => $subE->id, 'name' => 'Gibson Firebird Custom 70s', 'brand' => 'Gibson', 'price' => 4100, 'discount' => 0, 'stock' => 1, 'stars' => 5, 'image' => 'g6.png']);
        Product::create(['subcategory_id' => $subE->id, 'name' => 'Ibanez AeroBlaze 100', 'brand' => 'Ibanez', 'price' => 1120, 'discount' => 0, 'stock' => 1, 'stars' => 4, 'image' => 'g2.png']);
        Product::create(['subcategory_id' => $subE->id, 'name' => 'Pasadena RoadRunner Elite', 'brand' => 'Pasadena', 'price' => 870, 'discount' => 0, 'stock' => 1, 'stars' => 4, 'image' => 'g3.png']);
        Product::create(['subcategory_id' => $subE->id, 'name' => 'Fender Sonic Edge', 'brand' => 'Fender', 'price' => 620, 'discount' => 0, 'stock' => 1, 'stars' => 3, 'image' => 'g4.png']);
        Product::create(['subcategory_id' => $subE->id, 'name' => 'Gibson Custom Midnight Sun', 'brand' => 'Gibson', 'price' => 2750, 'discount' => 0, 'stock' => 1, 'stars' => 5, 'image' => 'g5.png']);
        Product::create(['subcategory_id' => $subE->id, 'name' => 'Ibanez Studio Pro Flame', 'brand' => 'Ibanez', 'price' => 1410, 'discount' => 0, 'stock' => 1, 'stars' => 4, 'image' => 'g6.png']);
        Product::create(['subcategory_id' => $subE->id, 'name' => 'Pasadena Retro Classic', 'brand' => 'Pasadena', 'price' => 380, 'discount' => 0, 'stock' => 1, 'stars' => 3, 'image' => 'g2.png']);
        Product::create(['subcategory_id' => $subE->id, 'name' => 'Fender Mirage Jet', 'brand' => 'Fender', 'price' => 960, 'discount' => 0, 'stock' => 1, 'stars' => 4, 'image' => 'g3.png']);
        Product::create(['subcategory_id' => $subE->id, 'name' => 'Gibson Legacy Burst 59', 'brand' => 'Gibson', 'price' => 4999, 'discount' => 0, 'stock' => 1, 'stars' => 5, 'image' => 'g4.png']);
        Product::create(['subcategory_id' => $subE->id, 'name' => 'Ibanez Extreme Curve', 'brand' => 'Ibanez', 'price' => 810, 'discount' => 0, 'stock' => 1, 'stars' => 4, 'image' => 'g5.png']);
        Product::create(['subcategory_id' => $subE->id, 'name' => 'Pasadena Fire Vintage', 'brand' => 'Pasadena', 'price' => 1190, 'discount' => 0, 'stock' => 1, 'stars' => 4, 'image' => 'g6.png']);
        Product::create(['subcategory_id' => $subE->id, 'name' => 'Fender Roadcaster Elite', 'brand' => 'Fender', 'price' => 1580, 'discount' => 0, 'stock' => 1, 'stars' => 5, 'image' => 'g2.png']);
        Product::create(['subcategory_id' => $subE->id, 'name' => 'Gibson Fireburst Limited', 'brand' => 'Gibson', 'price' => 1950, 'discount' => 0, 'stock' => 1, 'stars' => 4, 'image' => 'g3.png']);
        Product::create(['subcategory_id' => $subE->id, 'name' => 'Ibanez SilverEdge 450', 'brand' => 'Ibanez', 'price' => 1450, 'discount' => 0, 'stock' => 1, 'stars' => 4, 'image' => 'g4.png']);
        Product::create(['subcategory_id' => $subE->id, 'name' => 'Pasadena Supernova R2', 'brand' => 'Pasadena', 'price' => 700, 'discount' => 0, 'stock' => 1, 'stars' => 3, 'image' => 'g5.png']);
        Product::create(['subcategory_id' => $subE->id, 'name' => 'Fender Coastal Flame', 'brand' => 'Fender', 'price' => 880, 'discount' => 0, 'stock' => 1, 'stars' => 4, 'image' => 'g6.png']);
        Product::create(['subcategory_id' => $subE->id, 'name' => 'Gibson Raven Custom', 'brand' => 'Gibson', 'price' => 2300, 'discount' => 0, 'stock' => 1, 'stars' => 5, 'image' => 'g2.png']);
        Product::create(['subcategory_id' => $subE->id, 'name' => 'Ibanez Blaze 540 XT', 'brand' => 'Ibanez', 'price' => 920, 'discount' => 0, 'stock' => 1, 'stars' => 4, 'image' => 'g3.png']);
        Product::create(['subcategory_id' => $subE->id, 'name' => 'Pasadena Horizon 3', 'brand' => 'Pasadena', 'price' => 360, 'discount' => 0, 'stock' => 1, 'stars' => 2, 'image' => 'g4.png']);
        Product::create(['subcategory_id' => $subE->id, 'name' => 'Fender Blues Series Supreme', 'brand' => 'Fender', 'price' => 1120, 'discount' => 0, 'stock' => 1, 'stars' => 5, 'image' => 'g5.png']);
        Product::create(['subcategory_id' => $subE->id, 'name' => 'Gibson Angelic Flame 88', 'brand' => 'Gibson', 'price' => 2780, 'discount' => 0, 'stock' => 1, 'stars' => 5, 'image' => 'g6.png']);

        $sub4 = Subcategory::where('name', '4 strunové')->first();
        Product::create(['subcategory_id' => $sub4->id, 'name' => 'Ibanez sr300eb', 'brand' => 'Ibanez', 'price' => 350.51, 'discount' => 0, 'stock' => 1, 'stars' => 5, 'image' => 'b1.png']);
        Product::create(['subcategory_id' => $sub4->id, 'name' => 'Ibanez Sr300e-cub', 'brand' => 'Ibanez', 'price' => 820.40, 'discount' => 0, 'stock' => 1, 'stars' => 4, 'image' => 'b2.png']);
        Product::create(['subcategory_id' => $sub4->id, 'name' => 'ibanez gsrm20bwk mikro', 'brand' => 'Ibanez', 'price' => 240.00, 'discount' => 0, 'stock' => 1, 'stars' => 5, 'image' => 'b3.png']);
        Product::create(['subcategory_id' => $sub4->id, 'name' => 'Ibanez SR300EB', 'brand' => 'Ibanez', 'price' => 360.82, 'discount' => 0, 'stock' => 1, 'stars' => 3, 'image' => 'b4.png']);
        Product::create(['subcategory_id' => $sub4->id, 'name' => 'Ibanez SR180 Bass Guitar', 'brand' => 'Ibanez', 'price' => 1800.20, 'discount' => 0, 'stock' => 1, 'stars' => 5, 'image' => 'b5.png']);
        Product::create(['subcategory_id' => $sub4->id, 'name' => 'Yamaha TRBX174EW', 'brand' => 'Yamaha', 'price' => 212.21, 'discount' => 0, 'stock' => 1, 'stars' => 4, 'image' => 'b6.png']);
        Product::create(['subcategory_id' => $sub4->id, 'name' => 'Yamaha TRBX174EW', 'brand' => 'Yamaha', 'price' => 122.22, 'discount' => 0, 'stock' => 1, 'stars' => 3, 'image' => 'b7.png']);
        Product::create(['subcategory_id' => $sub4->id, 'name' => 'Yamaha BB434 Bass ', 'brand' => 'Yamaha', 'price' => 821.31, 'discount' => 0, 'stock' => 1, 'stars' => 5, 'image' => 'b8.png']);
        Product::create(['subcategory_id' => $sub4->id, 'name' => 'Yamaha StageBass 336', 'brand' => 'Yamaha', 'price' => 1500.80, 'discount' => 0, 'stock' => 1, 'stars' => 3, 'image' => 'b1.png']);
        Product::create(['subcategory_id' => $sub4->id, 'name' => 'Ibanez SoundGear 109', 'brand' => 'Ibanez', 'price' => 2016.36, 'discount' => 0, 'stock' => 1, 'stars' => 4, 'image' => 'b2.png']);
        Product::create(['subcategory_id' => $sub4->id, 'name' => 'Yamaha TRBX 494', 'brand' => 'Yamaha', 'price' => 918.55, 'discount' => 0, 'stock' => 1, 'stars' => 5, 'image' => 'b3.png']);
        Product::create(['subcategory_id' => $sub4->id, 'name' => 'Ibanez SoundGear 359', 'brand' => 'Ibanez', 'price' => 1773.34, 'discount' => 0, 'stock' => 1, 'stars' => 4, 'image' => 'b4.png']);
        Product::create(['subcategory_id' => $sub4->id, 'name' => 'Yamaha TRBX 961', 'brand' => 'Yamaha', 'price' => 1224.76, 'discount' => 0, 'stock' => 1, 'stars' => 4, 'image' => 'b5.png']);
        Product::create(['subcategory_id' => $sub4->id, 'name' => 'Yamaha BBXtreme 411', 'brand' => 'Yamaha', 'price' => 976.65, 'discount' => 0, 'stock' => 1, 'stars' => 3, 'image' => 'b6.png']);
        Product::create(['subcategory_id' => $sub4->id, 'name' => 'Yamaha TRBX 333', 'brand' => 'Yamaha', 'price' => 443.87, 'discount' => 0, 'stock' => 1, 'stars' => 2, 'image' => 'b7.png']);
        Product::create(['subcategory_id' => $sub4->id, 'name' => 'Fender RoadWorn 584', 'brand' => 'Fender', 'price' => 892.25, 'discount' => 0, 'stock' => 1, 'stars' => 5, 'image' => 'b8.png']);
        Product::create(['subcategory_id' => $sub4->id, 'name' => 'Ibanez TerraBass 993', 'brand' => 'Ibanez', 'price' => 1060.19, 'discount' => 0, 'stock' => 1, 'stars' => 5, 'image' => 'b1.png']);
        Product::create(['subcategory_id' => $sub4->id, 'name' => 'Gibson FireBass 855', 'brand' => 'Gibson', 'price' => 560.70, 'discount' => 0, 'stock' => 1, 'stars' => 4, 'image' => 'b2.png']);
        Product::create(['subcategory_id' => $sub4->id, 'name' => 'Fender RoadWorn 776', 'brand' => 'Fender', 'price' => 1486.24, 'discount' => 0, 'stock' => 1, 'stars' => 5, 'image' => 'b3.png']);
        Product::create(['subcategory_id' => $sub4->id, 'name' => 'Yamaha TRBX 986', 'brand' => 'Yamaha', 'price' => 1595.56, 'discount' => 0, 'stock' => 1, 'stars' => 3, 'image' => 'b4.png']);
        Product::create(['subcategory_id' => $sub4->id, 'name' => 'Fender JazzPro 623', 'brand' => 'Fender', 'price' => 609.19, 'discount' => 0, 'stock' => 1, 'stars' => 1, 'image' => 'b5.png']);
        Product::create(['subcategory_id' => $sub4->id, 'name' => 'Gibson Thunderbird 162', 'brand' => 'Gibson', 'price' => 100.00, 'discount' => 0, 'stock' => 1, 'stars' => 5, 'image' => 'b6.png']);
        Product::create(['subcategory_id' => $sub4->id, 'name' => 'Yamaha PulseCore 895', 'brand' => 'Yamaha', 'price' => 932.44, 'discount' => 0, 'stock' => 1, 'stars' => 4, 'image' => 'b7.png']);
        Product::create(['subcategory_id' => $sub4->id, 'name' => 'Ibanez SoundGear 390', 'brand' => 'Ibanez', 'price' => 1250.26, 'discount' => 0, 'stock' => 1, 'stars' => 1, 'image' => 'b8.png']);
        Product::create(['subcategory_id' => $sub4->id, 'name' => 'Yamaha BBXtreme 813', 'brand' => 'Yamaha', 'price' => 1454.36, 'discount' => 0, 'stock' => 1, 'stars' => 2, 'image' => 'b1.png']);
        Product::create(['subcategory_id' => $sub4->id, 'name' => 'Yamaha BBXtreme 104', 'brand' => 'Yamaha', 'price' => 303.60, 'discount' => 0, 'stock' => 1, 'stars' => 4, 'image' => 'b2.png']);
        Product::create(['subcategory_id' => $sub4->id, 'name' => 'Gibson EB 690', 'brand' => 'Gibson', 'price' => 1223.34, 'discount' => 0, 'stock' => 1, 'stars' => 5, 'image' => 'b3.png']);
        Product::create(['subcategory_id' => $sub4->id, 'name' => 'Squier RetroTone 239', 'brand' => 'Squier', 'price' => 1104.87, 'discount' => 0, 'stock' => 1, 'stars' => 3, 'image' => 'b4.png']);
        Product::create(['subcategory_id' => $sub4->id, 'name' => 'Gibson Thunderbird 459', 'brand' => 'Gibson', 'price' => 1042.61, 'discount' => 0, 'stock' => 1, 'stars' => 5, 'image' => 'b5.png']);
        Product::create(['subcategory_id' => $sub4->id, 'name' => 'Gibson GrooveLuxe 482', 'brand' => 'Gibson', 'price' => 100.00, 'discount' => 0, 'stock' => 1, 'stars' => 3, 'image' => 'b6.png']);
        Product::create(['subcategory_id' => $sub4->id, 'name' => 'Fender RoadWorn 450', 'brand' => 'Fender', 'price' => 1174.93, 'discount' => 0, 'stock' => 1, 'stars' => 1, 'image' => 'b7.png']);
        Product::create(['subcategory_id' => $sub4->id, 'name' => 'Gibson EB 252', 'brand' => 'Gibson', 'price' => 1392.93, 'discount' => 0, 'stock' => 1, 'stars' => 1, 'image' => 'b8.png']);
        Product::create(['subcategory_id' => $sub4->id, 'name' => 'Squier RetroTone 683', 'brand' => 'Squier', 'price' => 842.68, 'discount' => 0, 'stock' => 1, 'stars' => 3, 'image' => 'b1.png']);
        Product::create(['subcategory_id' => $sub4->id, 'name' => 'Squier ClassicVibe 140', 'brand' => 'Squier', 'price' => 852.52, 'discount' => 0, 'stock' => 1, 'stars' => 5, 'image' => 'b2.png']);
        Product::create(['subcategory_id' => $sub4->id, 'name' => 'Yamaha PulseCore 642', 'brand' => 'Yamaha', 'price' => 260.31, 'discount' => 0, 'stock' => 1, 'stars' => 5, 'image' => 'b3.png']);
        Product::create(['subcategory_id' => $sub4->id, 'name' => 'Yamaha TRBX174', 'brand' => 'Yamaha', 'price' => 110.21, 'discount' => 0, 'stock' => 1, 'stars' => 5, 'image' => 'b4.png']);
        Product::create(['subcategory_id' => $sub4->id, 'name' => 'Ibanez ArtCore 815', 'brand' => 'Ibanez', 'price' => 1492.09, 'discount' => 0, 'stock' => 1, 'stars' => 3, 'image' => 'b5.png']);
        Product::create(['subcategory_id' => $sub4->id, 'name' => 'Yamaha StageBass 578', 'brand' => 'Yamaha', 'price' => 1129.75, 'discount' => 0, 'stock' => 1, 'stars' => 3, 'image' => 'b6.png']);
        Product::create(['subcategory_id' => $sub4->id, 'name' => 'Yamaha BBXtreme 373', 'brand' => 'Yamaha', 'price' => 429.05, 'discount' => 0, 'stock' => 1, 'stars' => 4, 'image' => 'b7.png']);

        $subPlatne = Category::where('name', 'Platne')->first()->subcategories()->first();
        Product::create(['subcategory_id' => $subPlatne->id, 'name' => 'Celestial Harmonies - Ethereal Soundscapes', 'brand' => 'Starlight Records', 'price' => 35.99, 'discount' => 0, 'stock' => 1, 'stars' => 4, 'image' => 'p1.png']);
        Product::create(['subcategory_id' => $subPlatne->id, 'name' => 'Urban Beatdown - Hip Hop Anthology', 'brand' => 'Groove Masters', 'price' => 29.95, 'discount' => 0, 'stock' => 1, 'stars' => 4, 'image' => 'p2.png']);
        Product::create(['subcategory_id' => $subPlatne->id, 'name' => 'Indie Spectrum - Alternative Explorations', 'brand' => 'Sonic Sounds', 'price' => 24.50, 'discount' => 0, 'stock' => 1, 'stars' => 3, 'image' => 'p3.png']);
        Product::create(['subcategory_id' => $subPlatne->id, 'name' => 'Acoustic Serenity - Unplugged Collection', 'brand' => 'Harmony House', 'price' => 42.00, 'discount' => 0, 'stock' => 1, 'stars' => 5, 'image' => 'p4.png']);
        Product::create(['subcategory_id' => $subPlatne->id, 'name' => 'Funky Fusion - Jazz & Groove Revolution', 'brand' => 'Rhythm Nation', 'price' => 38.75, 'discount' => 0, 'stock' => 1, 'stars' => 4, 'image' => 'p5.png']);
        Product::create(['subcategory_id' => $subPlatne->id, 'name' => 'Digital Frontier - Electronic Odyssey', 'brand' => 'Starlight Records', 'price' => 55.00, 'discount' => 0, 'stock' => 1, 'stars' => 4, 'image' => 'p6.png']);
        Product::create(['subcategory_id' => $subPlatne->id, 'name' => 'Blues Legacy - Roots & Revival', 'brand' => 'Groove Masters', 'price' => 32.25, 'discount' => 0, 'stock' => 1, 'stars' => 4, 'image' => 'p7.png']);
        Product::create(['subcategory_id' => $subPlatne->id, 'name' => 'World Rhythms - Global Soundscapes', 'brand' => 'Sonic Sounds', 'price' => 48.00, 'discount' => 0, 'stock' => 1, 'stars' => 5, 'image' => 'p8.png']);
        Product::create(['subcategory_id' => $subPlatne->id, 'name' => 'Classic Harmony - Orchestral Masterpieces', 'brand' => 'Harmony House', 'price' => 62.00, 'discount' => 0, 'stock' => 1, 'stars' => 5, 'image' => 'p9.png']);
        Product::create(['subcategory_id' => $subPlatne->id, 'name' => 'Power Ballads - The Rock Anthems', 'brand' => 'Rhythm Nation', 'price' => 28.00, 'discount' => 0, 'stock' => 1, 'stars' => 4, 'image' => 'p1.png']);
        Product::create(['subcategory_id' => $subPlatne->id, 'name' => 'Mellow Vibes - Lo-Fi Beats', 'brand' => 'Starlight Records', 'price' => 22.00, 'discount' => 0, 'stock' => 1, 'stars' => 3, 'image' => 'p2.png']);
        Product::create(['subcategory_id' => $subPlatne->id, 'name' => 'Country Roads - Americana Collection', 'brand' => 'Groove Masters', 'price' => 39.50, 'discount' => 0, 'stock' => 1, 'stars' => 4, 'image' => 'p3.png']);
        Product::create(['subcategory_id' => $subPlatne->id, 'name' => 'Reggae Sunsplash - Island Grooves', 'brand' => 'Sonic Sounds', 'price' => 33.80, 'discount' => 0, 'stock' => 1, 'stars' => 4, 'image' => 'p4.png']);
        Product::create(['subcategory_id' => $subPlatne->id, 'name' => 'Gothic Symphony - Dark Wave', 'brand' => 'Harmony House', 'price' => 45.20, 'discount' => 0, 'stock' => 1, 'stars' => 4, 'image' => 'p5.png']);
        Product::create(['subcategory_id' => $subPlatne->id, 'name' => 'Disco Fever - Dancefloor Classics', 'brand' => 'Rhythm Nation', 'price' => 31.10, 'discount' => 0, 'stock' => 1, 'stars' => 5, 'image' => 'p6.png']);
        Product::create(['subcategory_id' => $subPlatne->id, 'name' => 'Jazzy Lounge - Cocktail Hour', 'brand' => 'Starlight Records', 'price' => 27.60, 'discount' => 0, 'stock' => 1, 'stars' => 3, 'image' => 'p7.png']);
        Product::create(['subcategory_id' => $subPlatne->id, 'name' => 'Latin Fire - Salsa & Mambo', 'brand' => 'Groove Masters', 'price' => 41.30, 'discount' => 0, 'stock' => 1, 'stars' => 4, 'image' => 'p8.png']);
        Product::create(['subcategory_id' => $subPlatne->id, 'name' => 'Ambient Visions - Tranquil Soundscapes', 'brand' => 'Sonic Sounds', 'price' => 52.80, 'discount' => 0, 'stock' => 1, 'stars' => 4, 'image' => 'p9.png']);
        Product::create(['subcategory_id' => $subPlatne->id, 'name' => 'Bluegrass Journey - Appalachian Sounds', 'brand' => 'Harmony House', 'price' => 36.55, 'discount' => 0, 'stock' => 1, 'stars' => 4, 'image' => 'p1.png']);
        Product::create(['subcategory_id' => $subPlatne->id, 'name' => 'Celtic Dreams - Mystical Melodies', 'brand' => 'Rhythm Nation', 'price' => 44.90, 'discount' => 0, 'stock' => 1, 'stars' => 5, 'image' => 'p2.png']);
        Product::create(['subcategory_id' => $subPlatne->id, 'name' => 'Hard Rock Heroes - Guitar Legends', 'brand' => 'Starlight Records', 'price' => 30.40, 'discount' => 0, 'stock' => 1, 'stars' => 4, 'image' => 'p3.png']);
        Product::create(['subcategory_id' => $subPlatne->id, 'name' => 'Soulful Voices - R&B Divas', 'brand' => 'Groove Masters', 'price' => 29.20, 'discount' => 0, 'stock' => 1, 'stars' => 4, 'image' => 'p4.png']);
        Product::create(['subcategory_id' => $subPlatne->id, 'name' => 'Experimental Noise - Avant-Garde Sounds', 'brand' => 'Sonic Sounds', 'price' => 47.10, 'discount' => 0, 'stock' => 1, 'stars' => 3, 'image' => 'p5.png']);
        Product::create(['subcategory_id' => $subPlatne->id, 'name' => '80s Rewind - Synth Pop Hits', 'brand' => 'Harmony House', 'price' => 33.00, 'discount' => 0, 'stock' => 1, 'stars' => 5, 'image' => 'p6.png']);
        Product::create(['subcategory_id' => $subPlatne->id, 'name' => 'World Percussion - Tribal Rhythms', 'brand' => 'Rhythm Nation', 'price' => 40.60, 'discount' => 0, 'stock' => 1, 'stars' => 4, 'image' => 'p7.png']);
        Product::create(['subcategory_id' => $subPlatne->id, 'name' => 'Opera Gala - Vocal Masterpieces', 'brand' => 'Starlight Records', 'price' => 58.30, 'discount' => 0, 'stock' => 1, 'stars' => 5, 'image' => 'p8.png']);
        Product::create(['subcategory_id' => $subPlatne->id, 'name' => 'Country Classics - Honky Tonk Heroes', 'brand' => 'Groove Masters', 'price' => 31.80, 'discount' => 0, 'stock' => 1, 'stars' => 4, 'image' => 'p9.png']);

        $subUkulele = Subcategory::where('name', 'ukulele')->first();
        Product::create(['subcategory_id' => $subUkulele->id, 'name' => 'Soprano Ukulele - Natural Finish', 'brand' => 'Island Strings', 'price' => 65.00, 'discount' => 0, 'stock' => 5, 'stars' => 4]);
        Product::create(['subcategory_id' => $subUkulele->id, 'name' => 'Concert Ukulele - Mahogany Body', 'brand' => 'Coastal Tunes', 'price' => 89.00, 'discount' => 0, 'stock' => 3, 'stars' => 4]);
        Product::create(['subcategory_id' => $subUkulele->id, 'name' => 'Tenor Ukulele - Koa Wood', 'brand' => 'Pacific Harmonics', 'price' => 120.00, 'discount' => 0, 'stock' => 2, 'stars' => 5]);
        Product::create(['subcategory_id' => $subUkulele->id, 'name' => 'Baritone Ukulele - Spruce Top', 'brand' => 'Mountain Song', 'price' => 105.00, 'discount' => 0, 'stock' => 4, 'stars' => 4]);
        Product::create(['subcategory_id' => $subUkulele->id, 'name' => 'Soprano Ukulele - Blue Burst', 'brand' => 'Kona Coast', 'price' => 75.00, 'discount' => 0, 'stock' => 6, 'stars' => 3]);
        Product::create(['subcategory_id' => $subUkulele->id, 'name' => 'Concert Ukulele - Flame Maple', 'brand' => 'Island Strings', 'price' => 105.00, 'discount' => 0, 'stock' => 2, 'stars' => 4]);
        Product::create(['subcategory_id' => $subUkulele->id, 'name' => 'Tenor Ukulele - Solid Cedar', 'brand' => 'Coastal Tunes', 'price' => 140.00, 'discount' => 0, 'stock' => 1, 'stars' => 5]);
        Product::create(['subcategory_id' => $subUkulele->id, 'name' => 'Baritone Ukulele - Rosewood', 'brand' => 'Pacific Harmonics', 'price' => 130.00, 'discount' => 0, 'stock' => 3, 'stars' => 4]);
        Product::create(['subcategory_id' => $subUkulele->id, 'name' => 'Soprano Ukulele - Pineapple Shape', 'brand' => 'Mountain Song', 'price' => 80.00, 'discount' => 0, 'stock' => 5, 'stars' => 4]);
        Product::create(['subcategory_id' => $subUkulele->id, 'name' => 'Concert Ukulele - Sunburst Finish', 'brand' => 'Kona Coast', 'price' => 95.00, 'discount' => 0, 'stock' => 4, 'stars' => 3]);
        Product::create(['subcategory_id' => $subUkulele->id, 'name' => 'Tenor Ukulele - Cutaway Acoustic-Electric', 'brand' => 'Island Strings', 'price' => 170.00, 'discount' => 0, 'stock' => 1, 'stars' => 4]);
        Product::create(['subcategory_id' => $subUkulele->id, 'name' => 'Baritone Ukulele - Mahogany/Spruce', 'brand' => 'Coastal Tunes', 'price' => 120.00, 'discount' => 0, 'stock' => 2, 'stars' => 4]);
        Product::create(['subcategory_id' => $subUkulele->id, 'name' => 'Soprano Ukulele - Long Neck', 'brand' => 'Pacific Harmonics', 'price' => 90.00, 'discount' => 0, 'stock' => 3, 'stars' => 4]);
        Product::create(['subcategory_id' => $subUkulele->id, 'name' => 'Concert Ukulele - Ovangkol', 'brand' => 'Mountain Song', 'price' => 110.00, 'discount' => 0, 'stock' => 2, 'stars' => 5]);
        Product::create(['subcategory_id' => $subUkulele->id, 'name' => 'Tenor Ukulele - Abalone Inlay', 'brand' => 'Kona Coast', 'price' => 155.00, 'discount' => 0, 'stock' => 1, 'stars' => 4]);
        Product::create(['subcategory_id' => $subUkulele->id, 'name' => 'Baritone Ukulele - All Solid Mahogany', 'brand' => 'Island Strings', 'price' => 145.00, 'discount' => 0, 'stock' => 1, 'stars' => 5]);
        Product::create(['subcategory_id' => $subUkulele->id, 'name' => 'Soprano Ukulele - Red Cedar Top', 'brand' => 'Coastal Tunes', 'price' => 85.00, 'discount' => 0, 'stock' => 3, 'stars' => 4]);
        Product::create(['subcategory_id' => $subUkulele->id, 'name' => 'Concert Ukulele - Ziricote', 'brand' => 'Pacific Harmonics', 'price' => 125.00, 'discount' => 0, 'stock' => 2, 'stars' => 4]);
        Product::create(['subcategory_id' => $subUkulele->id, 'name' => 'Tenor Ukulele - Slotted Headstock', 'brand' => 'Mountain Song', 'price' => 135.00, 'discount' => 0, 'stock' => 1, 'stars' => 4]);
        Product::create(['subcategory_id' => $subUkulele->id, 'name' => 'Baritone Ukulele - Figured Koa', 'brand' => 'Kona Coast', 'price' => 160.00, 'discount' => 0, 'stock' => 1, 'stars' => 5]);
        Product::create(['subcategory_id' => $subUkulele->id, 'name' => 'Soprano Ukulele - Vintage Style', 'brand' => 'Island Strings', 'price' => 70.00, 'discount' => 0, 'stock' => 4, 'stars' => 3]);
        Product::create(['subcategory_id' => $subUkulele->id, 'name' => 'Concert Ukulele - Thin Body', 'brand' => 'Coastal Tunes', 'price' => 98.00, 'discount' => 0, 'stock' => 3, 'stars' => 4]);
        Product::create(['subcategory_id' => $subUkulele->id, 'name' => 'Tenor Ukulele - Hawaiian Islands Inlay', 'brand' => 'Pacific Harmonics', 'price' => 175.00, 'discount' => 0, 'stock' => 1, 'stars' => 5]);
        Product::create(['subcategory_id' => $subUkulele->id, 'name' => 'Baritone Ukulele - Walnut Back and Sides', 'brand' => 'Mountain Song', 'price' => 125.00, 'discount' => 0, 'stock' => 2, 'stars' => 4]);
        Product::create(['subcategory_id' => $subUkulele->id, 'name' => 'Soprano Ukulele - Zebrawood', 'brand' => 'Kona Coast', 'price' => 78.00, 'discount' => 0, 'stock' => 5, 'stars' => 4]);
        Product::create(['subcategory_id' => $subUkulele->id, 'name' => 'Concert Ukulele - Left-Handed', 'brand' => 'Island Strings', 'price' => 110.00, 'discount' => 0, 'stock' => 1, 'stars' => 4]);
        Product::create(['subcategory_id' => $subUkulele->id, 'name' => 'Tenor Ukulele - 8-String', 'brand' => 'Coastal Tunes', 'price' => 165.00, 'discount' => 0, 'stock' => 2, 'stars' => 4]);
        Product::create(['subcategory_id' => $subUkulele->id, 'name' => 'Baritone Ukulele - Cutaway Acoustic-Electric', 'brand' => 'Pacific Harmonics', 'price' => 180.00, 'discount' => 0, 'stock' => 1, 'stars' => 5]);
        Product::create(['subcategory_id' => $subUkulele->id, 'name' => 'Soprano Ukulele - Solid Mahogany Top', 'brand' => 'Mountain Song', 'price' => 92.00, 'discount' => 0, 'stock' => 3, 'stars' => 4]);
        Product::create(['subcategory_id' => $subUkulele->id, 'name' => 'Concert Ukulele - Koa Top', 'brand' => 'Kona Coast', 'price' => 130.00, 'discount' => 0, 'stock' => 2, 'stars' => 5]);
        Product::create(['subcategory_id' => $subUkulele->id, 'name' => 'Tenor Ukulele - Thinline', 'brand' => 'Island Strings', 'price' => 150.00, 'discount' => 0, 'stock' => 3, 'stars' => 4]);
        Product::create(['subcategory_id' => $subUkulele->id, 'name' => 'Baritone Ukulele - 5-String', 'brand' => 'Coastal Tunes', 'price' => 170.00, 'discount' => 0, 'stock' => 1, 'stars' => 4]);
        Product::create(['subcategory_id' => $subUkulele->id, 'name' => 'Soprano Ukulele - Travel Ukulele', 'brand' => 'Pacific Harmonics', 'price' => 100.00, 'discount' => 0, 'stock' => 4, 'stars' => 4]);
        Product::create(['subcategory_id' => $subUkulele->id, 'name' => 'Concert Ukulele - Resonator', 'brand' => 'Mountain Song', 'price' => 200.00, 'discount' => 0, 'stock' => 1, 'stars' => 5]);
        Product::create(['subcategory_id' => $subUkulele->id, 'name' => 'Tenor Ukulele - Baritone Scale', 'brand' => 'Kona Coast', 'price' => 140.00, 'discount' => 0, 'stock' => 2, 'stars' => 4]);
        Product::create(['subcategory_id' => $subUkulele->id, 'name' => 'Baritone Ukulele - Solid Rosewood', 'brand' => 'Island Strings', 'price' => 155.00, 'discount' => 0, 'stock' => 1, 'stars' => 5]);
        Product::create(['subcategory_id' => $subUkulele->id, 'name' => 'Soprano Ukulele - Solid Koa', 'brand' => 'Coastal Tunes', 'price' => 110.00, 'discount' => 0, 'stock' => 2, 'stars' => 5]);
        Product::create(['subcategory_id' => $subUkulele->id, 'name' => 'Concert Ukulele - Extended Range', 'brand' => 'Pacific Harmonics', 'price' => 130.00, 'discount' => 0, 'stock' => 3, 'stars' => 4]);
        Product::create(['subcategory_id' => $subUkulele->id, 'name' => 'Tenor Ukulele - Premium Koa', 'brand' => 'Mountain Song', 'price' => 190.00, 'discount' => 0, 'stock' => 1, 'stars' => 5]);
        Product::create(['subcategory_id' => $subUkulele->id, 'name' => 'Baritone Ukulele - Left-Handed', 'brand' => 'Kona Coast', 'price' => 165.00, 'discount' => 0, 'stock' => 1, 'stars' => 4]);


        $subBanjo = Subcategory::where('name', 'banjo')->first();
        Product::create(['subcategory_id' => $subBanjo->id, 'name' => '5-String Banjo - Mahogany', 'brand' => 'Bluegrass Banjos', 'price' => 299.00, 'discount' => 0, 'stock' => 4, 'stars' => 4]);
        Product::create(['subcategory_id' => $subBanjo->id, 'name' => 'Resonator Banjo - Maple', 'brand' => 'Appalachian Strings', 'price' => 429.00, 'discount' => 0, 'stock' => 2, 'stars' => 5]);
        Product::create(['subcategory_id' => $subBanjo->id, 'name' => 'Open-Back Banjo - Walnut', 'brand' => 'Folk Instruments', 'price' => 349.00, 'discount' => 0, 'stock' => 3, 'stars' => 4]);
        Product::create(['subcategory_id' => $subBanjo->id, 'name' => 'Tenor Banjo - 4-String', 'brand' => 'Celtic Melodies', 'price' => 379.00, 'discount' => 0, 'stock' => 1, 'stars' => 4]);
        Product::create(['subcategory_id' => $subBanjo->id, 'name' => '6-String Banjo Guitar - Mahogany', 'brand' => 'Harmony Banjos', 'price' => 399.00, 'discount' => 0, 'stock' => 2, 'stars' => 4]);

        Product::create(['subcategory_id' => $subBanjo->id, 'name' => '5-String Banjo - Rosewood', 'brand' => 'Bluegrass Banjos', 'price' => 329.00, 'discount' => 0, 'stock' => 3, 'stars' => 4]);
        Product::create(['subcategory_id' => $subBanjo->id, 'name' => 'Resonator Banjo - Quilted Maple', 'brand' => 'Appalachian Strings', 'price' => 549.00, 'discount' => 0, 'stock' => 1, 'stars' => 5]);
        Product::create(['subcategory_id' => $subBanjo->id, 'name' => 'Open-Back Banjo - Cherry', 'brand' => 'Folk Instruments', 'price' => 379.00, 'discount' => 0, 'stock' => 2, 'stars' => 4]);
        Product::create(['subcategory_id' => $subBanjo->id, 'name' => 'Tenor Banjo - 19-Fret', 'brand' => 'Celtic Melodies', 'price' => 409.00, 'discount' => 0, 'stock' => 1, 'stars' => 4]);
        Product::create(['subcategory_id' => $subBanjo->id, 'name' => '6-String Banjo Guitar - Sunburst', 'brand' => 'Harmony Banjos', 'price' => 429.00, 'discount' => 0, 'stock' => 3, 'stars' => 4]);

        Product::create(['subcategory_id' => $subBanjo->id, 'name' => '5-String Banjo - Beginner', 'brand' => 'Bluegrass Banjos', 'price' => 249.00, 'discount' => 0, 'stock' => 5, 'stars' => 3]);
        Product::create(['subcategory_id' => $subBanjo->id, 'name' => 'Resonator Banjo - Deluxe', 'brand' => 'Appalachian Strings', 'price' => 629.00, 'discount' => 0, 'stock' => 2, 'stars' => 5]);
        Product::create(['subcategory_id' => $subBanjo->id, 'name' => 'Open-Back Banjo - A-Scale', 'brand' => 'Folk Instruments', 'price' => 399.00, 'discount' => 0, 'stock' => 3, 'stars' => 4]);
        Product::create(['subcategory_id' => $subBanjo->id, 'name' => 'Tenor Banjo - Irish Tuning', 'brand' => 'Celtic Melodies', 'price' => 439.00, 'discount' => 0, 'stock' => 2, 'stars' => 4]);
        Product::create(['subcategory_id' => $subBanjo->id, 'name' => '6-String Banjo Guitar - Acoustic-Electric', 'brand' => 'Harmony Banjos', 'price' => 479.00, 'discount' => 0, 'stock' => 4, 'stars' => 4]);

        Product::create(['subcategory_id' => $subBanjo->id, 'name' => '5-String Banjo - Bluegrass Special', 'brand' => 'Bluegrass Banjos', 'price' => 379.00, 'discount' => 0, 'stock' => 3, 'stars' => 4]);
        Product::create(['subcategory_id' => $subBanjo->id, 'name' => 'Resonator Banjo - Flying Eagle Inlay', 'brand' => 'Appalachian Strings', 'price' => 799.00, 'discount' => 0, 'stock' => 1, 'stars' => 5]);
        Product::create(['subcategory_id' => $subBanjo->id, 'name' => 'Open-Back Banjo - Whyte Laydie Tone Ring', 'brand' => 'Folk Instruments', 'price' => 449.00, 'discount' => 0, 'stock' => 2, 'stars' => 5]);
        Product::create(['subcategory_id' => $subBanjo->id, 'name' => 'Tenor Banjo - Plectrum', 'brand' => 'Celtic Melodies', 'price' => 429.00, 'discount' => 0, 'stock' => 2, 'stars' => 4]);
        Product::create(['subcategory_id' => $subBanjo->id, 'name' => '6-String Banjo Guitar - 12-String', 'brand' => 'Harmony Banjos', 'price' => 529.00, 'discount' => 0, 'stock' => 3, 'stars' => 4]);

        Product::create(['subcategory_id' => $subBanjo->id, 'name' => '5-String Banjo - Mahogany Neck', 'brand' => 'Bluegrass Banjos', 'price' => 319.00, 'discount' => 0, 'stock' => 4, 'stars' => 4]);
        Product::create(['subcategory_id' => $subBanjo->id, 'name' => 'Resonator Banjo - Hearts and Flowers Inlay', 'brand' => 'Appalachian Strings', 'price' => 699.00, 'discount' => 0, 'stock' => 1, 'stars' => 5]);
        Product::create(['subcategory_id' => $subBanjo->id, 'name' => 'Open-Back Banjo - Rolled Brass Tone Ring', 'brand' => 'Folk Instruments', 'price' => 419.00, 'discount' => 0, 'stock' => 3, 'stars' => 4]);
        Product::create(['subcategory_id' => $subBanjo->id, 'name' => 'Tenor Banjo - Standard', 'brand' => 'Celtic Melodies', 'price' => 389.00, 'discount' => 0, 'stock' => 3, 'stars' => 4]);
        Product::create(['subcategory_id' => $subBanjo->id, 'name' => '6-String Banjo Guitar - Left Handed', 'brand' => 'Harmony Banjos', 'price' => 499.00, 'discount' => 0, 'stock' => 2, 'stars' => 4]);

        Product::create(['subcategory_id' => $subBanjo->id, 'name' => '5-String Banjo - Chrome Hardware', 'brand' => 'Bluegrass Banjos', 'price' => 289.00, 'discount' => 0, 'stock' => 5, 'stars' => 3]);
        Product::create(['subcategory_id' => $subBanjo->id, 'name' => 'Resonator Banjo - Tiger Stripe Maple', 'brand' => 'Appalachian Strings', 'price' => 579.00, 'discount' => 0, 'stock' => 2, 'stars' => 4]);
        Product::create(['subcategory_id' => $subBanjo->id, 'name' => 'Open-Back Banjo - Dobson Tone Ring', 'brand' => 'Folk Instruments', 'price' => 469.00, 'discount' => 0, 'stock' => 1, 'stars' => 5]);
        Product::create(['subcategory_id' => $subBanjo->id, 'name' => 'Tenor Banjo - Jazz Model', 'brand' => 'Celtic Melodies', 'price' => 459.00, 'discount' => 0, 'stock' => 2, 'stars' => 4]);
        Product::create(['subcategory_id' => $subBanjo->id, 'name' => '6-String Banjo Guitar - Baritone', 'brand' => 'Harmony Banjos', 'price' => 549.00, 'discount' => 0, 'stock' => 3, 'stars' => 4]);

        Product::create(['subcategory_id' => $subBanjo->id, 'name' => '5-String Banjo - Geared Tuners', 'brand' => 'Bluegrass Banjos', 'price' => 279.00, 'discount' => 0, 'stock' => 6, 'stars' => 4]);
        Product::create(['subcategory_id' => $subBanjo->id, 'name' => 'Resonator Banjo - Abalone Binding', 'brand' => 'Appalachian Strings', 'price' => 649.00, 'discount' => 0, 'stock' => 1, 'stars' => 5]);
        Product::create(['subcategory_id' => $subBanjo->id, 'name' => 'Open-Back Banjo - Scoop Neck', 'brand' => 'Folk Instruments', 'price' => 389.00, 'discount' => 0, 'stock' => 3, 'stars' => 4]);
        Product::create(['subcategory_id' => $subBanjo->id, 'name' => 'Tenor Banjo - Premium', 'brand' => 'Celtic Melodies', 'price' => 419.00, 'discount' => 0, 'stock' => 1, 'stars' => 5]);
        Product::create(['subcategory_id' => $subBanjo->id, 'name' => '6-String Banjo Guitar - Cutaway', 'brand' => 'Harmony Banjos', 'price' => 509.00, 'discount' => 0, 'stock' => 2, 'stars' => 4]);

        Product::create(['subcategory_id' => $subBanjo->id, 'name' => '5-String Banjo - Vintage Style', 'brand' => 'Bluegrass Banjos', 'price' => 339.00, 'discount' => 0, 'stock' => 3, 'stars' => 4]);
        Product::create(['subcategory_id' => $subBanjo->id, 'name' => 'Resonator Banjo - Custom Inlay', 'brand' => 'Appalachian Strings', 'price' => 849.00, 'discount' => 0, 'stock' => 1, 'stars' => 5]);
        Product::create(['subcategory_id' => $subBanjo->id, 'name' => 'Open-Back Banjo - Long Neck', 'brand' => 'Folk Instruments', 'price' => 479.00, 'discount' => 0, 'stock' => 2, 'stars' => 4]);
        Product::create(['subcategory_id' => $subBanjo->id, 'name' => 'Tenor Banjo - Deluxe', 'brand' => 'Celtic Melodies', 'price' => 449.00, 'discount' => 0, 'stock' => 1, 'stars' => 5]);
        Product::create(['subcategory_id' => $subBanjo->id, 'name' => '6-String Banjo Guitar - Semi-Hollow', 'brand' => 'Harmony Banjos', 'price' => 599.00, 'discount' => 0, 'stock' => 3, 'stars' => 4]);


        $subMandolina = Subcategory::where('name', 'mandolína')->first();
        Product::create(['subcategory_id' => $subMandolina->id, 'name' => 'A-Style Mandolin - Spruce Top', 'brand' => 'Mountain Strings', 'price' => 449.00, 'discount' => 0, 'stock' => 3, 'stars' => 4]);
        Product::create(['subcategory_id' => $subMandolina->id, 'name' => 'F-Style Mandolin - Maple', 'brand' => 'Blue Ridge Instruments', 'price' => 699.00, 'discount' => 0, 'stock' => 1, 'stars' => 5]);
        Product::create(['subcategory_id' => $subMandolina->id, 'name' => 'A-Style Mandolin - Mahogany', 'brand' => 'Celtic Mandolins', 'price' => 399.00, 'discount' => 0, 'stock' => 2, 'stars' => 4]);
        Product::create(['subcategory_id' => $subMandolina->id, 'name' => 'Bowlback Mandolin - Rosewood', 'brand' => 'Italian Tradition', 'price' => 549.00, 'discount' => 0, 'stock' => 1, 'stars' => 4]);
        Product::create(['subcategory_id' => $subMandolina->id, 'name' => 'Electric Mandolin - Sunburst', 'brand' => 'Modern Acoustics', 'price' => 479.00, 'discount' => 0, 'stock' => 2, 'stars' => 4]);

        Product::create(['subcategory_id' => $subMandolina->id, 'name' => 'A-Style Mandolin - Solid Top', 'brand' => 'Mountain Strings', 'price' => 529.00, 'discount' => 0, 'stock' => 2, 'stars' => 4]);
        Product::create(['subcategory_id' => $subMandolina->id, 'name' => 'F-Style Mandolin - Carved Top', 'brand' => 'Blue Ridge Instruments', 'price' => 849.00, 'discount' => 0, 'stock' => 1, 'stars' => 5]);
        Product::create(['subcategory_id' => $subMandolina->id, 'name' => 'A-Style Mandolin - Koa', 'brand' => 'Celtic Mandolins', 'price' => 479.00, 'discount' => 0, 'stock' => 1, 'stars' => 4]);
        Product::create(['subcategory_id' => $subMandolina->id, 'name' => 'Bowlback Mandolin - Flamed Maple', 'brand' => 'Italian Tradition', 'price' => 629.00, 'discount' => 0, 'stock' => 1, 'stars' => 4]);
        Product::create(['subcategory_id' => $subMandolina->id, 'name' => 'Electric Mandolin - 5-String', 'brand' => 'Modern Acoustics', 'price' => 599.00, 'discount' => 0, 'stock' => 1, 'stars' => 4]);

        Product::create(['subcategory_id' => $subMandolina->id, 'name' => 'A-Style Mandolin - Beginner', 'brand' => 'Mountain Strings', 'price' => 349.00, 'discount' => 0, 'stock' => 4, 'stars' => 3]);
        Product::create(['subcategory_id' => $subMandolina->id, 'name' => 'F-Style Mandolin - Vintage', 'brand' => 'Blue Ridge Instruments', 'price' => 999.00, 'discount' => 0, 'stock' => 1, 'stars' => 5]);
        Product::create(['subcategory_id' => $subMandolina->id, 'name' => 'A-Style Mandolin - Octave', 'brand' => 'Celtic Mandolins', 'price' => 579.00, 'discount' => 0, 'stock' => 1, 'stars' => 4]);
        Product::create(['subcategory_id' => $subMandolina->id, 'name' => 'Bowlback Mandolin - Abalone Inlay', 'brand' => 'Italian Tradition', 'price' => 749.00, 'discount' => 0, 'stock' => 1, 'stars' => 5]);
        Product::create(['subcategory_id' => $subMandolina->id, 'name' => 'Electric Mandolin - 8-String', 'brand' => 'Modern Acoustics', 'price' => 549.00, 'discount' => 0, 'stock' => 2, 'stars' => 4]);

        Product::create(['subcategory_id' => $subMandolina->id, 'name' => 'A-Style Mandolin - Sunburst', 'brand' => 'Mountain Strings', 'price' => 429.00, 'discount' => 0, 'stock' => 3, 'stars' => 4]);
        Product::create(['subcategory_id' => $subMandolina->id, 'name' => 'F-Style Mandolin - Custom', 'brand' => 'Blue Ridge Instruments', 'price' => 1299.00, 'discount' => 0, 'stock' => 1, 'stars' => 5]);
        Product::create(['subcategory_id' => $subMandolina->id, 'name' => 'A-Style Mandolin - Cutaway', 'brand' => 'Celtic Mandolins', 'price' => 549.00, 'discount' => 0, 'stock' => 1, 'stars' => 4]);
        Product::create(['subcategory_id' => $subMandolina->id, 'name' => 'Bowlback Mandolin - Mother of Pearl', 'brand' => 'Italian Tradition', 'price' => 699.00, 'discount' => 0, 'stock' => 1, 'stars' => 5]);
        Product::create(['subcategory_id' => $subMandolina->id, 'name' => 'Electric Mandolin - Fanned Fret', 'brand' => 'Modern Acoustics', 'price' => 679.00, 'discount' => 0, 'stock' => 1, 'stars' => 4]);

        Product::create(['subcategory_id' => $subMandolina->id, 'name' => 'A-Style Mandolin - All Solid', 'brand' => 'Mountain Strings', 'price' => 649.00, 'discount' => 0, 'stock' => 1, 'stars' => 5]);
        Product::create(['subcategory_id' => $subMandolina->id, 'name' => 'F-Style Mandolin - Master Model', 'brand' => 'Blue Ridge Instruments', 'price' => 1499.00, 'discount' => 0, 'stock' => 1, 'stars' => 5]);
        Product::create(['subcategory_id' => $subMandolina->id, 'name' => 'A-Style Mandolin - Celtic Inlay', 'brand' => 'Celtic Mandolins', 'price' => 629.00, 'discount' => 0, 'stock' => 1, 'stars' => 5]);
        Product::create(['subcategory_id' => $subMandolina->id, 'name' => 'Bowlback Mandolin - Ebony Fingerboard', 'brand' => 'Italian Tradition', 'price' => 599.00, 'discount' => 0, 'stock' => 2, 'stars' => 4]);
        Product::create(['subcategory_id' => $subMandolina->id, 'name' => 'Electric Mandolin - Headless', 'brand' => 'Modern Acoustics', 'price' => 729.00, 'discount' => 0, 'stock' => 1, 'stars' => 4]);

        Product::create(['subcategory_id' => $subMandolina->id, 'name' => 'A-Style Mandolin - Satin Finish', 'brand' => 'Mountain Strings', 'price' => 499.00, 'discount' => 0, 'stock' => 2, 'stars' => 4]);
        Product::create(['subcategory_id' => $subMandolina->id, 'name' => 'F-Style Mandolin - Aged Finish', 'brand' => 'Blue Ridge Instruments', 'price' => 1199.00, 'discount' => 0, 'stock' => 1, 'stars' => 5]);
        Product::create(['subcategory_id' => $subMandolina->id, 'name' => 'A-Style Mandolin - Carved Back', 'brand' => 'Celtic Mandolins', 'price' => 599.00, 'discount' => 0, 'stock' => 1, 'stars' => 4]);
        Product::create(['subcategory_id' => $subMandolina->id, 'name' => 'Bowlback Mandolin - Tortoiseshell Pickguard', 'brand' => 'Italian Tradition', 'price' => 679.00, 'discount' => 0, 'stock' => 1, 'stars' => 4]);
        Product::create(['subcategory_id' => $subMandolina->id, 'name' => 'Electric Mandolin - Baritone', 'brand' => 'Modern Acoustics', 'price' => 799.00, 'discount' => 0, 'stock' => 1, 'stars' => 4]);

        Product::create(['subcategory_id' => $subMandolina->id, 'name' => 'A-Style Mandolin - Wide Nut', 'brand' => 'Mountain Strings', 'price' => 579.00, 'discount' => 0, 'stock' => 1, 'stars' => 4]);
        Product::create(['subcategory_id' => $subMandolina->id, 'name' => 'F-Style Mandolin - Fern Inlay', 'brand' => 'Blue Ridge Instruments', 'price' => 1399.00, 'discount' => 0, 'stock' => 1, 'stars' => 5]);
        Product::create(['subcategory_id' => $subMandolina->id, 'name' => 'A-Style Mandolin - Oval Soundhole', 'brand' => 'Celtic Mandolins', 'price' => 529.00, 'discount' => 0, 'stock' => 2, 'stars' => 4]);
        Product::create(['subcategory_id' => $subMandolina->id, 'name' => 'Bowlback Mandolin - Extended Fingerboard', 'brand' => 'Italian Tradition', 'price' => 729.00, 'discount' => 0, 'stock' => 1, 'stars' => 5]);
        Product::create(['subcategory_id' => $subMandolina->id, 'name' => 'Electric Mandolin - Travel Size', 'brand' => 'Modern Acoustics', 'price' => 649.00, 'discount' => 0, 'stock' => 2, 'stars' => 4]);

        Product::create(['subcategory_id' => $subMandolina->id, 'name' => 'A-Style Mandolin - Black Top', 'brand' => 'Mountain Strings', 'price' => 469.00, 'discount' => 0, 'stock' => 3, 'stars' => 4]);
        Product::create(['subcategory_id' => $subMandolina->id, 'name' => 'F-Style Mandolin - Red Spruce Top', 'brand' => 'Blue Ridge Instruments', 'price' => 1099.00, 'discount' => 0, 'stock' => 1, 'stars' => 5]);
        Product::create(['subcategory_id' => $subMandolina->id, 'name' => 'A-Style Mandolin - Bound Top', 'brand' => 'Celtic Mandolins', 'price' => 569.00, 'discount' => 0, 'stock' => 1, 'stars' => 4]);
        Product::create(['subcategory_id' => $subMandolina->id, 'name' => 'Bowlback Mandolin - Inlaid Rosette', 'brand' => 'Italian Tradition', 'price' => 649.00, 'discount' => 0, 'stock' => 2, 'stars' => 4]);
        Product::create(['subcategory_id' => $subMandolina->id, 'name' => 'Electric Mandolin - Solid Body', 'brand' => 'Modern Acoustics', 'price' => 579.00, 'discount' => 0, 'stock' => 2, 'stars' => 4]);


        $subKora = Subcategory::where('name', 'kora')->first();
        Product::create(['subcategory_id' => $subKora->id, 'name' => 'Sound of the Nature', 'brand' => 'African Heritage', 'price' => 799.00, 'discount' => 0, 'stock' => 2, 'stars' => 4]);
        Product::create(['subcategory_id' => $subKora->id, 'name' => 'Celestial Echoes', 'brand' => 'Griot Instruments', 'price' => 1299.00, 'discount' => 0, 'stock' => 1, 'stars' => 5]);
        Product::create(['subcategory_id' => $subKora->id, 'name' => 'Harmonic Convergence', 'brand' => 'Mande Sounds', 'price' => 1799.00, 'discount' => 0, 'stock' => 1, 'stars' => 5]);
        Product::create(['subcategory_id' => $subKora->id, 'name' => 'Whispers of the Savannah', 'brand' => 'Rhythmic Roots', 'price' => 599.00, 'discount' => 0, 'stock' => 3, 'stars' => 4]);
        Product::create(['subcategory_id' => $subKora->id, 'name' => 'Electric Dawn', 'brand' => 'Global Groove', 'price' => 949.00, 'discount' => 0, 'stock' => 1, 'stars' => 4]);

        Product::create(['subcategory_id' => $subKora->id, 'name' => 'Desert Bloom', 'brand' => 'African Heritage', 'price' => 949.00, 'discount' => 0, 'stock' => 1, 'stars' => 4]);
        Product::create(['subcategory_id' => $subKora->id, 'name' => 'Griot s Fire', 'brand' => 'Griot Instruments', 'price' => 1599.00, 'discount' => 0, 'stock' => 1, 'stars' => 5]);
        Product::create(['subcategory_id' => $subKora->id, 'name' => 'Royal Strings', 'brand' => 'Mande Sounds', 'price' => 2199.00, 'discount' => 0, 'stock' => 1, 'stars' => 5]);
        Product::create(['subcategory_id' => $subKora->id, 'name' => 'Nomad s Journey', 'brand' => 'Rhythmic Roots', 'price' => 699.00, 'discount' => 0, 'stock' => 2, 'stars' => 4]);
        Product::create(['subcategory_id' => $subKora->id, 'name' => 'Silent Current', 'brand' => 'Global Groove', 'price' => 1099.00, 'discount' => 0, 'stock' => 1, 'stars' => 4]);

        Product::create(['subcategory_id' => $subKora->id, 'name' => 'Echoes of the Ancients', 'brand' => 'African Heritage', 'price' => 899.00, 'discount' => 0, 'stock' => 1, 'stars' => 4]);
        Product::create(['subcategory_id' => $subKora->id, 'name' => 'Golden Era', 'brand' => 'Griot Instruments', 'price' => 1499.00, 'discount' => 0, 'stock' => 1, 'stars' => 5]);
        Product::create(['subcategory_id' => $subKora->id, 'name' => 'Mande Legacy', 'brand' => 'Mande Sounds', 'price' => 1999.00, 'discount' => 0, 'stock' => 1, 'stars' => 5]);
        Product::create(['subcategory_id' => $subKora->id, 'name' => 'Heart of the Village', 'brand' => 'Rhythmic Roots', 'price' => 649.00, 'discount' => 0, 'stock' => 2, 'stars' => 4]);
        Product::create(['subcategory_id' => $subKora->id, 'name' => 'Urban Pulse', 'brand' => 'Global Groove', 'price' => 1149.00, 'discount' => 0, 'stock' => 1, 'stars' => 4]);

        Product::create(['subcategory_id' => $subKora->id, 'name' => 'Sunset Song', 'brand' => 'African Heritage', 'price' => 749.00, 'discount' => 0, 'stock' => 2, 'stars' => 4]);
        Product::create(['subcategory_id' => $subKora->id, 'name' => 'Oceanic Dream', 'brand' => 'Griot Instruments', 'price' => 1399.00, 'discount' => 0, 'stock' => 1, 'stars' => 5]);
        Product::create(['subcategory_id' => $subKora->id, 'name' => 'Tribal Rhythms', 'brand' => 'Mande Sounds', 'price' => 1899.00, 'discount' => 0, 'stock' => 1, 'stars' => 5]);
        Product::create(['subcategory_id' => $subKora->id, 'name' => 'Forest Echoes', 'brand' => 'Rhythmic Roots', 'price' => 579.00, 'discount' => 0, 'stock' => 3, 'stars' => 4]);
        Product::create(['subcategory_id' => $subKora->id, 'name' => 'Sonic Weaver', 'brand' => 'Global Groove', 'price' => 999.00, 'discount' => 0, 'stock' => 1, 'stars' => 4]);

        Product::create(['subcategory_id' => $subKora->id, 'name' => 'Legacy Tone', 'brand' => 'African Heritage', 'price' => 829.00, 'discount' => 0, 'stock' => 2, 'stars' => 4]);
        Product::create(['subcategory_id' => $subKora->id, 'name' => 'High Plains Drifter', 'brand' => 'Griot Instruments', 'price' => 1699.00, 'discount' => 0, 'stock' => 1, 'stars' => 5]);
        Product::create(['subcategory_id' => $subKora->id, 'name' => 'Distant Horizon', 'brand' => 'Mande Sounds', 'price' => 2299.00, 'discount' => 0, 'stock' => 1, 'stars' => 5]);
        Product::create(['subcategory_id' => $subKora->id, 'name' => 'Village Heartbeat', 'brand' => 'Rhythmic Roots', 'price' => 729.00, 'discount' => 0, 'stock' => 2, 'stars' => 4]);
        Product::create(['subcategory_id' => $subKora->id, 'name' => 'Digital Nomad', 'brand' => 'Global Groove', 'price' => 1249.00, 'discount' => 0, 'stock' => 1, 'stars' => 4]);

        Product::create(['subcategory_id' => $subKora->id, 'name' => 'Soulful Strings', 'brand' => 'African Heritage', 'price' => 879.00, 'discount' => 0, 'stock' => 1, 'stars' => 4]);
        Product::create(['subcategory_id' => $subKora->id, 'name' => 'Ornamental Grace', 'brand' => 'Griot Instruments', 'price' => 1799.00, 'discount' => 0, 'stock' => 1, 'stars' => 5]);
        Product::create(['subcategory_id' => $subKora->id, 'name' => 'Celestial Fire', 'brand' => 'Mande Sounds', 'price' => 2499.00, 'discount' => 0, 'stock' => 1, 'stars' => 5]);
        Product::create(['subcategory_id' => $subKora->id, 'name' => 'Journey Song', 'brand' => 'Rhythmic Roots', 'price' => 679.00, 'discount' => 0, 'stock' => 2, 'stars' => 4]);
        Product::create(['subcategory_id' => $subKora->id, 'name' => 'Wired Wonder', 'brand' => 'Global Groove', 'price' => 1349.00, 'discount' => 0, 'stock' => 1, 'stars' => 4]);

        Product::create(['subcategory_id' => $subKora->id, 'name' => 'Warm Embrace', 'brand' => 'African Heritage', 'price' => 849.00, 'discount' => 0, 'stock' => 2, 'stars' => 4]);
        Product::create(['subcategory_id' => $subKora->id, 'name' => 'Perfect Pitch', 'brand' => 'Griot Instruments', 'price' => 1449.00, 'discount' => 0, 'stock' => 1, 'stars' => 5]);
        Product::create(['subcategory_id' => $subKora->id, 'name' => 'Expansive Sound', 'brand' => 'Mande Sounds', 'price' => 1949.00, 'discount' => 0, 'stock' => 1, 'stars' => 5]);
        Product::create(['subcategory_id' => $subKora->id, 'name' => 'Enduring Spirit', 'brand' => 'Rhythmic Roots', 'price' => 599.00, 'discount' => 0, 'stock' => 3, 'stars' => 4]);
        Product::create(['subcategory_id' => $subKora->id, 'name' => 'FX Fusion', 'brand' => 'Global Groove', 'price' => 1049.00, 'discount' => 0, 'stock' => 1, 'stars' => 4]);

        Product::create(['subcategory_id' => $subKora->id, 'name' => 'Balanced Aura', 'brand' => 'African Heritage', 'price' => 929.00, 'discount' => 0, 'stock' => 1, 'stars' => 4]);
        Product::create(['subcategory_id' => $subKora->id, 'name' => 'Artistic Vision', 'brand' => 'Griot Instruments', 'price' => 1899.00, 'discount' => 0, 'stock' => 1, 'stars' => 5]);
        Product::create(['subcategory_id' => $subKora->id, 'name' => 'Professional Touch', 'brand' => 'Mande Sounds', 'price' => 2399.00, 'discount' => 0, 'stock' => 1, 'stars' => 5]);
        Product::create(['subcategory_id' => $subKora->id, 'name' => 'Simple Harmony', 'brand' => 'Rhythmic Roots', 'price' => 779.00, 'discount' => 0, 'stock' => 2, 'stars' => 4]);
        Product::create(['subcategory_id' => $subKora->id, 'name' => 'USB Wave', 'brand' => 'Global Groove', 'price' => 1299.00, 'discount' => 0, 'stock' => 1, 'stars' => 4]);

    }
}
