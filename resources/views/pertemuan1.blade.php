@extends('master')

@section('title', 'Pertemuan 1 - Selamat Datang di ITS')

@section('judul_halaman', 'Pertemuan 1: Selamat Datang di ITS')

@section('konten')

<div class="text-center mt-4">
    <h2>Selamat Datang di ITS</h2>
    <p class="lead">
        This paragraph
        contains a lot of lines
        in the source code,
        <br>but the browser
        ignores it.
    </p>
    <img src="https://www.its.ac.id/wp-content/uploads/2026/01/Hi-me-2025-1-2-1536x864.jpg" width="100%" style="max-width: 700px; height: auto;" alt="ITS Campus">
</div>

<div class="mt-5">
    <a href="/menu" class="btn btn-primary">← Kembali ke Menu</a>
    <a href="/pertemuan2" class="btn btn-secondary">Pertemuan 2 →</a>
</div>

@endsection
