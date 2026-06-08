<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h2>Keranjang Belanja</h2>

    <a href="{{ route('keranjang.create') }}">
        <button type="button">Beli</button>
    </a>
    <br><br>

    <table border="1">
        <tr>
            <th>Kode Pembelian</th>
            <th>Kode Barang</th>
            <th>Jumlah Pembelian</th>
            <th>Harga per item</th>
            <th>Total</th>
            <th>Action</th>
        </tr>
        @foreach($keranjang as $item)
        <tr>
            <td>{{ $item->ID }}</td>
            <td>{{ $item->KodeBarang }}</td>
            <td>{{ $item->Jumlah }}</td>
            <td>{{ number_format($item->Harga, 0, ',', '.') }}</td>
            <td>{{ number_format($item->Jumlah * $item->Harga, 0, ',', '.') }}</td>
            <td>
                <form action="{{ route('keranjang.destroy', $item->ID) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Batal</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
</body>
</html>
