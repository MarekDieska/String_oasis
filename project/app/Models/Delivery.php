<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Delivery extends Model
{
    protected $table = 'deliveries';

    public function details()
    {
        return $this->hasMany(Detail::class, 'delivery_id');
    }
}
