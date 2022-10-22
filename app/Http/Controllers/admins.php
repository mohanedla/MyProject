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

    // }
    // public function update_admin($id)
    // {
    //     $edit= admin::find($id);
    //     $edit->id=request('admin_serial');
    //     $edit->fname=request('admin_fname');
    //     $edit->lname=request('admin_lname');
    //     $edit->email=request('admin_email');
    //     $edit->password=request('admin_password');
    //     $edit->confirm_password=request('admin_confirm_password');
    //     $edit->address=request('admin_address');
    //     $edit->adjective=request('admin_adjective');
    //     $edit->phone_number=request('admin_phone');
    //     $edit->age=request('admin_age');
    //     $edit->gender=request('gender');
    //     if(request()->file('profile_image'))
    //     {
    //         $edit->profile_image=request()->file('profile_image')->store('public');
    //     }
    //     $edit->save();
    //     return redirect('/admin')->with('message', 'edited succussfuly');
    // }
    public function delete_admin($id)
    {
        $del=User::find($id);
        $del->delete();
        return redirect('/admin');
    }
 }

?>
