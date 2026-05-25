@extends('master')

@section('title', 'Tambah Pegawai')
@section('judul_halaman', 'Tambah Pegawai')

@section('konten')

<div class="mt-4">
    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('pegawai.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label>Nama</label>
            <input type="text" name="pegawai_nama" class="form-control" value="{{ old('pegawai_nama') }}" required>
        </div>
        <div class="form-group">
            <label>Jabatan</label>
            <input type="text" name="pegawai_jabatan" class="form-control" value="{{ old('pegawai_jabatan') }}">
        </div>
        <div class="form-group">
            <label>Umur</label>
            <input type="number" name="pegawai_umur" class="form-control" value="{{ old('pegawai_umur') }}">
        </div>
        <div class="form-group">
            <label>Alamat</label>
            <textarea name="pegawai_alamat" class="form-control">{{ old('pegawai_alamat') }}</textarea>
        </div>
        <div class="form-group">
            <button class="btn btn-success">Simpan</button>
            <a href="{{ route('pegawai.index') }}" class="btn btn-secondary">Batal</a>
        </div>
    </form>
</div>

@endsection
