<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Profile;

class ProfileController extends Controller
{
    public function update(Request $request)
    {
        $user = auth()->user();

        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'surname' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'nullable|string|max:20',
            'street' => 'nullable|string|max:255',
            'city' => 'nullable|string|max:255',
            'zip' => 'nullable|string|max:6',
            'country' => 'nullable|string|max:255',
        ]);

        $user->profile->update([
            'name' => $validated['name'],
            'surname' => $validated['surname'],
            'phone' => $validated['phone'],
            'street' => $validated['street'],
            'city' => $validated['city'],
            'zip' => $validated['zip'],
            'country' => $validated['country'],
        ]);

        $user->email = $validated['email'];
        $user->save();
        $user->assignRole($request->role);

        return back()->with('success', 'Profile bol aktualizovaný.');
    }
}
