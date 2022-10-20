<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\admin;
class admins extends Controller
{
    public function admin_admin()
    {
        $admin=admin::all();
        return View('admin.admin',compact('admin'));
    }

    public function admin_add_admin()
    {
        return View('admin.add_admin');
    }



    public function edit_admin($id)
    {
        $admin=admin::find($id);
        return View('admin.edit_admin',compact('admin'));

    }
    //هذا للداتا بيز
    public function add_admin () {

        $admin= new admin;
        $admin->id=request('admin_serial');
        $admin->fname=request('admin_fname');
        $admin->lname=request('admin_lname');
        $admin->email=request('admin_email');
        $admin->password=request('admin_password');
        $admin->confirm_password=request('admin_confirm_password');
        $admin->address=request('admin_address');
        $admin->adjective=request('admin_adjective');
        $admin->phone_number=request('admin_phone');
        $admin->age=request('admin_age');
        $admin->gender=request('admin_gender');
        $admin->profile_image=request()->file('admin_image') ? request()->file('admin_image')->store('public') : null;
        
        $admin->save();
        return redirect('/admin')->with('success','Thank You!');
    

    
    }
    public function update_admin($id)
    {
        $edit= admin::find($id);
        $edit->id=request('admin_serial');
        $edit->fname=request('admin_fname');
        $edit->lname=request('admin_lname');
        $edit->email=request('admin_email');
        $edit->password=request('admin_password');
        $edit->confirm_password=request('admin_confirm_password');
        $edit->address=request('admin_address');
        $edit->adjective=request('admin_adjective');
        $edit->phone_number=request('admin_phone');
        $edit->age=request('admin_age');
        $edit->gender=request('gender');
        if(request()->file('profile_image'))
        {
            $edit->profile_image=request()->file('profile_image')->store('public');
        }
        $edit->save();
        return redirect('/admin')->with('message', 'edited succussfuly');
    }
    public function delete_admin($id)
    {
        $del=admin::find($id);
        $del->delete();
        return redirect('/admin');
    }
}

?>