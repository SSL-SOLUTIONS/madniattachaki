<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\WebsiteController;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', function () {
    return view('website');
});
Route::middleware(['auth'])->group(function () {
    Route::get('dashboard' ,[AdminController::class, 'dashboard'])->name('dashboard');
    Route::resource('product', ProductController::class);
    });
Route::get('about', [WebsiteController::class, 'about'])->name('about');
Route::get('contact',[ WebsiteController::class, 'contact'])->name('contact');
Route::get('products',[ WebsiteController::class, 'products'])->name('products');
Route::get('order_now',[WebsiteController::class,'order_now'])->name('order_now');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
