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

Auth::routes();

Route::namespace('App\Http\Controllers\Backend')->middleware('auth')->prefix('admin')->name('admin_')->group(function(){

    Route::controller(HomeController::class)->group(function(){
        Route::get('/', 'index')->name('home');
    });

    Route::controller(ServiceController::class)->prefix('services')->name('service_')->group(function(){
        Route::get('/', 'index')->name('all');
        Route::get('add-new', 'create')->name('create');
        Route::post('store-new', 'store')->name('store');
        Route::get('edit/{id}', 'edit')->name('edit');
        Route::post('update/{id}', 'update')->name('update');
        Route::get('delete/{id}', 'destroy')->name('delete');
    });

    Route::controller(SkillController::class)->prefix('skills')->name('skill_')->group(function(){
        Route::get('/', 'index')->name('all');
        Route::get('add-new', 'create')->name('create');
        Route::post('store-new', 'store')->name('store');
        Route::get('edit/{id}', 'edit')->name('edit');
        Route::post('update/{id}', 'update')->name('update');
        Route::get('delete/{id}', 'destroy')->name('delete');
    });

});


