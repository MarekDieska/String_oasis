<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Parameter extends Model
{
    protected $table = 'parameters';

    public function product()
    {
        return $this->belongsTo(Product::class, 'product_id');
    }
}
