<?php

use App\Http\Controllers\Dashboard\DashboardController;
use App\Http\Controllers\Dashboard\SettingController;
use App\Http\Controllers\Front\ContactController as FrontContactController;
use App\Http\Controllers\Dashboard\ContactController;
use App\Http\Controllers\Front\FrontController;
use App\Http\Controllers\Front\JohnReserveController;
use Illuminate\Support\Facades\Route;


Route::get('/', FrontController::class)->name('front.index');

Route::group(['prefix' => 'dashboard', 'as' => 'dashboard.', 'middleware' => 'auth'], function(){
     Route::get('/', DashboardController::class)->name('index');

     Route::get('contacts', [ContactController::class, 'index'])->name('contact.index');
     Route::get('contacts/{contact}', [ContactController::class, 'show'])->name('contact.show');
     Route::delete('contacts/{contact}', [ContactController::class, 'destroy'])->name('contact.destroy');
     Route::resource('settings', SettingController::class)->only('index', 'store');

});

Route::group(['prefix' => 'front', 'as' => 'front.'], function(){
     Route::post('contacts', [FrontContactController::class, 'store'])->name('contact.store');
     Route::get('john-reserve', [JohnReserveController::class, 'index'])->name('john-reserve.index');

});