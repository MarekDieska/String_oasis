<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use SoftDeletes;
    protected $table = 'products';
    public $timestamps = false;

    protected $fillable = ['name','brand', 'description', 'price','discount', 'stock', 'stars', 'subcategory_id'];

    public function subcategory()
    {
        return $this->belongsTo(Subcategory::class, 'subcategory_id');
    }

    public function parameters()
    {
        return $this->hasMany(Parameter::class, 'product_id');
    }

    public function photos()
    {
        return $this->hasMany(Photo::class, 'product_id');
    }

    public function items()
    {
        return $this->hasMany(Item::class, 'product_id');
    }

    public function carts()
    {
        return $this->hasMany(Cart::class, 'product_id');
    }
}
