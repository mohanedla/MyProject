<?php

namespace App\Models;

use App\Models\Size;
use App\Models\Color;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Cart extends Model
{
    public $fillable=['id','product_id','user_id','color_id','size_id','image','name','qty','price','Unit_Price_DL','Total_DL'];
    use HasFactory;
    /**
     * Get the size that owns the cart
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function color(): BelongsTo
    {
        return $this->belongsTo(Color::class);
    }
    /**
     * Get the size that owns the cart
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function size(): BelongsTo
    {
        return $this->belongsTo(Size::class);
    }
    static function GET_TOTAL_PRICE(){
        $array_of_prices=self::where('user_id',auth()->user()->id)
        ->get()
        ->map(function ($cart){ return $cart->price*$cart->qty;})->toArray(); 
        return array_sum($array_of_prices);
    }
}
