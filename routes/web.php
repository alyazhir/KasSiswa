<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\KasController;
use App\Http\Controllers\BulanKasController;

Route::get('/', function () {
    return redirect('/siswa');
});

Route::resource('siswa', SiswaController::class);
Route::resource('kas', KasController::class);
Route::resource('bulan_kas', BulanKasController::class);
