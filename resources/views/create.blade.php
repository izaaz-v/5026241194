<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h2>Tambah Data (Beli)</h2>

    <form action="{{ route('keranjang.store') }}" method="POST">
        @csrf

        <label>Kode Barang:</label><br>
        <input type="text" name="KodeBarang"><br><br>

        <label>Jumlah Pembelian:</label><br>
        <input type="text" name="Jumlah"><br><br>

        <label>Harga per Item:</label><br>
        <input type="text" name="Harga"><br><br>

        <button type="submit">Simpan</button>
    </form>
</body>
</html>
