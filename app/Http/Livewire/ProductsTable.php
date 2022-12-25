<?php

namespace App\Http\Livewire;

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
class ProductsTable extends Component
{
    public function render()
    {
        $products=product::with('brands','colors.color','sizes.size','images')->where('id',$id)->get();
        $size=Size::all();
        Cart::content();
        return view('livewire.products-table',compact('products','size'));
    }
}