<?php

use App\Http\Controllers\Dashboard\DashboardController;
use App\Http\Controllers\Dashboard\SettingController;
use App\Http\Controllers\Front\ContactController as FrontContactController;
use App\Http\Controllers\Dashboard\ContactController;
use App\Http\Controllers\Front\HomeController;
use App\Http\Controllers\Front\JohnReserveController;
use App\Http\Controllers\Dashboard\JohnReserveController as DashboardJohnReserveController;

use App\Http\Controllers\Front\StoryController;
use \App\Http\Controllers\Dashboard\StoryController as DashboardStoryController;
use Illuminate\Support\Facades\Route;


Route::get('/', HomeController::class)->name('front.index');

Route::group(['prefix' => 'dashboard', 'as' => 'dashboard.', 'middleware' => 'auth'], function(){
     Route::get('/', DashboardController::class)->name('index');

     Route::get('contacts', [ContactController::class, 'index'])->name('contact.index');
     Route::get('contacts/{contact}', [ContactController::class, 'show'])->name('contact.show');
     Route::delete('contacts/{contact}', [ContactController::class, 'destroy'])->name('contact.destroy');
     Route::resource('john-reserve', DashboardJohnReserveController::class);
     Route::resource('settings', SettingController::class)->only('index', 'store');
     Route::resource('stories', DashboardStoryController::class);

});

Route::group(['prefix' => 'front', 'as' => 'front.'], function(){
     Route::post('contacts', [FrontContactController::class, 'store'])->name('contact.store');
     Route::get('john-reserve', [JohnReserveController::class, 'index'])->name('john-reserve.index');
     Route::get('john-reserve/{slug}', [JohnReserveController::class, 'details'])->name('john-reserve.details');
     Route::get('story', [StoryController::class, 'index'])->name('story.index');

});