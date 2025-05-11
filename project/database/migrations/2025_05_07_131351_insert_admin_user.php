<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Spatie\Permission\Models\Role;
use App\Models\User;

return new class extends Migration
{
    public function up(): void
    {
        // Ensure the 'admin' role exists (only if using Spatie's roles)
        if (!Role::where('name', 'admin')->exists()) {
            Role::create(['name' => 'admin']);
        }

        $user = User::create([
            'email' => 'admin@admin.sk',
            'password' => Hash::make('admin'),
            'anonym' => false,
        ]);

        $user->assignRole('admin');

        $user->profile()->create([
            'name' => 'Admin',
            'email' => 'admin@admin.sk',
            'surname' => 'Account',
        ]);
    }

    public function down(): void
    {
        $user = User::where('email', 'admin@admin.sk')->first();

        if ($user) {
            $user->delete();
        }
    }

};
