<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PhotosController;
use App\Http\Controllers\Auth1\LoginController;
use App\Http\Controllers\Auth1\RegisterController;
use App\Http\Controllers\ResetPasswordController;
use App\Http\Controllers\FormController;
use App\Http\Controllers\UserManagementController;
use App\Http\Controllers\LockScreen;

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

    // Route::get('url اسم ',[App\Http\Controllers\اسم الكترولر::class,'اسم الفانكشن']);
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
    Route::get('/notic',[App\Http\Controllers\home::class,'notic']);
    Route::get('/report',[App\Http\Controllers\home::class,'report']);



    Route::get('/admin',[App\Http\Controllers\admins::class,'admin_admin']);
    Route::get('/add_admin',[App\Http\Controllers\admins::class,'admin_add_admin']);
    Route::get('/edit_admin/{id}',[App\Http\Controllers\admins::class,'edit_admin']);

    Route::get('/brand',[App\Http\Controllers\brands::class,'brand_brand']);
    Route::get('/add_brand',[App\Http\Controllers\brands::class,'brand_add_brand']);
    Route::get('/edit_brand/{id}',[App\Http\Controllers\brands::class,'edit_brand']);

    Route::get('/user',[App\Http\Controllers\users::class,'user']);

    Route::get('/product',[App\Http\Controllers\products::class,'product_product']);

    Route::get('add_product',[App\Http\Controllers\products::class,'product_add_product'])->name('add_product');
    Route::post('/add_product',[App\Http\Controllers\products::class,'add_product'])->name('AddProduct');

    Route::get('/product_detail_page',[App\Http\Controllers\products::class,'product_detail_page']);
    Route::get('/edit_product/{id}',[App\Http\Controllers\products::class,'edit_product'])->name('edit_product');

    Route::post('/edit_brand/{id}',[App\Http\Controllers\brands::class,'update_brand']);
    Route::get('/delete_brand/{id}',[App\Http\Controllers\brands::class,'delete_brand']);
    Route::post('/add_brand',[App\Http\Controllers\brands::class,'add_brand'])->name('AddBrand');

    Route::post('/edit_product/{id}',[App\Http\Controllers\products::class,'update_product'])->name('update_product');
    Route::get('/delete_product/{id}',[App\Http\Controllers\products::class,'delete_product'])->name('delete_product');

    Route::post('/add_collection',[App\Http\Controllers\CollectionController::class,'add_collection'])->name('AddCollection');
    Route::post('/add_color',[App\Http\Controllers\products::class,'add_color'])->name('AddColor');
    Route::post('/add_size',[App\Http\Controllers\products::class,'add_size'])->name('AddSize');

    Route::post('/edit_admin/{id}',[App\Http\Controllers\admins::class,'update_admin']);
    Route::get('/delete_admin/{id}',[App\Http\Controllers\admins::class,'delete_admin']);
    Route::post('/add_admin',[App\Http\Controllers\admins::class,'add_admin'])->name('Addadmin');
    Route::get('/admin_login',[App\Http\Controllers\admins::class,'admin_login']);
    Route::post('/admin_login',[App\Http\Controllers\admins::class,'create'])->name('admin_register');
    Route::post('/admin_register',[App\Http\Controllers\admins::class,'validation_admin'])->name('ValidationdAmin');

    // Route::get('/delete_user/{id}',[App\Http\Controllers\users::class,'delete_user']);
    Route::get('/item_brand/{id}',[App\Http\Controllers\products::class,'item_brand']);
    Route::get('/category/{id}/{name}',[App\Http\Controllers\home::class,'category']);


    Route::get('/all_product/{id}',[App\Http\Controllers\products::class,'all_product'])->name('all_product');
    Route::get('/women_product',[App\Http\Controllers\products::class,'women_product']);
    Route::get('/kids_product',[App\Http\Controllers\products::class,'kids_product']);
    Route::post('/add_category_men',[App\Http\Controllers\products::class,'add_category_men'])->name('AddCategoryMen');
    Route::post('/add_category_women',[App\Http\Controllers\products::class,'add_category_women'])->name('AddCategoryWomen');
    Route::post('/add_category_kids',[App\Http\Controllers\products::class,'add_category_kids'])->name('AddCategoryKids');

    Route::get('/d_brand',[App\Http\Controllers\brands::class,'brand']);
    Route::get('/dashboard_add_brand',[App\Http\Controllers\brands::class,'addbrand']);
    Route::get('/dashboard_edit_brand/{id}',[App\Http\Controllers\brands::class,'dashboard_edit_brand']);
    Route::post('/dashboard_add_brand',[App\Http\Controllers\brands::class,'add_brand'])->name('AddBrand');
    Route::post('/dashboard_edit_brand/{id}',[App\Http\Controllers\brands::class,'update_brand']);

    // for Employees
    Route::get('/employees',[App\Http\Controllers\EmployeeController::class,'employees'])->name('employees');
    Route::get('add_employee',[App\Http\Controllers\EmployeeController::class,'add_employee'])->name('add_employee');
    Route::post('/add_employee',[App\Http\Controllers\EmployeeController::class,'store_employee'])->name('store_employee');
    Route::get('/edit_employee/{id}',[App\Http\Controllers\EmployeeController::class,'edit_employee'])->name('edit_employee');
    Route::post('/edit_employee/{id}',[App\Http\Controllers\EmployeeController::class,'update_employee'])->name('update_employee');
    Route::get('/delete_employee/{id}',[App\Http\Controllers\EmployeeController::class,'delete_employee'])->name('delete_employee');


    Route::get('/d_user',[App\Http\Controllers\users::class,'user']);
    Route::get('/delete_user/{id}',[App\Http\Controllers\user::class,'delete_user'])->name('delete_user');

    Route::get('/d_notic',[App\Http\Controllers\home::class,'notic']);
    Route::get('/d_reprt',[App\Http\Controllers\home::class,'reprt']);






});
Auth::routes();
Route::get('/dashboard_home',function(){
    $page = "home";
    return view('dashboard.home',compact('page'));
});

Route::get('/change_password',function(){
    return view('dashboard.usermanagement.change_password');
});
Route::get('/dashboard_form',function(){
    return view('dashboard.form.form');
});
Route::get('/dashboard_usermangment',function(){
    return view('dashboard.sidebar.usermanagement');
});
Route::get('/bills;',function(){
    return view('Bills.Bills');
});
Route::get('/d_bills;',function(){
    return view('Bills.d_Bills');
});
// Route::get('/notice;',function(){
//     return view('notice.notice');
// });
// Route::get('/d_notice;',function(){
//     return view('notice.d_notice');
// });

// Route::get('/view_record',function(){
//     return view('dashboard.view_record.viewrecord');
// });
Route::get('/view_detail',function(){
    return view('dashboard.view_record.viewdetail');
});
require __DIR__.'/auth.php'
;