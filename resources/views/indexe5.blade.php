<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Daftar Nilai Kuliah</title>
    <style>
        :root {
            --bg: #f8fafc;
            --surface: #ffffff;
            --primary: #2563eb;
            --primary-hover: #1d4ed8;
            --text: #111827;
            --muted: #6b7280;
            --border: #e5e7eb;
            --success: #10b981;
            --warning: #f59e0b;
            --danger: #ef4444;
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
            padding: 2rem 1rem 3rem;
            max-width: 1120px;
            margin: 0 auto;
        }

        .card {
            background: var(--surface);
            border: 1px solid rgba(15, 23, 42, 0.08);
            border-radius: 28px;
            padding: 2rem;
            box-shadow: 0 28px 80px rgba(15, 23, 42, 0.06);
        }

        .header {
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
        }

        .subtitle {
            margin: 0.5rem 0 0;
            color: var(--muted);
            line-height: 1.6;
        }

        .button {
            display: inline-flex;
            align-items: center;
            justify-content: center;
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

        .table-container {
            overflow-x: auto;
            border-radius: 20px;
            border: 1px solid var(--border);
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
            font-size: 0.92rem;
            text-transform: uppercase;
            letter-spacing: 0.08em;
            font-weight: 700;
        }

        tbody tr:hover {
            background: #f8f9ff;
        }

        .badge {
            display: inline-flex;
            align-items: center;
            padding: 0.4rem 0.85rem;
            border-radius: 999px;
            background: #eff6ff;
            color: var(--primary);
            font-size: 0.95rem;
            font-weight: 700;
        }

        .status {
            display: inline-flex;
            align-items: center;
            gap: 0.35rem;
            padding: 0.35rem 0.75rem;
            border-radius: 999px;
            font-size: 0.9rem;
            font-weight: 700;
        }

        .status.A { background: rgba(16, 185, 129, 0.12); color: var(--success); }
        .status.B { background: rgba(251, 191, 36, 0.12); color: var(--warning); }
        .status.C { background: rgba(248, 113, 113, 0.12); color: var(--danger); }
        .status.D { background: rgba(148, 163, 184, 0.12); color: var(--muted); }

        .empty-state {
            padding: 2rem 1rem;
            text-align: center;
            color: var(--muted);
        }

        .summary-row td {
            background: #f8f9ff;
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
    <div class="page">
        <section class="card">
            <div class="header">
                <div>
                    <h2>Daftar Nilai Kuliah</h2>
                    <p class="subtitle">Lihat nilai NRP, angka, SKS, dan huruf untuk setiap mahasiswa.</p>
                </div>
                <a href="{{ route('nilai.create') }}" class="button">Tambah Data</a>
            </div>

            <div class="table-container">
                <table>
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>NRP</th>
                            <th>Nilai Angka</th>
                            <th>SKS</th>
                            <th>Nilai Huruf</th>
                            <th>Bobot</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($nilaikuliah as $item)
                            @php
                                $huruf = 'D';
                                if ($item->NilaiAngka >= 81) $huruf = 'A';
                                elseif ($item->NilaiAngka >= 61) $huruf = 'B';
                                elseif ($item->NilaiAngka >= 41) $huruf = 'C';
                            @endphp
                            <tr>
                                <td><span class="badge">{{ $item->ID }}</span></td>
                                <td>{{ $item->NRP }}</td>
                                <td>{{ $item->NilaiAngka }}</td>
                                <td>{{ $item->SKS }}</td>
                                <td><span class="status {{ $huruf }}">{{ $huruf }}</span></td>
                                <td>{{ $item->NilaiAngka * $item->SKS }}</td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="6" class="empty-state">Belum ada data nilai. Tambahkan nilai baru untuk melihatnya di sini.</td>
                            </tr>
                        @endforelse
                    </tbody>
                    @if($nilaikuliah->count())
                        <tfoot>
                            <tr class="summary-row">
                                <td colspan="4">Total Bobot</td>
                                <td colspan="2">{{ $nilaikuliah->sum(fn($item) => $item->NilaiAngka * $item->SKS) }}</td>
                            </tr>
                        </tfoot>
                    @endif
                </table>
            </div>
        </section>
    </div>
</body>
</html>
