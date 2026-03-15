<?php

use App\Http\Controllers\AbsensiController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BerandaController;
use App\Http\Controllers\PanduanController;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\RiwayatController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {s
//     return view('welcome');
// });

Route::get('/panduan', [PanduanController::class, 'index'])->name('riwayat.absen');

Route::middleware('auth')->group(function () {
    Route::get('/', [BerandaController::class, 'index'])->name('dashboard');

    Route::get('/create', [AbsensiController::class, 'create'])->name('absen.masuk');
    Route::post('/create-absen', [AbsensiController::class, 'store'])->name('create.absen');
    Route::get('/profil', [ProfilController::class, 'index'])->name('profil');
    Route::get('/riwayat', [RiwayatController::class, 'cari'])->name('search.riwayat');
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
});

Route::middleware('guest')->group(function () {
    Route::get('/login', [AuthController::class, 'index'])->name('login');
    Route::post('/login', [AuthController::class, 'login'])->name('login.prosess');
});


