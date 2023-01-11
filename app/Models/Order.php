<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    public function user(){
        return $this->hasOne(User::class, 'id', 'user_id');
    }
    // public function totals(){
    //     return $this->hasOne(TotalOrder::class, 'id', 'total_id');
    // }
}
