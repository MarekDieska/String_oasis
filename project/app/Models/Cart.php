<?php
// app/Models/Cart.php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    // Disable automatic created_at / updated_at handling
    public $timestamps = false;

    protected $fillable = [
        'user_id',
        'product_id',
        'quantity',
    ];
    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
