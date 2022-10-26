<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\brand;
use App\Models\product;
use App\Models\User;
use App\Models\Category;
use auth;
class home extends Controller
{
    public function index()
        {
            $categories=Category::all();
            $collect = array('M'=>'Men','W'=>'Women','C'=>'Children' );
            $brand=brand::all();
            $products=product::all();
            $product_name_men=product::with('categories')->where('collection','=','Men')->get();
            $product_name_women=product::with('categories')->where('collection','=','Women')->get();
            $product_name_children=product::with('categories')->where('collection','=','Children')->get();
            return View('index',compact('brand','products','collect','categories','product_name_men','product_name_women','product_name_children'));
        }
    public function category_page()
        {
            $brand=brand::all();
            return View('category_page',compact('brand'));
        }

    public function login_register()
        {
            return View('/login');
        }

    public function layout_empty()
    {
        return View('layout.empty');
    }

    public function report_reports()
        {
            return View('report.reports');
        }

    // public function report_add_report()
    //     {
    //         return View('report.add_report');
    //     }


    public function about()
        {
            return View('about');
        }
    public function contact_us()
        {
            return View('contact_us');
        }

    public function cart_page()
        {
            return View('cart_page');
        }

    public function checkout_page()
        {
            return View('checkout_page');
        }

    public function footer()
        {
            return View('footer');
        }

    public function welcome()
        {
            return view('welcome');
        }

}