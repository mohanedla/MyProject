<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::group(['prefix' => LaravelLocalization::setLocale()], function()
{
	/** ADD ALL LOCALIZED ROUTES INSIDE THIS GROUP **/

    Route::get('home',[App\Http\Controllers\home::class,'index']);
    Route::get('shop',[App\Http\Controllers\home::class,'category_page']);
    Route::get('login',[App\Http\Controllers\home::class,'login']);
    Route::get('empty',[App\Http\Controllers\home::class,'layout.empty']);
    Route::get('contact_us',[App\Http\Controllers\home::class,'contact_us']);
    Route::get('about',[App\Http\Controllers\home::class,'about']);
    Route::get('cart_page',[App\Http\Controllers\home::class,'cart_page']);
    Route::get('checkout_page',[App\Http\Controllers\home::class,'checkout_page']);
    Route::get('foot',[App\Http\Controllers\home::class,'footer']);
    Route::get('/',[App\Http\Controllers\home::class,'welcome']);
    Route::get('/',[App\Http\Controllers\home ::class,'getlocale']);
    
    
    Route::get('admin',[App\Http\Controllers\admin::class,'admin.admin']);
    Route::get('add_admin',[App\Http\Controllers\admin::class,'admin.add_admin']);

    Route::get('brand',[App\Http\Controllers\brand::class,'brand.brand']);
    Route::get('add_brand',[App\Http\Controllers\brand::class,'brand.add_brand ']);

    Route::get('user',[App\Http\Controllers\user::class,'user.user']);
    Route::get('add_user',[App\Http\Controllers\user::class,'user']);

    Route::get('product',[App\Http\Controllers\product::class,'product.product']);
    Route::get('add_product',[App\Http\Controllers\product::class,'product.add_product']); 
    Route::get('product_detail_page',[App\Http\Controllers\product::class,'product_detail_page']);
    
    Route::get('reports',[App\Http\Controllers\reports::class,'report.reports']);
    Route::get('add_report',[App\Http\Controllers\reports::class,'report.add_report']);
});