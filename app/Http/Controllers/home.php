<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class home extends Controller
{
    public function index()
        {
            return View::make('index');
        }
}

class home extends Controller
{
    public function category_page()
        {
            return View::make('category_page');
        }
}

class home extends Controller
{
    public function login()
        {
            return View::make('login');
        }
}

class home extends Controller
{
    public function layout.empty()
        {
            return View::make('layout.empty');
        }
}

class home extends Controller
{
    public function report.reports()
        {
            return View::make('report.reports');
        }
}

class home extends Controller
{
    public function report.add_report()
        {
            return View::make('report.add_report');
        }
}

class home extends Controller
{
    public function about()
        {
            return View::make('about');
        }
}

class home extends Controller
{
    public function cart_page()
        {
            return View::make('cart_page');
        }
}

class home extends Controller
{
    public function checkout_page()
        {
            return View::make('checkout_page');
        }
}
class home extends Controller
{
    public function footer()
        {
            return View::make('footer');
        }
}

class home extends Controller
{
    public function welcome()
        {
            return view('welcome');
        }
}
class home extends Controller
{
    public function getlocale()
        {
            return app()->getlocale();
        }
}