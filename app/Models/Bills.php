<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bills extends Model
{
    // orders
    //  with هذا الاسم الي بنستعمله في الكنترولر بعد كلمة 
    public function orders()
    {
            //  id ف جدول المستخدم
            // order_id ف جدول الطلبيات
        return $this->hasOne(User::class, 'id', 'order_id');
    }
}