<?php

use App\Http\Controllers\adminController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/', function () {
//     return view('home');
// });
Route::get('/', [ HomeController::class, 'index']);
Route::get('shop', [ HomeController::class, 'shop']);
Route::get('singleproduct', [ HomeController::class, 'single']);
Route::get('cart', [ HomeController::class, 'cart']);
Route::get('checkout', [ HomeController::class, 'checkout']);
Route::get('confirmorder', [ HomeController::class, 'confirmorder']);
Route::get('blog', [ HomeController::class, 'blog']);
Route::get('blogdetail', [ HomeController::class, 'blogdetail']);
Route::get('userlogin', [ HomeController::class, 'userlogin']);
Route::get('contact', [ HomeController::class, 'contact']);
Route::get('trackorder', [ HomeController::class, 'trackorder']);
Route::resource('Categories', CategoryController::class);
Route::resource('Products', ProductController::class);

// category controller route




// Admin
// Route::get('admin', [ adminController::class, 'admin']);
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard',[ adminController::class, 'admin'])->name('dashboard');
});


