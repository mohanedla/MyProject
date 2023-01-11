<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\product;
use App\Models\brand;
use App\Models\Category;
use App\Models\Bills;
use App\Models\Order;
use App\Models\TotalOrder;
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
    $user->phone_number=request('phone_number');
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
        $count_order=Order::where('user_id',Auth::User()->id)->count();
        $user=User::find(Auth::User()->id);
        $user->count_order=$count_order+1;
        $user->update();
        $carts=Cart::content();
        // for order
        $order=new Order;
        $order->user_id=Auth::User()->id;
        $order->save();
        // dd($order->id);
        foreach($carts as $cart){
            $bills=new Bills;
            $bills->order_id=$order->id;
            $bills->profile_image=$cart->image;
            $bills->name=$cart->name;
            $bills->quantity=$cart->qty;
            $bills->price=$cart->price;
            $bills->total=$cart->price*$cart->qty;
            $bills->price_dl=10000;
            $bills->total_dl=10000;
            $product = product::find($cart->id);
            $product->quantity_price = $product->quantity_price+$cart->qty;
            $product->save();
            $bills->save();
        }
        // $total=new TotalOrder;
        // $total->order_id=$order->id;
        $total=Order::find($order->id);
        if(Auth::User()->count_order>=1){
            $total->total=Cart::priceTotal()-(Cart::priceTotal()*0.15);
        }
        else{
            $total->total=Cart::priceTotal();
        }

        $total->update();
        Cart::destroy();
        return redirect('/home');
    }


}