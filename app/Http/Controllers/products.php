<?php

namespace App\Http\Controllers;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;
use App\Models\product;
use App\Models\brand;
use App\Models\Category;
use App\Models\Men;
use App\Models\Women;
use App\Models\Kids;
use App\Models\Size;
use App\Models\Color;
use App\Models\Color_Product;
use App\Models\Size_Product;
use App\Models\Image_Product;
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
    public function men_product()
    {
        $admin=product::where('collection','=','Men')->get();
        $brand=product::with('brands')->get();
        //  dd($brand);
        return View('product.men_product',compact('admin','brand',));

    }
    public function women_product()
    {
        $admin=product::where('collection','=','Women')->get();
        $brand=product::with('brands')->get();
        //  dd($brand);
        return View('product.women_product',compact('admin','brand',));

    }
    public function kids_product()
    {
        $admin=product::where('collection','=','Kids')->get();
        $brand=product::with('brands')->get();
        //  dd($brand);
        return View('product.kids_product',compact('admin','brand',));

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
        // $size= array('S','M','L','XL','XXL','XXXL','XXXXL' );
        $size= Size::all();
        $color= Color::all();
        $collect = array('Men','Women','Children' );
        $brands=brand::all();
        $categories=Category::all();
        return View('product.add_product',compact('brands','categories','collect','size','color'));
    }
    public function add_product_men()
    {
        $size= Size::all();
        $color= Color::all();
        $brands=brand::all();
        $categories=Men::all();
        return view('product.add_product_men',compact('brands','categories','size','color'));
    }
    public function add_product_women()
    {
        $size= Size::all();
        $color= Color::all();
        $brands=brand::all();
        $categories=Women::all();
        return view('product.add_product_women',compact('brands','categories','size','color'));
    }
    public function add_product_kids()
    {
        $size= Size::all();
        $color= Color::all();
        $brands=brand::all();
        $categories=Kids::all();
        return view('product.add_product_kids',compact('brands','categories','size','color'));
    }
    public function product_detail_page()
    {
        return View('product_detail_page');

    }
    public function add_category_men()
    {

        $category_men= new Men;
        $category_men->name=request('category_men_name');
        $category_men->save();
        Toastr::success( __('Create new Category Men successfully :)'),'Success');
        return redirect()->back();

    }
    public function add_category_women()
    {

        $category_women= new Women;
        $category_women->name=request('category_women_name');
        $category_women->save();
        Toastr::success( __('Create new Category Women successfully :)'),'Success');
        return redirect()->back();

    }
    public function add_category_kids()
    {

        $category_kids= new Kids;
        $category_kids->name=request('category_kids_name');
        $category_kids->save();
        Toastr::success('Create new Category Kids successfully :)','Success');
        return redirect()->back();

    }
    public function edit_product($id)
    {
        $collect = array('Men','Women','Kids' );
        $product=product::find($id);
        $brands=brand::all();
        $categories=Category::all();
        $get=product::with('brands')->get()->find($id);
        $get_category=product::with('categories')->get()->find($id);
        return View('product.edit_product',compact('product','brands','get','categories','get_category','collect'));

    }
    public function edit_product_men($id)
    {
        $collect = array('Men','Women','Kids' );
        $product=product::find($id);
        $brands=brand::all();
        $categories=Men::all();
        $get=product::with('brands')->get()->find($id);
        $color=Color::all();
        $size=Size::all();
        $get_color=Color_Product::with('products')->where('product_id','=',$id)->get();
        $get_size=Size_Product::with('products')->where('product_id','=',$id)->get();
        return View('product.edit_product_men',compact('product','brands','get','categories','collect','color','size','get_color','get_size'));

    }
    public function edit_product_women($id)
    {
        $collect = array('Men','Women','Kids' );
        $product=product::find($id);
        $brands=brand::all();
        $categories=Women::all();
        $get=product::with('brands')->get()->find($id);
        $get_color=Color_Product::with('products')->where('product_id','=',$id)->get();
        $get_size=Size_Product::with('products')->where('product_id','=',$id)->get();
        $get_color=Color::with('products')->where('id','=',$id)->get();

        $get_size=Size::with('products')->where('id','=',$id)->get();
        return View('product.edit_product_women',compact('product','brands','get','categories','collect','color','size','get_color','get_size'));
    }
    public function edit_product_kids($id)
    {
        $collect = array('Men','Women','Kids' );
        $product=product::find($id);
        $brands=brand::all();
        $categories=Kids::all();
        $get=product::with('brands')->get()->find($id);
        $color=Color::all();
        $size=Size::all();
        $get_color=Color_Product::with('products')->where('product_id','=',$id)->get();
        $get_size=Size_Product::with('products')->where('product_id','=',$id)->get();
        // for($i=0;$i<count($get_color);$i++){
        //     for($j=0;$j<count($color);$j++){
        //         if($get_color[i]==$color[$j]){

        //             }
        //     }
        // }
        // dd($color);
        return View('product.edit_product_kids',compact('product','brands','get','categories','collect','color','size','get_color','get_size'));
    }

    public function add_color ()
    {
        $color=new Color;
        $color->name=request('color_name');
        $color->save();
        Toastr::success('Create new Color successfully :)','Success');
        return redirect()->back();

    }
    public function add_size ()
    {
        $size=new Size;
        $size->name=request('size_name');
        $size->save();
        Toastr::success('Create new Size successfully :)','Success');
        return redirect()->back();
    }
    public function add_product()
    {
        $product= new product;
        $product->category=request('product_name');
        $product->brand_id=request('product_brand');
        $product->model=request('product_model');
        $product->collection=request("product_collection");
        $product->specification=request('product_specification');
        $product->quantity=request('product_quantity');
        $product->price=request('product_price');
        $product->profile_image=request()->file('product_image')? request()->file('product_image')->store('public'):null;
        $product->admin_id=Auth::id();
        $product->save();
        $color=request('product_color');
        $size=request('product_size');

        // dd($color);
        for($i=0;$i<count($color);$i++){
        $color_product= new Color_Product;
        $color_product->name=$color[$i];
        $color_product->product_id=$product->id;
        $color_product->save();
        }
        for($i=0;$i<count($size);$i++){
        $size_product= new Size_Product;
        $size_product->name=$size[$i];
        $size_product->product_id=$product->id;
        $size_product->save();
        }
        // $image=request()->file('all_images');
        // for($i=0;$i<count($image);$i++){
        // $image_product= new Image_Product;
        // $image_product->name=$image[$i]->store('public');
        // $image_product->product_id=$product->id;
        // $image_product->save();
        // }
        Toastr::success('Create new Product successfully :)','Success');
        if($product->collection=="Men"){
            return redirect('/men_product');
        }
        elseif($product->collection=="Women"){
            return redirect('/women_product');
        }

        else{
            return redirect('/kids_product');
        }


    }
    public function update_product($id)
    {
        $product= product::find($id);
        $product->category=request('product_name');
        $product->brand_id=request('product_brand');
        $product->model=request('product_model');
        $product->collection=request("product_collection");
        $product->specification=request('product_specification');
        $product->quantity=request('product_quantity');
        $product->price=request('product_price');
        if(request()->file('product_image'))
        {
            $product->profile_image=request()->file('product_image')->store('public');
        }
        $product->admin_id=Auth::id();
        $product->save();
        $color=request('product_color');
        $size=request('product_size');

        // dd($color);
        for($i=0;$i<count($color);$i++){
        $color_product= Color_Product::find($id);
        $color_product->name=$color[$i];
        $color_product->product_id=$product->id;
        $color_product->save();
        }
        for($i=0;$i<count($size);$i++){
        $size_product= Size_Product::find($id);
        $size_product->name=$size[$i];
        $size_product->product_id=$product->id;
        $size_product->save();
        }
        // $image=request()->file('all_images');
        // for($i=0;$i<count($image);$i++){
        // $image_product= new Image_Product;
        // $image_product->name=$image[$i]->store('public');
        // $image_product->product_id=$product->id;
        // $image_product->save();
        // }
        Toastr::success('Update Product successfully :)','Success');
        if($product->collection=="Men"){
            return redirect('/men_product');
        }
        elseif($product->collection=="Women"){
            return redirect('/women_product');
        }

        else{
            return redirect('/kids_product');
        }
        return redirect('product')->with('message', 'edited succussfuly');

    }
    public function delete_product($id)
    {
        $del=product::find($id);
        $del->delete();
        Toastr::success('The product has been deleted successfully :)','Success');

        return redirect('/men_product');
    }



}