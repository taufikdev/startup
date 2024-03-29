<?php

use App\Http\Controllers\AnouncementController;
use App\Http\Controllers\CmsController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\DiscountController;
use App\Http\Controllers\HeroController;
use App\Http\Controllers\PlanCaractersController;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\ServicesController;
use App\Http\Controllers\PlanController;
use App\Http\Controllers\PortfolioCategoriesController;
use App\Http\Controllers\StackController;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\PortfolioCategory;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

// Route::get('/', function () {
//     return view('welcome');
// });
// Route::get('/hero', function () {
//     return view('hero');
// });

// Route::get('/cms',[CmsController::class,'index']);

//Hero routes
Route::get('/',[WelcomeController::class,'index']);
Route::group(['middleware' => 'auth'],function () {
    // Route::get('/cms',[CmsController::class,'index']);
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

    //Anouncement routes
    Route::get('/anouncement', [AnouncementController::class, 'index']);
    Route::post('/anouncement/update', [AnouncementController::class, 'update'])->name('anouncement.update');

    //plan routes
    Route::get('/plan', [PlanController::class, 'index']);
    Route::post('/plan/show', [PlanController::class, 'show']);
    Route::post('/plan/update', [PlanController::class, 'update']);
    // Route::get('/plan/update', [PlanController::class, 'update'])->name('plan.update');
    // Route::post('/discount/update', [DiscountController::class, 'update'])->name('discount.update');

    //Plan Caracters routes
    Route::post('/plan-caracters/add', [PlanCaractersController::class, 'store']);
    Route::post('/plan-caracters/delete', [PlanCaractersController::class, 'destroy']);

    //Stack routes
    Route::get('/add-Stack', [StackController::class, 'index']);
    Route::post('/add-Stack', [StackController::class, 'store'])->name('Stack.store');
    Route::delete('/delete-Stack/{id}', [StackController::class, 'destroy'])->name('Stack.destroy');
    Route::put('/update-stack', [StackController::class, 'update'])->name('stack.update');

    //Portfolio routes
    Route::get('/portfolio', [PortfolioController::class, 'index']);
    Route::post('/portfolio/add', [PortfolioController::class, 'store'])->name('portfolio.store');
    Route::post('/portfolio/show', [PortfolioController::class, 'show']);
    Route::delete('/delete-portfolio/{id}', [PortfolioController::class, 'destroy'])->name('portfolio.destroy');
    Route::put('/update-portfolio', [PortfolioController::class, 'update'])->name('portfolio.update');

    //Portfolio categories routes
    Route::post('/portfolioCategories/add', [PortfolioCategoriesController::class, 'store'])->name('portfolioCategories.store');
    Route::delete('/delete-portfolioCategories/{id}', [PortfolioCategoriesController::class, 'destroy'])->name('portfolioCategories.destroy');
    Route::put('/update-portfolioCategories', [PortfolioCategoriesController::class, 'update'])->name('portfolioCategories.update');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');