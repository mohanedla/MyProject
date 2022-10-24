<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Models\User;
use Auth;
class admins extends Controller
{
    public function admin_admin()
    {
        $admin=User::all();
        return View('admin.admin',compact('admin'));
    }

    public function admin_add_admin()
    {
        return View('admin.add_admin');
    }
    public function admin_login()
    {
        return View('/admin_login');
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