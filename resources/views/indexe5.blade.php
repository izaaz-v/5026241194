<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h2>Daftar Nilai Kuliah</h2>

    <a href="{{ route('nilai.create') }}">
        <button type="button">Tambah Data</button>
    </a>
    <br><br>

    <table border="1" cellpadding="8" cellspacing="0">
        <tr>
            <th>ID</th>
            <th>NRP</th>
            <th>Nilai Angka</th>
            <th>SKS</th>
            <th>Nilai Huruf</th>
            <th>Bobot</th>
        </tr>
        @foreach($nilaikuliah as $item)
            @php
                $huruf = 'D'; // Default fallback
                if($item->NilaiAngka >= 81) $huruf = 'A';
                elseif($item->NilaiAngka >= 61) $huruf = 'B';
                elseif($item->NilaiAngka >= 41) $huruf = 'C';
            @endphp
        <tr>
            <td>{{ $item->ID }}</td>
            <td>{{ $item->NRP }}</td>
            <td>{{ $item->NilaiAngka }}</td>
            <td>{{ $item->SKS }}</td>
            <td>{{ $huruf }}</td>
            <td>{{ $item->NilaiAngka * $item->SKS }}</td>
        </tr>
        @endforeach
    </table>
</body>
</html>
