<?php

namespace App\Listeners;

use App\Models\User;
use Illuminate\Auth\Events\Authenticated;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use App\Models\Cart;
use Illuminate\Support\Facades\Session;

class MergeAnonymousCart
{
    public function handle(Authenticated $event)
    {
        $user = $event->user;

        if (Session::has('anonymous_user')) {
            $aId = Session::get('anonymous_user');

            $items = Cart::where('user_id', $aId)->get();

            foreach ($items as $item) {
                $item->user_id = $user->id;
                $item->save();
            }

            User::find($aId)?->delete();

            Session::forget('anonymous_user');
        }
    }
}
