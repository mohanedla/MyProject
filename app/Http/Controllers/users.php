<?php

namespace App\Http\Controllers;

use Auth;
use Carbon\Carbon;
use App\Models\Cart;
use App\Models\User;
use App\Models\Bills;
use App\Models\brand;
use App\Models\Order;
use App\Models\product;
use App\Models\Category;
use App\Models\TotalOrder;
use App\Models\Notification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

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
        $carts=Cart::where('user_id',auth()->user()->id)->get();
        // for order
        $order=new Order;
        $order->user_id=Auth::User()->id;
        $order->save();
        // dd($order->id);
       
            foreach($carts as $cart){
                $bills=new Bills;
                $bills->order_id=$order->id;
                $bills->profile_image=$cart->image;
                $bills->product_id=$cart->product_id;
                $bills->name=$cart->name;
                $bills->color_id=$cart->color_id;
                $bills->size_id=$cart->size_id;
                $bills->quantity=$cart->qty;
                $bills->price=$cart->price;
                $bills->total=$cart->price*$cart->qty;
                $bills->price_dl=Session::get('LYD') * $cart->price ;
                $bills->total_dl=Session::get('LYD') * ($cart->price*$cart->qty) ;
                   
                $product = product::find($cart->product_id);
               
                    $product->quantity_price =  $product->quantity_price + $cart->qty;
                    $product->save();
                
    
    
                $bills->save();
            }
     
        
        // $total=new TotalOrder;
        // $total->order_id=$order->id;
        $total=Order::find($order->id);
        if(Auth::User()->count_order>=1)
        { 
            $total->total=Cart::GET_TOTAL_PRICE()-(Cart::GET_TOTAL_PRICE()*0.15);
        }
        else
        {
            $total->total=Cart::GET_TOTAL_PRICE();
        }

        $total->update();
        Cart::query()->where('user_id',auth()->user()->id)->delete();
        Notification::create([
            'user_id'=>auth()->user()->id,
            'type'=>'new_order',
            'data'=>"تم انشاء طلبية جديد",
            'created_at'=>Carbon::now('Africa/Tripoli'),
        ]);
        return redirect('/home');
    }


}