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
use App\Models\Bills;
use App\Models\Order;
use App\Models\TotalOrder;
use Auth;
class products extends Controller
{

    // public function product_product()
    // {
    //     $categoriez=Category::all();
    //     $collect = array('M'=>'Men','W'=>'Women','C'=>'Children' );
    //     $product_name_men=product::with('categories')->where('collection','=','Men')->get();
    //     $product_name_women=product::with('categories')->where('collection','=','Women')->get();
    //     $product_name_children=product::with('categories')->where('collection','=','Children')->get();
    //     $admin=product::with('admins')->get();
    //     $brand=product::with('brand')->get();
    //     $category=product::with('categories')->get();
    //     //  dd($brand);yy
    //     $page = "product";
    //     return View('product.product',compact('admin','page','category','brand','collect','categoriez','product_name_men','product_name_women','product_name_children'));

    // }
    public function all_product($id)
    {
        if(!Auth::check() )
        return redirect('/');
        if(Auth::user()->role != 1 && Auth::user()->role != 2)
        return redirect('/');

        else{
        if($id == 0){
            $admin=product::with('brand','sizes.size','colors.color','images')->get();
        }elseif($id == 1){
            $admin=product::where('collection','Men')->with('brand','sizes.size','colors.color','images')->get();
        }elseif($id ==2){
            $admin=product::where('collection','Women')->with('brand','sizes.size','colors.color','images')->get();
        }else{
            $admin=product::where('collection','kids')->with('brand','sizes.size','colors.color','images')->get();
        }
        //  dd($brand);
        $page = "product";
        // $images=Image_Product::all();
        return View('product.products',compact('admin','page','id'));
    }

    }

    // public function profile()
    // {
    //     $page= "product";

    //     return view ('product.profile',compact('page'));
    // }


    public function item_brand($id)
    {
        $categories=Category::all();

        $category_men=Men::all();
        $category_women=Women::all();
        $category_kids=Kids::all();
        $collect = array('M'=>'Men','W'=>'Women','C'=>'Kids' );
        $products = product::where('brand_id','=',$id)->get();
        $brand=brand::all();
        $title=brand::where('id','=',$id)->get('name');
        $page = "product";
        $old_order=0;
        if(Auth::check()){
        $old_order=Order::where('user_id',Auth::User()->id)->get();
        // dd($old_order);
        }
        return View('item.item_brand',compact('products','old_order','page','brand','title','collect','categories','category_men','category_women','category_kids'));

    }

    public function product_add_product($id)
    {
        if($id == 1){
            $categories=Men::all();
        }elseif($id ==2){
            $categories=Women::all();
        }else{
            $categories=Kids::all();
        }

        $size= Size::all();
        $color= Color::all();
        $brands=brand::all();

        $page = "product";
        return view('product.add_product',compact('id','brands','page','categories','size','color'));
    }

    public function product_detail_page($id)
    {
            $page = "product";
            $collect = array('M'=>'Men','W'=>'Women','C'=>'Kids' );
            $brand=brand::all();
            $products=product::with('brand','colors.color','sizes.size','images')->where('id',$id)->get();
            $category_men=Men::all();
            $category_women=Women::all();
            $category_kids=Kids::all();
            $size=Size::all();
            $old_order=0;
            if(Auth::check()){
            $old_order=Order::where('user_id',Auth::User()->id)->get();
            // dd($old_order);
            }
            return View('product_detail_page',compact('page','old_order','products','collect','brand','category_men','category_women','category_kids','size'));
    }

    public function add_category_men()
    {
        $category_men= new Men;
        $category_men->name=request('category_name');
        $category_men->save();
        Toastr::success( __('Create new Category Men successfully :)'),'Success');
        return redirect()->back();
    }
    public function add_category_women()
    {
        $category_women= new Women;
        $category_women->name=request('category_name');
        $category_women->save();
        Toastr::success( __('Create new Category Women successfully :)'),'Success');
        return redirect()->back();
    }
    public function add_category_kids()
    {
        $category_kids= new Kids;
        $category_kids->name=request('category_name');
        $category_kids->save();
        Toastr::success( __('Create new Category Kids successfully :)'),'Success');
        return redirect()->back();
    }

    public function edit_product($id,$id_page)
    {
        if(!Auth::check() )
        return redirect('/');
        if(Auth::user()->role != 1 && Auth::user()->role != 2)
        return redirect('/');

        else{

        $collect = array('Men','Women','Kids' );
        $product=product::find($id);
        $brands=brand::all();
        if($id == 1){
            $categories=Men::all();
        }elseif($id ==2){
            $categories=Women::all();
        }else{
            $categories=Kids::all();
        }
        $get=product::with('brand')->get()->find($id);
        $color=Color::all();
        $size=Size::all();
        $get_color=Color_Product::with('products')->where('product_id','=',$id)->get();
        $get_size=Size_Product::with('products')->where('product_id','=',$id)->get();

        $page = "product";
        return View('product.edit_product',compact('product','id_page','page','brands','get','categories','collect','color','size','get_color','get_size'));

    }
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
    public function add_product($id)
    {
        if(!Auth::check() )
        return redirect('/');
        if(Auth::user()->role != 1 && Auth::user()->role != 2)
        return redirect('/');

        else{

        request()->validate(
        [
                'productName'  => "required",
                'product_name'  => "required",
                'product_brand'  => "required",
                'product_quantity'  => "required",
                'product_size'  => "required",
                'product_color'  => "required",
                'product_price'  => "required",
                'product_image'  => "required",
        ]);

        $product= new product;
        $product->name=request('productName');
        $product->category_id=request('product_name');
        $product->brand_id=request('product_brand');
        $product->model=request('product_model');
        if($id == 1){
            $product->collection="Men";
        }elseif($id ==2){
            $product->collection="Women";
        }else{
            $product->collection="Kids";
        }

        $product->specification=request('product_specification');
        $product->quantity=request('product_quantity');
        $product->price=request('product_price');
        $product->price_purchas=request('product_price_purchas');
        $product->profile_image=request()->file('product_image')[0]? request()->file('product_image')[0]->store('public'):null;
        $product->admin_id=Auth::id();
        $product->save();
        $color=request('product_color');
        $size=request('product_size');
        $images=request()->file('product_image');
        for($i=1;$i<count($images);$i++){
            $image_product= new Image_Product;
            $image_product->image= $images[$i]->store('public');
            $image_product->product_id=$product->id;
            $image_product->save();
        }
        // dd($color);
        for($i=0;$i<count($color);$i++){
        $color_product= new Color_Product;
        $color_product->color_id=$color[$i];
        $color_product->product_id=$product->id;
        $color_product->save();
        }
        for($i=0;$i<count($size);$i++){
        $size_product= new Size_Product;
        $size_product->size_id=$size[$i];
        $size_product->product_id=$product->id;
        $size_product->save();
        }

        Toastr::success('Create new Product successfully :)','Success');
        if($product->collection=="Men"){
            return redirect()->route('all_product',['id'=>1]);
        }
        elseif($product->collection=="Women"){
            return redirect()->route('all_product',['id'=>2]);
        }
        else{
            return redirect()->route('all_product',['id'=>3]);
        }

    }
}

    public function update_product($id)
    {
        request()->validate(
        [
            'productName'  => "required",
            'product_name'  => "required",
            'product_brand'  => "required",
            'product_quantity'  => "required",
            'product_price'  => "required",
        ]);
        $product= product::find($id);
        $product->name=request('productName');
        $product->category_id=request('product_name');
        $product->brand_id=request('product_brand');
        $product->model=request('product_model');
        $product->specification=request('product_specification');
        $product->quantity=request('product_quantity');
        $product->price=request('product_price');
        $product->price_purchas=request('product_price_purchas');
        $images=request()->file('product_image');
        // dd($images);

        if($images)
        {
            $product->profile_image=request()->file('product_image')[0]? request()->file('product_image')[0]->store('public'):null;
            Image_Product::where('product_id', $id)->delete();
            for($i=1;$i<count($images);$i++){
                $image_product= new Image_Product;
                $image_product->image= $images[$i]->store('public');
                $image_product->product_id=$product->id;
                $image_product->save();
            }
        }

        $color=request('product_color');
        $size=request('product_size');
        // dd($color);
        if(count($color) > 0){
            Color_Product::where('product_id', $id)->delete();
            for($i=0;$i<count($color);$i++){
            $color_product= new Color_Product;
            $color_product->color_id=$color[$i];
            $color_product->product_id=$product->id;
            $color_product->save();
            }
        }
        if(count($size) > 0){
            Size_Product::where('product_id', $id)->delete();
            for($i=0;$i<count($size);$i++){
            $size_product= new Size_Product;
            $size_product->size_id=$size[$i];
            $size_product->product_id=$product->id;
            $size_product->save();
            }
        }

        $product->update();

        Toastr::success('Update Product successfully :)','Success');
        if($product->collection=="Men"){
            return redirect()->route('all_product',['id'=>1]);
        }
        elseif($product->collection=="Women"){
            return redirect()->route('all_product',['id'=>2]);
        }
        else{
            return redirect()->route('all_product',['id'=>3]);
        }
    }

    public function delete_product($id)
    {
        $del=product::find($id);
        $product=$del;
        $del->delete();
        color_Product::where('product_id', $id)->delete();
        Size_Product::where('product_id', $id)->delete();
        Image_Product::where('product_id', $id)->delete();
        Toastr::success('The product has been deleted successfully :)','Success');

        if($product->collection=="Men"){
            return redirect()->route('all_product',['id'=>1]);
        }
        elseif($product->collection=="Women"){
            return redirect()->route('all_product',['id'=>2]);
        }
        elseif($product->collection=="Kids"){
            return redirect()->route('all_product',['id'=>3]);
        }
    }

}
