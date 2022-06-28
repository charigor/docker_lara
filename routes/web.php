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

Route::get('/', [\App\Http\Controllers\HomeController::class,'index']);
Route::get('/user', [\App\Http\Controllers\UserController::class,'index'])->name('user');
Route::resource('dashboard', \App\Http\Controllers\DashboardController::class)
    ->middleware(['auth']);
Route::resource('category', \App\Http\Controllers\CategoryController::class);
Route::resource('products', \App\Http\Controllers\ProductController::class);


require __DIR__.'/auth.php';
