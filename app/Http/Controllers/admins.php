<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\product;
use App\Models\brand;
use App\Models\Category;
use Auth;
class admins extends Controller
{
    public function admin_admin()
    {
        $categories=Category::all();
        $collect = array('M'=>'Men','W'=>'Women','C'=>'Children' );
        $product_name_men=product::with('categories')->where('collection','=','Men')->get();
        $product_name_women=product::with('categories')->where('collection','=','Women')->get();
        $product_name_children=product::with('categories')->where('collection','=','Children')->get();
        $admin=User::all();
        return View('admin.admin',compact('admin','collect','categories','product_name_men','product_name_women','product_name_children'));
    }

    public function admin_add_admin()
    {
        return View('admin.add_admin');
    }
    public function admin_login()
    {
        return View('/admin_login');
    }
    public function admin_register()
    {
        return View('/admin_register');
    }

    public function validation_admin () {
        $validate=request('password');
        if($validate=='12345')
        {
            return view('/admin_login');
        }
        else{
            return redirect('/login')->with('error','incorrect password');
        }
    }

    public function edit_admin($id)
    {
        $admin=User::find($id);
        return View('admin.edit_admin',compact('admin'));

    }

    public function add_admin () {

        $admin= new User;
        $admin->name=request('name');
        $admin->email=request('email');
        $admin->password = Hash::make(request('password'));
        $admin->role=request('role');

        $admin->save();
        return redirect('/admin')->with('success','Thank You!');

    }
    public function create () {

        $admin= new User;
        $admin->name=request('name');
        $admin->email=request('email');
        $admin->password = Hash::make(request('password'));
        $admin->role=request('role');

        $admin->save();
        return redirect('/admin_login')->with('success','Thank You!');

    }


    public function delete_admin($id)
    {
        $del=User::find($id);
        $del->delete();
        return redirect('/admin');
    }
 }

?>