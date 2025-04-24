<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    protected $table = 'payments';
    public $timestamps = false;
    public $fillable = [
        'name',
        'description',
        'price'
    ];


    public function details()
    {
        return $this->hasMany(Detail::class, 'payment_id');
    }
}
