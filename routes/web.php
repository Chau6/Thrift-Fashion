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
// ================Client

Route::name('client.')->group(function(){
    //==========index
        Route::get('homeindex', [HomePageController::class, 'homeindex'])->name('homeindex');
        // Route::get('/', [HomePageController::class, 'homeindex'])->name('homeindex');
        Route::get('about', [HomePageController::class, 'about'])->name('about');
        Route::get('news', [HomePageController::class, 'news'])->name('news');
        Route::get('contact', [HomePageController::class, 'contact'])->name('contact');
        Route::get('notification', [HomePageController::class, 'notification'])->name('notification');
});