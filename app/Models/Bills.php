<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bills extends Model
{
    public function orders(){
        return $this->hasOne(User::class, 'id', 'order_id');
    }
}