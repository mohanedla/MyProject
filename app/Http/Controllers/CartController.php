<?php

namespace App\Http\Controllers;
use App\Models\Cart;
use App\Models\User;
use App\Models\Order;


use App\Models\Kids;
use App\Models\Bills;
use App\Models\brand;
use App\Models\Women;
use App\Models\Notice;
use App\Models\report;
use GuzzleHttp\Client;
use App\Models\product;
use App\Models\Category;


use Illuminate\Http\Request;

class CartController extends Controller
{
    // public function store (){
    //     Cart::add(request('id'), request('name'), request('quantity'), request('price'), request('image'));
    // }
    public function addToCart (){
       // if check cart has same products
       $cartCount=Cart::where('user_id',auth()->user()->id)
       ->where('product_id',request('id'))
       ->where('color_id',request('color'))
       ->where('size_id',request('size'))
       ->count();
       // if yase update qty
       if ($cartCount>0) {
           $cart=Cart::where('user_id',auth()->user()->id)
           ->where('product_id',request('id'))
           ->where('color_id',request('color'))
           ->where('size_id',request('size'))
           ->first();
           $cart->qty+=request('quantity');
           $cart->save();
           # code...
       }else {
       //else create new one
           Cart::create([
               'product_id' => request('id')
               , 'user_id' =>  auth()->user()->id
               , 'name' =>  request('name')
               , 'qty' => request('quantity')
               , 'price' => request('price')
               , 'image' => request('image')
               , 'color_id' => request('color')
               , 'size_id'=>request('size')
           ]);
       }
     
        // return redirect('/shop');
    }
    public function updateCart(Request $request)
    {
        Cart::find($request->id)->update(['qty' => $request->quantity]);

        session()->flash('success', 'Item Cart is Updated Successfully !');
      
        return redirect()->back();
    }

    public function removeCart($rowId)
    {
        Cart::find($rowId)->delete();
        session()->flash('success', 'Item Cart Remove Successfully !');

        return redirect()->back();
    }
}