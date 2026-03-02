<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Pengaturan - Trixie AI</title>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/account.css') }}">
</head>
<body>

<div class="banner">
    <div class="banner-nav">
        <a href="javascript:history.back()" class="back-btn">← Kembali</a>
        <span class="banner-title">Pengaturan</span>
        <div style="width:80px"></div>
    </div>
</div>

<div class="content">

    <div class="section-label">Tampilan</div>
    <div class="card">
        <div class="row">
            <div class="row-left">
                <div class="row-icon" style="background:#fef9c3;">🌙</div>
                <div>
                    <div class="row-label">Mode Gelap</div>
                    <div class="row-sub">Aktifkan tema gelap</div>
                </div>
            </div>
            <button class="toggle" id="toggleDark" onclick="toggleSwitch(this)"></button>
        </div>
        <div class="row" onclick="openSheet('language')">
            <div class="row-left">
                <div class="row-icon" style="background:#eff6ff;">🌐</div>
                <div>
                    <div class="row-label">Bahasa</div>
                    <div class="row-sub" id="langVal">Indonesia</div>
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
    </div>

    <div class="section-label">Notifikasi</div>
    <div class="card">
        <div class="row">
            <div class="row-left">
                <div class="row-icon" style="background:#fff7ed;">🔔</div>
                <div>
                    <div class="row-label">Push Notification</div>
                    <div class="row-sub">Terima notifikasi push</div>
                </div>
            </div>
            <button class="toggle on" onclick="toggleSwitch(this)"></button>
        </div>
        <div class="row">
            <div class="row-left">
                <div class="row-icon" style="background:#f0fdf4;">📧</div>
                <div>
                    <div class="row-label">Email Digest</div>
                    <div class="row-sub">Ringkasan mingguan via email</div>
                </div>
            </div>
            <button class="toggle" onclick="toggleSwitch(this)"></button>
        </div>
        <div class="row">
            <div class="row-left">
                <div class="row-icon" style="background:#fdf4ff;">💬</div>
                <div>
                    <div class="row-label">Suara Notifikasi</div>
                    <div class="row-sub">Bunyi saat ada pesan masuk</div>
                </div>
            </div>
            <button class="toggle on" onclick="toggleSwitch(this)"></button>
        </div>
    </div>

    <div class="section-label">Data & Penyimpanan</div>
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

<!-- Bottom Sheets -->
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
        language: {
            title: 'Pilih Bahasa',
            options: ['Indonesia', 'English', 'العربية', '中文', 'Español'],
            target: 'langVal'
        },
        theme: {
            title: 'Tema Warna',
            options: ['Biru default', 'Hijau', 'Ungu', 'Merah', 'Oranye'],
            target: 'themeVal'
        },
        fontsize: {
            title: 'Ukuran Teks',
            options: ['Kecil', 'Normal', 'Besar', 'Sangat Besar'],
            target: 'fontVal'
        },
        autodownload: {
            title: 'Unduh Otomatis',
            options: ['Selalu', 'Wi-Fi saja', 'Tidak pernah'],
            target: 'downloadVal'
        }
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
        const sheet = sheets[currentSheet];
        document.getElementById(sheet.target).textContent = val;
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