<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class user extends Controller
{
    public function user()
    {
        return View('user.user');

    }

    public function user_add_user ()
    {
        return View('user.add_user');

    }
}