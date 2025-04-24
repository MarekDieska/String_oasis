<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use App\Models\Delivery;

class DeliverySeeder extends Seeder
{
    public function run()
    {
        $dopravy = [
            "Packeta",
            "Alzabox",
            "Slovenská pošta",
            "String Oasis",
            "DPD",
        ];

        $dopravy2 = [
            "výdajné miesto Z-box",
            "výdajné miesto Alza-box",
            "výdajné miesto BalíkoBOX",
            "vyzdvihnutie na predajni",
            "kuriér na adresu",
        ];

        $dopravyCeny = [
            1.50,
            2.50,
            3.00,
            0,
            3.00
        ];

        foreach ($dopravy as $key => $name) {
            $price = $dopravyCeny[$key];

            Delivery::create([
                'name' => $name,
                'description' => $dopravy2[$key],
                'price' => $price
            ]);
        }
    }
}
