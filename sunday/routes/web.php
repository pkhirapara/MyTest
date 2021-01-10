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

Route::get('/', function () {
    return view('user/home');
});
Auth::routes();

// Route::get('/about-us','AboutController@index');

Route::get('/about-us',[App\Http\Controllers\AboutController::class, 'index']);
Route::get('/contact-us',[App\Http\Controllers\ContactController::class, 'index']);
Route::get('/admin-panel',[App\Http\Controllers\AdminController::class, 'index']);
Route::get('/admin-panel/blog-list',[App\Http\Controllers\AdminController::class, 'blog_list']);
Route::get('/admin-panel/add-blog',[App\Http\Controllers\AddblogController::class, 'index']);
Route::post('/admin-panel/add-blog-post',[App\Http\Controllers\AddblogController::class, 'add_blog']);
Route::get('/admin-panel/add-cate',[App\Http\Controllers\CategoeryController::class, 'index']);
Route::post('/admin-panel/add-cate_post',[App\Http\Controllers\CategoeryController::class, 'add_cate']);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
