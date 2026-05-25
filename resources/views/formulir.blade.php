@extends('master')

@section('title', 'Formulir - Website Kami')

@section('judul_halaman', 'Formulir Input Data')

@section('konten')

    <div class="card mt-4">
        <div class="card-header bg-warning">
            <h5>Isi Formulir Berikut</h5>
        </div>
        <div class="card-body">
            <form action="/formulir/proses" method="post">
                @csrf
                <div class="form-group">
                    <label for="nama">Nama:</label>
                    <input class="form-control" type="text" name="nama" id="nama" required>
                </div>

                <div class="form-group">
                    <label for="umur">Umur:</label>
                    <input class="form-control" type="number" name="umur" id="umur" required>
                </div>

                <div class="form-group">
                    <label for="alamat">Alamat:</label>
                    <input class="form-control" type="text" name="alamat" id="alamat" required>
                </div>

                <div class="form-group">
                    <button class="btn btn-success" type="submit">Simpan</button>
                    <a href="/blog" class="btn btn-secondary">Kembali</a>
                    <a href="/blog/kontak" class="btn btn-info">Hubungi Kami</a>
                </div>
            </form>
        </div>
    </div>

@endsection
