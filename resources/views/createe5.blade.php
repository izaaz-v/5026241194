<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tambah Nilai | Nilai Kuliah</title>
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
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 2.5rem 1rem;
        }

        .card {
            width: 100%;
            max-width: 580px;
            background: var(--surface);
            border: 1px solid rgba(15, 23, 42, 0.08);
            border-radius: 28px;
            box-shadow: 0 28px 80px rgba(15, 23, 42, 0.08);
            padding: 2rem;
        }

        h2 {
            margin: 0 0 0.5rem;
            font-size: 2rem;
        }

        .subtitle {
            margin: 0 0 1.8rem;
            color: var(--muted);
            line-height: 1.7;
        }

        .field {
            margin-bottom: 1.3rem;
        }

        .field label {
            display: block;
            margin-bottom: 0.5rem;
            font-weight: 700;
        }

        .field input {
            width: 100%;
            padding: 0.95rem 1rem;
            border-radius: 16px;
            border: 1px solid var(--border);
            background: #f9fafb;
            font-size: 1rem;
            color: var(--text);
            transition: border-color 0.2s ease, box-shadow 0.2s ease;
        }

        .field input:focus {
            outline: none;
            border-color: rgba(37, 99, 235, 0.8);
            box-shadow: 0 0 0 4px rgba(59, 130, 246, 0.14);
            background: #ffffff;
        }

        .actions {
            display: flex;
            flex-wrap: wrap;
            gap: 0.85rem;
            margin-top: 1.75rem;
        }

        .button,
        .button-secondary {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            min-width: 140px;
            padding: 0.95rem 1.4rem;
            border-radius: 14px;
            border: none;
            font-weight: 700;
            cursor: pointer;
            transition: background-color 0.2s ease, transform 0.2s ease;
            text-decoration: none;
        }

        .button {
            background: var(--primary);
            color: #ffffff;
        }

        .button:hover {
            background: var(--primary-hover);
            transform: translateY(-1px);
        }

        .button-secondary {
            background: #eef2ff;
            color: var(--primary);
        }

        .button-secondary:hover {
            background: #dbeafe;
            transform: translateY(-1px);
        }
    </style>
</head>
<body>
    <div class="page">
        <section class="card">
            <h2>Tambah Nilai Kuliah</h2>
            <p class="subtitle">Masukkan data NRP, nilai angka, dan SKS untuk menyimpan nilai baru.</p>

            <form action="{{ route('nilai.store') }}" method="POST">
                @csrf

                <div class="field">
                    <label for="NRP">NRP (6 Karakter)</label>
                    <input id="NRP" type="text" name="NRP" maxlength="6" pattern="\d{6}" placeholder="Contoh: 123456" required>
                </div>

                <div class="field">
                    <label for="NilaiAngka">Nilai Angka</label>
                    <input id="NilaiAngka" type="number" name="NilaiAngka" min="0" max="100" placeholder="0 - 100" required>
                </div>

                <div class="field">
                    <label for="SKS">SKS</label>
                    <input id="SKS" type="number" name="SKS" min="1" max="24" placeholder="Jumlah SKS" required>
                </div>

                <div class="actions">
                    <button type="submit" class="button">Simpan</button>
                    <a href="{{ route('nilai.index') }}" class="button-secondary">Kembali</a>
                </div>
            </form>
        </section>
    </div>
</body>
</html>
