<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\product;
use App\Models\brand;
use App\Models\Category;
use Auth;
class users extends Controller
{
    public function user()
    {
        $categories=Category::all();
        $collect = array('M'=>'Men','W'=>'Women','C'=>'Children' );
        $product_name_men=product::with('categories')->where('collection','=','Men')->get();
        $product_name_women=product::with('categories')->where('collection','=','Women')->get();
        $product_name_children=product::with('categories')->where('collection','=','Children')->get();
        $users=User::all();
        return View('user.user',compact('users','collect','categories','product_name_men','product_name_women','product_name_children'));

    }

    public function delete_user($id)
    {
        $del=User::find($id);
        $del->delete();
        return redirect('/user');
    }

}