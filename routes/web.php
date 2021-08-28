<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\UserController;
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
Route::get('test_email',function(){
    
});

Route::get('/', [PageController::class, 'index'])->name('index');
Route::get('pricing', [PageController::class, 'pricing'])->name('pricing');
Route::get('about-us', [PageController::class, 'about'])->name('about');
Route::get('contact-us', [PageController::class, 'contact'])->name('contact');
Route::get('newone', [PageController::class, 'newone'])->name('newone');
Route::get('newtwo', [PageController::class, 'newtwo'])->name('newtwo');

Route::get('support', [PageController::class, 'support'])->name('support');
Route::get('feedback', [PageController::class, 'feedback'])->name('feedback');
Route::post('postfeedback', [PageController::class, 'postfeedback'])->name('postfeedback');

Route::group(['middleware' => 'auth'], function () {
     Route::get('search', [SearchController::class, 'search'])->name('search');
    Route::get('searchpage', [PageController::class, 'searchpage'])->name('searchpage');
    Route::get('smartsearch', [PageController::class, 'smartsearch'])->name('smartsearch');
    Route::get('mainSearch', [SearchController::class, 'mainSearch']);
    Route::get('judicial', [PageController::class, 'judicial'])->name('judicial');
    Route::get('profile', [UserController::class, 'profile'])->name('profile');
    Route::post('updateprofile', [UserController::class, 'updateprofile'])->name('update-profile');
    Route::get('searchView/{id}', [SearchController::class, 'searchView']);
    Route::get('searchFilter', [SearchController::class, 'searchFilter']);
    
    Route::get('readme', [PageController::class, 'readme'])->name('readme');
});

require __DIR__.'/auth.php';
