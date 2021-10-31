<?php

use App\Http\Controllers\AddMovieController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MovieDataController;
use App\Http\Controllers\NewRateController;
use App\Http\Controllers\TopListController;
use App\Http\Controllers\WelcomeController;
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

Route::get('/', [WelcomeController::class,'index']);
Route::get('/toplist',[TopListController::class,'index']);

Route::get('/addmovie',[AddMovieController::class,'index']);

Route::post('/newmovie',[AddMovieController::class,'save']);

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::get('/movie/{id}', [MovieDataController::class, 'index'])->name('movie_data');

Route::post('/new_rate/{id}', [NewRateController::class, 'index']);
