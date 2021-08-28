<?php

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

Route::get('/', [\App\Http\Controllers\PageController::class, 'index'])->name('index');


Route::get('login', [\App\Http\Controllers\Auth\AuthController::class, 'index'])->name('login');
Route::post('post-login', [\App\Http\Controllers\Auth\AuthController::class, 'postLogin'])->name('login.post'); 
Route::get('registration', [\App\Http\Controllers\Auth\AuthController::class, 'registration'])->name('register');
Route::post('post-registration', [\App\Http\Controllers\Auth\AuthController::class, 'postRegistration'])->name('register.post'); 


Route::get('search', [\App\Http\Controllers\SearchController::class, 'search'])->name('search');
//detail

Route::get('detail/{id}', [\App\Http\Controllers\DetailController::class, 'index'])->name('index');
Route::get('details', [\App\Http\Controllers\DetailController::class, 'index'])->name('index');



Route::get('dashboard', [\App\Http\Controllers\Auth\AuthController::class, 'dashboard']); 
Route::get('logout', [\App\Http\Controllers\Auth\AuthController::class, 'logout'])->name('logout');

Route::get('pricing', [\App\Http\Controllers\PageController::class, 'pricing'])->name('pricing');
Route::get('about', [\App\Http\Controllers\PageController::class, 'about'])->name('about');
Route::get('contact', [\App\Http\Controllers\PageController::class, 'contact'])->name('contact');