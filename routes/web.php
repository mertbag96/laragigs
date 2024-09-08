<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ListingController;
use Illuminate\Support\Facades\Route;

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

// Homepage
Route::get('/', [ListingController::class, 'index'])->name('index');

// Authentication
Route::prefix('auth')->name('auth.')->group(function () {
    Route::get('/signin', [AuthController::class, 'signin'])->name('signin');
    Route::post('/login', [AuthController::class, 'login'])->name('login');
    Route::get('/signup', [AuthController::class, 'signup'])->name('signup');
    Route::post('/register', [AuthController::class, 'register'])->name('register');
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
});

// Listings
Route::prefix('listings')->name('listings.')->group(function () {
    Route::get('/', [ListingController::class, 'index'])->name('index');
    Route::get('/manage', [ListingController::class, 'manage'])->name('manage');
    Route::get('/create', [ListingController::class, 'create'])->name('create');
    Route::get('/{listing}', [ListingController::class, 'show'])->name('show');
    Route::post('/store', [ListingController::class, 'store'])->name('store');
    Route::get('/{listing}/edit', [ListingController::class, 'edit'])->name('edit');
    Route::put('/{listing}/update', [ListingController::class, 'update'])->name('update');
    Route::delete('/{listing}/destroy', [ListingController::class, 'destroy'])->name('destroy');
});
