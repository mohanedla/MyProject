<?php
namespace App\Http\Controllers;
use Brian2694\Toastr\Facades\Toastr;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Rules\MatchOldPassword;

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
        $user->profile_image=request()->file('profile_image') ? request()->file('profile_image')->store('public') : null;
        $user->save();
        Toastr::success('Create new User successfully :)','Success');
        return redirect('/employees');
    }

    public function delete_employee($id)
    {

        $user = User::find($id);
        $del=$user;
        $user->delete();
        Toastr::success('Delete User successfully :)','Success');
        if($del->role == 2)
        return redirect('/employees');
        else
        return redirect('/d_user');

    }
   
    public function change_password()
    {
        $page="home";
        return view('employee.change_password',compact('page'));
    }

    // change password in db
    public function changePasswordDB(Request $request)
    {
        $request->validate([
            'current_password' => ['required', new MatchOldPassword],
            'new_password' => ['required'],
            'new_confirm_password' => ['same:new_password'],
        ]);

        User::find(auth()->user()->id)->update(['password'=> Hash::make($request->new_password)]);
        Toastr::success('User change successfully :)','Success');
        return redirect('dashboard_home');
    }

}
