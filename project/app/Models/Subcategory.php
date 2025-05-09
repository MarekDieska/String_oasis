<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Subcategory extends Model
{
    protected $table = 'subcategories';
    public $timestamps = false;
    public $fillable = ['name', 'category_id'];

    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }

    public function products()
    {
        return $this->hasMany(Product::class, 'subcategory_id');
    }
}
