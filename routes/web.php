<?php

use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

use App\Http\Controllers\DosenController;
use App\Http\Controllers\PegawaiController ;
use App\Http\Controllers\PegawaiDBController ;

Route::get('/pegawai/{nama}', [PegawaiController::class, 'index']);
Route::get('/formulir', [PegawaiController::class, 'formulir']);
Route::post('/formulir/proses', [PegawaiController::class, 'proses']);
Route::get('/pegawai', [PegawaiDBController::class, 'index']);
Route::view('/home', 'home');
Route::view('/tentang', 'tentang');
Route::view('/contact', 'contact');
Route::get('/blog', [PageController::class, 'index']);
