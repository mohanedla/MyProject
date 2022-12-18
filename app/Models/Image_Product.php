<?php

namespace App\Models;
use App\Models\product;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image_Product extends Model
{
    public function products() {
        return $this->belongsTo('App\Models\product','product_id');
    }
    public function image(){ 
        return $this->hasOne(product::class, 'id', 'product_id');
    }
}