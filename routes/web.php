<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\Admin\CategoryController as AdminCategoryController;
use App\Http\Controllers\Admin\NewsController as AdminNewsController;
use App\Http\Controllers\Admin\MainController as AdminMainController;

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

/* Admin */
Route::group(['prefix' => 'admin'], function(){
    Route::resource('/', AdminMainController::class);
    Route::resource('/categories', AdminCategoryController::class);
    Route::resource('/news', AdminNewsController::class);
});


/* main */
Route::get('/', [MainController::class, 'index'])->name('home');
Route::get('/about', [MainController::class, 'about'])->name('about');
Route::get('/latest-news', [MainController::class, 'latestNews'])->name('latest-news');
Route::get('/contact', [MainController::class, 'contact'])->name('contact');
Route::get('/categories', [MainController::class, 'categories'])->name('categories');
Route::get('/categories/{id}', [MainController::class, 'news'])->name('category.news');
//Route::get('/error', [MainController::class, 'error']);
