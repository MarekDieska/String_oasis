<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\DetailController;

Route::get('/', [ProductController::class, 'showProducts'])->name('index');
Route::get('/stars/{rating}', [ProductController::class, 'showStars']);

//admin
Route::get('/admin', function () {
    return view('pages.admin');
})->name('admin');

Route::get('/admin_add', function () {
    return view('pages.admin_add');
})->name('admin_add');

Route::get('/admin_delete', function () {
    return view('pages.admin_delete');
})->name('admin_delete');

Route::get('/admin_edit', function () {
    return view('pages.admin_edit');
})->name('admin_edit');

Route::get('/produkt_detail', [DetailController::class, 'showDetails'])->name('produkt_detail');

//category
Route::get('/filters_page', function () {
    return view('pages.filters_page', [
        'typy' => [
            'Gitara',
            'Basgitara',
            'Iné struny',
            'Kombá',
            'Príslušenstvo',
            'Platne',
        ],
        'velkosti' => [
            '1/4',
            '1/2',
            '3/4',
            '7/8',
            '4/4',
        ],
        'znacky' => [
            'Fender',
            'Gibson',
            'Yamaha',
            'Ibanez',
            'PRS',
            'Taylor',
        ],
        'nazvyProduktov' => [
            "Gibson SG Standard Electric Guitar Heritage Cherry",
            "Fender Squier Affinity Series Stratocaster Lake Placid Blue",
            "Vintage 1963 Gibson Barney Kessel Sunburst Finish",
            "Fender American Professional Jazzmaster Silverburst",
            "Neal Moser Guitar",
            "James Tyler Classic Burning Water",
        ],
        'obrazkyProduktov' => [
            "../images/gi1.png",
            "../images/g2.png",
            "../images/g3.png",
            "../images/g4.png",
            "../images/g5.png",
            "../images/g6.png",
        ],
        'hodnoteniaProduktov' => [
            5, 3, 5, 4, 5
        ],
        'cenyProduktov' => [
            "1799€",
            "233€",
            "4999€",
            "1899€",
            "650€",
            "930€",
        ]
    ]);
})->name('filters_page');


//cart
Route::get('/cart_page', fn() => app(CartController::class)->loadCartView('pages.cart_page'))->name('cart_page');
Route::get('/cart_page2', fn() => app(CartController::class)->loadCartView('pages.cart_page2'))->name('cart_page2');
Route::get('/cart_page3', fn() => app(CartController::class)->loadCartView('pages.cart_page3'))->name('cart_page3');
Route::get('/cart_page4', fn() => app(CartController::class)->loadCartView('pages.cart_page4'))->name('cart_page4');
Route::get('/cart_page5', fn() => app(CartController::class)->loadCartView('pages.cart_page5'))->name('cart_page5');
