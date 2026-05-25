<!-- Menghubungkan dengan view template master -->
@extends('master')

<!-- isi bagian judul halaman -->
@section('judul_halaman', 'Halaman Tentang')

@section('title', 'BLOG : Halaman Tentang')

<!-- isi bagian konten -->
@section('konten')

	<div class="card mt-4">
		<div class="card-header bg-info text-white">
			<h4>About This Website</h4>
		</div>
		<div class="card-body">
			<h5>Selamat Datang di Blog Kami</h5>
			<p>Ini adalah halaman tentang yang menjelaskan lebih lanjut tentang website dan konten kami.</p>

			<h6 class="mt-4">Tujuan Website:</h6>
			<ul>
				<li>Berbagi informasi dan pengetahuan</li>
				<li>Membangun komunitas yang solid</li>
				<li>Memberikan edukasi melalui konten berkualitas</li>
			</ul>

			<h6 class="mt-4">Fitur Utama:</h6>
			<ul>
				<li>Blog posts yang informatif</li>
				<li>Form untuk berinteraksi dengan kami</li>
				<li>Halaman kontak yang mudah diakses</li>
			</ul>

			<p class="mt-4">
				<em>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
				cillum dolore eu fugiat nulla pariatur.</em>
			</p>

			<div class="mt-4">
				<a href="/blog" class="btn btn-primary">Kembali ke Home</a>
				<a href="/blog/kontak" class="btn btn-secondary">Hubungi Kami</a>
			</div>
		</div>
	</div>

@endsection
