<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class home extends Controller
{
    public function index()
        {
            return View('index');
        }
// aymen
    public function category_page()
        {
            return View('category_page');
        }

    public function login()
        {
            return View('login');
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