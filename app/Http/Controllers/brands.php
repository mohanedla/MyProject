<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\brand;

class brands extends Controller
{

    public function brand_brand()
    {
        $brand=brand::all();
        return View('brand.brand',compact('brand'));

    }

    public function brand_add_brand()
    {
        return View('brand.add_brand');

    }
    public function edit_brand($id)
    {
        $brand=brand::find($id);
        return View('brand.edit_brand',compact('brand'));

    }
    //هذا للداتا بيز}
    public function add_brand () {

        $brand= new brand;
        $brand->id=request('brand_serial');
        $brand->name=request('brand_name');
        $brand->model=request('brand_model');
        $brand->phone_number=request('brand_phone');
        $brand->email=request('brand_email');
        $brand->country=request('brand_country');
        $brand->address=request('brand_address');
        // $brand->profile_image=request()->file("profile_image")->store("/images/brand");
        $brand->profile_image=request()->file('profile_image') ? request()->file('profile_image')->store('public') : null;

        $brand->save();
        return redirect('/brand')->with('success','Thank You!');
    }
    public function update_brand($id)
    {
        $edit= brand::find($id);
        $edit->name=request('brand_name');
        $edit->model=request('brand_model');
        $edit->phone_number=request('brand_phone');
        $edit->email=request('brand_email');
        $edit->country=request('brand_country');
        $edit->address=request('brand_address');
        if(request()->file('profile_image'))
        {
            $edit->profile_image=request()->file('profile_image')->store('images/brand');
        }
        $edit->save();
        return redirect('/brand')->with('message', 'edited succussfuly');

    }
    public function delete_brand($id)
    {
        $del=brand::find($id);
        $del->delete();
        return redirect('/brand');
    }
}


?>