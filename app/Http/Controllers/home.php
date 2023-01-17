<?php

namespace App\Http\Controllers;
use auth;
use Carbon\Carbon;
// use Illuminate\Notifications\Notification;
use App\Models\Men;

use App\Models\Cart;
use App\Models\Kids;
use App\Models\User;
use App\Models\Bills;
use App\Models\brand;
use App\Models\Order;
use App\Models\Women;
use App\Models\Notice;
use App\Models\report;
use App\Models\product;
use App\Models\Category;
use App\Models\TotalOrder;

use App\Models\Notification;
use Illuminate\Http\Request;
use App\Notifications\NewUser;
use Brian2694\Toastr\Facades\Toastr;

class home extends Controller
{
    public function index()
    {
        $collect = array('M'=>'Men','W'=>'Women','C'=>'Kids' );
        $brand=brand::all();
        $products=product::all();
        $category_men=Men::all();
        $category_women=Women::all();
        $category_kids=Kids::all();
        $old_order=0;
        if(Auth::check()){
        $old_order=Order::where('user_id',Auth::User()->id)->get();
        // dd($old_order);
        }
        return View('index',compact('old_order','products','collect','brand','category_men','category_women','category_kids'));
    }
    public function category_page(Request $request)
        {
            $products = product::paginate($request->get('per_page', 5));
            // dd($products);
            $brand=brand::all();
            $collect = array('M'=>'Men','W'=>'Women','C'=>'Kids' );
            $category_men=Men::all();
            $category_women=Women::all();
            $category_kids=Kids::all();
            $old_order=0;
            if(Auth::check()){
            $old_order=Order::where('user_id',Auth::User()->id)->get();
            // dd($old_order);
            }
            return View('category_page',compact('old_order','brand','collect','category_men','category_women','category_kids','products'));
        }

    public function login_register()
        {
            // $categories=Category::all();
            // $collect = array('M'=>'Men','W'=>'Women','C'=>'Children' );
            // $product_name_men=product::with('categories')->where('collection','=','Men')->get();
            // $product_name_women=product::with('categories')->where('collection','=','Women')->get();
            // $product_name_children=product::with('categories')->where('collection','=','Children')->get();
            return View('/login');
        }

    public function layout_empty()
    {
        return View('layout.empty');
    }


    public function about()
        {
            $categories=Category::all();
            $brand=brand::all();
            $collect = array('M'=>'Men','W'=>'Women','C'=>'Kids' );
            $category_men=Men::all();
            $category_women=Women::all();
            $category_kids=Kids::all();
            $old_order=0;
            if(Auth::check()){
            $old_order=Order::where('user_id',Auth::User()->id)->get();
            // dd($old_order);
            }
            return View('about',compact('old_order','collect','brand','category_men','category_women','category_kids'));
        }
    public function contact_us()
        {
            $collect = array('M'=>'Men','W'=>'Women','C'=>'Kids' );
            $brand=brand::all();
            $category_men=Men::all();
            $category_women=Women::all();
            $category_kids=Kids::all();
            $old_order=0;
            if(Auth::check()){
            $old_order=Order::where('user_id',Auth::User()->id)->get();
            // dd($old_order);
            }
            return View('contact_us',compact('old_order','collect','brand','category_men','category_women','category_kids'));
        }
        public function contact_notice(Request $request)
    {
        $notice= new Notice;
        $notice->name=request('name');
        $notice->email=request('email');
        $notice->phone1=request('phone1');
        $notice->subject=request('subject');
        $notice->role=request('role');
        $notice->save();
        // Toastr::success('Create new notice successfully :)','Success');
        Notification::create([
            'user_id'=>auth()->user()->id,
            'type'=>'new_notice',
            'data'=>"تم ارسال بلاغ جديد",
            'created_at'=>Carbon::now('Africa/Tripoli'),
        ]);
        return redirect('/home');
    }
    public function delete_notice($id)
    {

        $del= Notice::find($id);
        // $user=$del;
        $del->delete();
        Toastr::success('Deleted successfully :)','Success');
        return redirect('/d_notic');


    }

    public function cart_page()
        {
            $brand=brand::all();
            $collect = array('M'=>'Men','W'=>'Women','C'=>'Kids' );
            $category_men=Men::all();
            $category_women=Women::all();
            $category_kids=Kids::all();
            $carts=Cart::where('user_id',auth()->user()->id)->get();
            $old_order=0;
            if(Auth::check()){
            $old_order=Order::where('user_id',Auth::User()->id)->get();
            // dd($old_order);
            }
            return View('cart_page',compact('carts','old_order','collect','brand','category_men','category_women','category_kids'));

        }

    public function checkout_page()
        {
            $brand=brand::all();
            $collect = array('M'=>'Men','W'=>'Women','C'=>'Kids' );
            $category_men=Men::all();
            $category_women=Women::all();
            $category_kids=Kids::all();
            $old_order=0;
            $Cart=Cart::where('user_id',auth()->user()->id)->get();
        if(Auth::check()){
        $old_order=Order::where('user_id',Auth::User()->id)->get();
        // dd($old_order);
        }
            return View('checkout_page',compact('Cart','old_order','collect','brand','category_men','category_women','category_kids'));
        }

        public function category (string $id, string $name)
        {
            $category_men=Men::all();
            $category_women=Women::all();
            $category_kids=Kids::all();
            $brand=brand::all();
            $product=product::where('category_id',$id)->where('collection',$name)->get();
            $old_order=0;
            if(Auth::check()){
            $old_order=Order::where('user_id',Auth::User()->id)->get();
            // dd($old_order);
            }
            return View('category',compact('old_order','brand','product','category_men','category_women','category_kids','name'));

        }

        public function notic()
        {
            if(!Auth::check() )
            return redirect('/');
            if(Auth::user()->role != 1 && Auth::user()->role != 2)
            return redirect('/');

            else{
            $page = "notification";
            $notices=Notice::all();
            return View('notic.d_notic',compact('notices','page'));
        }
    }


        public function dashboard_home()
        {
            if(!Auth::check() )
            return redirect('/');
            if(Auth::user()->role != 1 && Auth::user()->role != 2)
             return redirect('/');

            else{
            $page = "home";
            $Users=User::all();
            $counts= User::where('role','2')->count();
            $counts1= User::where('role','3')->count();
            $counts2= brand::count();
            $counts3= report::count();
            $counts4= product::count();
            $counts5= product::where('collection','Men')->count();
            $counts6= product::where('collection','Women')->count();
            $counts7= product::where('collection','Kids')->count();
            $counts8= Notice::count();
            $counts9= Order::count();
            // $user=Auth::User()->notify(new NewUser);
            // $user->markAsRead();
            return View('dashboard.home',compact('Users','counts','counts1','counts2','counts3','counts4','counts5','counts6','counts7','counts8','counts9','page'));
        }
    }

        public function report()
        {
            if(!Auth::check() )
            return redirect('/');
            if(Auth::user()->role != 1 && Auth::user()->role != 2)
             return redirect('/');

            else{
            $page = "report";
            return View('report.d_report',compact("page"));
        }
    }

        public function Bills()
        {
            if(!Auth::check() )
            return redirect('/');
            if(Auth::user()->role != 1 && Auth::user()->role != 2)
             return redirect('/');

            else{

                // $order=Order::where('id',1)->whereDate('created_at','>', Carbon::today()->subDays( 1 ))
                // ->whereDate('created_at', '!=', Carbon::today());
                // if($order)
                // {
                //     $order->delete();
                    
                // }
                $o = Carbon::now('Africa/Tripoli');
              $page = "bills";
            $orders=Order::all();
            return View('bills.d_bills',compact('page','orders','o'));
        }
 }

        public function Bills1($id)
        {
            if(!Auth::check() )
            return redirect('/');
            if(Auth::user()->role != 1 && Auth::user()->role != 2)
             return redirect('/');

            else{
            $page = "bills";
            $bills=Bills::where('order_id',$id)->get();
            $orders=Order::where('id',$id)->with('user')->get();
            $totals=TotalOrder::where('order_id',$id)->get();

            return View('bills.Bills',compact('page','bills','orders','totals'));
        }
    }
    public function check($id){
        $order=Order::find($id);
        $order->status=1;
        $order->update();
        return redirect()->back();
    }
    public function delete_bill($id) {
        $order=Order::find($id);
        if ($order) {
            if ($order->status==1) {
                Bills::where('order_id',$order->id)->delete();
                $order->delete();
            }else {
                // return quntity to table products
                $bills=Bills::where('order_id',$order->id)->get();
                foreach ($bills as $bill) {
                    $product=Product::find($bill->product_id);
                    $product->quantity_price -=$bill->quantity;
                    $product->save();
                }
                // delete all bills wher has order id
                Bills::where('order_id',$order->id)->delete();
                // delete order
                $order->delete();
            }
        }
        return redirect()->back();
    }
    public function delete_bill1($id) {
        $delete=Bills::where('order_id',$id)->delete();
        $del=Order::find($id)->delete();
        return redirect()->back();
    }
    public function old_Bills($id)
    {
        // if(!Auth::check() )
        // return redirect('/');
        // if(Auth::user()->role != 1 && Auth::user()->role != 2)
        //  return redirect('/');

        // else{
        $page = "old_Bills";
        $brand=brand::all();
        $collect = array('M'=>'Men','W'=>'Women','C'=>'Kids' );
        $products=product::all();
        $category_men=Men::all();
        $category_women=Women::all();
        $category_kids=Kids::all();
        $old_order=0;
        if(Auth::check()){
        $old_order=Order::where('user_id',Auth::User()->id)->get();
        // dd($old_order);
        }
        $old_bills=Bills::where('order_id',$id)->with('orders')->get();
        $total=0;
        foreach ($old_bills as $bill){
            $total+=$bill->total;
        }
        return View('bills.old_Bills',compact('total','old_order','old_bills','products','collect','brand','category_men','category_women','category_kids'));
        // return View('bills.old_Bills',compact('page','brand'));
    }
        public function R1()
        {
            if(!Auth::check() )
            return redirect('/');
            if(Auth::user()->role != 1 && Auth::user()->role != 2)
             return redirect('/');

            else{

            $page = "R1";
            return View('report.R1',compact("page"));
        }
    }
        public function R2()
        {
            if(!Auth::check() )
            return redirect('/');
            if(Auth::user()->role != 1 && Auth::user()->role != 2)
             return redirect('/');

            else{
            $page = "R2";
            return View('report.R2',compact("page"));
        }
    }
        public function R3()
        {
            if(!Auth::check() )
            return redirect('/');
            if(Auth::user()->role != 1 && Auth::user()->role != 2)
             return redirect('/');

            else{
            $page = "R3";

            return View('report.R3',compact("page"));
        }
    }
        public function R4()
        { if(!Auth::check() )
            return redirect('/');
            if(Auth::user()->role != 1 && Auth::user()->role != 2)
             return redirect('/');

            else{
            $page = "R4";

            return View('report.R4',compact("page"));
        }
    }
        public function R5()
        {
            if(!Auth::check() )
            return redirect('/');
            if(Auth::user()->role != 1 && Auth::user()->role != 2)
             return redirect('/');

            else{
            $page = "R5";

            return View('report.R5',compact("page"));
        }
    }
    public function notifications()
    {
        if(!Auth::check() )
        return redirect('/');
        if(Auth::user()->role != 1 && Auth::user()->role != 2)
         return redirect('/');

        else{
        $notifications=Notification::with(['user'])->orderBy('id', 'desc')->get();
        Notification::query()->update(['read_at' =>Carbon::now('Africa/Tripoli')]);
        $page = "notifications";
        return View('notifications',compact("page",'notifications'));
    }
    }
     function footer()
        {
            return View('footer');
        }

    public function welcome()
        {
            return view('welcome');
        }

}