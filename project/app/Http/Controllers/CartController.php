<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    /**
     * AJAX: Add X of product Y to the authenticated user's cart.
     */
    public function add(Request $request)
    {
        $data = $request->validate([
            'product_id' => 'required|integer|exists:products,id',
            'quantity'   => 'required|integer|min:1',
        ]);

        $product = Product::findOrFail($data['product_id']);

        // Fetch existing cart row or create new instance
        $cartItem = Cart::firstOrNew([
            'user_id'    => Auth::id(),
            'product_id' => $product->id,
        ]);

        // Update quantity in PHP
        $cartItem->quantity = ($cartItem->exists ? $cartItem->quantity : 0)
            + $data['quantity'];

        $cartItem->save();

        return response()->json([
            'message'  => 'Pridané do košíka!',
            'cartItem' => $cartItem,
        ]);
    }

    /**
     * Show the current user's cart page.
     */
    public function show()
    {
        $userId = Auth::id();

        $cartProducts = Cart::with('product')
            ->where('user_id', $userId)
            ->get()
            ->map(function($item) {
                $p = $item->product;
                $p->quantity = $item->quantity;
                return $p;
            });

        return view('components.main_cart', [
            'cart_products' => $cartProducts,
            'isEmpty'       => $cartProducts->isEmpty(),
        ]);
    }
}
