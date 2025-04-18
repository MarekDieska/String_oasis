<?php

namespace App\Http\Controllers;

class CartController
{
    public function loadCartView($viewName)
    {
        $obrazkyProduktov = [
            "../images/gi1.png",
            "../images/g2.png",
            "../images/g3.png",
            "../images/g4.png",
            "../images/g5.png",
            "../images/g6.png",
        ];
        $nazvyProduktov = [
            "Gibson SG Standard Electric Guitar Heritage Cherry",
            "Fender Squier Affinity Series Stratocaster Lake Placid Blue",
            "Vintage 1963 Gibson Barney Kessel Sunburst Finish",
            "Fender American Professional Jazzmaster Silverburst",
            "Neal Moser Guitar",
            "James Tyler Classic Burning Water",
        ];

        $cenyProduktov = [
            "1799€",
            "233€",
            "4999€",
            "1899€",
            "650€",
            "930€",
        ];

        $dopravy = [
            "Packeta",
            "Alzabox",
            "Slovenská pošta",
            "String Oasis",
            "Slovenská pošta",
            "DPD",
        ];

        $dopravy2 = [
            "výdajné miesto Z-box",
            "výdajné miesto Alza-box",
            "výdajné miesto BalíkoBOX",
            "vyzdvihnutie na predajni",
            "kuriér na adresu",
            "kuriér na adresu",
        ];

        $dopravyCeny = [
            "1,50€",
            "2,50€",
            "3,00€",
            "zadarmo",
            "5,00€",
            "3,00€"
        ];


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
            "zadarmo",
            "2,50€",
            "zadarmo",
            "5,00€",
            "3,00€"
        ];

        return match ($viewName) {
            'pages.cart_page' => view($viewName)
                ->with('obrazkyProduktov', $obrazkyProduktov)
                ->with('nazvyProduktov', $nazvyProduktov)
                ->with('cenyProduktov', $cenyProduktov),
            'pages.cart_page2' => view($viewName)
                ->with('dopravy', $dopravy)
                ->with('dopravy2', $dopravy2)
                ->with('dopravyCeny', $dopravyCeny)
                ->with('platby', $platby)
                ->with('platby2', $platby2)
                ->with('platbyCeny', $platbyCeny),

            default => view($viewName),
        };
    }
}
