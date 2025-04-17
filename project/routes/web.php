<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

Route::get('/', [ProductController::class, 'showProducts']);
Route::get('/stars/{rating}', [ProductController::class, 'showStars']);
