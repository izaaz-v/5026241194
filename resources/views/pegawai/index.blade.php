@extends('master')

@section('title', 'Data Pegawai')
@section('judul_halaman', 'Data Pegawai')

@section('konten')

<div class="mt-4">
    <div class="bg-primary text-white rounded shadow-sm p-4 mb-4">
        <div class="d-flex flex-column flex-md-row justify-content-between align-items-start">
            <div>
                <h1 class="h3 font-weight-bold mb-1">5026241194 Izaaz Verdiansyah Khaisan Athif</h1>
                <p class="mb-0">Data Pegawai</p>
            </div>
            <div class="mt-3 mt-md-0">
                <a href="{{ route('pegawai.create') }}" class="btn btn-light btn-lg">+ Tambah Pegawai Baru</a>
            </div>
        </div>
    </div>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <div class="mb-3">
        <a href="{{ route('pegawai.create') }}" class="btn btn-primary">Tambah Pegawai</a>
    </div>

    <form action="{{ route('pegawai.index') }}" method="GET" class="form-inline mb-3">
        <input type="text" name="cari" class="form-control mr-2" placeholder="Cari Pegawai .." value="{{ old('cari', $search ?? '') }}">
        <button class="btn btn-secondary" type="submit">CARI</button>
    </form>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Nama</th>
                <th>Jabatan</th>
                <th>Umur</th>
                <th>Alamat</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($pegawai as $p)
            <tr>
                <td>{{ $p->pegawai_nama }}</td>
                <td>{{ $p->pegawai_jabatan }}</td>
                <td>{{ $p->pegawai_umur }}</td>
                <td>{{ $p->pegawai_alamat }}</td>
                <td>
                    <a href="{{ route('pegawai.edit', $p->pegawai_nama) }}" class="btn btn-sm btn-warning">Edit</a>
                    <form action="{{ route('pegawai.destroy', $p->pegawai_nama) }}" method="POST" style="display:inline" onsubmit="return confirm('Hapus data?')">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-sm btn-danger">Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

    Halaman : {{ $pegawai->currentPage() }} <br/>
    Jumlah Data : {{ $pegawai->total() }} <br/>
    Data Per Halaman : {{ $pegawai->perPage() }} <br/>

    {{ $pegawai->links() }}
</div>

@endsection
