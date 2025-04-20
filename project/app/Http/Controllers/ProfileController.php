<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class ProfileController extends Controller
{
    public function update(Request $request)
    {
        $user = auth()->user();

        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'surname' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'telefon' => 'nullable|string|max:20',
            'ulica_cislo' => 'nullable|string|max:255',
            'mesto' => 'nullable|string|max:255',
            'psc' => 'nullable|numeric',
            'krajina' => 'nullable|string|max:255',
        ]);

        $user->name = $validated['name'];
        $user->surname = $validated['surname'];
        $user->email = $validated['email'];
        $user->phone = $validated['telefon'];
        $user->street_number = $validated['ulica_cislo'];
        $user->city = $validated['mesto'];
        $user->psc = $validated['psc'];
        $user->country = $validated['krajina'];

        $user->save();

        return back()->with('success', 'Profil bol aktualizovaný.');
    }
}
