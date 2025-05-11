<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
    {
        public function showStars($rating)
        {
            $rating = max(0, min(5, (int) $rating));

            return view('components.stars', ['rating' => $rating]);
        }
        public function showProducts()
        {
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

        $obrazkyProduktov = [
            "../images/gi1.png",
            "../images/g2.png",
            "../images/g3.png",
            "../images/g4.png",
            "../images/g5.png",
            "../images/g6.png",
        ];

        $hodnoteniaProduktov = [
            5, 3, 5, 4, 5
        ];

        $nazvyP = [
            "Midnight Echoes - Vinyl Special Edition",
            "Golden Era Classics - Collector's Choice",
            "Neon Dreams - Synthwave Essentials",
            "Retro Groove - The Ultimate Funk Collection",
            "Velvet Nights - Smooth Jazz Anthology",
            "Electric Pulse - Experimental Sounds of the Future",
            "Sunset Riffs - Classic Rock Revival",
            "Deep Dive - Ambient & Chillout Sessions",
            "Rhythm & Soul - Timeless Motown Hits",
        ];

        $cenyP = [
            "22,99€",
            "34,90€",
            "49,99€",
            "12,50€",
            "99,00€",
            "18,00€",
            "59,99€",
            "89,99€",
            "149,00€",
        ];

        $obrazkyP = [
            "../images/p1.png",
            "../images/p2.png",
            "../images/p3.png",
            "../images/p4.png",
            "../images/p5.png",
            "../images/p6.png",
            "../images/p7.png",
            "../images/p8.png",
            "../images/p9.png",
        ];
        }
}


