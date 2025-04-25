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

        $s = $request->get('s');
        $d = $request->get('d');
        $i = $request->get('i');
        $m = $request->get('m');

        $doprava = $request->input('doprava');
        $platba = $request->input('platba');

        $d_c = Delivery::find($doprava)->price;
        $p_c = Payment::find($platba)->price;

        return view('components.main_cart_3', compact('doprava', 'platba', 's', 'd', 'i', 'm', 'd_c', 'p_c'));
    }
}
