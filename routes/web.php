<?php

use App\Http\Controllers\BookingController;
use App\Http\Controllers\ListingController;
use App\Http\Controllers\UsersController;
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

// Index Page
Route::get('/', [ListingController::class, 'index']);

// View Create Page
Route::get('/create', [ListingController::class, 'create'])->middleware('auth');

// Sotre Created Date in Database
Route::post('/', [ListingController::class, 'store'])->middleware('auth');

// Show edit form
Route::get('/{listing}/edit', [ListingController::class, 'edit'])->middleware('auth');

// Update listing form
Route::put('/{listing}', [ListingController::class, 'update'])->middleware('auth');

// Delete listing form
Route::delete('/{listing}', [ListingController::class, 'destroy'])->middleware('auth');

// Manage Listings
Route::get('/manage', [ListingController::class, 'manage'])->middleware('auth');


// ////////////////////////// Bookings //////////////////////////////
Route::post('/bookings', [BookingController::class, 'store']);
// ////////////////////////// Bookings //////////////////////////////



//////////////////////////////////////////////////////////////

// View Register page
Route::get('/register', [UsersController::class,'create'])->middleware('guest');

// Create New User
Route::post('/users', [UsersController::class,'store']);

// Log User out
Route::post('/logout', [UsersController::class, 'destroy'])->middleware('auth');

// View login page
Route::get('/login', [UsersController::class,'index'])->name('login')->middleware('guest');

// Login User
Route::post('/users/authenticate', [UsersController::class,'show']);


///////////////////////////////////////////////////////////////
// View Single Full page
Route::get('/{listing}', [ListingController::class, 'show']);