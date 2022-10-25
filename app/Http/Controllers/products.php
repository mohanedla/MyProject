<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\product;
use App\Models\brand;
use App\Models\Category;
use Auth;
class products extends Controller
{
    public function product_product()
    {
        $admin=product::with('admins')->get();
        $brand=product::with('brands')->get();
        return View('product.product',compact('admin','brand'));

    }
    public function item_brand($id)
    {
        $products = product::where('brand_id','=',$id)->get();
        $brand=brand::all();
        // $title=product::with('brands')->where('brand_id','=',$id)->get();
        $title=brand::where('id','=',$id)->get('name');
        // dd($title);
        return View('item.item_brand',compact('products','brand','title'));

    }

    public function product_add_product()
    {
        $brands=brand::all();
        $categories=Category::all();
        return View('product.add_product',compact('brands','categories'));
    }

    public function product_detail_page()
    {
        return View('product_detail_page');

    }
    public function add_category()
    {
        $category= new Category;
        $category->name=request('category_name');
        $category->save();
        return redirect('/add_product')->with('success','Thank You!');

    }
    public function edit_product($id)
    {
        $product=product::find($id);
        $brands=brand::all();
        $get=product::with('brands')->get()->find($id);
        return View('product.edit_product',compact('product','brands','get'));

    }
    public function add_product()
    {
        $product= new product;
        $product->serial=request('product_serial');
        $product->category_id=request('product_name');
        $product->brand_id=request('product_brand');
        $product->model=request('product_model');
        $product->collection=request('product_collection');
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
        $product->brand_id=request('product_brand');
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