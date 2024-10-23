<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
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

Route::get('/upload-profile', [ProfileController::class, 'index'])->name('upload-profile');
Route::post('/upload-profile', [ProfileController::class, 'upload'])->name('upload-profile.store');


Route::get('/upload-profile', [ProfileController::class, 'index'])->name('upload-profile');
Route::post('/upload-profile', [ProfileController::class, 'upload'])->name('upload-profile.store');

Route::post('/create-product', 'ProductController@createProduct');

Route::post('/upload-profile-picture', 'ProfileController@uploadProfilePicture');

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('profile');
Route::get('/profile', [App\Http\Controllers\HomeController::class, 'profile'])->name('profile');
Route::get('/products', [App\Http\Controllers\HomeController::class, 'products'])->name('products');
