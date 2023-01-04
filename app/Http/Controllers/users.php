<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\product;
use App\Models\brand;
use App\Models\Category;
use App\Models\Bills;
use App\Models\Order;
use Gloudemans\Shoppingcart\Facades\Cart;
use Auth;
class users extends Controller
{
    public function user()
    {
        if(!Auth::check() )
        return redirect('/');
        if(Auth::user()->role != 1 && Auth::user()->role != 2)
        return redirect('/');

        else{


        $users = User::where('role', 3)->get();
        $page = "users";
        return View('user.d_user',compact('users','page'));

    }
}
public function update_user(){
    $user=User::find(Auth::User()->id);
    $user->bank_num=request('bank_num');
    $user->address=request('address');
    if(request()->file('profile_image'))
    {
        $user->profile_image=request()->file('profile_image')->store('public');
    }
    $user->recive=request('recive');
    $user->update();
    return redirect('/checkout_page');
}

    public function delete_user($id)
    {
        $del=User::find($id)->delete();
        $del->delete();
        Toastr::success('Delete User successfully :)','Success');
        return redirect('/d_user');
    }

    public function order_product(){
        $carts=Cart::content();
        $order=new Order;
        $order->user_id=Auth::user()->id;
        $order->save();
        // dd($order->id);
        foreach($carts as $cart){
            $bills=new Bills;
        $bills->order_id=$order->id;
        $bills->name=$cart->name;
        $bills->quantity=$cart->qty;
        $bills->price=$cart->price;
        $bills->total=$cart->price*$cart->qty;
        $bills->price_dl=10000;
        $bills->total_dl=10000;
        $bills->save();
        }
        Cart::destroy();
        return redirect('/home');
    }


}