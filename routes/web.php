<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\MainController;
use App\Http\Controllers\Admin\CategoryController as AdminCategoryController;
use App\Http\Controllers\Admin\NewsController as AdminNewsController;
use App\Http\Controllers\Admin\MainController as AdminMainController;
use App\Http\Controllers\Admin\UserController as AdminUserController;
use App\Http\Controllers\Admin\ResourcesController as AdminResourcesController;
use App\Http\Controllers\Admin\ParserController;
use App\Http\Controllers\Account\IndexController as AccountController;
use App\Http\Controllers\SocialController;

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

/* Account */
Route::group(['middleware' => 'auth'], function(){
    Route::group(['prefix' => 'account'], function(){
        Route::get('/', AccountController::class)->name('account');
        Route::get('/logout',function(){
            Auth::logout();
            return redirect()->route('login');
        })->name('account.logout');
    });

    /* Admin */
    Route::group(['prefix' => 'admin', 'middleware' => 'admin'], function(){
        Route::resource('/', AdminMainController::class);
        Route::resource('/categories', AdminCategoryController::class);
        Route::resource('/news', AdminNewsController::class);
        Route::resource('/users', AdminUserController::class);
        Route::resource('/resources', AdminResourcesController::class);
        Route::get('/parser', [ParserController::class, 'index']);
    });
});


/* main */
Route::get('/', [MainController::class, 'index'])->name('home');
Route::get('/about', [MainController::class, 'about'])->name('about');
Route::get('/latest-news', [MainController::class, 'latestNews'])->name('latest-news');
Route::get('/contact', [MainController::class, 'contact'])->name('contact');
Route::get('/categories', [MainController::class, 'categories'])->name('categories');
Route::get('/categories/{news}', [MainController::class, 'news'])->name('category.news');
//Route::get('/error', [MainController::class, 'error']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::group(['middleware' => 'guest'], function(){
    Route::get('/login/vk', [SocialController::class, 'login'])->name('vk.login');
    Route::get('/callback/vk', [SocialController::class, 'callback'])->name('vk.callback');
});
