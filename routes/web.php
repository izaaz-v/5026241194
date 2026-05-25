<?php

use App\Http\Controllers\PageController;
use App\Http\Controllers\DosenController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\PegawaiDBController;
use Illuminate\Support\Facades\Route;

// Home/Welcome
Route::get('/', function () {
    return view('welcome');
});

// Main Menu
Route::view('/menu', 'menu');

// Blog pages
Route::get('/blog', [PageController::class, 'index']);
Route::view('/blog/tentang', 'tentang');
Route::view('/blog/kontak', 'contact');
Route::view('/home', 'home');

// Forms & Database (CRUD for Pegawai)
Route::resource('pegawai', PegawaiController::class);
// keep old /formulir url pointing to create form for backward compatibility
Route::get('/formulir', function () { return redirect()->route('pegawai.create'); });

// Pertemuan (Course Material) Pages
Route::view('/pertemuan1', 'pertemuan1');
Route::view('/pertemuan2', 'pertemuan2');
Route::view('/pertemuan3', 'pertemuan3');
Route::view('/pertemuan4', 'pertemuan4');
Route::view('/pertemuan5', 'pertemuan5');

// Additional Pages
Route::get('/biodata', [DosenController::class, 'biodata']);
Route::view('/bootstrap', 'bootstrap');
Route::view('/linktree', 'linktree');

// Legacy Routes (for backward compatibility)
Route::view('/tentang', 'tentang');
Route::view('/contact', 'contact');
