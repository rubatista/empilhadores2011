<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    public $timestamps = false;

    public function sub_category()
    {
        return $this->belongsTo(related: SubCategory::class);
    }

    public function product_details()
    {
        return $this->hasMany(related: ProductDetail::class);
    }

    public function prices()
    {
        return $this->hasMany(related: Price::class);
    }
}
