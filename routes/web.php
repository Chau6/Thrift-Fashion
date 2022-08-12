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

        Route::get('remove/{id}', [HomePageController::class, 'remove'])->name('remove');

    //==========index
        Route::get('homeindex', [HomePageController::class, 'homeindex'])->name('homeindex');
        // Route::get('/', [HomePageController::class, 'homeindex'])->name('homeindex');
        Route::get('about', [HomePageController::class, 'about'])->name('about');

        Route::get('news', [HomePageController::class, 'news'])->name('news');
        Route::get('contact', [HomePageController::class, 'contact'])->name('contact');
        Route::get('notification', [HomePageController::class, 'notification'])->name('notification');

        Route::post('login', [HomePageController::class, 'login'])->name('login');

        Route::post('logined', [HomePageController::class, 'logined'])->name('logined');

        Route::get('editAccout', [HomePageController::class, 'editAccout'])->name('editAccout');

        Route::get('changePassword', [HomePageController::class, 'changePassword'])->name('changePassword');

        Route::get('history_order', [HomePageController::class, 'history_order'])->name('history_order');
        Route::get('account', [HomePageController::class, 'account'])->name('account');

        Route::get('clothes', [HomePageController::class, 'clothes'])->name('clothes');

        Route::get('nilestill', [HomePageController::class, 'nilestill'])->name('nilestill');

        Route::name('product.')->group(function(){
            Route::get('petuntse/{id}', [HomePageController::class, 'petuntse'])->name('petuntse');
            Route::get('petuntse-filter/{id}', [HomePageController::class, 'petuntseFilter'])->name('petuntseFilter');
            Route::post('petuntse', [HomePageController::class, 'petuntseSearch'])->name('petuntseSearch');




            Route::get('nilesilt/{id}', [HomePageController::class, 'nilesilt'])->name('nilesilt');

            Route::get('jeans/{id}', [HomePageController::class, 'jeans'])->name('jeans');
            Route::get('carrier/{id}', [HomePageController::class, 'carrier'])->name('carrier');

            Route::get('jesmonite/{id}', [HomePageController::class, 'jesmonite'])->name('jesmonite');

            Route::get('geopolymer/{id}', [HomePageController::class, 'geopolymer'])->name('geopolymer');

            Route::get('lumicera/{id}', [HomePageController::class, 'lumicera'])->name('lumicera');

            Route::get('sea_pottery/{id}', [HomePageController::class, 'sea_pottery'])->name('sea_pottery');

            Route::get('pitchers/{id}', [HomePageController::class, 'pitchers'])->name('pitchers');

            Route::get('kurti/{id}', [HomePageController::class, 'kurti'])->name('kurti');

            Route::get('girl/{id}', [HomePageController::class, 'girl'])->name('girl');

            Route::get('product_compatible/{id}', [HomePageController::class, 'product_compatible'])->name('product_compatible');
        });


        Route::name('shopping_cart.')->group(function(){
            Route::get('cart/{id}', [HomePageController::class, 'cart'])->name('cart');

            Route::get('details/{id}', [HomePageController::class, 'details'])->name('details');
        });

        Route::get('back',[HomePageController::class, 'back'])->name('back');
});
// Route::get('/', [HomePageController::class, 'homeindex'])->name('homeindex');