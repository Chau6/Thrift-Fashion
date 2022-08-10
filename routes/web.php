<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\HomePageAdminController;
use App\Http\Controllers\Client\HomePageController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\CartController;

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
    return view('welcome');
});
// ================Admin
Route::prefix('admin')->name('admin.')->group(function(){
    // HomeIndex
    Route::get('index', [HomePageAdminController::class, 'index'])->name('index');1

    // Product
    Route::prefix('product')->name('product.')->group(function(){
        Route::get('index', [ProductController::class, 'index'])->name('index');
        Route::get('create', [ProductController::class, 'create'])->name('create');
        Route::post('store', [ProductController::class, 'store'])->name('store');
        Route::get('edit/{id}', [ProductController::class, 'edit'])->name('edit')->where('id', '[0-9]+');
        Route::post('update/{id}', [ProductController::class, 'update'])->name('update')->where('id', '[0-9]+');
        Route::get('delete/{id}', [ProductController::class, 'delete'])->name('delete')->where('id', '[0-9]+');
    });
    // Category
    Route::prefix('category')->name('category.')->group(function(){
        Route::get('index', [CategoryController::class, 'index'])->name('index');
        Route::get('create', [CategoryController::class, 'create'])->name('create');
        Route::post('store', [CategoryController::class, 'store'])->name('store');
        Route::get('edit/{id}', [CategoryController::class, 'edit'])->name('edit')->where('id', '[0-9]+');
        Route::post('update/{id}', [CategoryController::class, 'update'])->name('update')->where('id', '[0-9]+');
        Route::get('delete/{id}', [CategoryController::class, 'delete'])->name('delete')->where('id', '[0-9]+');
    });
    // Cart
    Route::prefix('cart')->name('cart.')->group(function(){
        Route::get('index', [CartController::class, 'index'])->name('index');
        Route::get('create', [CartController::class, 'create'])->name('create');
        Route::post('store', [CartController::class, 'store'])->name('store');
        Route::get('edit/{id}', [CartController::class, 'edit'])->name('edit')->where('id', '[0-9]+');
        Route::post('update/{id}', [CartController::class, 'update'])->name('update')->where('id', '[0-9]+');
        Route::get('delete/{id}', [CartController::class, 'delete'])->name('delete')->where('id', '[0-9]+');
    });

    // User
    Route::prefix('user')->name('user.')->group(function(){
        Route::get('index', [UserController::class, 'index'])->name('index');
        Route::get('create', [UserController::class, 'create'])->name('create');
        Route::post('store', [UserController::class, 'store'])->name('store');
        Route::get('edit/{id}', [UserController::class, 'edit'])->name('edit')->where('id', '[0-9]+');
        Route::post('update/{id}', [UserController::class, 'update'])->name('update')->where('id', '[0-9]+');
        Route::get('delete/{id}', [UserController::class, 'delete'])->name('delete')->where('id', '[0-9]+');
    });
    
});

// ================Client
Route::name('client.')->group(function(){
    //==========index
        Route::get('homeindex', [HomePageController::class, 'homeindex'])->name('homeindex');
        Route::get('about', [HomePageController::class, 'about'])->name('about');
        Route::get('news', [HomePageController::class, 'news'])->name('news');
        Route::get('contact', [HomePageController::class, 'contact'])->name('contact');
        Route::get('notification', [HomePageController::class, 'notification'])->name('notification');
});