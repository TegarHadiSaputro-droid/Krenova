<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tentang Aplikasi - TUNA</title>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/about.css') }}">
</head>
<body>

<div class="banner">
    <div class="banner-nav">
        <a href="javascript:history.back()" class="back-btn">← Kembali</a>
        <div style="width:80px"></div>
    </div>
    <div class="banner-body">
        <div class="banner-icon">ℹ️</div>
        <div class="banner-text">
            <div class="banner-heading">Tentang TUNA</div>
            <div class="banner-sub">Transforming User Needs into Access</div>
        </div>
    </div>
</div>

<div class="grid" style="grid-template-columns: repeat(3,1fr);">

    <!-- Kolom 1: Info App + Informasi -->
    <div class="col">
        <div class="card">
            <div class="about-hero">
                <div class="about-logo"><img src="{{ asset('tunawoi.png') }}" style="width:100%;height:100%;border-radius:8px;object-fit:cover;"></div>
                <div class="about-appname">TUNA</div>
                <div class="about-tagline-full">Transforming User Needs into Access</div>
                <div class="about-version">Versi 1.0.0 · Build 2026.03</div>
                <div class="about-desc">Platform digital inklusif yang menyediakan layanan dan dukungan bagi penyandang disabilitas tunanetra, tunarungu, dan tunawicara.</div>
                <div class="version-badge">Versi terbaru</div>
            </div>
        </div>

        <div class="section-label">📋 Informasi</div>
        <div class="card">
            <div class="row">
                <div class="row-left">
                    <div class="row-icon" style="background:#eff6ff;">🏢</div>
                    <div><div class="row-label">Pengembang</div><div class="row-sub">Tim TUNA — Krenova</div></div>
                </div>
            </div>
            <div class="row">
                <div class="row-left">
                    <div class="row-icon" style="background:#f0fdf4;">📅</div>
                    <div><div class="row-label">Tanggal Rilis</div><div class="row-sub">Maret 2026</div></div>
                </div>
            </div>
            <div class="row">
                <div class="row-left">
                    <div class="row-icon" style="background:#fdf4ff;">⚡</div>
                    <div><div class="row-label">AI Engine</div><div class="row-sub">Groq · LLaMA 3.2 Vision (Trixie)</div></div>
                </div>
            </div>
            <div class="row">
                <div class="row-left">
                    <div class="row-icon" style="background:#fff7ed;">🌐</div>
                    <div><div class="row-label">Platform</div><div class="row-sub">Cross-Platform · Laravel Web App</div></div>
                </div>
            </div>
        </div>
    </div>

    <!-- Kolom 2: Dukungan Disabilitas + Manfaat -->
    <div class="col">
        <div class="section-label">♿ Dukungan Disabilitas</div>
        <div class="card">
            <div class="row">
                <div class="row-left">
                    <div class="row-icon" style="background:#eff6ff;">👁️</div>
                    <div><div class="row-label">Tunanetra</div><div class="row-sub">Pembaca layar & text-to-speech</div></div>
                </div>
                <span style="font-size:.75rem;color:#16a34a;font-weight:700;">Aktif</span>
            </div>
            <div class="row">
                <div class="row-left">
                    <div class="row-icon" style="background:#f0fdf4;">👂</div>
                    <div><div class="row-label">Tunarungu</div><div class="row-sub">Subtitle & transkripsi real-time</div></div>
                </div>
                <span style="font-size:.75rem;color:#16a34a;font-weight:700;">Aktif</span>
            </div>
            <div class="row">
                <div class="row-left">
                    <div class="row-icon" style="background:#fff7ed;">🤟</div>
                    <div><div class="row-label">Tunawicara</div><div class="row-sub">Isyarat BISINDO/SIBI ke teks</div></div>
                </div>
                <span style="font-size:.75rem;color:#16a34a;font-weight:700;">Aktif</span>
            </div>
        </div>

    <div class="section-label">✨ Manfaat TUNA</div>
        <div class="card">
        <div class="tujuan-item">
            <div class="tujuan-num">1</div>
            <div class="tujuan-text"><strong>Akses Layanan Digital</strong><br>Lebih ramah disabilitas</div>
        </div>
        <div class="tujuan-item">
            <div class="tujuan-num">2</div>
            <div class="tujuan-text"><strong>Kemandirian Pengguna</strong><br>Tanpa ketergantungan bantuan orang lain</div>
        </div>
        <div class="tujuan-item">
            <div class="tujuan-num">3</div>
            <div class="tujuan-text"><strong>Komunitas Disabilitas</strong><br>Call & Chat antar pengguna</div>
        </div>
        <div class="tujuan-item">
            <div class="tujuan-num">4</div>
            <div class="tujuan-text"><strong>Katalog Marketplace</strong><br>Produk ramah disabilitas</div>
        </div>
    </div>
</div>

    <!-- Kolom 3: Tujuan + Legal -->
    <div class="col">
        <div class="section-label">🎯 Tujuan TUNA</div>
        <div class="card">
            <div class="tujuan-item">
                <div class="tujuan-num">1</div>
                <div class="tujuan-text">Mengembangkan Cross-Platform Application yang memberi solusi teknologi informasi bagi penyandang disabilitas.</div>
            </div>
            <div class="tujuan-item">
                <div class="tujuan-num">2</div>
                <div class="tujuan-text">Meningkatkan aksesibilitas melalui fitur personalisasi agar pengguna dapat menggunakan layanan secara mandiri dan setara.</div>
            </div>
            <div class="tujuan-item">
                <div class="tujuan-num">3</div>
                <div class="tujuan-text">Menyediakan media komunikasi, interaksi, dan konektivitas antar pengguna disabilitas.</div>
            </div>
        </div>

        <div class="section-label">📄 Legal</div>
        <div class="card">
            <div class="row" onclick="showToast('Membuka Syarat Penggunaan...')">
                <div class="row-left">
                    <div class="row-icon" style="background:#f8fafc;">📃</div>
                    <div><div class="row-label">Syarat Penggunaan</div><div class="row-sub">Terms of Service</div></div>
                </div>
                <span class="arrow">›</span>
            </div>
            <div class="row" onclick="showToast('Membuka Kebijakan Privasi...')">
                <div class="row-left">
                    <div class="row-icon" style="background:#f8fafc;">🔒</div>
                    <div><div class="row-label">Kebijakan Privasi</div><div class="row-sub">Privacy Policy</div></div>
                </div>
                <span class="arrow">›</span>
            </div>
            <div class="row" onclick="showToast('Membuka Lisensi...')">
                <div class="row-left">
                    <div class="row-icon" style="background:#f8fafc;">⚖️</div>
                    <div><div class="row-label">Lisensi Open Source</div><div class="row-sub">Pustaka pihak ketiga</div></div>
                </div>
                <span class="arrow">›</span>
            </div>
        </div>
    </div>
</div>

<div class="toast" id="toast"></div>
<script>
    function showToast(msg) {
        const t = document.getElementById('toast');
        t.textContent = msg; t.classList.add('show');
        setTimeout(() => t.classList.remove('show'), 2200);
    }
</script>
</body>
</html>