<?php

namespace App\Http\Controllers;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;
use App\Models\product;
use App\Models\brand;
use App\Models\Category;
use Auth;

class brands extends Controller
{
    public function brand_brand()
    {
        if(!Auth::check() )
        return redirect('/');
        if(Auth::user()->role != 1 && Auth::user()->role != 2)
        return redirect('/');

        else{
        $categories=Category::all();
        $collect = array('M'=>'Men','W'=>'Women','C'=>'Children' );
        $product_name_men=product::with('categories')->where('collection','=','Men')->get();
        $product_name_women=product::with('categories')->where('collection','=','Women')->get();
        $product_name_children=product::with('categories')->where('collection','=','Children')->get();
        $brand=brand::all();
        $page = "brands";
        return View('brand.brand',compact('brand','collect','categories','page','product_name_men','product_name_women','product_name_children'));

    }
}

    public function brand_add_brand()
    { 
        if(!Auth::check() )
        return redirect('/');
        if(Auth::user()->role != 1 && Auth::user()->role != 2)
        return redirect('/');

        else{
        $page = "brands";
        return View('brand.add_brand',compact('page'));

    }
}
    public function brand()
    {
        $brand=brand::all();
        // $view=brand::find($id);
        $page = "brands";
        return View('brand.d_brand',compact('brand','page'));

    }
    public function addbrand()
    {
        $page = "brands";
        return View('brand.dashboard_add_brand',compact('page'));

    }
    public function edit_brand($id)
    {
        $brand=brand::find($id);
        $page = "brands";
        return View('brand.edit_brand',compact('brand','page'));

    }
    public function dashboard_edit_brand($id)
    {
        if(!Auth::check() )
        return redirect('/');
        if(Auth::user()->role != 1 && Auth::user()->role != 2)
        return redirect('/');

        else{
        $brand=brand::find($id);
        $page = "brands";
        return View('brand.dashboard_edit_brand',compact('brand','page'));
    }
}

    //هذا للداتا بيز
    public function add_brand ()
     {

        $brand= new brand;
        $brand->name=request('brand_name');
        $brand->model=request('brand_model');
        $brand->phone_number=request('brand_phone');   
        $brand->email=request('brand_email');
        $brand->country=request('brand_country');
        $brand->address=request('brand_address');
        $brand->profile_image=request()->file('profile_image') ? request()->file('profile_image')->store('public') : null;

        $brand->save();
        Toastr::success('Create new Brand successfully :)','Success');

        return redirect('/d_brand');
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
            $edit->profile_image=request()->file('profile_image')->store('public');
        }
        $edit->save();
        Toastr::success('Updated successfully :)','Success');
        return redirect('/d_brand');

    }
    public function delete_brand($id)
    {
        $del=brand::find($id);
        $del->delete();
        Toastr::success('Deleted successfully :)','Success');
        return redirect('/d_brand');
    }
}


?>