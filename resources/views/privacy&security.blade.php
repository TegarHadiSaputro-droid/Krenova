<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Privasi & Keamanan - Trixie AI</title>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/settings.css') }}">
</head>
<body>

<div class="banner">
    <div class="banner-nav">
        <a href="javascript:history.back()" class="back-btn">← Kembali</a>
        <div style="width:80px"></div>
    </div>
    <div class="banner-body">
        <div class="banner-icon">🔒</div>
        <div class="banner-text">
            <div class="banner-heading">Privasi & Keamanan</div>
            <div class="banner-sub">Kelola keamanan dan data pribadimu</div>
        </div>
    </div>
</div>

<div class="grid">

    <!-- Kolom 1: Keamanan Akun -->
    <div class="col">
        <div class="section-label">🛡️ Keamanan Akun</div>
        <div class="card">
            <div class="row">
                <div class="row-left">
                    <div class="row-icon" style="background:#f0fdf4;">🔐</div>
                    <div>
                        <div class="row-label">Autentikasi Dua Faktor</div>
                        <div class="row-sub">Keamanan ekstra saat login</div>
                    </div>
                </div>
                <button class="toggle" onclick="toggleSwitch(this)"></button>
            </div>
            <div class="row" onclick="showToast('Membuka riwayat sesi...')">
                <div class="row-left">
                    <div class="row-icon" style="background:#eff6ff;">📱</div>
                    <div>
                        <div class="row-label">Sesi Aktif</div>
                        <div class="row-sub">2 perangkat login</div>
                    </div>
                </div>
                <span class="arrow">›</span>
            </div>
            <div class="row" onclick="showToast('Membuka riwayat login...')">
                <div class="row-left">
                    <div class="row-icon" style="background:#fff7ed;">🕐</div>
                    <div>
                        <div class="row-label">Riwayat Login</div>
                        <div class="row-sub">Lihat aktivitas masuk</div>
                    </div>
                </div>
                <span class="arrow">›</span>
            </div>
            <div class="row" onclick="showToast('Keluar dari semua perangkat...')">
                <div class="row-left">
                    <div class="row-icon" style="background:#fff1f2;">🚪</div>
                    <div>
                        <div class="row-label">Keluar Semua Perangkat</div>
                        <div class="row-sub">Akhiri semua sesi aktif</div>
                    </div>
                </div>
                <span class="arrow" style="color:#ef4444;">›</span>
            </div>
        </div>
    </div>

    <!-- Kolom 2: Privasi Data -->
    <div class="col">
        <div class="section-label">🗂️ Privasi Data</div>
        <div class="card">
            <div class="row">
                <div class="row-left">
                    <div class="row-icon" style="background:#f0fdf4;">💾</div>
                    <div>
                        <div class="row-label">Simpan Riwayat Chat</div>
                        <div class="row-sub">Riwayat disimpan di server</div>
                    </div>
                </div>
                <button class="toggle on" onclick="toggleSwitch(this)"></button>
            </div>
            <div class="row">
                <div class="row-left">
                    <div class="row-icon" style="background:#fdf4ff;">🧠</div>
                    <div>
                        <div class="row-label">Personalisasi AI</div>
                        <div class="row-sub">AI belajar dari percakapanmu</div>
                    </div>
                </div>
                <button class="toggle on" onclick="toggleSwitch(this)"></button>
            </div>
            <div class="row">
                <div class="row-left">
                    <div class="row-icon" style="background:#fef9c3;">📊</div>
                    <div>
                        <div class="row-label">Bagikan Data Anonim</div>
                        <div class="row-sub">Bantu kembangkan Trixie</div>
                    </div>
                </div>
                <button class="toggle" onclick="toggleSwitch(this)"></button>
            </div>
            <div class="row" onclick="showToast('Mengunduh data...')">
                <div class="row-left">
                    <div class="row-icon" style="background:#f0f9ff;">📥</div>
                    <div>
                        <div class="row-label">Unduh Data Saya</div>
                        <div class="row-sub">Ekspor semua datamu</div>
                    </div>
                </div>
                <span class="arrow">›</span>
            </div>
        </div>
    </div>

    <!-- Kolom 3: Izin Aplikasi -->
    <div class="col">
        <div class="section-label">📋 Izin Aplikasi</div>
        <div class="card">
            <div class="row">
                <div class="row-left">
                    <div class="row-icon" style="background:#f0fdf4;">🎤</div>
                    <div>
                        <div class="row-label">Akses Mikrofon</div>
                        <div class="row-sub">Untuk transkripsi suara</div>
                    </div>
                </div>
                <button class="toggle on" onclick="toggleSwitch(this)"></button>
            </div>
            <div class="row">
                <div class="row-left">
                    <div class="row-icon" style="background:#eff6ff;">📷</div>
                    <div>
                        <div class="row-label">Akses Kamera</div>
                        <div class="row-sub">Untuk mode isyarat visual</div>
                    </div>
                </div>
                <button class="toggle" onclick="toggleSwitch(this)"></button>
            </div>
            <div class="row">
                <div class="row-left">
                    <div class="row-icon" style="background:#fff7ed;">🔔</div>
                    <div>
                        <div class="row-label">Notifikasi Push</div>
                        <div class="row-sub">Izin kirim notifikasi</div>
                    </div>
                </div>
                <button class="toggle on" onclick="toggleSwitch(this)"></button>
            </div>
            <div class="row">
                <div class="row-left">
                    <div class="row-icon" style="background:#fdf4ff;">📁</div>
                    <div>
                        <div class="row-label">Akses Penyimpanan</div>
                        <div class="row-sub">Simpan & buka file lokal</div>
                    </div>
                </div>
                <button class="toggle on" onclick="toggleSwitch(this)"></button>
            </div>
        </div>
    </div>

</div>

<div class="toast" id="toast"></div>
<script>
    function toggleSwitch(btn) {
        btn.classList.toggle('on');
        showToast(btn.classList.contains('on') ? 'Diaktifkan' : 'Dinonaktifkan');
    }
    function showToast(msg) {
        const t = document.getElementById('toast');
        t.textContent = msg; t.classList.add('show');
        setTimeout(() => t.classList.remove('show'), 2200);
    }
</script>
</body>
</html>