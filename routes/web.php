<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;

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

Route::get('/', [MainController::class, 'index']);
Route::get('/about', [MainController::class, 'about']);
Route::get('/latest-news', [MainController::class, 'latestNews']);
Route::get('/contact', [MainController::class, 'contact']);
Route::get('/categories', [MainController::class, 'categories']);
Route::get('/categories/{news}', [MainController::class, 'news']);
//Route::get('/error', [MainController::class, 'error']);
