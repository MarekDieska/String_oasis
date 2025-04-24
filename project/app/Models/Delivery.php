<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Delivery extends Model
{
    protected $table = 'deliveries';
    public $timestamps = false;
    public $fillable = [
        'name',
        'description',
        'price'
    ];

    public function details()
    {
        return $this->hasMany(Detail::class, 'delivery_id');
    }
}
