<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $table = 'profiles';
    public $timestamps = false;
    protected $fillable = [
        'user_id',
        'name',
        'surname',
        'phone',
        'street',
        'city',
        'zip',
        'country'
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function orders()
    {
        return $this->hasMany(Order::class, 'profile_id');
    }
}
