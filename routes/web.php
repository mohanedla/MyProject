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
    Route::get('add_admin',function(){
        return View::make('add_admin');
    });
    Route::get('add_brand',function(){
        return View::make('add_brand');
    });
    Route::get('add_product',function(){
        return View::make('add_product');
    });
    Route::get('reports',function(){
        return View::make('reports');
    });
    Route::get('contact_us',function(){
        return View::make('contact_us');
    });
    Route::get('about',function(){
        return View::make('about');
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