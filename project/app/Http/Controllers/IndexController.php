<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Routing\Controller;
use App\Models\Product;

class IndexController extends Controller
{
    public function show()
    {
        $subPlatne = Category::where('name', 'Platne')->first()->subcategories()->first()->id;
        $platne = Product::where('subcategory_id', $subPlatne)->take(20)->get();
        $products = Product::take(20)->get();
        return view('components.main', compact('products', 'platne'));
    }
}
