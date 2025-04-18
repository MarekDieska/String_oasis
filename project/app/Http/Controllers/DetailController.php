<?php

namespace App\Http\Controllers;

class DetailController
{
    public function showDetails() {
        $farby = [
            "../images/brown_variant.jpg",
            "../images/red_variant.jpg",
            "../images/black-variant.jpg"
        ];
        $nazvyFarieb = [
            "Hnedá",
            "Tmavočervená",
            "Čierna"
        ];

        $detaily = [
            "../images/detail_1.png",
            "../images/detail_2.jpg",
            "../images/detail_3.jpg",
            "../images/detail_4.png",
        ];

        $hodnotenia = [
            [
                "nadpis" => "Jednoznačne odporúčam",
                "text" => "Jediné miesto široko ďaleko, kde som našla gitaru tohto modelu.
                         Vysnívaná gitara s nádherným, čistým zvukom. Vychádzajú z nej tie najkrajšie melódie, rovnako krásne ako je
                         jej vzhľad. Nádherné kvalitné drevo, ručná výroba, jednoducho, každý by si ju zamiloval. Jednoznačne odporúčam.",
                "autor" => "Miška",
                "cas" => "2 týždne dozadu",
                "farba" => "success",
                "hviezdy" => 5,
                "uspech" => "success"
            ],
            [
                "nadpis" => "Skvelá pre začiatočníkov",
                "text" => "Moje hudobné začiatky boli práve s touto gitarou. Dneska vypredávam koncerty. Na túto gitaru mám iba samé dobré spomienky.",
                "autor" => "Alexandra",
                "cas" => "3 mesiace dozadu",
                "farba" => "success",
                "hviezdy" => 5,
                "uspech" => "success",
            ],
            [
                "nadpis" => "Určite neodporúčam",
                "text" => "Táto gitara mi nespoľahlivo slúži len pár týždňov a
                         zatiaľ som s ňou mala samé problémy. Môj najmenej obľúvený atribút na tejto gitare
                         , samozrejme okrem zvuku, je jej vzhľad. Takáto gitara nepoteší väčšinu milovníkov hudby,
                         od začiatočníka až po profesionála.",
                "autor" => "Gabriela",
                "cas" => "5 mesiacov dozadu",
                "farba" => "danger",
                "hviezdy" => 2,
                "uspech" => "danger"
            ],
            [
                "nadpis" => "Príliš drahá",
                "text" => "Ako študent si takúto
                         gitaru určite nemôžem dovoliť, nabudúce by so zvolil lacnejšiu voľbu.
                         Táto gitara je síce skvelá pre začiatočníkov, ale človek to musí myslieť vážne.",
                "autor" => "Marek",
                "cas" => "6 mesiacov dozadu",
                "farba" => "success",
                "hviezdy" => 4,
                "uspech" => "success"
            ],
            [
                "nadpis" => "To je ono!!",
                "text" => "Hľadala som.
                         Veľmi dlho som hľadala takú gitaru, čo mi bude plne vyhovovať po každej stránke.
                         Krásna melódia, povrch, jemnosť zvuku... Neviem si ju vynachváliť. Určite stojí za zváženie!",
                "autor" => "Viktória",
                "cas" => "11 mesiacov dozadu",
                "farba" => "success",
                "hviezdy" => 5,
                "uspech" => "success"
            ],
            [
                "nadpis" => "Pozitívne",
                "text" => "Priatelia, určite vrelo odporúčam.
                         Dovoľte mi informovať vás, že táto bass gitara má veľmi dobré hĺbky. Vypichol by som aj kvalitné prślušenstvo
                         ako napríklad koaxiálny kábel.",
                "autor" => "cisco_4ever",
                "cas" => "16 mesiacov dozadu",
                "farba" => "success",
                "hviezdy" => 5,
                "uspech" => "success"
            ],
            [
                "nadpis" => "Kvalitka",
                "text" => "Najskôr som si chcela kúpiť klavír ale tá harfa hrala ako po masle.
                     Škoda farebnej kombinácie ale dá sa to prežiť. Odporúčam skôr pre mierne pokročilých a pokročilých. Najviac
                     ma prekvalip darček s kolaboráciou s GEMMA. Kvalitný prívesok. ;)",
                "autor" => "Princezna45",
                "cas" => "2 roky dozadu",
                "farba" => "success",
                "hviezdy" => 4,
                "uspech" => "success"
            ]
        ];

        return view('pages.produkt_detail', [
            'farby' => $farby,
            'nazvyFarieb' => $nazvyFarieb,
            'detaily' => $detaily,
            'hodnotenia' => $hodnotenia,
        ]);
    }
}
