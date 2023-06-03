<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/',[\App\Http\Controllers\Front\HomeController:: class,'index']);

Route::get('/blog',[\App\Http\Controllers\Front\BlogController::class,'index']);

Route::get('/blog/show/{id}',[\App\Http\Controllers\Front\BlogController::class,'show']);

Route::get('/contact',[\App\Http\Controllers\Front\ContactController::class,'index']);

Route::get('/about',[\App\Http\Controllers\Front\AboutController::class,'index']);

Route::get('/portfolio',[\App\Http\Controllers\Front\PortfolioController::class,'index']);

Route::get('/login',[\App\Http\Controllers\Backend\AuthController::class,'index']);

Route::get('/forgot',[\App\Http\Controllers\Backend\AuthController::class,'forgot']);

route::get('admin/dashboard',[\App\Http\Controllers\Backend\DashboardController::class,'index']);

route::get('admin/home',[\App\Http\Controllers\Backend\DashboardController::class,'home_dash']);


route::get('admin/about',[\App\Http\Controllers\Backend\DashboardController::class,'about']);


route::get('admin/portfolio',[\App\Http\Controllers\Backend\DashboardController::class,'portfolio']);


route::get('admin/contact',[\App\Http\Controllers\Backend\DashboardController::class,'contact']);

route::get('admin/blog',[\App\Http\Controllers\Backend\DashboardController::class,'blog']);


