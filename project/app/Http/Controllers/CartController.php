<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class CartController extends Controller
{
    // Pridanie produktu do košíka
    public function add(Request $request)
    {
        // Validácia prichádzajúcich dát
        $request->validate([
            'product_id' => 'required|integer|exists:products,id', // overí, že produkt existuje
            'quantity' => 'required|integer|min:1', // overí, že množstvo je aspoň 1
        ]);

        // Získanie údajov o produkte (pre tento príklad sa predpokladá, že máte model Product)
        $product = \App\Models\Product::find($request->product_id);

        // Získanie existujúceho košíka zo session
        $cart = Session::get('cart', []);

        // Ak produkt už je v košíku, zaktualizujeme množstvo
        if (isset($cart[$product->id])) {
            $cart[$product->id]['quantity'] += $request->quantity;
        } else {
            // Ak produkt nie je v košíku, pridáme ho
            $cart[$product->id] = [
                'product_id' => $product->id,
                'name' => $product->name,
                'price' => $product->price,
                'quantity' => $request->quantity,
            ];
        }

        // Uloženie košíka do session
        Session::put('cart', $cart);

        // Vrátenie odpovede, že produkt bol pridaný
        return response()->json([
            'message' => 'Product added to cart successfully!',
            'cart' => $cart,  // Môžete pridať aj aktuálny stav košíka ako odpoveď
        ]);
    }

    public function show(Request $request){

        return view('components.main_cart');
    }

}
