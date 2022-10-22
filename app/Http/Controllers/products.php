<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\product;
use app\Models\admin;
use app\Models\User;
use Auth;
class products extends Controller
{
    public function product_product()
    {
        $admin=product::with('admins')->get();
        // where('admin_id','=',admin::id())->get();
        //  dd($admin);
       // $product=product::all();
        return View('product.product',compact('admin'));

    }

    public function product_add_product()
    {
        return View('product.add_product');
    }

    public function product_detail_page()
    {
        return View('product_detail_page');

    }
    public function edit_product($id)
    {
        $product=product::find($id);
        return View('product.edit_product',compact('product'));

    }

    public function add_product()
    {
        $product= new product;
        $product->serial=request('product_serial');
        $product->name=request('product_name');
        $product->brand=request('product_brand');
        $product->model=request('product_model');
        $product->specification=request('product_specification');
        $product->color=request('product_color');
        $product->quantity=request('product_quantity');
        $product->size=request('product_size');
        $product->price=request('product_price');
        $product->admin_id=Auth::id();
        $product->profile_image=request()->file('product_image') ? request()->file('product_image')->store('public') : null;

        $product->save();
        return redirect('product')->with('success','Thank You!');

    }
    public function update_product($id)
    {
        $product= product::find($id);
        $product->serial=request('product_serial');
        $product->name=request('product_name');
        $product->brand=request('product_brand');
        $product->model=request('product_model');
        $product->specification=request('product_specification');
        $product->color=request('product_color');
        $product->quantity=request('product_quantity');
        $product->size=request('product_size');
        $product->price=request('product_price');
        if(request()->file('product_image'))
        {
            $product->profile_image=request()->file('product_image')->store('public');
        }
        $product->save();
        return redirect('product')->with('message', 'edited succussfuly');

    }
    public function delete_product($id)
    {
        $del=product::find($id);
        $del->delete();
        return redirect('product');
    }

}