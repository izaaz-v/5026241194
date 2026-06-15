<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Daftar Siswa</title>
</head>
<body>
    @include('partials.navbar')
    <h2>Daftar Siswa</h2>

    @if (session('success'))
        <p style="color: green;">{{ session('success') }}</p>
    @endif

    <a href="{{ route('siswa.create') }}">
        <button type="button">Tambah Siswa</button>
    </a>
    <br><br>

    <table border="1" cellpadding="8" cellspacing="0">
        <tr>
            <th>NRP</th>
            <th>Nama</th>
            <th>Kelas</th>
            <th>Tanggal Lahir</th>
            <th>Aksi</th>
        </tr>

        @foreach($siswa as $row)
        <tr>
            <td>{{ $row->NRP }}</td>
            <td>{{ $row->Nama }}</td>
            <td>{{ $row->Kelas }}</td>
            <td>{{ $row->TanggalLahir }}</td>
            <td>
                <a href="{{ route('siswa.edit', $row->NRP) }}">
                    <button type="button">Edit</button>
                </a>

                <form action="{{ route('siswa.destroy', $row->NRP) }}" method="POST" style="display:inline;" onsubmit="return confirm('Yakin ingin menghapus data ini?')">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Hapus</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
</body>
</html>
