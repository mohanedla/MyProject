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

    Route::get('/home',[App\Http\Controllers\home::class,'index']);
    Route::get('/',[App\Http\Controllers\home::class,'index']);
    Route::get('/',[App\Http\Controllers\home::class,'index'])->name('home');
    Route::get('/shop',[App\Http\Controllers\home::class,'category_page']);
    Route::get('/login_register',[App\Http\Controllers\home::class,'login_register']);
    Route::get('/empty',[App\Http\Controllers\home::class,'layout_empty']);
    Route::get('/contact_us',[App\Http\Controllers\home::class,'contact_us']);
    Route::get('/about',[App\Http\Controllers\home::class,'about']);
    Route::get('/cart_page',[App\Http\Controllers\home::class,'cart_page']);
    Route::get('/checkout_page',[App\Http\Controllers\home::class,'checkout_page']);
    Route::get('/foot',[App\Http\Controllers\home::class,'footer']);
    Route::get('/reports',[App\Http\Controllers\home::class,'report_reports']);
    Route::get('/add_report',[App\Http\Controllers\home::class,'report_add_report']);


    Route::get('/admin',[App\Http\Controllers\admins::class,'admin_admin']);
    Route::get('/add_admin',[App\Http\Controllers\admins::class,'admin_add_admin']);
    Route::get('/edit_admin/{id}',[App\Http\Controllers\admins::class,'edit_admin']);

    Route::get('/brand',[App\Http\Controllers\brands::class,'brand_brand']);
    Route::get('/add_brand',[App\Http\Controllers\brands::class,'brand_add_brand']);
    Route::get('/edit_brand/{id}',[App\Http\Controllers\brands::class,'edit_brand']);

    Route::get('/user',[App\Http\Controllers\users::class,'user']);

    Route::get('/product',[App\Http\Controllers\products::class,'product_product']);
    Route::get('add_product',[App\Http\Controllers\products::class,'product_add_product']);
    Route::get('/product_detail_page',[App\Http\Controllers\products::class,'product_detail_page']);
    Route::get('/edit_product/{id}',[App\Http\Controllers\products::class,'edit_product']);


    Route::post('/edit_brand/{id}',[App\Http\Controllers\brands::class,'update_brand']);
    Route::get('/delete_brand/{id}',[App\Http\Controllers\brands::class,'delete_brand']);
    Route::post('/add_brand',[App\Http\Controllers\brands::class,'add_brand'])->name('AddBrand');

    Route::post('/edit_product/{id}',[App\Http\Controllers\products::class,'update_product']);
    Route::get('/delete_product/{id}',[App\Http\Controllers\products::class,'delete_product']);
    Route::post('/add_product',[App\Http\Controllers\products::class,'add_product'])->name('AddProduct');

    Route::post('/edit_admin/{id}',[App\Http\Controllers\admins::class,'update_admin']);
    Route::get('/delete_admin/{id}',[App\Http\Controllers\admins::class,'delete_admin']);
    Route::post('/add_admin',[App\Http\Controllers\admins::class,'add_admin'])->name('Addadmin');

    Route::get('/delete_user/{id}',[App\Http\Controllers\users::class,'delete_user']);
    Route::get('/item_brand/{id}',[App\Http\Controllers\products::class,'item_brand']);
});
Auth::routes();

// Route::get('/', function () {
//     return Inertia::render('index', [
//         'canLogin' => Route::has('login'),
//         'canRegister' => Route::has('register'),
//         'laravelVersion' => Application::VERSION,
//         'phpVersion' => PHP_VERSION,
//     ]);
// });

// Route::get('/dashboard', function () {
//     return Inertia::render('index');
// })->middleware(['auth', 'verified'])->name('dashboard');

require __DIR__.'/auth.php';

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');