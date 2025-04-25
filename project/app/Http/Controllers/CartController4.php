<?php

namespace App\Http\Controllers;


use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use App\Models\Cart;
use App\Models\Delivery;
use App\Models\Payment;
use App\Models\Profile;
use App\Models\Order;
use App\Models\Item;
use App\Models\Detail;

class CartController4 extends Controller
{
    public function show(Request $request)
    {
        $user = User::find($request->user_id);
        $profile = Profile::find($request->profile_id);
        $delivery = Delivery::find($request->delivery_id);
        $payment = Payment::find($request->payment_id);
        $s = $request->s;
        $d = $request->d;
        $i = $request->i;
        $m = $request->m;
        $d_c = $request->d_c;
        $p_c = $request->p_c;

        return view('components.main_cart_4', compact('user', 'profile', 'delivery', 'payment', 's', 'd', 'i', 'm', 'd_c', 'p_c'));
    }

    public function storeData(Request $request)
    {

        $s = $request->get('s');
        $d = $request->get('d');
        $i = $request->get('i');
        $m = $request->get('m');
        $d_c = $request->get('d_c');
        $p_c = $request->get('p_c');

        $request->validate([
            'meno' => 'required|string|max:255',
            'priezvisko' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'telefon' => 'required|string|max:20',
            'ulica' => 'required|string|max:255',
            'mesto' => 'required|string|max:255',
            'psc' => 'required|string|max:10',
            'krajina' => 'required|string|max:255',
            'suhlas' => 'accepted',
            'doprava' => 'required|exists:deliveries,id',
            'platba' => 'required|exists:payments,id',
        ]);

        $userId = Auth::check() ? Auth::id() : session('anonymous_user');
        $user = User::find($userId);

        $user->update([
            'email' => $request->email,
        ]);

        $profileData = [
            'name' => $request->meno,
            'surname' => $request->priezvisko,
            'phone' => $request->telefon,
            'street' => $request->ulica,
            'city' => $request->mesto,
            'zip' => $request->psc,
            'country' => $request->krajina,
        ];

        if ($user->profile) {
            $user->profile->update($profileData);
            $profile = $user->profile;
        } else {
            $profile = $user->profile()->create($profileData);
        }

        $delivery = Delivery::findOrFail($request->doprava);
        $payment = Payment::findOrFail($request->platba);

        $cartItems = Cart::where('user_id', $userId)->get();


        $subtotal = $cartItems->sum(fn($item) => $item->product->price * $item->quantity);
        $total = $subtotal + $delivery->price + $payment->price;

        $detail = Detail::create([
            'delivery_id' => $delivery->id,
            'payment_id' => $payment->id,
            'time' => now(),
            'status' => 'Vytvorená',
            'total' => $total,
            'note' => $request->poznamka,
        ]);

        $order = Order::create([
            'profile_id' => $profile->id,
            'detail_id' => $detail->id,
        ]);

        foreach ($cartItems as $item) {
            Item::create([
                'product_id' => $item->product_id,
                'order_id' => $order->id,
                'quantity' => $item->quantity,
            ]);
        }

        Cart::where('user_id', $user->id)->delete();

        return redirect()->route('cart_page4.show', [
            'user_id' => $user->id,
            'profile_id' => $profile->id,
            'delivery_id' => $delivery->id,
            'payment_id' => $payment->id,
            's' => $s,
            'd' => $d,
            'i' => $i,
            'm' => $m,
            'd_c' => $d_c,
            'p_c' => $p_c,
        ]);    }
}
