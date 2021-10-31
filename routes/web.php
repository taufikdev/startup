<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\DiscountController;
use App\Http\Controllers\HeroController;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\ServicesController;
use Illuminate\Support\Facades\Route;


// Route::get('/', function () {
//     return view('welcome');
// });
// Route::get('/hero', function () {
//     return view('hero');
// });

//Hero routes

Route::get('/',[WelcomeController::class,'index']);
Route::get('/add-hero',[HeroController::class,'addHero']);
Route::post('/add-hero', [HeroController::class, 'store'])->name('hero.store');
Route::post('/add-hero', [HeroController::class, 'update'])->name('hero.update');

// services routes 
Route::get('/add-service', [ServicesController::class, 'index']);
Route::post('/add-service', [ServicesController::class, 'store'])->name('service.store');
Route::delete('/delete-service/{id}', [ServicesController::class, 'destroy'])->name('service.destroy');
Route::put('/update-service/{id}', [ServicesController::class, 'update'])->name('service.update');


//Contact routes
Route::get('/contact', [ContactController::class, 'index']);
Route::post('/contact/update', [ContactController::class, 'update'])->name('contact.update');


//Discount routes
Route::get('/discount', [DiscountController::class, 'index']);
Route::post('/discount/update', [DiscountController::class, 'update'])->name('discount.update');
