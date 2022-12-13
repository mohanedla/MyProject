<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\brand;
use App\Models\product;
use App\Models\User;
use App\Models\Category;
use App\Models\Men;
use App\Models\Women;
use App\Models\Kids;
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
            return View('index',compact('products','collect','brand','category_men','category_women','category_kids'));
        }
    public function category_page()
        {
            $brand=brand::all();
            $collect = array('M'=>'Men','W'=>'Women','C'=>'Kids' );
            $category_men=Men::all();
            $category_women=Women::all();
            $category_kids=Kids::all();
            return View('category_page',compact('brand','collect','category_men','category_women','category_kids'));
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
            // $products=product::all();
            $category_men=Men::all();
            $category_women=Women::all();
            $category_kids=Kids::all();
            return View('contact_us',compact('collect','brand','category_men','category_women','category_kids'));
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
            // dd($product);
            return View('category',compact('brand','product','category_men','category_women','category_kids','name'));


        }

        public function notic()
        {
            $page = "notifiction";
            return View('notic.d_notic',compact("page"));
        }

        public function report()
        {
            $page = "reports";
            return View('report.d_report',compact("page"));
        }
        public function Bills()
        {
            $page = "bills";

            return View('bills.d_bills',compact("page"));
        }


        public function Bills1()
        {
            $page = "bills";
            return View('bills.Bills',compact("page"));
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