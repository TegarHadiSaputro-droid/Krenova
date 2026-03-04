<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tentang Aplikasi - Trixie AI</title>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/about.css') }}">
</head>
<body>

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
        <div class="banner-icon">ℹ️</div>
        <div class="banner-text">
            <div class="banner-heading">Tentang Aplikasi</div>
            <div class="banner-sub">Informasi dan versi Trixie AI</div>
        </div>
    </div>
</div>

<div class="grid" style="grid-template-columns: repeat(2,1fr);">

    <!-- Kolom 1: Info App -->
    <div class="col">
        <div class="card">
            <div class="about-hero">
                <div class="about-logo"><img src="{{ asset('tunawoi.png') }}" style="width:100%;height:100%;border-radius:8px;object-fit:cover;"></div>
                <div class="about-appname">Trixie AI</div>
                <div class="about-version">Versi 1.0.0 (Build 2026.02)</div>
                <div class="about-tagline">Platform digital yang mewujudkan lingkungan lebih ramah dan setara bagi teman disabilitas</div>
            </div>
        </div>

        <div class="section-label">📋 Informasi</div>
        <div class="card">
            <div class="row">
                <div class="row-left">
                    <div class="row-icon" style="background:#eff6ff;">🏢</div>
                    <div>
                        <div class="row-label">Pengembang</div>
                        <div class="row-sub">Tim TUNA — Krenova</div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="row-left">
                    <div class="row-icon" style="background:#f0fdf4;">📅</div>
                    <div>
                        <div class="row-label">Tanggal Rilis</div>
                        <div class="row-sub">Maret 2026</div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="row-left">
                    <div class="row-icon" style="background:#fdf4ff;">⚡</div>
                    <div>
                        <div class="row-label">Model AI</div>
                        <div class="row-sub">Groq · LLaMA 3.2 Vision</div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="row-left">
                    <div class="row-icon" style="background:#fff7ed;">🌐</div>
                    <div>
                        <div class="row-label">Platform</div>
                        <div class="row-sub">Laravel · Web App</div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Kolom 2: Fitur & Legal -->
    <div class="col">
        <div class="section-label">♿ Fitur Aksesibilitas</div>
        <div class="card">
            <div class="row">
                <div class="row-left">
                    <div class="row-icon" style="background:#eff6ff;">👁️</div>
                    <div>
                        <div class="row-label">Dukungan Tunanetra</div>
                        <div class="row-sub">Pembaca layar & teks ke suara</div>
                    </div>
                </div>
                <span style="font-size:.75rem;color:#16a34a;font-weight:700;">Aktif</span>
            </div>
            <div class="row">
                <div class="row-left">
                    <div class="row-icon" style="background:#f0fdf4;">👂</div>
                    <div>
                        <div class="row-label">Dukungan Tunarungu</div>
                        <div class="row-sub">Transkripsi & subtitle real-time</div>
                    </div>
                </div>
                <span style="font-size:.75rem;color:#16a34a;font-weight:700;">Aktif</span>
            </div>
            <div class="row">
                <div class="row-left">
                    <div class="row-icon" style="background:#fff7ed;">🤟</div>
                    <div>
                        <div class="row-label">Dukungan Tunawicara</div>
                        <div class="row-sub">Mode isyarat BISINDO/SIBI</div>
                    </div>
                </div>
                <span style="font-size:.75rem;color:#f59e0b;font-weight:700;">Beta</span>
            </div>
        </div>

        <div class="section-label">📄 Legal</div>
        <div class="card">
            <div class="row" onclick="showToast('Membuka Syarat Penggunaan...')">
                <div class="row-left">
                    <div class="row-icon" style="background:#f8fafc;">📃</div>
                    <div>
                        <div class="row-label">Syarat Penggunaan</div>
                        <div class="row-sub">Terms of Service</div>
                    </div>
                </div>
                <span class="arrow">›</span>
            </div>
            <div class="row" onclick="showToast('Membuka Kebijakan Privasi...')">
                <div class="row-left">
                    <div class="row-icon" style="background:#f8fafc;">🔒</div>
                    <div>
                        <div class="row-label">Kebijakan Privasi</div>
                        <div class="row-sub">Privacy Policy</div>
                    </div>
                </div>
                <span class="arrow">›</span>
            </div>
            <div class="row" onclick="showToast('Membuka Lisensi Open Source...')">
                <div class="row-left">
                    <div class="row-icon" style="background:#f8fafc;">⚖️</div>
                    <div>
                        <div class="row-label">Lisensi Open Source</div>
                        <div class="row-sub">Pustaka pihak ketiga</div>
                    </div>
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