<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    protected $table = 'photos';
    public $timestamps = false;
    protected $fillable = [
        'product_id',
        'url'
    ];

    public function product()
    {
        return $this->belongsTo(Product::class, 'product_id');
    }
}
