<?php

namespace App\Http\Controllers;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;
use App\Models\Cart;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class CartController extends Controller
{

    public function show(Request $request){

        $user = Auth::id();
        $cart_products = Cart::with('product')->where('user_id', $user)->get()
            ->map(function ($item) {
                $item->product->quantity = $item->quantity;
                return $item->product;
            });

        $isEmpty = $cart_products->isEmpty();

        return view('components.main_cart', compact('cart_products', 'isEmpty'));
    }

}
