<?php

namespace App\Http\Livewire;
use Illuminate\Http\Request;

use Livewire\Component;

use App\Models\product;
use App\Models\brand;
use App\Models\Category;
use App\Models\Men;
use App\Models\Women;
use App\Models\Kids;
use App\Models\Size;
use App\Models\Color;
use App\Models\Color_Product;
use App\Models\Size_Product;
use App\Models\Image_Product;
use Gloudemans\Shoppingcart\Facades\Cart;
use Auth;

class CartCounter extends Component
{
    public array $quantity;

    

    public function render()
    {
        $cart_conter=Cart::content()->count();
        return view('livewire.cart-counter',compact('cart_conter'));
    }
}