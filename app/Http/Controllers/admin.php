<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class admin extends Controller
{
    public function admin.admin()
    {   
        return View::make('add_admin');
    }
}
class admin extends Controller
{
    public function admin.add_admin()
    {
        return View::make('admin.add_admin');
    }
}
