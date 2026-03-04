<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Pengaturan</title>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/settings.css') }}">
</head>
<body>

<!-- Banner -->
<div class="banner">
    <div class="circle circle-1"></div>
    <div class="circle circle-2"></div>
    <div class="circle circle-3"></div>
    <div class="circle circle-4"></div>

    <div class="banner-nav">
        <a href="javascript:history.back()" class="back-btn">← Kembali</a>
        <div style="width:80px"></div>
    </div>

    <div class="banner-body">
        <div class="banner-icon">⚙️</div>
        <div class="banner-text">
            <div class="banner-heading">Pengaturan</div>
            <div class="banner-sub">Sesuaikan tampilan dan preferensi aksesibilitas</div>
        </div>
    </div>
</div>

<!-- Baris 1: 3 Kolom -->
<div class="grid">

    <!-- Kolom 1: Tampilan -->
    <div class="col">
        <div class="section-label">🎨 Tampilan</div>
        <div class="card">
            <div class="row">
                <div class="row-left">
                    <div class="row-icon" style="background:#fef9c3;">🌙</div>
                    <div>
                        <div class="row-label">Mode Gelap</div>
                        <div class="row-sub">Kurangi silau layar</div>
                    </div>
                </div>
                <button class="toggle" onclick="toggleSwitch(this)"></button>
            </div>
            <div class="row">
                <div class="row-left">
                    <div class="row-icon" style="background:#f0f4ff;">🔆</div>
                    <div>
                        <div class="row-label">Kontras Tinggi</div>
                        <div class="row-sub">Tingkatkan keterbacaan teks</div>
                    </div>
                </div>
                <button class="toggle" onclick="toggleSwitch(this)"></button>
            </div>
            <div class="row" onclick="openSheet('fontsize')">
                <div class="row-left">
                    <div class="row-icon" style="background:#f0fdf4;">🔤</div>
                    <div>
                        <div class="row-label">Ukuran Teks</div>
                        <div class="row-sub" id="fontVal">Normal</div>
                    </div>
                </div>
                <span class="arrow">›</span>
            </div>
            <div class="row" onclick="openSheet('theme')">
                <div class="row-left">
                    <div class="row-icon" style="background:#fdf4ff;">🎨</div>
                    <div>
                        <div class="row-label">Tema Warna</div>
                        <div class="row-sub" id="themeVal">Biru default</div>
                    </div>
                </div>
                <span class="arrow">›</span>
            </div>
        </div>
    </div>

    <!-- Kolom 2: Aksesibilitas -->
    <div class="col">
        <div class="section-label">♿ Aksesibilitas</div>
        <div class="card">
            <div class="row">
                <div class="row-left">
                    <div class="row-icon" style="background:#eff6ff;">👁️</div>
                    <div>
                        <div class="row-label">Pembaca Layar</div>
                        <div class="row-sub">Dukungan tunanetra</div>
                    </div>
                </div>
                <button class="toggle on" onclick="toggleSwitch(this)"></button>
            </div>
            <div class="row">
                <div class="row-left">
                    <div class="row-icon" style="background:#f0fdf4;">🔊</div>
                    <div>
                        <div class="row-label">Teks ke Suara</div>
                        <div class="row-sub">Bacakan respons AI</div>
                    </div>
                </div>
                <button class="toggle on" onclick="toggleSwitch(this)"></button>
            </div>
            <div class="row">
                <div class="row-left">
                    <div class="row-icon" style="background:#fdf4ff;">🖱️</div>
                    <div>
                        <div class="row-label">Kursor Diperbesar</div>
                        <div class="row-sub">Ukuran kursor lebih besar</div>
                    </div>
                </div>
                <button class="toggle" onclick="toggleSwitch(this)"></button>
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

    <!-- Kolom 3: Komunikasi & AI -->
    <div class="col">
        <div class="section-label">🤖 Komunikasi & AI</div>
        <div class="card">
            <div class="row">
                <div class="row-left">
                    <div class="row-icon" style="background:#fff7ed;">🤟</div>
                    <div>
                        <div class="row-label">Mode Isyarat</div>
                        <div class="row-sub">Dukungan BISINDO/SIBI</div>
                    </div>
                </div>
                <button class="toggle" onclick="toggleSwitch(this)"></button>
            </div>
            <div class="row">
                <div class="row-left">
                    <div class="row-icon" style="background:#f0f9ff;">📝</div>
                    <div>
                        <div class="row-label">Transkripsi Otomatis</div>
                        <div class="row-sub">Suara ke teks real-time</div>
                    </div>
                </div>
                <button class="toggle on" onclick="toggleSwitch(this)"></button>
            </div>
            <div class="row" onclick="openSheet('ailang')">
                <div class="row-left">
                    <div class="row-icon" style="background:#fdf4ff;">💬</div>
                    <div>
                        <div class="row-label">Bahasa Respons AI</div>
                        <div class="row-sub" id="ailangVal">Bahasa Indonesia</div>
                    </div>
                </div>
                <span class="arrow">›</span>
            </div>
            <div class="row" onclick="openSheet('aimodel')">
                <div class="row-left">
                    <div class="row-icon" style="background:#eff6ff;">🧠</div>
                    <div>
                        <div class="row-label">Model AI</div>
                        <div class="row-sub" id="modelVal">Trixie Standard</div>
                    </div>
                </div>
                <span class="arrow">›</span>
            </div>
        </div>
    </div>

</div>

<!-- Baris 2: Info Akun + Data -->
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
            <div class="row" onclick="openSheet('autodownload')">
                <div class="row-left">
                    <div class="row-icon" style="background:#f0f9ff;">📥</div>
                    <div>
                        <div class="row-label">Unduh Otomatis</div>
                        <div class="row-sub" id="downloadVal">Wi-Fi saja</div>
                    </div>
                </div>
                <span class="arrow">›</span>
            </div>
            <div class="row">
                <div class="row-left">
                    <div class="row-icon" style="background:#f0f4ff;">📊</div>
                    <div>
                        <div class="row-label">Kirim Analitik</div>
                        <div class="row-sub">Bantu tingkatkan aplikasi</div>
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
                <span class="account-badge">✅ Akun Aktif</span>
            </div>
            <a href="/profile" class="btn-edit">Edit Profil →</a>
        </div>
    </div>
</div>

<!-- Bottom Sheet -->
<div class="bottom-sheet-overlay" id="sheetOverlay" onclick="closeSheet()">
    <div class="bottom-sheet" onclick="event.stopPropagation()">
        <div class="sheet-title" id="sheetTitle"></div>
        <div id="sheetOptions"></div>
    </div>
</div>

<div class="toast" id="toast"></div>

<script>
    function toggleSwitch(btn) {
        btn.classList.toggle('on');
        showToast(btn.classList.contains('on') ? 'Diaktifkan' : 'Dinonaktifkan');
    }

    const sheets = {
        theme:        { title: 'Tema Warna', options: ['Biru default', 'Hijau', 'Ungu', 'Merah', 'Oranye'], target: 'themeVal' },
        fontsize:     { title: 'Ukuran Teks', options: ['Kecil', 'Normal', 'Besar', 'Sangat Besar'], target: 'fontVal' },
        aimodel:      { title: 'Pilih Model AI', options: ['Trixie Standard', 'Trixie Pro', 'Trixie Vision'], target: 'modelVal' },
        ailang:       { title: 'Bahasa Respons AI', options: ['Bahasa Indonesia', 'English', 'Auto'], target: 'ailangVal' },
        autodownload: { title: 'Unduh Otomatis', options: ['Selalu', 'Wi-Fi saja', 'Tidak pernah'], target: 'downloadVal' }
    };

    let currentSheet = null;

    function openSheet(key) {
        currentSheet = key;
        const sheet = sheets[key];
        const current = document.getElementById(sheet.target).textContent;
        document.getElementById('sheetTitle').textContent = sheet.title;
        document.getElementById('sheetOptions').innerHTML = sheet.options.map(opt => `
            <div class="sheet-option ${opt === current ? 'selected' : ''}" onclick="selectOption('${opt}')">
                ${opt} ${opt === current ? '<span class="check">✓</span>' : ''}
            </div>
        `).join('');
        document.getElementById('sheetOverlay').classList.add('open');
    }

    function selectOption(val) {
        document.getElementById(sheets[currentSheet].target).textContent = val;
        closeSheet();
        showToast('Tersimpan: ' + val);
    }

    function closeSheet() {
        document.getElementById('sheetOverlay').classList.remove('open');
    }

    function clearCache() {
        showToast('Cache berhasil dihapus ✓');
    }

    function showToast(msg) {
        const t = document.getElementById('toast');
        t.textContent = msg;
        t.classList.add('show');
        setTimeout(() => t.classList.remove('show'), 2200);
    }
</script>
</body>
</html>