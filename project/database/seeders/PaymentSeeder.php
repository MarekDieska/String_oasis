<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use App\Models\Payment;

class PaymentSeeder extends Seeder
{
    public function run()
    {
        $platby = [
            "Visa",
            "Mastercard",
            "Google Pay",
            "Amex",
            "dobierka",
        ];

        $platby2 = [
            "platba vopred",
            "platba vopred",
            "platba vopred",
            "platba vopred",
            "platba na dobierku",
        ];

        $platbyCeny = [
            0,
            2.50,
            0,
            5.00,
            3.00
        ];

        foreach ($platby as $key => $name) {
            $price = $platbyCeny[$key];

            Payment::create([
                'name' => $name,
                'description' => $platby2[$key],
                'price' => $price
            ]);
        }
    }
}
