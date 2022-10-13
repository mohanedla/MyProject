<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class admin extends Controller
{
    public function admin_admin()
    {
        return View('admin.admin');
    }

    public function admin_add_admin()
    {
        return View('admin.add_admin');
    }
}