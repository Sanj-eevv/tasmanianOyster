<?php

use App\Http\Controllers\Dashboard\DashboardController;
use App\Http\Controllers\Dashboard\GalleryController;
use App\Http\Controllers\Dashboard\GrowingRegionController;
use App\Http\Controllers\Dashboard\SettingController;
use App\Http\Controllers\Front\ContactController as FrontContactController;
use App\Http\Controllers\Dashboard\ContactController;
use App\Http\Controllers\Front\CorporateController;
use App\Http\Controllers\Front\GrowingRegionController as FrontGrowingRegionController;
use App\Http\Controllers\Front\HomeController;
use App\Http\Controllers\Front\JohnReserveController;
use App\Http\Controllers\Dashboard\JohnReserveController as DashboardJohnReserveController;
use App\Http\Controllers\Dashboard\PeopleController;


use App\Http\Controllers\Front\StoryController;
use \App\Http\Controllers\Dashboard\StoryController as DashboardStoryController;
use App\Http\Controllers\Front\SustainabilityController;
use Illuminate\Support\Facades\Route;


Route::get('/', HomeController::class)->name('front.index');

Route::group(['prefix' => 'dashboard', 'as' => 'dashboard.', 'middleware' => 'auth'], function(){
     Route::get('/', DashboardController::class)->name('index');

     Route::get('contacts', [ContactController::class, 'index'])->name('contact.index');
     Route::get('contacts/{contact}', [ContactController::class, 'show'])->name('contact.show');
     Route::delete('contacts/{contact}', [ContactController::class, 'destroy'])->name('contact.destroy');
     Route::resource('galleries', GalleryController::class)->only('index', 'store', 'destroy');
     Route::resource('growing-regions', GrowingRegionController::class)->except('show');
     Route::resource('john-reserve', DashboardJohnReserveController::class);
     Route::resource('people', PeopleController::class);
     Route::resource('settings', SettingController::class)->only('index', 'store');
     Route::resource('stories', DashboardStoryController::class);

});

Route::group(['prefix' => 'front', 'as' => 'front.'], function(){
     Route::get('/', HomeController::class)->name('index');
     Route::post('contacts', [FrontContactController::class, 'store'])->name('contact.store');
     Route::get('growing-region/{slug}', [FrontGrowingRegionController::class, 'details'])->name('growing-region.details');
     Route::get('john-reserve', [JohnReserveController::class, 'index'])->name('john-reserve.index');
     Route::get('john-reserve/{slug}', [JohnReserveController::class, 'details'])->name('john-reserve.details');
     Route::get('our-people', [CorporateController::class, 'ourPeople'])->name('our-people.index');
     Route::get('quality-grading', [CorporateController::class, 'qualityGrading'])->name('quality-grading.index');
     Route::get('story', StoryController::class)->name('story.index');
     Route::get('sustainability', SustainabilityController::class)->name('sustainability.index');

});