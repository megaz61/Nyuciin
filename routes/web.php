<?php

use App\Http\Controllers\SessionController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TempatController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\RiwayatController;
use App\Http\Controllers\AdminController;
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
Route::get('/', [HomeController::class, 'index']);
Route::get('/home', [HomeController::class, 'index']);
Route::get('/upTempat', [TempatController::class, 'create'])->name('upTempat.create');
Route::post('/upTempat', [TempatController::class, 'store'])->name('upTempat.store');
Route::get('/detail/{id}', [BookingController::class, 'index']);
Route::get('/booking/{id}', [BookingController::class, 'booking'])->middleware('auth');
Route::get('/success/{id}', [BookingController::class, 'booking_success'])->middleware('success');
Route::post('/booking/{id}', [BookingController::class, 'fix_booking'])->name('booking.store');
Route::get('/riwayat', [RiwayatController::class, 'index'])->name('history')->middleware('auth');
Route::get('/admin', [AdminController::class, 'index'])->name('admin')->middleware('auth');
Route::get('/admin/upTempat', [AdminController::class, 'upTempat'])->name('admin.upTempat')->middleware('auth');
Route::delete('/hapus/{id}', [AdminController::class, 'destroy'])->name('admin.destroy');
Route::delete('/riwayat/{id}', [RiwayatController::class, 'destroy'])->name('history.destroy');
Route::get('/ganti/{id}', [RiwayatController::class, 'indexGanti'])->name('history.ganti');
Route::post('/ganti/{id}', [RiwayatController::class, 'ganti'])->name('ganti.store');
Route::get('/rating', function () {
    return view('tes/rating');
});


