<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h2>Daftar Inventory Topi</h2>

    <a href="{{ route('topi.create') }}">
        <button type="button">Tambah Data Topi</button>
    </a>
    <br><br>

    <table border="1" cellpadding="8" cellspacing="0">
        <tr>
            <th>Kode Topi</th>
            <th>Merk Topi</th>
            <th>Stock</th>
            <th>Tersedia</th>
            <th>Action</th>
        </tr>
        @foreach($topi as $t)
        <tr>
            <td>{{ $t->kodetopi }}</td>
            <td>{{ $t->merktopi }}</td>
            <td>{{ $t->stocktopi }}</td>
            <td>{{ $t->tersedia }}</td>
            <td>
                <form action="{{ route('topi.destroy', $t->kodetopi) }}" method="POST">
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
