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

	Route::get('home',function(){
		return View::make('index');
	});
    Route::get('shop',function(){
        return View::make('category_page');
    });
    Route::get('login',function(){
        return View::make('login');
    });
    Route::get('empty',function(){
        return View::make('layout.empty');
    });
    Route::get('admin',function(){
        return View::make('admin.admin');
    });
    Route::get('add_admin',function(){
        return View::make('admin.add_admin');
    });
    Route::get('brand',function(){
        return View::make('brand.brand');
    });
    Route::get('add_brand',function(){
        return View::make('brand.add_brand');
    });
    Route::get('product',function(){
        return View::make('product.product');
    });
    Route::get('add_product',function(){
        return View::make('product.add_product');
    });
    Route::get('reports',function(){
        return View::make('report.reports');
    });
    Route::get('add_report',function(){
        return View::make('report.add_report');
    });
    Route::get('user',function(){
        return View::make('user.user');
    });
    Route::get('add_user',function(){
        return View::make('user.add_user');
    });
    Route::get('contact_us',function(){
        return View::make('contact_us');
    });
    Route::get('about',function(){
        return View::make('about');
    });
    Route::get('cart_page',function(){
        return View::make('cart_page');
    });
    Route::get('checkout_page',function(){
        return View::make('checkout_page');
    });
    Route::get('product_detail_page',function(){
        return View::make('product_detail_page');
    });
});

        Route::get('foot',function(){
            return View::make('footer');
        });

Route::get('/', function () {
    return view('welcome');
});
Route::get('/', function () {
    return app()->getlocale();
});