<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\SettingController;
use Faker\Guesser\Name;
use Illuminate\Support\Facades\Auth;

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

// Route::get('/', function () {
//     return view('welcome');
// });


//User route
Route::get('/',[HomeController::class,'index']);
Route::get('/detail/{slug}/{id}',[HomeController::class,'detail']);
Route::get('/category/{slug}/{id}',[HomeController::class,'category']);
Route::get('/all-categories',[HomeController::class,'all_category']);
Route::post('/save-comment/{slug}/{id}',[HomeController::class,'save_comment']);
Route::get('/save-post-form',[HomeController::class,'save_post_form']);
Route::post('/save-post-form',[HomeController::class,'save_post_data']);
Route::get('/user-account',[HomeController::class,'user_account']);










//admin route
Route::get('/admin/login',[AdminController::class,'login']);
Route::post('/admin/login',[AdminController::class,'submit_login']);
Route::get('/admin/logout',[AdminController::class,'logout']);
Route::get('/admin/dashboard',[AdminController::class,'dashboard']);

//categories
Route::get('/admin/category/{id}/delete', [CategoryController::class,'destroy']);
Route::resource('/admin/category', CategoryController::class);

//posts
Route::get('/admin/post/{id}/delete', [PostController::class,'destroy']);
Route::resource('/admin/post', PostController::class);

//Settings

Route::get('/admin/setting',[SettingController::class,'index']);
Route::post('/admin/setting',[SettingController::class,'save_settings']);

// Comment
Route::get('admin/comment',[AdminController::class,'comments']);
Route::get('admin/comment/delete/{id}',[AdminController::class,'delete_comment']);

// User
Route::get('admin/user',[AdminController::class,'users']);
Route::get('admin/user/delete/{id}',[AdminController::class,'delete_user']);



Auth::routes();


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

