<!-- Menghubungkan dengan view template master -->
@extends('master')

<!-- isi bagian judul halaman -->
@section('judul_halaman', 'Halaman Home')

@section('title', 'BLOG : Halaman Home')

<!-- isi bagian konten -->
@section('konten')

	<div class="jumbotron mt-4">
		<h1 class="display-4">Selamat Datang!</h1>
		<p class="lead">Ini adalah halaman home dari website kami.</p>
		<hr class="my-4">
		<p>Nikmati berbagai konten menarik dan informatif di website kami.</p>
		<p class="lead">
			<a class="btn btn-primary btn-lg" href="/blog/tentang" role="button">Pelajari Lebih Lanjut</a>
		</p>
	</div>

	<div class="row mt-4">
		<div class="col-md-6">
			<div class="card">
				<div class="card-header bg-primary text-white">
					<h5>Fitur Utama</h5>
				</div>
				<div class="card-body">
					<ul>
						<li>Konten berkualitas tinggi</li>
						<li>Navigasi yang mudah</li>
						<li>Formulir interaktif</li>
						<li>Halaman kontak yang responsif</li>
					</ul>
				</div>
			</div>
		</div>
		<div class="col-md-6">
			<div class="card">
				<div class="card-header bg-success text-white">
					<h5>Navigasi Cepat</h5>
				</div>
				<div class="card-body">
					<a href="/blog/tentang" class="btn btn-sm btn-outline-primary d-block mb-2">Tentang Kami</a>
					<a href="/blog/kontak" class="btn btn-sm btn-outline-success d-block mb-2">Hubungi Kami</a>
					<a href="/formulir" class="btn btn-sm btn-outline-warning d-block mb-2">Isi Formulir</a>
					<a href="/menu" class="btn btn-sm btn-outline-info d-block">Lihat Menu Lengkap</a>
				</div>
			</div>
		</div>
	</div>

@endsection
