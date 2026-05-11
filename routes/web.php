<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\PegawaiDBController;

Route::get('/pegawai', [PegawaiController::class, 'index']);
Route::get('/pegawai/cari', [PegawaiController::class, 'cari']);
