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
        $categoriez=Category::all();
        $collect = array('M'=>'Men','W'=>'Women','C'=>'Children' );
        $product_name_men=product::with('categories')->where('collection','=','Men')->get();
        $product_name_women=product::with('categories')->where('collection','=','Women')->get();
        $product_name_children=product::with('categories')->where('collection','=','Children')->get();
        $admin=product::with('admins')->get();
        $brand=product::with('brands')->get();
        $category=product::with('categories')->get();
        //  dd($brand);yy
        return View('product.product',compact('admin','category','brand','collect','categoriez','product_name_men','product_name_women','product_name_children'));

    }
    public function item_brand($id)
    {
        $categories=Category::all();

        $product_name_men=product::with('categories')->where('collection','=','Men')->get();
        $product_name_women=product::with('categories')->where('collection','=','Women')->get();
        $product_name_children=product::with('categories')->where('collection','=','Children')->get();
        $collect = array('M'=>'Men','W'=>'Women','C'=>'Children' );
        $products = product::where('brand_id','=',$id)->get();
        $brand=brand::all();
        $title=brand::where('id','=',$id)->get('name');
        return View('item.item_brand',compact('products','brand','title','collect','categories','product_name_men','product_name_women','product_name_children'));

    }

    public function product_add_product()
    {
        $collect = array('Men','Women','Children' );
        $brands=brand::all();
        $categories=Category::all();
        return View('product.add_product',compact('brands','categories','collect'));
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
        $collect = array('Men','Women','Children' );
        $product=product::find($id);
        $brands=brand::all();
        $categories=Category::all();
        $get=product::with('brands')->get()->find($id);
        $get_category=product::with('categories')->get()->find($id);
        return View('product.edit_product',compact('product','brands','get','categories','get_category','collect'));

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
        $product->category_id=request('product_name');
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