<?php

namespace App\Http\Controllers;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;

class CartController extends Controller
{
    // public function store (){
    //     Cart::add(request('id'), request('name'), request('quantity'), request('price'), request('image'));
    // }
    public function addToCart (){
        Cart::add([
            'id' => request('id')
            , 'name' =>  request('name')
            , 'qty' => request('quantity')
            , 'price' => request('price')
            , 'image' => request('image')
            // , 'options' => ['image' => request('image')]
        ]);
        return redirect('/shop');
    }
    public function updateCart(Request $request)
    {
        Cart::update($request->id, ['qty' => $request->quantity]);

        session()->flash('success', 'Item Cart is Updated Successfully !');

        return redirect()->back();
    }

    public function removeCart($rowId)
    {
        Cart::remove($rowId);
        session()->flash('success', 'Item Cart Remove Successfully !');

        return redirect()->back();
    }
}