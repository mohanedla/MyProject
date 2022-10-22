<?php

namespace App\Models;
use App\Models\User;
use App\Models\brand;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    protected $fillable = [
        'name',
        'model',
        'specification',
        'quantity',
        'size',
        'color',
        'price',
        'profile_image',
    ];
    // public function admins(){
    //     return $this->belongsToMany('App\User','admin_id')->withTimestamps();
    // }
    public function admins() {
        return $this->belongsTo('App\Models\User','admin_id');
    }
    public function brands() {
        return $this->belongsTo('App\Models\brand','brand_id');
    }
}