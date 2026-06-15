<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Kode Soal tagihan_air</title>
</head>
<body>
    <div class="page">
        <section class="card">
            <h2>Tambah Tagihan Air</h2>
            <p class="subtitle">Masukkan data No Meteren, Meter Awal, dan Meter Akhir untuk menyimpan tagihan baru.</p>

            <style>
                .form-row { display: flex; align-items: center; gap: 12px; margin-bottom: 12px; }
                .form-row label { width: 140px; font-weight: 600; }
                .form-row input[type="text"] { flex: 1; padding: 8px; }
                .readonly { background:#f5f5f5; }
                .error { color: #b00020; font-size: 0.9rem; }
                .actions { margin-top: 18px; }
            </style>

            <form id="tagihanForm" action="{{ route('tagihan_air.store') }}" method="POST">
                @csrf

                <div class="form-row">
                    <label for="NoMeteren">No Meteren</label>
                    <input id="NoMeteren" type="text" name="NoMeteren" required>
                </div>

                <div class="form-row">
                    <label for="MeterAwal">Meter Awal</label>
                    <input id="MeterAwal" type="text" name="MeterAwal" required>
                </div>

                <div class="form-row">
                    <label for="MeterAkhir">Meter Akhir</label>
                    <input id="MeterAkhir" type="text" name="MeterAkhir" required>
                </div>

                <div class="form-row">
                    <label for="Penggunaan">Penggunaan</label>
                    <input id="Penggunaan" type="text" class="readonly" readonly>
                </div>

                <div class="form-row">
                    <label for="Total">Total Tagihan</label>
                    <input id="Total" type="text" class="readonly" readonly>
                </div>

                <div id="errorBox" class="error" role="alert" aria-live="polite"></div>

                <div class="actions">
                    <button type="submit" class="button">Simpan</button>
                    <a href="{{ route('tagihan_air.index') }}" class="button-secondary">Kembali</a>
                </div>
            </form>

            <script>
                (function(){
                    const meterAwal = document.getElementById('MeterAwal');
                    const meterAkhir = document.getElementById('MeterAkhir');
                    const penggunaan = document.getElementById('Penggunaan');
                    const total = document.getElementById('Total');
                    const form = document.getElementById('tagihanForm');
                    const errorBox = document.getElementById('errorBox');

                    function parseNumber(v){
                        if(!v) return NaN;
                        // remove non digits
                        const cleaned = v.replace(/[^0-9.-]/g,'');
                        return cleaned === '' ? NaN : Number(cleaned);
                    }

                    function formatRibuan(n){
                        if(!isFinite(n)) return '';
                        return n.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ".");
                    }

                    function recalc(){
                        errorBox.textContent = '';
                        const a = parseNumber(meterAwal.value);
                        const b = parseNumber(meterAkhir.value);
                        if(isNaN(a) || isNaN(b)){
                            penggunaan.value = '';
                            total.value = '';
                            return;
                        }
                        const p = b - a;
                        penggunaan.value = formatRibuan(p);
                        total.value = formatRibuan(p * 5000);
                    }

                    meterAwal.addEventListener('input', recalc);
                    meterAkhir.addEventListener('input', recalc);

                    form.addEventListener('submit', function(e){
                        errorBox.textContent = '';
                        const a = parseNumber(meterAwal.value);
                        const b = parseNumber(meterAkhir.value);
                        if(isNaN(a) || isNaN(b)){
                            e.preventDefault();
                            errorBox.textContent = 'Meter Awal dan Meter Akhir harus berupa angka.';
                            return false;
                        }
                        if(!(b > (a + 20))){
                            e.preventDefault();
                            errorBox.textContent = 'Validasi gagal: Meter Akhir harus lebih besar dari Meter Awal + 20.';
                            return false;
                        }
                        // Allow submit - server will redirect to index
                    });
                })();
            </script>
        </section>
    </div>
</body>
    @include('partials.navbar')
</html>
