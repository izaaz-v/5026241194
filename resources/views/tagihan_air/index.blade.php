<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Kode Soal tagihan_air</title>
</head>
<body>
    <h2>Daftar Tagihan Air</h2>

    <a href="{{ route('tagihan_air.create') }}">
        <button type="button">Input Tagihan Baru</button>
    </a>
    <br><br>

    <table border="1" cellpadding="8" cellspacing="0">
        <tr>
            <th>ID</th>
            <th>No Meteren</th>
            <th>Penggunaan (m³)</th>
            <th>Total Tagihan</th>
        </tr>
        @forelse($tagihanAir as $item)
            @php
                $penggunaan = (int)$item->MeterAkhir - (int)$item->MeterAwal;
                $total = $penggunaan * 5000;
            @endphp
        <tr>
            <td>{{ $item->ID }}</td>
            <td>{{ $item->NoMeteren }}</td>
            <td style="text-align:right">{{ number_format($penggunaan,0,',','.') }}</td>
            <td style="text-align:right">Rp {{ number_format($total,0,',','.') }}</td>
        </tr>
        @empty
        <tr>
            <td colspan="4">Tidak ada data tagihan.</td>
        </tr>
        @endforelse
    </table>
</body>
