<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\brand;

class brands extends Controller
{
    public function brand_brand()
    {
        return View('brand.brand');

    }

    public function brand_add_brand()
    {
        return View('brand.add_brand');

    }
    public function add_brand () {

        $brand= new brand;
        $brand->id=request('brand_serial');
        $brand->name=request('brand_name');
        $brand->model=request('brand_model');
        $brand->phone_number=request('brand_phone');
        $brand->email=request('brand_email');
        $brand->country=request('brand_country');
        $brand->address=request('brand_address');
        $brand->profile_image=request()->file('profile_image') ? request()->file('profile_image')->store('public') : null;

        $brand->save();
        return redirect('home')->with('success','Thank You!');
    }
}


?>
