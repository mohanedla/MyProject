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
    Route::get('empty',[App\Http\Controllers\home::class,'layout_empty']);
    Route::get('contact_us',[App\Http\Controllers\home::class,'contact_us']);
    Route::get('about',[App\Http\Controllers\home::class,'about']);
    Route::get('cart_page',[App\Http\Controllers\home::class,'cart_page']);
    Route::get('checkout_page',[App\Http\Controllers\home::class,'checkout_page']);
    Route::get('foot',[App\Http\Controllers\home::class,'footer']);
    Route::get('/',[App\Http\Controllers\home::class,'welcome']);
    Route::get('/',[App\Http\Controllers\home ::class,'getlocale']);
    Route::get('reports',[App\Http\Controllers\home::class,'report_reports']);
    Route::get('add_report',[App\Http\Controllers\home::class,'report_add_report']);


    Route::get('admin',[App\Http\Controllers\admin::class,'admin_admin']);
    Route::get('add_admin',[App\Http\Controllers\admin::class,'admin_add_admin']);

    Route::get('brand',[App\Http\Controllers\brands::class,'brand_brand']);
    Route::get('add_brand',[App\Http\Controllers\brands::class,'brand_add_brand']);
    Route::get('/edit_brand/{id}',[App\Http\Controllers\brands::class,'edit_brand']);

    Route::get('user',[App\Http\Controllers\user::class,'user']);
    Route::get('add_user',[App\Http\Controllers\user::class,'user_add_user']);

    Route::get('product',[App\Http\Controllers\product::class,'product_product']);
    Route::get('add_product',[App\Http\Controllers\product::class,'product_add_product']);
    Route::get('product_detail_page',[App\Http\Controllers\product::class,'product_detail_page']);


    Route::post('/edit_brand/{id}',[App\Http\Controllers\brands::class,'update_brand']);
    Route::get('/delete_brand/{id}',[App\Http\Controllers\brands::class,'delete_brand']);
    Route::post('add_brand',[App\Http\Controllers\brands::class,'add_brand'])->name('AddBrand');
});
