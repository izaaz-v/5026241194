<?php

use App\Http\Controllers\PageController;
use App\Http\Controllers\DosenController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\PegawaiDBController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KeranjangBelanjaController;
use App\Http\Controllers\NilaiKuliahController;
use App\Http\Controllers\TopiController;

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

// Compatibility alias routes matching tutorial variants
Route::get('/pegawai/tambah', [PegawaiController::class, 'create']);
Route::post('/pegawai/store', [PegawaiController::class, 'store']);
Route::get('/pegawai/edit/{pegawai}', [PegawaiController::class, 'edit']);
Route::post('/pegawai/update/{pegawai}', [PegawaiController::class, 'update']);
Route::get('/pegawai/hapus/{pegawai}', [PegawaiController::class, 'destroy']);

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

// Keranjang Belanja Routes (D4)
Route::get('/keranjang', [KeranjangBelanjaController::class, 'index'])->name('keranjang.index');
Route::get('/keranjang/tambah', [KeranjangBelanjaController::class, 'create'])->name('keranjang.create');
Route::post('/keranjang/simpan', [KeranjangBelanjaController::class, 'store'])->name('keranjang.store');
Route::delete('/keranjang/hapus/{id}', [KeranjangBelanjaController::class, 'destroy'])->name('keranjang.destroy');

// Nilai Kuliah Routes (E5)
Route::get('/nilai', [NilaiKuliahController::class, 'index'])->name('nilai.index');
Route::get('/nilai/tambah', [NilaiKuliahController::class, 'create'])->name('nilai.create');
Route::post('/nilai/simpan', [NilaiKuliahController::class, 'store'])->name('nilai.store');

// Topi Routes (E6)
Route::get('/topi', [TopiController::class, 'index'])->name('topi.index');
Route::get('/topi/tambah', [TopiController::class, 'create'])->name('topi.create');
Route::post('/topi/simpan', [TopiController::class, 'store'])->name('topi.store');
Route::delete('/topi/hapus/{kodetopi}', [TopiController::class, 'destroy'])->name('topi.destroy');
