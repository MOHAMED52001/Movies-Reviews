<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MoviesController;
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


//public Routes
Route::get('/', [MoviesController::class, 'index']);

Route::get('/movie/{id}', [MoviesController::class, 'show']);

Route::get('/user/register', [UserController::class, 'register'])->middleware('guest');

Route::post('/user/store', [UserController::class, 'store'])->middleware('guest');

Route::post('/user/authenticate', [UserController::class, 'authenticate'])->middleware('guest');

Route::get('/user/login', [UserController::class, 'login'])->middleware('guest')->name('login');

Route::post('/user/logout', [UserController::class, 'logout'])->middleware('auth');
