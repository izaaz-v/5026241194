@extends('master')

@section('title', 'Edit Pegawai')
@section('judul_halaman', 'Edit Pegawai')

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

    <form action="{{ route('pegawai.update', $pegawai) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label>Nama</label>
            <input type="text" name="pegawai_nama" class="form-control" value="{{ old('pegawai_nama', $pegawai->pegawai_nama) }}" required>
        </div>
        <div class="form-group">
            <label>Jabatan</label>
            <input type="text" name="pegawai_jabatan" class="form-control" value="{{ old('pegawai_jabatan', $pegawai->pegawai_jabatan) }}">
        </div>
        <div class="form-group">
            <label>Umur</label>
            <input type="number" name="pegawai_umur" class="form-control" value="{{ old('pegawai_umur', $pegawai->pegawai_umur) }}">
        </div>
        <div class="form-group">
            <label>Alamat</label>
            <textarea name="pegawai_alamat" class="form-control">{{ old('pegawai_alamat', $pegawai->pegawai_alamat) }}</textarea>
        </div>
        <div class="form-group">
            <button class="btn btn-success">Perbarui</button>
            <a href="{{ route('pegawai.index') }}" class="btn btn-secondary">Batal</a>
        </div>
    </form>
</div>

@endsection
