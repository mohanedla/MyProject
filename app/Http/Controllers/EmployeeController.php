<?php

namespace App\Http\Controllers;
use Brian2694\Toastr\Facades\Toastr;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class EmployeeController extends Controller
{
    public function employees()
    {
        $users = User::where('role', 2)->get();
        $page = "employees";
        return View('employee.index',compact('users','page'));

    }

    public function add_employee()
    {
        $page = "employees";
        return view('employee.add_employee',compact('page'));
    }

    public function store_employee(Request $request)
    {
        request()->validate(
        [
            'name'  => "required|string",
            'email' => 'required|email|unique:users',
            'password' => 'required|min:8|confirmed',
        ],
        [
            'name.required' => 'يجب إدخال الاسم',
            'email.required' => 'يجب اضافة البريد الالكتروني',
            'email.email' => 'يجب اضافة البريد الالكتروني',
            'email.unique' => 'البريد الالكتروني الذي قمت بإدخاله موجود',
            'password.required' => 'يجب اضافة كلمة المرور',
            'password.min' => 'يجب ان تكون كلمة المرور من 8 خانات علي الاقل',
            'password.confirmed' => 'كلمة المرور الجديدة غير مطابقة مع الاعادة',
        ]);
        $user = new User;
        $user->name = request('name');
        $user->email = request('email');
        $user->role = 2;
        $user->password = Hash::make(request('password'));
        $user->save();
        Toastr::success('Create new User successfully :)','Success');
        return redirect()->back()->with('success','تــمــت إضــافــة مـسـتـخـدم بــنــجــاح');
    }

    public function delete_employee($id)
    {
        $user = User::find($id)->delete();
        Toastr::success('Delete User successfully :)','Success');
        return redirect()->back()->with('success','تــمــت حذف مـسـتـخـدم بــنــجــاح');
    }

}
