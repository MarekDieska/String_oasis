<?php

namespace App\Http\Controllers;
use App\Models\Delivery;
use App\Models\Payment;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;
use App\Models\Cart;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class CartController2 extends Controller{
    public function show(Request $request){

        $s = $request->get('s');
        $d = $request->get('d');
        $i = $request->get('i');
        $m = $request->get('m');

        $dopravy = Delivery::get();
        $platby = Payment::get();

        return view('components.main_cart_2', compact('dopravy', 'platby', 's', 'd' , 'i', 'm'));
    }
}
