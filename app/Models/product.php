<?php

namespace App\Models;
use App\Models\User;
use App\Models\brand;
use App\Models\Category;
use App\Models\Collection;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    // protected $fillable = [
    //     'model',
    //     'specification',
    //     'quantity',
    //     'size',
    //     'color',
    //     'price',
    //     'profile_image',
    // ];
    // public function admins(){
    //     return $this->belongsToMany('App\User','admin_id')->withTimestamps();
    // }
    
    public function admins() {
        return $this->belongsTo('App\Models\User','admin_id');
    }
    public function brands() {
        return $this->belongsTo('App\Models\brand','brand_id');
    }

    public function user(){
        return $this->hasOne(User::class, 'id', 'admin_id');
    }

    public function brand(){
        return $this->hasOne(brand::class, 'id', 'brand_id');
    }

    public function category(){
        return $this->hasOne(Category::class, 'id', 'category_id');
    }

    public function colors(){
        return $this->hasMany(Color_Product::class, 'product_id', 'id');
    }

    public function sizes(){
        return $this->hasMany(Size_Product::class, 'product_id', 'id');
    }

    public function images(){
        return $this->hasMany(Image_Product::class, 'product_id', 'id');
    }

    // public function categories() {
    //     return $this->belongsTo('App\Models\Category','category_id');
    // }
}