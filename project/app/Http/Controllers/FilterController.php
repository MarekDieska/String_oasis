<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Subcategory;
use Illuminate\Routing\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class FilterController extends Controller
{
    public function showFilters(Request $request)
    {
        $subcategory = $request->get('sub');
        $rating = $request->get('r');
        $brand = $request->get('b');
        $priceMin = $request->get('min');
        $priceMax = $request->get('max');
        $sortBy = $request->get('s');
        $sortDirection = $request->get('z');
        $search = $request->get('q');
        $s = null;

        if ($subcategory != 0) {
            $s = Subcategory::with('category')->find($subcategory);
        }

        if ($s) {
            if ($s->category->name == 'Gitary' || $s->category->name == 'Basgitary') {
                $title = $s->name . ' ' . $s->category->name;
            } elseif ($s->name) {
                $title = $s->name;
            } else {
                $title = $s->category->name;
            }
        } else {
            $title = "Všetky produkty";
        }

        $query = Product::query();

        if ($subcategory != 0) {
            $query->where('subcategory_id', $subcategory);
        }

        if ($rating) {
            $query->where('stars', $rating);
        }

        $priceMin = (int) $request->get('min', 0);
        $priceMax = (int) $request->get('max', 5000);

        $priceMin = max(0, min(5000, $priceMin));
        $priceMax = max(0, min(5000, $priceMax));

        if ($priceMin > $priceMax) {
            $priceMin = 0;
            $priceMax = 5000;
        }

        $query->whereBetween('price', [$priceMin, $priceMax]);


        if ($sortBy !== null) {
            switch ($sortBy) {
                case 0:
                    $query->orderBy('name', $sortDirection == 2 ? 'desc' : 'asc');
                    break;
                case 1:
                    $query->orderBy('price', $sortDirection == 2 ? 'desc' : 'asc');
                    break;
                case 2:
                    $query->orderBy('stars', $sortDirection == 2 ? 'desc' : 'asc');
                    break;
                default:
                    $query->orderBy('created_at', 'desc');
                    break;
            }
        }

        if ($search) {
            $search = str_replace(' ', '%', $request->get('q'));
            $query->where('name', 'ILIKE', "%$search%");
        }

        $p_brands = (clone $query)->reorder()->select('brand')->distinct()->pluck('brand');


        if ($brand) {
            $query->whereIn('brand', $brand);
        }

        $p_products = $query->paginate(16)->appends($request->except('page'));

        if ($subcategory != 0) {
            $p_ratings = Product::where('subcategory_id', $subcategory)->select('stars')->distinct()->orderBy('stars', 'asc')->pluck('stars');
        } else {
            $p_ratings = Product::select('stars')->distinct()->orderBy('stars', 'asc')->pluck('stars');
        }

        return view('pages.filters_page', compact('p_products', 'p_brands', 'p_ratings', 'title'));
    }
}
