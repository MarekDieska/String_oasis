<?php

namespace App\Http\Controllers;
use App\Models\Delivery;
use App\Models\Payment;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;
use App\Models\Cart;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class CartController3 extends Controller{
    public function show(Request $request){

        $doprava = $request->input('doprava');
        $platba = $request->input('platba');

        return view('components.main_cart_3', compact('doprava', 'platba'));
    }
}
