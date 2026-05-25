@extends('master')

@section('title', 'Biodata - Personal Information')

@section('judul_halaman', 'Biodata Pribadi')

@section('konten')

	<div class="card mt-4">
		<div class="card-header bg-info text-white">
			<h4>Informasi Pribadi</h4>
		</div>
		<div class="card-body">
			<div class="row mb-3">
				<div class="col-md-4">
					<strong>Nama:</strong>
				</div>
				<div class="col-md-8">
					{{ $nama }}
				</div>
			</div>

			<div class="row mb-3">
				<div class="col-md-4">
					<strong>Umur:</strong>
				</div>
				<div class="col-md-8">
					{{ $umur }} tahun
				</div>
			</div>

			<div class="row mb-4">
				<div class="col-md-4">
					<strong>Mata Pelajaran:</strong>
				</div>
				<div class="col-md-8">
					<ul class="list-group">
						@foreach($matkul as $m)
							<li class="list-group-item">{{ $m }}</li>
						@endforeach
					</ul>
				</div>
			</div>

			<div class="mt-4">
				<a href="/blog" class="btn btn-primary">Kembali ke Home</a>
				<a href="/menu" class="btn btn-secondary">Lihat Menu Lengkap</a>
				<a href="/blog/kontak" class="btn btn-info">Hubungi Kami</a>
			</div>
		</div>
	</div>

@endsection
