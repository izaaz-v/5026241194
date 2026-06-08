<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h2>Tambah Data Nilai</h2>

    <form action="{{ route('nilai.store') }}" method="POST">
        @csrf

        <label>NRP (6 Karakter):</label><br>
        <input type="text" name="NRP"><br><br>

        <label>Nilai Angka:</label><br>
        <input type="text" name="NilaiAngka"><br><br>

        <label>SKS:</label><br>
        <input type="text" name="SKS"><br><br>

        <button type="submit">Simpan</button>
    </form>
</body>
</html>
