<?php

namespace App\Http\Controllers;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;
// use Illuminate\Notifications\Notification;
use App\Notifications\NewUser;

use App\Models\brand;
use App\Models\product;
use App\Models\User;
use App\Models\Category;
use App\Models\Men;
use App\Models\Women;
use App\Models\Kids;
use App\Models\Notice;
use App\Models\report;
use App\Models\Bills;
use App\Models\Order;


use auth;
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
            return View('category_page',compact('brand','collect','category_men','category_women','category_kids','products'));
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
            return View('about',compact('collect','brand','category_men','category_women','category_kids'));
        }
    public function contact_us()
        {
            $collect = array('M'=>'Men','W'=>'Women','C'=>'Kids' );
            $brand=brand::all();
            $category_men=Men::all();
            $category_women=Women::all();
            $category_kids=Kids::all();
            return View('contact_us',compact('collect','brand','category_men','category_women','category_kids'));
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
            return View('cart_page',compact('collect','brand','category_men','category_women','category_kids'));

        }

    public function checkout_page()
        {
            $brand=brand::all();
            $collect = array('M'=>'Men','W'=>'Women','C'=>'Kids' );
            $category_men=Men::all();
            $category_women=Women::all();
            $category_kids=Kids::all();
            return View('checkout_page',compact('collect','brand','category_men','category_women','category_kids'));
        }

        public function category (string $id, string $name)
        {
            $category_men=Men::all();
            $category_women=Women::all();
            $category_kids=Kids::all();
            $brand=brand::all();
            $product=product::where('category_id',$id)->where('collection',$name)->get();
            return View('category',compact('brand','product','category_men','category_women','category_kids','name'));

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
            $counts9= Bills::count();
            $user=Auth::User()->notify(new NewUser);
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
            $page = "bills";
            $orders=Order::all();
            $bills=Bills::all();
            return View('bills.d_bills',compact('page','orders'));
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
            $totals=0;
            foreach ($bills as $bill){
                $totals+=$bill->total;
            }
            return View('bills.Bills',compact('page','bills','orders','totals'));
        }
    }
    public function delete_bill($id) {
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
        $old_bills=Bills::where('order_id',$id)->with('orders')->get();
        $total=0;
        foreach ($old_bills as $bill){
            $total+=$bill->total;
        }
        return View('bills.old_Bills',compact('total','old_bills','products','collect','brand','category_men','category_women','category_kids'));
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


     function footer()
        {
            return View('footer');
        }

    public function welcome()
        {
            return view('welcome');
        }

}
