<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Spatie\Permission\Models\Role;

class AdminRoleController extends Controller
{
public function assignAdmin(Request $request)
{
$request->validate([
'email' => 'required|email',
]);

$user = User::where('email', $request->email)->first();

if (!$user) {
return back()->withErrors(['email' => 'Používateľ s týmto emailom neexistuje.']);
}

$user->assignRole('admin');

return back()->with('success', 'Admin rola bola priradená.');
}

public function removeAdmin(Request $request)
{
$request->validate([
'email' => 'required|email',
]);

$user = User::where('email', $request->email)->first();

if (!$user) {
return back()->withErrors(['email' => 'Používateľ s týmto emailom neexistuje.']);
}

$user->removeRole('admin');

return back()->with('success', 'Admin rola bola odstránená.');
}
}
