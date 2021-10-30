<?php

use App\Http\Controllers\HeroController;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\ServicesController;
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

// Route::get('/', function () {
//     return view('welcome');
// });
// Route::get('/hero', function () {
//     return view('hero');
// });

// Start routes of Here

Route::get('/',[WelcomeController::class,'index']);
Route::get('/add-hero',[HeroController::class,'addHero']);
Route::post('/add-hero', [HeroController::class, 'store'])->name('hero.store');
Route::post('/add-hero', [HeroController::class, 'update'])->name('hero.update');

// Start routes of services
Route::get('/add-service', [ServicesController::class, 'index']);
Route::post('/add-service', [ServicesController::class, 'store'])->name('service.store');
Route::delete('/delete-service/{id}', [ServicesController::class, 'destroy'])->name('service.destroy');
Route::put('/update-service/{id}', [ServicesController::class, 'update'])->name('service.update');
