<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Routing\Controller;
use App\Models\Product;

class IndexController extends Controller
{
    public function show()
    {
        $products = Product::take(20)->get();
        return view('components.main', compact('products'));
    }
}
