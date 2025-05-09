<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Photo extends Model
{
    use SoftDeletes;

    protected $dates = ['deleted_at'];

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
