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
});
// Route::group(['prefix' => '{languages}'], function ()
// {
    // 	/** ADD ALL LOCALIZED ROUTES INSIDE THIS GROUP **/

    //     Route::get('home', function () {
        //         return view('index');
        //     });

        // });
        Route::get('foot',function(){
            return View::make('footer');
        });

Route::get('/', function () {
    return view('welcome');
});
Route::get('/', function () {
    return app()->getlocale();
});