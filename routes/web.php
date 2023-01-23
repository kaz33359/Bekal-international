<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;
use App\Http\Middleware\AdminAuth;




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

//ADMIN PANEL//
Route::group(['middleware' => ['AdminAuth']], function () {
    Route::post('admin/login_pro', [AdminController::class, 'checkadmin'])->name('auth.checkadmin');
    Route::get('admin/logout', [AdminController::class, 'logout']);


    Route::get('admin/index', [AdminController::class, 'dashboard']);
    Route::get('admin/enquiry', [AdminController::class, 'enquiry']);
    Route::get('admin/view_blog', [AdminController::class, 'view_blog']);
    Route::post('admin/adminBlog', [BlogController::class, 'add_blog'])->name('add.blog');
    Route::get('admin/enquiry_delete/{id}', [ContactController::class, 'delete_enquiry']);
    Route::get('admin/blog_delete/{id}', [BlogController::class, 'delete_blog']);
    Route::get('admin/view_adminblog/{id}', [BlogController::class, 'view_adminblog']);
    Route::put('update_blog/{id}', [BlogController::class, 'update_blog']);
    Route::get('admin/enquiry_delete/{id}', [ContactController::class, 'delete_enquiry']);

});
Route::get('admin/login', [AdminController::class, 'login']);
Route::get('admin/hash', [AdminController::class, 'hashp']);
//END ADMIN PANEL//

// USER SIDE //
Route::get('user/blogDetails/{id}', [BlogController::class, 'sb'])->name('s.b');
Route::post('/enquiry', [ContactController::class, 'enquiry'])->name('user.enquiry');


Route::get('/', function () {
    return view('user/pages/index');
});
Route::get('/about', function () {
    return view('user/pages/about');
});
Route::get('/services', function () {
    return view('user/pages/services');
});
Route::get('/blog', function () {
    return view('user/pages/blog');
});
Route::get('/gallery', function () {
    return view('user/pages/gallery');
});
Route::get('/contact', function () {
    return view('user/pages/contact');
});
Route::get('/standardRoom', function () {
    return view('user/pages/standard');
});
Route::get('/superiorRoom', function () {
    return view('user/pages/superior');
});
Route::get('/deluxRoom', function () {
    return view('user/pages/delux');
});
Route::get('/executive_kingRoom', function () {
    return view('user/pages/executiveking');
});
Route::get('/executive_twinRoom', function () {
    return view('user/pages/executiveTwin');
});
Route::get('/suite_kingRoom', function () {
    return view('user/pages/suiteKing');
});
Route::get('/suite_twinRoom', function () {
    return view('user/pages/suiteTwin');
});