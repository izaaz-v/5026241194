<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Keranjang Belanja</title>
    <style>
        :root {
            --bg: #f8fafc;
            --surface: #ffffff;
            --primary: #4f46e5;
            --primary-hover: #4338ca;
            --text: #111827;
            --muted: #6b7280;
            --border: #e5e7eb;
            --danger: #dc2626;
            --danger-hover: #b91c1c;
        }

        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            min-height: 100vh;
            font-family: Inter, system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI", sans-serif;
            background: linear-gradient(180deg, #f8fafc 0%, #eef2ff 100%);
            color: var(--text);
        }

        .page {
            padding: 2rem;
            max-width: 1080px;
            margin: 0 auto;
        }

        .card {
            background: var(--surface);
            border: 1px solid rgba(15, 23, 42, 0.08);
            border-radius: 28px;
            padding: 2rem;
            box-shadow: 0 28px 80px rgba(15, 23, 42, 0.06);
        }

        .top-row {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            gap: 1rem;
            align-items: center;
            margin-bottom: 1.75rem;
        }

        h2 {
            margin: 0;
            font-size: 2rem;
            letter-spacing: -0.03em;
        }

        .note {
            margin: 0.5rem 0 0;
            color: var(--muted);
            line-height: 1.6;
        }

        .button {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 0.35rem;
            padding: 0.95rem 1.5rem;
            border-radius: 14px;
            border: none;
            background: var(--primary);
            color: #ffffff;
            font-weight: 700;
            text-decoration: none;
            cursor: pointer;
            transition: background-color 0.2s ease, transform 0.2s ease;
        }

        .button:hover {
            background: var(--primary-hover);
            transform: translateY(-1px);
        }

        .table-wrap {
            overflow-x: auto;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            min-width: 720px;
        }

        th,
        td {
            padding: 1rem 1.1rem;
            text-align: left;
            border-bottom: 1px solid var(--border);
            vertical-align: middle;
        }

        th {
            color: var(--muted);
            font-size: 0.95rem;
            text-transform: uppercase;
            letter-spacing: 0.08em;
            font-weight: 700;
        }

        tr:last-child td {
            border-bottom: none;
        }

        tbody tr:hover {
            background: #f8f9ff;
        }

        .badge {
            display: inline-flex;
            align-items: center;
            padding: 0.45rem 0.85rem;
            border-radius: 999px;
            background: #eef2ff;
            color: var(--primary);
            font-size: 0.95rem;
            font-weight: 700;
        }

        .action-form {
            margin: 0;
        }

        .action-button {
            padding: 0.65rem 1rem;
            border-radius: 12px;
            border: 1px solid transparent;
            background: var(--danger);
            color: #ffffff;
            font-weight: 700;
            cursor: pointer;
            transition: background-color 0.2s ease, transform 0.2s ease;
        }

        .action-button:hover {
            background: var(--danger-hover);
            transform: translateY(-1px);
        }

        .summary-row td {
            background: #fbfbff;
            font-weight: 700;
        }

        .summary-row td:first-child {
            border-top-left-radius: 16px;
        }

        .summary-row td:last-child {
            border-top-right-radius: 16px;
        }
    </style>
</head>
<body>
    @include('partials.navbar')
    <div class="page">
        <section class="card">
            <div class="top-row">
                <div>
                    <h2>Keranjang Belanja</h2>
                    <p class="note">Lihat dan kelola barang yang sudah ditambahkan ke keranjang.</p>
                </div>
                <a href="{{ route('keranjang.create') }}" class="button">Tambah Barang</a>
            </div>

            <div class="table-wrap">
                <table>
                    <thead>
                        <tr>
                            <th>Kode Pembelian</th>
                            <th>Kode Barang</th>
                            <th>Jumlah</th>
                            <th>Harga per Item</th>
                            <th>Total</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($keranjang as $item)
                        <tr>
                            <td><span class="badge">{{ $item->ID }}</span></td>
                            <td>{{ $item->KodeBarang }}</td>
                            <td>{{ $item->Jumlah }}</td>
                            <td>Rp {{ number_format($item->Harga, 0, ',', '.') }}</td>
                            <td>Rp {{ number_format($item->Jumlah * $item->Harga, 0, ',', '.') }}</td>
                            <td>
                                <form class="action-form" action="{{ route('keranjang.destroy', $item->ID) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="action-button">Batal</button>
                                </form>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="6" style="padding: 2rem 1rem; text-align: center; color: var(--muted);">
                                Keranjang masih kosong. Tambahkan barang untuk melanjutkan.
                            </td>
                        </tr>
                        @endforelse
                    </tbody>
                    @if($keranjang->count())
                    <tfoot>
                        <tr class="summary-row">
                            <td colspan="4">Total Semua</td>
                            <td colspan="2">
                                Rp {{ number_format($keranjang->sum(fn($item) => $item->Jumlah * $item->Harga), 0, ',', '.') }}
                            </td>
                        </tr>
                    </tfoot>
                    @endif
                </table>
            </div>
        </section>
    </div>
</body>
</html>
