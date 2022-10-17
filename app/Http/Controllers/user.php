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

    // public function add_user () {
    //      Request $request
    //     $user= new brand;
    //     $user->name=request('name');
    //     $user->phone_number=request('phone_number');
    //     $user->email=request('email');
    //     $user->country=request('country');
    //     $user->address=request('address');
    //     if ($request->has('profile_image')) {
    //         // Get image file
    //         $image = $request->file('profile_image');
    //         // Make a image name based on user name and current timestamp
    //         $name = str_slug($request->input('name')).'_'.time();
    //         // Define folder path
    //         $folder = '/images/uploads/';
    //         // Make a file path where image will be stored [ folder path + file name + file extension]
    //         $filePath = $folder . $name. '.' . $image->getClientOriginalExtension();
    //         // Upload image
    //         $this->uploadOne($image, $folder, 'public', $name);
    //         // Set user profile image path in database to filePath
    //         $user->profile_image = $filePath;
    //     }

    //     $user= new brands;
    //     $user->name=$request->input('name');
    //     $user->phone_number=$request->input('phone_number');
    //     $user->email=$request->input('email');
    //     $user->country=$request->input('country');
    //     $user->address=$request->input('address');
    //     if ($request->has('profile_image')) {
    //         // Get image file
    //         $image = $request->file('profile_image');
    //         // Make a image name based on user name and current timestamp
    //         $name = str_slug($request->input('name')).'_'.time();
    //         // Define folder path
    //         $folder = '/images/uploads/';
    //         // Make a file path where image will be stored [ folder path + file name + file extension]
    //         $filePath = $folder . $name. '.' . $image->getClientOriginalExtension();
    //         // Upload image
    //         $this->uploadOne($image, $folder, 'public', $name);
    //         // Set user profile image path in database to filePath
    //         $user->profile_image = $filePath;
    //     }
    //     $user->save();
    //     return redirect('home')->with('success','Thank You!');
    // }
}
