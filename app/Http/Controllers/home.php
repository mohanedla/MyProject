<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\brand;
use App\Models\product;
use App\Models\User;
use auth;
class home extends Controller
{
    public function index()
        {
            $brand=brand::all();
            $products=product::all();
            return View('index',compact('brand','products'));
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