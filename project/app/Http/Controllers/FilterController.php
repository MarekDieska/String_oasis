<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Routing\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class FilterController extends Controller{
    public function showFilters(Request $request){

        $subcategory = $request->get('subcategory');
        $rating = $request->get('rating');
        $brand = $request->get('brand');
        $cat  = $request->get('cat');

        $query = Product::query();

        $query->where('subcategory_id', $subcategory);

        if ($rating) {
            $query->where('stars', $rating);
        }
        if ($brand) {
            $query->whereIn('brand', $brand);
        }
        if ($cat) {
            $query->whereIn('subcategory_id', $cat);
        }

        $p_products = $query->paginate(16);

        $p_categories = Category::whereHas('subcategories.products')->distinct()->get();
        $p_brands = Product::distinct()->pluck('brand');
        $p_ratings = Product::distinct()->pluck('stars');
        return view('pages.filters_page', compact('p_products', 'p_categories', 'p_brands', 'p_ratings'));
    }
}
