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
//     public function brand_brand()
//     {
//         if(!Auth::check() )
//         return redirect('/');
//         if(Auth::user()->role != 1 && Auth::user()->role != 2)
//         return redirect('/');

//         else
//         {
//           $categories=Category::all();
//          // متغير يحمل جميع عم
//         $collect = array('M'=>'Men','W'=>'Women','C'=>'Children' );
//         $product_name_men=product::with('categories')->where('collection','=','Men')->get();
//         $product_name_women=product::with('categories')->where('collection','=','Women')->get();
//         $product_name_children=product::with('categories')->where('collection','=','Children')->get();
//         $brand=brand::all();
//         $page = "brands";
//         return View('brand.brand',compact('brand','collect','categories','page','product_name_men','product_name_women','product_name_children'));

//     }
// }

//     public function brand_add_brand()
//     {
//         if(!Auth::check() )
//         return redirect('/');
//         if(Auth::user()->role != 1 && Auth::user()->role != 2)
//         return redirect('/');

//         else{
//         $page = "brands";
//         return View('brand.add_brand',compact('page'));

//     }
// }
    public function addbrand()
    {
            $page = "brands";
            return View('brand.dashboard_add_brand',compact('page'));
    
        }
        public function edit_brand($id)
        {
                //    id هذا متغير يحمل سجل 
                $brand=brand::find($id);
                $page = "brands";
                return View('brand.edit_brand',compact('brand','page'));
        
            }
        public function brand()
        {
            $brand=brand::all();
            // $view=brand::find($id);
            $page = "brands";
            return View('brand.d_brand',compact('brand','page'));
        
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
        request()->validate(
            [
                 //    يجب ان يدخل required
                //  الاسم الي في الحقل =>  
                'brand_name'  => "required|string",
                'Email' => "required|email|unique:brands",
                'brand_model'  => "required",
                'brand_phone'  => "required",
                'brand_country'  => "required",
                'brand_address'  => "required",

            ],
            [
                'brand_name.required' => 'يجب إدخال الاسم',
                'email.required' => 'يجب اضافة البريد الالكتروني',
                'Email.email' => 'يجب اضافة البريد الالكتروني',
                'Email.unique' => 'البريد الالكتروني الذي قمت بإدخاله موجود',
                'brand_model.required' => 'يجب إدخال الموديل',
                'brand_phone.required' => 'يجب إدخال رقم الهاتف',
                'brand_country.required' => 'يجب إدخال البلد',
                'brand_address.required' => 'يجب إدخال العنوان',

            ]);  
        //   متغير يحمل سجل جديد
        $brand= new brand;
        //   متغير->/=request('الاسم الي موجود في الحقل')
        $brand->name=request('brand_name');
        $brand->model=request('brand_model');
        $brand->phone_number=request('brand_phone');
        $brand->email=request('Email');
        $brand->country=request('brand_country');
        $brand->address=request('brand_address');
                                                            //null لو الحقل فيه صورة تمام مافيشي ياخذ  
        $brand->profile_image=request()->file('profile_image') ? request()->file('profile_image')->store('public') : null;

        $brand->save();
        Toastr::success('Create new Brand successfully :)','Success');

        return redirect('/d_brand');
    }

    public function update_brand($id)
    {
        request()->validate(
            [
                 //    يجب ان يدخل required
                //  الاسم الي في الحقل =>  
                'brand_name'  => "required|string",
                // 'Email' => "required|email|unique:brands",
                'brand_model'  => "required",
                'brand_phone'  => "required",
                'brand_country'  => "required",
                'brand_address'  => "required",

            ],
            [
                'brand_name.required' => 'يجب إدخال الاسم',
                'Email.required' => 'يجب اضافة البريد الالكتروني',
                'Email.email' => 'يجب اضافة البريد الالكتروني',
                'Email.unique' => 'البريد الالكتروني الذي قمت بإدخاله موجود',
                'brand_model.required' => 'يجب إدخال الموديل',
                'brand_phone.required' => 'يجب إدخال رقم الهاتف',
                'brand_country.required' => 'يجب إدخال البلد',
                'brand_address.required' => 'يجب إدخال العنوان',

            ]); 
       
       //    id هذا متغير يحمل سجل 
        $edit= brand::find($id);
        //   متغير->/=request('الاسم الي موجود في الحقل')
        
        $edit->name=request('brand_name');
        $edit->model=request('brand_model');
        $edit->phone_number=request('brand_phone');
        if($edit->email != request('email')){
            $edit->email=request('email');
        }
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
        //    id هذا متغير يحمل سجل 
        $del=brand::find($id);
        $del->delete();
        // من جدول المنتجات وين الرقم الي يساوير القم الي جايبه امسحه
        product::where('brand_id',$id)->delete();
        Toastr::success('Deleted successfully :)','Success');
        return redirect('/d_brand');
    }
}


?>