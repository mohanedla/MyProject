<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\product;
use App\Models\brand;
use App\Models\Category;
use App\Models\Bills;
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
        $order=new Bills;
        $order->admin_id=Auth::user()->id;
        // $name=request('name');
        // $quantity=request('qty');
        // $Unit_Price=request('price');
        // $Total=request('tprice');
        // dd($cart);
        $i=0;
        $name =[];
        $quantity =[];
        $Unit_Price =[];
        $Total =[];
        foreach ($carts as $cart ){

            $name[$i]= $cart->name;
            $quantity[$i]=$cart->qty;
            $Unit_Price[$i]=$cart->price;
            $Total[$i]=$cart->price*$cart->qty;
            $i++;
        }
        $order->quantity=implode(',' , $quantity);
        $order->name=implode(',' , $name);
        $order->Unit_Price=implode(',' , $Unit_Price);
        $order->Total=implode(',' , $Total);
        $order->Unit_Price_DL=10000;
        $order->Total_DL=10000;
        $order->Totals=Cart::priceTotal();
        $order->Totals_Dl=100000;
        $order->save();
        Cart::destroy();
        return redirect('/home');
    }


}
