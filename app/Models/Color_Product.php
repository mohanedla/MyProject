<?php

namespace App\Models;
use App\Models\product;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Color_Product extends Model
{
    public function products() {
        return $this->belongsTo('App\Models\product','product_id');
    }

    public function color(){
        return $this->hasOne(Color::class, 'id', 'color_id');
    }

}