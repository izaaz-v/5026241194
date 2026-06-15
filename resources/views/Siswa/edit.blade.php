<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Data Siswa</title>
</head>
<body>
    @include('partials.navbar')
    <h2>Edit Data Siswa</h2>

    @if ($errors->any())
        <ul style="color: red;">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    <form action="{{ route('siswa.update', $siswa->NRP) }}" method="POST" onsubmit="return validasiForm()">
        @csrf
        @method('PUT')

        <label>NRP (Max 10 karakter):</label><br>
        <input type="text" name="NRP" id="NRP" maxlength="10" value="{{ old('NRP', $siswa->NRP) }}" required><br><br>

        <label>Nama (Max 20 karakter):</label><br>
        <input type="text" name="Nama" id="Nama" maxlength="20" value="{{ old('Nama', $siswa->Nama) }}" required><br><br>

        <label>Kelas (Max 5 karakter):</label><br>
        <input type="text" name="Kelas" id="Kelas" maxlength="5" value="{{ old('Kelas', $siswa->Kelas) }}" required><br><br>

        <label>Tanggal Lahir:</label><br>
        <input type="date" name="TanggalLahir" id="TanggalLahir" value="{{ old('TanggalLahir', $siswa->TanggalLahir) }}" required><br><br>

        <button type="submit">Update</button>
        <a href="{{ route('siswa.index') }}">Kembali</a>
    </form>

    <script>
        function validasiForm() {
            let nrp = document.getElementById('NRP').value.trim();
            let nama = document.getElementById('Nama').value.trim();
            let kelas = document.getElementById('Kelas').value.trim();
            let tanggal = document.getElementById('TanggalLahir').value;

            if (nrp === '') {
                alert('NRP wajib diisi');
                return false;
            }

            if (nrp.length > 10) {
                alert('NRP maksimal 10 karakter');
                return false;
            }

            if (nama === '') {
                alert('Nama wajib diisi');
                return false;
            }

            if (nama.length > 20) {
                alert('Nama maksimal 20 karakter');
                return false;
            }

            if (kelas === '') {
                alert('Kelas wajib diisi');
                return false;
            }

            if (kelas.length > 5) {
                alert('Kelas maksimal 5 karakter');
                return false;
            }

            if (tanggal === '') {
                alert('Tanggal lahir wajib diisi');
                return false;
            }

            return true;
        }
    </script>
</body>
</html>
