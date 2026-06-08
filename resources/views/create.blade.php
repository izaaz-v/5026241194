<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tambah Barang | Keranjang Belanja</title>
    <style>
        :root {
            --bg: #eef2ff;
            --surface: #ffffff;
            --primary: #4f46e5;
            --primary-hover: #4338ca;
            --text: #111827;
            --muted: #6b7280;
            --border: #e5e7eb;
        }

        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            min-height: 100vh;
            font-family: Inter, system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI", sans-serif;
            background: radial-gradient(circle at top left, rgba(79, 70, 229, 0.16), transparent 28%),
                        linear-gradient(180deg, #f8fafc 0%, #eef2ff 100%);
            color: var(--text);
        }

        .page {
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 2rem;
        }

        .card {
            width: 100%;
            max-width: 540px;
            background: var(--surface);
            border: 1px solid rgba(15, 23, 42, 0.08);
            border-radius: 24px;
            box-shadow: 0 28px 80px rgba(15, 23, 42, 0.08);
            padding: 2rem;
        }

        h2 {
            margin: 0 0 0.5rem;
            font-size: 1.9rem;
            letter-spacing: -0.02em;
        }

        .note {
            margin: 0 0 1.75rem;
            color: var(--muted);
            line-height: 1.6;
        }

        .field {
            margin-bottom: 1.25rem;
        }

        .field label {
            display: block;
            margin-bottom: 0.5rem;
            font-weight: 600;
        }

        .field input {
            width: 100%;
            padding: 0.95rem 1rem;
            border-radius: 16px;
            border: 1px solid var(--border);
            background: #fafbff;
            font-size: 1rem;
            color: var(--text);
            transition: border-color 0.2s ease, box-shadow 0.2s ease;
        }

        .field input:focus {
            outline: none;
            border-color: rgba(79, 70, 229, 0.8);
            box-shadow: 0 0 0 4px rgba(79, 70, 229, 0.1);
            background: #ffffff;
        }

        .actions {
            display: flex;
            flex-wrap: wrap;
            gap: 0.75rem;
            margin-top: 1.5rem;
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
            text-decoration: none;
            font-weight: 700;
            cursor: pointer;
            transition: transform 0.2s ease, background-color 0.2s ease, box-shadow 0.2s ease;
        }

        .button {
            background: var(--primary);
            color: #ffffff;
            box-shadow: 0 16px 30px rgba(79, 70, 229, 0.22);
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
            background: #e0e7ff;
            transform: translateY(-1px);
        }
    </style>
</head>
<body>
    <div class="page">
        <section class="card">
            <h2>Tambah Barang ke Keranjang</h2>
            <p class="note">Isi detail barang yang akan dibeli, lalu tekan Simpan untuk menambahkan ke daftar belanja.</p>

            <form action="{{ route('keranjang.store') }}" method="POST">
                @csrf

                <div class="field">
                    <label for="KodeBarang">Kode Barang</label>
                    <input id="KodeBarang" type="text" name="KodeBarang" required>
                </div>

                <div class="field">
                    <label for="Jumlah">Jumlah Pembelian</label>
                    <input id="Jumlah" type="number" name="Jumlah" min="1" required>
                </div>

                <div class="field">
                    <label for="Harga">Harga per Item</label>
                    <input id="Harga" type="number" name="Harga" min="0" step="100" required>
                </div>

                <div class="actions">
                    <button type="submit" class="button">Simpan</button>
                    <a href="{{ route('keranjang.index') }}" class="button-secondary">Kembali</a>
                </div>
            </form>
        </section>
    </div>
</body>
</html>
