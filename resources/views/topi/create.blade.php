<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    @include('partials.navbar')
    <h2>Tambah Data Topi</h2>

    <form action="{{ route('topi.store') }}" method="POST">
        @csrf

        <label>Merk Topi (Max 30 Karakter):</label><br>
        <input type="text" name="merktopi" maxlength="30" required><br><br>

        <label>Stock Topi:</label><br>
        <input type="number" name="stocktopi" required><br><br>

        <label>Status Tersedia:</label><br>
        <select name="tersedia" required>
            <option value="Y">Y - Tersedia</option>
            <option value="N">N - Kosong</option>
        </select><br><br>

        <button type="submit">Simpan Data</button>
    </form>
</body>
</html>
