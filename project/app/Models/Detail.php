<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Detail extends Model
{
    protected $table = 'details';
    public $timestamps = false;
    protected $fillable = [
        'delivery_id',
        'payment_id',
        'time',
        'status',
        'total',
        'note'
    ];

    public function delivery()
    {
        return $this->belongsTo(Delivery::class, 'delivery_id');
    }

    public function payment()
    {
        return $this->belongsTo(Payment::class, 'payment_id');
    }

    public function orders()
    {
        return $this->hasMany(Order::class, 'detail_id');
    }
}
