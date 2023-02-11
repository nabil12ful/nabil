<?php

use Illuminate\Support\Facades\Auth;
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

Route::get('/', function () {
    return view('frontend.index');
});

Auth::routes();

Route::namespace('App\Http\Controllers')->group(function(){
    Route::namespace('Frontend')->group(function(){
        //
    });

    Route::namespace('Backend')->middleware('auth')->prefix('admin')->name('admin_')->group(function(){
        Route::controller(HomeController::class)->group(function(){
            Route::get('/', 'index')->name('home');
        });

    });
    // Route::get('/home', [HomeController::class, 'index'])->name('home');
});

