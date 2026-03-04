<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pengaturan - TUNA</title>
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
        <div class="banner-icon">⚙️</div>
        <div class="banner-text">
            <div class="banner-heading">Pengaturan</div>
            <div class="banner-sub">Sesuaikan aksesibilitas dan preferensi TUNA kamu</div>
        </div>
    </div>
</div>

<!-- Baris Atas: 2 kolom -->
<div class="grid" style="grid-template-columns: repeat(2,1fr);">

    <!-- Kolom Kiri: Tampilan + Komunikasi & AI -->
    <div class="col">
        <div class="section-label">🎨 Tampilan</div>
        <div class="card">
            <div class="row">
                <div class="row-left">
                    <div class="row-icon" style="background:#fef9c3;">🌙</div>
                    <div>
                        <div class="row-label">Mode Gelap</div>
                        <div class="row-sub">Kurangi silau, nyaman di mata</div>
                    </div>
                </div>
                <button class="toggle" onclick="toggleSwitch(this)"></button>
            </div>
            <div class="row">
                <div class="row-left">
                    <div class="row-icon" style="background:#f0f4ff;">🔆</div>
                    <div>
                        <div class="row-label">Kontras Tinggi</div>
                        <div class="row-sub">Bantu tunanetra baca layar</div>
                    </div>
                </div>
                <button class="toggle" onclick="toggleSwitch(this)"></button>
            </div>
        </div>

        <div class="section-label">🤖 Komunikasi & AI</div>
        <div class="card">
            <div class="row">
                <div class="row-left">
                    <div class="row-icon" style="background:#fff7ed;">🤟</div>
                    <div>
                        <div class="row-label">Isyarat ke Teks</div>
                        <div class="row-sub">BISINDO/SIBI via kamera</div>
                    </div>
                </div>
                <button class="toggle" onclick="toggleSwitch(this)"></button>
            </div>
            <div class="row">
                <div class="row-left">
                    <div class="row-icon" style="background:#f0f9ff;">📝</div>
                    <div>
                        <div class="row-label">Subtitle Real-time</div>
                        <div class="row-sub">Transkripsi suara untuk tunarungu</div>
                    </div>
                </div>
                <button class="toggle on" onclick="toggleSwitch(this)"></button>
            </div>
        </div>
    </div>

    <!-- Kolom Kanan: Aksesibilitas -->
    <div class="col col-fill">
        <div class="section-label">♿ Aksesibilitas</div>
        <div class="card">
            <div class="row">
                <div class="row-left">
                    <div class="row-icon" style="background:#eff6ff;">👁️</div>
                    <div>
                        <div class="row-label">Pembaca Layar</div>
                        <div class="row-sub">Dukungan tunanetra (NVDA/JAWS)</div>
                    </div>
                </div>
                <button class="toggle on" onclick="toggleSwitch(this)"></button>
            </div>
            <div class="row">
                <div class="row-left">
                    <div class="row-icon" style="background:#f0fdf4;">🔊</div>
                    <div>
                        <div class="row-label">Text-to-Speech</div>
                        <div class="row-sub">Bacakan teks secara otomatis</div>
                    </div>
                </div>
                <button class="toggle on" onclick="toggleSwitch(this)"></button>
            </div>
            <div class="row">
                <div class="row-left">
                    <div class="row-icon" style="background:#fff7ed;">🎤</div>
                    <div>
                        <div class="row-label">Speech-to-Text</div>
                        <div class="row-sub">Ucapkan pesan, otomatis jadi teks</div>
                    </div>
                </div>
                <button class="toggle on" onclick="toggleSwitch(this)"></button>
            </div>
            <div class="row">
                <div class="row-left">
                    <div class="row-icon" style="background:#fef9c3;">🎬</div>
                    <div>
                        <div class="row-label">Kurangi Animasi</div>
                        <div class="row-sub">Untuk pengguna sensitif gerak</div>
                    </div>
                </div>
                <button class="toggle" onclick="toggleSwitch(this)"></button>
            </div>
        </div>
    </div>

</div>

<!-- Baris Bawah -->
<div class="grid grid-bottom">
    <div class="col col-wide">
        <div class="section-label">📦 Data & Penyimpanan</div>
        <div class="card">
            <div class="row" onclick="clearCache()">
                <div class="row-left">
                    <div class="row-icon" style="background:#fff1f2;">🗑️</div>
                    <div>
                        <div class="row-label">Hapus Cache</div>
                        <div class="row-sub">24.3 MB tersimpan</div>
                    </div>
                </div>
                <span class="arrow">›</span>
            </div>
            <div class="row">
                <div class="row-left">
                    <div class="row-icon" style="background:#f0f4ff;">📊</div>
                    <div>
                        <div class="row-label">Kirim Analitik</div>
                        <div class="row-sub">Bantu kembangkan TUNA</div>
                    </div>
                </div>
                <button class="toggle on" onclick="toggleSwitch(this)"></button>
            </div>
        </div>
    </div>
    <div class="col col-wide">
        <div class="section-label">👤 Info Akun</div>
        <div class="card card-account">
            <div class="account-avatar">R</div>
            <div class="account-info">
                <div class="account-name">Revan Putra</div>
                <div class="account-email">revan@email.com</div>
                <span class="account-badge">🟢Gratis</span>
            </div>
            <a href="/profile" class="btn-edit">Edit Profil →</a>
        </div>
    </div>
</div>

<div class="toast" id="toast"></div>

<script>
    function toggleSwitch(btn) {
        btn.classList.toggle('on');
        showToast(btn.classList.contains('on') ? 'Diaktifkan' : 'Dinonaktifkan');
    }
    function clearCache() { showToast('Cache berhasil dihapus ✓'); }
    function showToast(msg) {
        const t = document.getElementById('toast');
        t.textContent = msg; t.classList.add('show');
        setTimeout(() => t.classList.remove('show'), 2200);
    }
</script>
</body>
</html>