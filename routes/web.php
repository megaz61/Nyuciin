<?php

use App\Http\Controllers\SessionController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\HomeController;
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
Route::get('/login', [UserController::class, 'login'])->name('login')->middleware('guest');
Route::post('/login', [UserController::class, 'authenticate']);
Route::post('/logout', [UserController::class, 'logout']);
Route::get('/register', [UserController::class, 'register']);
Route::post('/register', [UserController::class, 'store']);
Route::get('/', [HomeController::class, 'index'])->middleware('auth');
Route::get('/home', [HomeController::class, 'index']);
