<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Support\Facades\Auth;
use App\Models\Cart;

use Illuminate\Http\Request;

class CartController extends Controller
{
    public function add(Request $request){

        $data = $request->validate(['product_id' => 'required|integer|exists:products,id','quantity'   => 'required|integer|min:1',]);

        $product = Product::findOrFail($data['product_id']);


        $cartItem = Cart::firstOrNew([
            'user_id'    => Auth::id(),
            'product_id' => $product->id,
        ]);

        $cartItem->quantity = ($cartItem->exists ? $cartItem->quantity : 0) + $data['quantity'];

        $cartItem->save();

        return response()->json([
            'message'  => 'Pridané do košíka!',
            'cartItem' => $cartItem,
        ]);
    }

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
