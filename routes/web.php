<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\SalesController;
use App\Http\Controllers\UsersController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::prefix('category')->group(function () {
    Route::get('/food-beverage', [ProductsController::class, 'foodBeverage'])
        ->name('product.categories.food-beverage');
    Route::get('/beauty-health', [ProductsController::class, 'beautyHealth'])
        ->name('product.categories.beauty-health');
    Route::get('/home-care', [ProductsController::class, 'homeCare'])
        ->name('product.categories.home-care');
    Route::get('/baby-kid', [ProductsController::class, 'babyKid'])
        ->name('product.categories.baby-kid');
})->name('product.categories');

Route::get('/sales', [SalesController::class, 'index'])
    ->name('sales.transactions');

Route::get('/user/{id}/name/{name}', [UsersController::class, 'profile'])
    ->name('users.profile');