<!-- Menghubungkan dengan view template master -->
@extends('master')

<!-- isi bagian judul halaman -->
@section('judul_halaman', 'Halaman Kontak')

@section('title', 'BLOG : Halaman Kontak')

<!-- isi bagian konten -->
@section('konten')

    <div class="card mt-4">
        <div class="card-header bg-success text-white">
            <h4>Hubungi Kami</h4>
        </div>
        <div class="card-body">
            <h5>Informasi Kontak</h5>

            <table class="table table-striped">
                <tr>
                    <td><strong>Email</strong></td>
                    <td>:</td>
                    <td>malasngoding@gmail.com</td>
                </tr>
                <tr>
                    <td><strong>Telepon</strong></td>
                    <td>:</td>
                    <td>0896-0676-7404</td>
                </tr>
                <tr>
                    <td><strong>Alamat</strong></td>
                    <td>:</td>
                    <td>Jl. Contoh, Jakarta</td>
                </tr>
            </table>

            <h6 class="mt-4">Jam Kerja:</h6>
            <ul>
                <li>Senin - Jumat: 09:00 - 17:00</li>
                <li>Sabtu: 09:00 - 13:00</li>
                <li>Minggu: Tutup</li>
            </ul>

            <div class="mt-4">
                <h6>Hubungi Kami Juga Melalui:</h6>
                <a href="/formulir" class="btn btn-warning">Isi Formulir</a>
                <a href="/blog" class="btn btn-primary">Kembali ke Home</a>
                <a href="/blog/tentang" class="btn btn-secondary">Tentang Kami</a>
            </div>
        </div>
    </div>

@endsection
