<?php

use App\Http\Controllers\AdminRoleController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CartController2;
use App\Http\Controllers\CartController3;
use App\Http\Controllers\CartController4;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DetailController;
use App\Http\Controllers\FilterController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::middleware(['auth'])->get('/dashboard', [DashboardController::class, 'showDashboard'])->name('dashboard');

Route::get('/', [IndexController::class, 'show'])->name('index');

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

Route::get('/produkt_detail/{product}', [DetailController::class, 'showDetails'])->name('produkt_detail');


Route::get('/filters_page', [FilterController::class, 'showFilters'])->name('filters_page');


//cart
Route::get('/cart_page', [CartController::class, 'show'])->name('cart_page');
Route::get('/cart_page2', [CartController2::class, 'show'])->name('cart_page2');
Route::get('/cart_page3', [CartController3::class, 'show'])->name('cart_page3');
Route::post('/cart/submit', [CartController4::class, 'storeData'])->name('cart_page4');

Route::get('/cart_page4', [CartController4::class, 'show'])->name('cart_page4.show');


Route::get('/cart_page5', function () {
    return view('components.main_cart_5');
})->name('cart_page5');

Route::get('/login', [AuthenticatedSessionController::class, 'create'])->name('login');
Route::post('/login', [AuthenticatedSessionController::class, 'store']);
Route::get('/register', [RegisteredUserController::class, 'create'])->name('register');
Route::post('/register', [RegisteredUserController::class, 'store']);

Route::post('/admin/add-role', [AdminRoleController::class, 'assignAdmin'])->name('admin.assign');
Route::post('/admin/remove-role', [AdminRoleController::class, 'removeAdmin'])->name('admin.remove');

Route::put('/profile/update', [ProfileController::class, 'update'])->name('profile.update');

Route::post('/cart/add', [CartController::class, 'add'])->name('cart.add');
Route::delete('/cart/remove/{id}', [CartController::class, 'remove'])->name('cart.remove');
Route::put('/cart/update/{id}', [CartController::class, 'update'])->name('cart.update');

require __DIR__.'/auth.php';
