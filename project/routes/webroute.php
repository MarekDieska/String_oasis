<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\DetailController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\AdminRoleController;

Route::middleware(['auth'])->get('/dashboard', [DashboardController::class, 'showDashboard'])->name('dashboard');

Route::get('/', [ProductController::class, 'showProducts'])->name('index');

Route::get('/stars/{rating}', [ProductController::class, 'showStars']);



//admin
Route::get('/admin', function () {
    return view('components.admin_main');
})->name('admin');

Route::get('/admin_add', function () {
    return view('components.add');
})->name('admin_add');

Route::get('/admin_delete', function () {
    return view('components.delete');
})->name('admin_delete');

Route::get('/admin_edit', function () {
    return view('components.edit');
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
Route::get('/cart_page', fn() => app(CartController::class)->loadCartView('components.main_cart'))->name('cart_page');
Route::get('/cart_page2', fn() => app(CartController::class)->loadCartView('components.main_cart_2'))->name('cart_page2');
Route::get('/cart_page3', fn() => app(CartController::class)->loadCartView('components.main_cart_3'))->name('cart_page3');
Route::get('/cart_page4', fn() => app(CartController::class)->loadCartView('components.main_cart_4'))->name('cart_page4');
Route::get('/cart_page5', fn() => app(CartController::class)->loadCartView('components.main_cart_5'))->name('cart_page5');

Route::get('/login', [AuthenticatedSessionController::class, 'create'])->name('login');
Route::post('/login', [AuthenticatedSessionController::class, 'store']);
Route::get('/register', [RegisteredUserController::class, 'create'])->name('register');
Route::post('/register', [RegisteredUserController::class, 'store']);

Route::post('/admin/add-role', [AdminRoleController::class, 'assignAdmin'])->name('admin.assign');
Route::post('/admin/remove-role', [AdminRoleController::class, 'removeAdmin'])->name('admin.remove');

Route::put('/profile/update', [ProfileController::class, 'update'])->name('profile.update');

require __DIR__.'/auth.php';
