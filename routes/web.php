<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\MoviesController;

use App\Http\Controllers\FrontendController;

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



Route::get('/', [FrontendController::class, 'index'])->name('front-end.index');

Auth::routes();

//back-end
Route::get('/admin/dashboard', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/admin/movie', [MoviesController::class, 'index'])->name('movie.index');

Route::get('/admin/movie/create', [MoviesController::class, 'create'])->name('movie.create');

Route::post('/admin/movie/store', [MoviesController::class, 'store'])->name('movie.store');

Route::get('/admin/movie/{id}', [MoviesController::class, 'edit'])->name('movie.edit');

Route::post('/admin/movie/search', [MoviesController::class, 'search'])->name('movie.search');

Route::get('/admin/movie/delete/{id}', [MoviesController::class, 'destroy'])->name('movie.delete');


//front-end
Route::get('/detail/{id}', [FrontendController::class, 'detail'])->name('movie.detail');

Route::get('/about', [FrontendController::class, 'about'])->name('about');

Route::get('/join-us', [FrontendController::class, 'joinUs'])->name('join-us');

Route::get('/contact-us', [FrontendController::class, 'contactUs'])->name('contact-us');
