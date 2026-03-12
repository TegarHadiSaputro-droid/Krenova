<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Personalisasi Inklusif</title>
  <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,700&family=Manrope:wght@400;500;600;700;800&display=swap" rel="stylesheet"/>
  <link rel="stylesheet" href="{{ asset('css/personalisasi.css') }}">
</head>
<body>


  <a href="{{ url('/') }}" class="back-btn">
    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="15,18 9,12 15,6"/></svg>
    Kembali ke Beranda
  </a>

<!-- HERO -->
<section class="hero">
  <div class="hero-inner">
  <div class="hero-left">
    <div class="badge">
      <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
      PERSONALISASI INKLUSIF
    </div>
    <h1>Teknologi yang <em>menyesuaikan<br>kebutuhanmu</em></h1>
    <p class="hero-desc">Platform aksesibilitas berbasis AI yang dirancang khusus untuk penyandang tunanetra, tunarungu, dan tunawicara — agar setiap orang bisa menikmati teknologi secara setara dan mandiri.</p>
    <div class="feature-pills">
      <span class="pill">
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="3"/><path d="M2 12s3.5-7 10-7 10 7 10 7-3.5 7-10 7S2 12 2 12z"/><line x1="3" y1="3" x2="21" y2="21"/></svg>
        Tunanetra
      </span>
      <span class="pill">
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M3 18v-6a9 9 0 0 1 18 0v6"/><path d="M21 19a2 2 0 0 1-2 2h-1a2 2 0 0 1-2-2v-3a2 2 0 0 1 2-2h3zM3 19a2 2 0 0 0 2 2h1a2 2 0 0 0 2-2v-3a2 2 0 0 0-2-2H3z"/><line x1="3" y1="3" x2="21" y2="21"/></svg>
        Tunarungu
      </span>
      <span class="pill">
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 1a3 3 0 0 0-3 3v8a3 3 0 0 0 6 0V4a3 3 0 0 0-3-3z"/><path d="M19 10v2a7 7 0 0 1-14 0v-2"/><line x1="12" y1="19" x2="12" y2="23"/><line x1="8" y1="23" x2="16" y2="23"/><line x1="3" y1="3" x2="21" y2="21"/></svg>
        Tunawicara
      </span>
      <span class="pill">
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/></svg>
        Komunitas
      </span>
    </div>
    <div class="cta-row">
      <a href="{{ route('download') }}" class="btn-white">
      <button class="btn-primary">
        <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><rect x="5" y="2" width="14" height="20" rx="3"/><line x1="9" y1="7" x2="15" y2="7"/><line x1="9" y1="11" x2="15" y2="11"/><line x1="9" y1="15" x2="12" y2="15"/></svg>
        Mulai Personalisasi
      </button>
      </a>
      <button class="btn-secondary" onclick="document.getElementById('cara-kerja').scrollIntoView({behavior:'smooth'})">
        Cara Kerja
        <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M12 5v14M5 12l7 7 7-7"/></svg>
      </button>
    </div>
  </div>

  <!-- TABLET ILLUSTRATION: Personalization form on device, no human -->
  <div class="hero-right">
    <div class="tablet-wrap">
      <svg width="500" height="380" viewBox="0 0 500 380" fill="none" xmlns="http://www.w3.org/2000/svg">
        <defs>
          <linearGradient id="tabBg" x1="0" y1="0" x2="0" y2="1"><stop offset="0%" stop-color="#141830"/><stop offset="100%" stop-color="#0d1020"/></linearGradient>
          <linearGradient id="progG" x1="0" y1="0" x2="1" y2="0"><stop offset="0%" stop-color="#2979ff"/><stop offset="100%" stop-color="#40e0ff"/></linearGradient>
          <linearGradient id="btnG" x1="0" y1="0" x2="1" y2="0"><stop offset="0%" stop-color="#2979ff"/><stop offset="100%" stop-color="#29b6f6"/></linearGradient>
          <filter id="glow"><feGaussianBlur stdDeviation="3" result="blur"/><feMerge><feMergeNode in="blur"/><feMergeNode in="SourceGraphic"/></feMerge></filter>
          <clipPath id="screenClip"><rect x="18" y="14" width="464" height="352" rx="16"/></clipPath>
        </defs>

        <!-- Device outer shell -->
        <rect x="4" y="4" width="492" height="372" rx="24" fill="#0a0a1a" stroke="rgba(255,255,255,0.1)" stroke-width="1.5"/>
        <rect x="4" y="4" width="492" height="372" rx="24" fill="none" stroke="rgba(255,255,255,0.06)" stroke-width="3"/>

        <!-- Camera top center -->
        <circle cx="250" cy="12" r="4" fill="#1e1e35"/>
        <circle cx="250" cy="12" r="2" fill="#0a0a1a"/>

        <!-- Screen area -->
        <rect x="18" y="24" width="464" height="340" rx="14" fill="url(#tabBg)"/>

        <!-- ── APP HEADER BAR ── -->
        <rect x="18" y="24" width="464" height="36" rx="14" fill="rgba(30,40,80,0.95)"/>
        <rect x="18" y="44" width="464" height="16" rx="0" fill="rgba(30,40,80,0.95)"/>
        <!-- App name left -->
        <circle cx="44" cy="42" r="10" fill="rgba(41,121,255,0.35)"/>
        <rect x="62" y="38" width="72" height="7" rx="3.5" fill="rgba(255,255,255,0.7)"/>
        <rect x="62" y="49" width="45" height="4.5" rx="2.2" fill="rgba(64,224,255,0.6)"/>
        <!-- Progress indicator top right -->
        <rect x="408" y="34" width="60" height="18" rx="9" fill="rgba(41,121,255,0.25)" stroke="rgba(64,224,255,0.5)" stroke-width="1"/>
        <rect x="414" y="40" width="28" height="6" rx="3" fill="url(#progG)"/>
        <rect x="414" y="40" width="48" height="6" rx="3" fill="rgba(255,255,255,0.08)"/>
        <rect x="414" y="40" width="16" height="6" rx="3" fill="url(#progG)"/>
        <text x="438" y="47" text-anchor="middle" fill="rgba(255,255,255,0.75)" font-size="7" font-family="sans-serif" font-weight="700">1/3</text>

        <!-- ── LEFT COLUMN: MAIN FORM ── -->
        <rect x="28" y="68" width="280" height="286" rx="12" fill="rgba(255,255,255,0.05)" stroke="rgba(255,255,255,0.09)" stroke-width="1"/>

        <!-- Form header -->
        <rect x="40" y="80" width="130" height="8" rx="4" fill="rgba(255,255,255,0.6)"/>
        <rect x="40" y="93" width="88" height="5" rx="2.5" fill="rgba(64,224,255,0.5)"/>
        <line x1="40" y1="105" x2="296" y2="105" stroke="rgba(255,255,255,0.07)" stroke-width="1"/>

        <!-- FIELD 1: Nama -->
        <rect x="40" y="112" width="52" height="4.5" rx="2.2" fill="rgba(255,255,255,0.35)"/>
        <rect x="40" y="121" width="256" height="16" rx="6" fill="rgba(255,255,255,0.06)" stroke="rgba(255,255,255,0.15)" stroke-width="1"/>
        <rect x="47" y="126" width="100" height="5" rx="2.5" fill="rgba(255,255,255,0.3)"/>
        <!-- cursor blink -->
        <rect x="152" y="125" width="1.5" height="8" rx="1" fill="rgba(64,224,255,0.8)">
          <animate attributeName="opacity" values="1;0;1" dur="1.1s" repeatCount="indefinite"/>
        </rect>

        <!-- FIELD 2: Jenis Disabilitas -->
        <rect x="40" y="144" width="80" height="4.5" rx="2.2" fill="rgba(255,255,255,0.35)"/>
        <rect x="40" y="153" width="256" height="16" rx="6" fill="rgba(255,255,255,0.06)" stroke="rgba(255,255,255,0.15)" stroke-width="1"/>
        <!-- dropdown value -->
        <rect x="47" y="158" width="65" height="5" rx="2.5" fill="rgba(255,255,255,0.25)"/>
        <!-- dropdown arrow -->
        <path d="M287 160 L291 165 L295 160" stroke="rgba(255,255,255,0.4)" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" fill="none"/>

        <!-- SECTION: Pilih Mode Aksesibilitas -->
        <rect x="40" y="176" width="100" height="4.5" rx="2.2" fill="rgba(255,255,255,0.35)"/>

        <!-- Option chip 1 — SELECTED (tunanetra) -->
        <rect x="40" y="185" width="78" height="22" rx="11" fill="rgba(41,121,255,0.3)" stroke="#2979ff" stroke-width="1.2"/>
        <circle cx="54" cy="196" r="5" fill="rgba(41,121,255,0.6)"/>
        <rect x="62" y="193" width="44" height="5" rx="2.5" fill="rgba(255,255,255,0.7)"/>

        <!-- Option chip 2 — unselected (tunarungu) -->
        <rect x="124" y="185" width="80" height="22" rx="11" fill="rgba(255,255,255,0.05)" stroke="rgba(255,255,255,0.15)" stroke-width="1"/>
        <rect x="134" y="193" width="56" height="5" rx="2.5" fill="rgba(255,255,255,0.3)"/>

        <!-- Option chip 3 — unselected (tunawicara) -->
        <rect x="210" y="185" width="80" height="22" rx="11" fill="rgba(255,255,255,0.05)" stroke="rgba(255,255,255,0.15)" stroke-width="1"/>
        <rect x="220" y="193" width="56" height="5" rx="2.5" fill="rgba(255,255,255,0.3)"/>

        <!-- SECTION: Preferensi Tampilan -->
        <rect x="40" y="215" width="100" height="4.5" rx="2.2" fill="rgba(255,255,255,0.35)"/>

        <!-- Toggle row 1: Narasi Suara -->
        <rect x="40" y="225" width="180" height="5" rx="2.5" fill="rgba(255,255,255,0.25)"/>
        <!-- toggle ON -->
        <rect x="238" y="222" width="34" height="14" rx="7" fill="rgba(41,121,255,0.7)"/>
        <circle cx="264" cy="229" r="5" fill="white" filter="url(#glow)"/>

        <!-- Toggle row 2: Kontras Tinggi -->
        <rect x="40" y="245" width="160" height="5" rx="2.5" fill="rgba(255,255,255,0.25)"/>
        <!-- toggle OFF -->
        <rect x="238" y="242" width="34" height="14" rx="7" fill="rgba(255,255,255,0.1)" stroke="rgba(255,255,255,0.15)" stroke-width="1"/>
        <circle cx="245" cy="249" r="5" fill="rgba(255,255,255,0.4)"/>

        <!-- Toggle row 3: Ukuran Teks Besar -->
        <rect x="40" y="265" width="175" height="5" rx="2.5" fill="rgba(255,255,255,0.25)"/>
        <!-- toggle ON -->
        <rect x="238" y="262" width="34" height="14" rx="7" fill="rgba(64,224,255,0.6)"/>
        <circle cx="264" cy="269" r="5" fill="white"/>

        <!-- Toggle row 4: Isyarat AI -->
        <rect x="40" y="285" width="130" height="5" rx="2.5" fill="rgba(255,255,255,0.25)"/>
        <!-- toggle OFF -->
        <rect x="238" y="282" width="34" height="14" rx="7" fill="rgba(255,255,255,0.1)" stroke="rgba(255,255,255,0.15)" stroke-width="1"/>
        <circle cx="245" cy="289" r="5" fill="rgba(255,255,255,0.4)"/>

        <!-- SUBMIT BUTTON -->
        <rect x="40" y="308" width="256" height="28" rx="14" fill="url(#btnG)"/>
        <rect x="80" y="318" width="140" height="7" rx="3.5" fill="rgba(255,255,255,0.85)"/>
        <!-- arrow in button -->
        <path d="M222 321.5 L226 322 L222 322.5" stroke="rgba(255,255,255,0.6)" stroke-width="1.2" stroke-linecap="round"/>

        <!-- ── RIGHT PANEL: AI PREVIEW ── -->
        <rect x="320" y="68" width="152" height="286" rx="12" fill="rgba(255,255,255,0.04)" stroke="rgba(255,255,255,0.08)" stroke-width="1"/>

        <!-- Panel header -->
        <rect x="332" y="80" width="55" height="5.5" rx="2.7" fill="rgba(64,224,255,0.7)"/>
        <rect x="332" y="90" width="115" height="4" rx="2" fill="rgba(255,255,255,0.2)"/>

        <!-- AI Suggestion card 1 — ACTIVE -->
        <rect x="332" y="104" width="128" height="52" rx="9" fill="rgba(41,121,255,0.2)" stroke="rgba(41,121,255,0.5)" stroke-width="1"/>
        <!-- small icon circle -->
        <circle cx="347" cy="118" r="8" fill="rgba(41,121,255,0.5)"/>
        <rect x="360" y="114" width="68" height="6" rx="3" fill="rgba(255,255,255,0.6)"/>
        <rect x="360" y="124" width="88" height="4" rx="2" fill="rgba(255,255,255,0.25)"/>
        <rect x="332" y="135" width="100" height="4" rx="2" fill="rgba(255,255,255,0.15)"/>
        <rect x="332" y="143" width="75" height="4" rx="2" fill="rgba(255,255,255,0.1)"/>

        <!-- AI Suggestion card 2 -->
        <rect x="332" y="162" width="128" height="44" rx="9" fill="rgba(255,255,255,0.04)" stroke="rgba(255,255,255,0.08)" stroke-width="1"/>
        <circle cx="347" cy="175" r="8" fill="rgba(255,255,255,0.1)"/>
        <rect x="360" y="171" width="55" height="5.5" rx="2.7" fill="rgba(255,255,255,0.4)"/>
        <rect x="360" y="180" width="78" height="4" rx="2" fill="rgba(255,255,255,0.2)"/>
        <rect x="332" y="192" width="90" height="4" rx="2" fill="rgba(255,255,255,0.12)"/>

        <!-- AI Suggestion card 3 -->
        <rect x="332" y="212" width="128" height="44" rx="9" fill="rgba(255,255,255,0.04)" stroke="rgba(255,255,255,0.08)" stroke-width="1"/>
        <circle cx="347" cy="225" r="8" fill="rgba(255,255,255,0.1)"/>
        <rect x="360" y="221" width="68" height="5.5" rx="2.7" fill="rgba(255,255,255,0.4)"/>
        <rect x="360" y="230" width="55" height="4" rx="2" fill="rgba(255,255,255,0.2)"/>
        <rect x="332" y="242" width="82" height="4" rx="2" fill="rgba(255,255,255,0.12)"/>

        <!-- AI badge -->
        <rect x="326" y="262" width="140" height="24" rx="12" fill="rgba(64,224,255,0.14)" stroke="rgba(64,224,255,0.4)" stroke-width="1"/>
        <circle cx="344" cy="274" r="4" fill="#7cffa0">
          <animate attributeName="opacity" values="1;0.3;1" dur="1.5s" repeatCount="indefinite"/>
        </circle>
        <rect x="353" y="270" width="80" height="7" rx="3.5" fill="rgba(255,255,255,0.55)"/>

        <!-- Step dots (pagination) -->
        <circle cx="396" cy="300" r="5" fill="#2979ff">
          <animate attributeName="r" values="5;6;5" dur="1.8s" repeatCount="indefinite"/>
        </circle>
        <circle cx="412" cy="300" r="4" fill="rgba(255,255,255,0.2)"/>
        <circle cx="428" cy="300" r="4" fill="rgba(255,255,255,0.2)"/>

        <!-- ── GLOBAL PROGRESS BAR bottom ── -->
        <rect x="28" y="358" width="444" height="7" rx="3.5" fill="rgba(255,255,255,0.07)"/>
        <rect x="28" y="358" width="148" height="7" rx="3.5" fill="url(#progG)">
          <animate attributeName="width" from="0" to="148" dur="2s" begin="0.5s" fill="freeze"/>
        </rect>
        <text x="246" y="365" text-anchor="middle" fill="rgba(255,255,255,0.35)" font-size="6.5" font-family="sans-serif">Langkah 1 dari 3</text>

        <!-- ── FLOATING LABEL top-left ── -->
        <rect x="-4" y="34" width="116" height="26" rx="13" fill="rgba(0,80,200,0.9)" stroke="rgba(255,255,255,0.2)" stroke-width="1"/>
        <text x="56" y="51" text-anchor="middle" fill="white" font-size="9" font-family="sans-serif" font-weight="700">📋 Form Aktif</text>

        <!-- ── FLOATING LABEL top-right ── -->
        <rect x="388" y="2" width="118" height="26" rx="13" fill="rgba(8,14,40,0.85)" stroke="rgba(64,224,255,0.45)" stroke-width="1"/>
        <text x="447" y="19" text-anchor="middle" fill="#40e0ff" font-size="9" font-family="sans-serif" font-weight="700">33% Selesai</text>
      </svg>
    </div>
  </div>
  </div><!-- end hero-inner -->
</section>

<!-- WAVE -->
<svg class="wave" viewBox="0 0 1440 80" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none">
  <path d="M0,40 C360,80 1080,0 1440,40 L1440,80 L0,80 Z" fill="#eef6ff"/>
</svg>

<!-- FITUR UNGGULAN -->
<section class="features" id="fitur">
  <p class="section-label">Fitur Unggulan</p>
  <h2 class="section-title reveal">Personalisasi inklusif untuk semua</h2>
  <div class="features-grid">

    <div class="feat-card reveal">
      <div class="feat-icon icon-blue">
        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#2563eb" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
          <circle cx="12" cy="12" r="3"/><path d="M2 12s3.5-7 10-7 10 7 10 7-3.5 7-10 7S2 12 2 12z"/>
          <line x1="3" y1="3" x2="21" y2="21"/>
        </svg>
      </div>
      <div class="feat-name">Mode Tunanetra</div>
      <p class="feat-desc">Narasi suara otomatis, pembaca layar AI, dan navigasi berbasis perintah suara agar pengguna tunanetra menikmati semua fitur secara mandiri.</p>
    </div>

    <div class="feat-card reveal" style="transition-delay:.1s">
      <div class="feat-icon icon-orange">
        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#f97316" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
          <path d="M3 18v-6a9 9 0 0 1 18 0v6"/>
          <path d="M21 19a2 2 0 0 1-2 2h-1a2 2 0 0 1-2-2v-3a2 2 0 0 1 2-2h3zM3 19a2 2 0 0 0 2 2h1a2 2 0 0 0 2-2v-3a2 2 0 0 0-2-2H3z"/>
          <line x1="3" y1="3" x2="21" y2="21"/>
        </svg>
      </div>
      <div class="feat-name">Mode Tunarungu</div>
      <p class="feat-desc">Subtitle real-time otomatis, konversi suara ke teks, dan deteksi bahasa isyarat agar komunikasi berjalan tanpa hambatan suara.</p>
    </div>

    <div class="feat-card reveal" style="transition-delay:.2s">
      <div class="feat-icon icon-green">
        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#16a34a" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
          <path d="M12 1a3 3 0 0 0-3 3v8a3 3 0 0 0 6 0V4a3 3 0 0 0-3-3z"/>
          <path d="M19 10v2a7 7 0 0 1-14 0v-2"/>
          <line x1="12" y1="19" x2="12" y2="23"/>
          <line x1="8" y1="23" x2="16" y2="23"/>
          <line x1="3" y1="3" x2="21" y2="21"/>
        </svg>
      </div>
      <div class="feat-name">Mode Tunawicara</div>
      <p class="feat-desc">Konversi teks ke suara, papan simbol komunikasi, dan isyarat tangan AI agar pengguna tunawicara mengekspresikan diri sepenuhnya.</p>
    </div>

    <div class="feat-card reveal" style="transition-delay:.3s">
      <div class="feat-icon icon-purple">
        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#9333ea" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
          <rect x="2" y="3" width="20" height="14" rx="3"/>
          <path d="M8 21h8M12 17v4"/>
          <line x1="7" y1="8" x2="17" y2="8"/>
          <line x1="7" y1="12" x2="17" y2="12"/>
        </svg>
      </div>
      <div class="feat-name">Disabilitas Kombinasi</div>
      <p class="feat-desc">Dukungan khusus bagi penyandang disabilitas ganda — kombinasi tunanetra, tunarungu, dan tunawicara — dengan profil aksesibilitas multi-lapis yang fleksibel.</p>
    </div>

  </div>
</section>

<!-- WAVE -->
<svg class="wave" viewBox="0 0 1440 80" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none">
  <path d="M0,40 C360,0 1080,80 1440,40 L1440,0 L0,0 Z" fill="#eef6ff"/>
</svg>

<!-- CARA KERJA -->
<section class="how" id="cara-kerja">
  <p class="section-label">Cara Kerja</p>
  <h2 class="section-title reveal">Personalisasi yang mudah, manfaat yang langsung terasa</h2>
  <div class="how-steps">

    <div class="how-step reveal">
      <div class="step-num">
        <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
          <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"/><circle cx="12" cy="7" r="4"/>
        </svg>
      </div>
      <div class="step-title">Buat Akun</div>
      <p class="step-desc">Daftar dan buat profil singkat tentang identitas serta jenis kebutuhanmu.</p>
    </div>

    <div class="how-step reveal" style="transition-delay:.1s">
      <div class="step-num">
        <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
          <rect x="5" y="2" width="14" height="20" rx="3"/>
          <line x1="9" y1="7" x2="15" y2="7"/>
          <line x1="9" y1="11" x2="15" y2="11"/>
          <line x1="9" y1="15" x2="12" y2="15"/>
        </svg>
      </div>
      <div class="step-title">Isi Survei Kebutuhan</div>
      <p class="step-desc">Jawab pertanyaan singkat mengenai preferensi aksesibilitas, tampilan, dan bahasa.</p>
    </div>

    <div class="how-step reveal" style="transition-delay:.2s">
      <div class="step-num">
        <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
          <path d="M12 2a5 5 0 0 1 5 5c0 2.76-2.24 5-5 5s-5-2.24-5-5a5 5 0 0 1 5-5z"/>
          <path d="M3 20a9 9 0 0 1 18 0"/>
          <path d="M9 12l1.5 1.5L15 9"/>
        </svg>
      </div>
      <div class="step-title">Profil Dibuat Otomatis</div>
      <p class="step-desc">AI membaca jawabanmu dan langsung membuat profil aksesibilitas yang sesuai untukmu.</p>
    </div>

    <div class="how-step reveal" style="transition-delay:.3s">
      <div class="step-num">
        <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
          <rect x="2" y="3" width="20" height="14" rx="3"/>
          <path d="M8 21h8M12 17v4"/>
          <circle cx="8" cy="10" r="2"/><circle cx="16" cy="10" r="2"/>
          <line x1="10" y1="10" x2="14" y2="10"/>
        </svg>
      </div>
      <div class="step-title">Antarmuka Menyesuaikan</div>
      <p class="step-desc">Seluruh tampilan, teks, suara, dan kontras menyesuaikan secara otomatis sesuai profilmu.</p>
    </div>

    <div class="how-step reveal" style="transition-delay:.4s">
      <div class="step-num">
        <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
          <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/><polyline points="22 4 12 14.01 9 11.01"/>
        </svg>
      </div>
      <div class="step-title">Gunakan dengan Nyaman</div>
      <p class="step-desc">Nikmati teknologi secara penuh, setara, dan mandiri — kapan saja, di mana saja.</p>
    </div>

  </div>
</section>

  <!-- Footer Strip -->

  <footer>
        <div class="f-wrap">
            <!-- Strip: Logo + Tagline centered -->
            <div class="f-strip">
                <div class="f-strip-top">
                    <div class="f-logo-text">TU<span style="color: #0078ff;">NA</span></div>
                </div>
                <p class="f-kepanjangan">Transforming User Needs into Access</p>
            </div>

            <!-- Link Columns - semua 4 kolom pakai format list -->
            <div class="f-links">
                <div class="f-col">
                    <h4>Layanan Kami</h4>
                    <ul>
                        <li><a href="/call-chat"><span class="dot"></span>Call & Chat</a></li>
                        <li><a href="/chat"><span class="dot"></span>AI Trixie</a></li>
                        <li><a href="/personalisasi"><span class="dot"></span>Personalisasi</a></li>
                        <li><a href="/camera-on"><span class="dot"></span>Camera On Point</a></li>
                    </ul>
                </div>

                <div class="f-col">
                    <h4>Berlangganan</h4>
                    <ul>
                        <li><a href="#"><span class="dot"></span>Promo</a></li>
                        <li><a href="{{ route('berlangganan') }}"><span class="dot"></span>Lihat Paket</a></li>
                        <li><a href="#"><span class="dot"></span>E-Wallet</a></li>
                    </ul>
                </div>

                <div class="f-col">
                    <h4>Panduan</h4>
                    <ul>
                        <li><a href="/panduan#visi-misi"><span class="dot"></span>Visi Misi</a></li>
                        <li><a href="/panduan#cara-mulai"><span class="dot"></span>Cara Mulai</a></li>
                        <li><a href="/panduan#video-tutorial"><span class="dot"></span>Video Tutorial</a></li>
                        <li><a href="/panduan#faq"><span class="dot"></span>FAQ</a></li>
                    </ul>
                </div>

                <div class="f-col">
                    <h4>Hubungi Kami</h4>
                    <ul>
                        <li><a href="/hubungi-kami#whatsapp"><span class="dot"></span>WhatsApp</a></li>
                        <li><a href="/hubungi-kami#email"><span class="dot"></span>Email Support</a></li>
                        <li><a href="/hubungi-kami#sosial-media"><span class="dot"></span>Sosial Media Kami</a></li>
                        <li><a href="/hubungi-kami#kantor"><span class="dot"></span>Kantor Kami</a></li>
                    </ul>
                </div>
            </div>

            <!-- Bottom Bar -->
            <div class="f-bottom">
                <div class="f-soc">
                    <a href="#" title="Instagram">
                        <svg width="15" height="15" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <rect x="2" y="2" width="20" height="20" rx="5"/>
                            <path d="M16 11.37A4 4 0 1112.63 8 4 4 0 0116 11.37z"/>
                            <line x1="17.5" y1="6.5" x2="17.51" y2="6.5"/>
                        </svg>
                    </a>
                    <a href="#" title="TikTok">
                        <svg width="14" height="14" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M19.59 6.69a4.83 4.83 0 01-3.77-4.25V2h-3.45v13.67a2.89 2.89 0 01-2.88 2.5 2.89 2.89 0 01-2.89-2.89 2.89 2.89 0 012.89-2.89c.28 0 .54.04.79.1V9.01a6.32 6.32 0 00-.79-.05 6.34 6.34 0 00-6.34 6.34 6.34 6.34 0 006.34 6.34 6.34 6.34 0 006.33-6.34V8.69a8.18 8.18 0 004.78 1.53V6.79a4.85 4.85 0 01-1.01-.1z"/>
                        </svg>
                    </a>
                    
                    <a href="#" title="X">
                        <svg width="13" height="13" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-4.714-6.231-5.401 6.231H2.74l7.73-8.835L1.254 2.25H8.08l4.713 6.231zm-1.161 17.52h1.833L7.084 4.126H5.117z"/>
                        </svg>
                    </a>
                    <a href="#" title="Threads">
                        <svg width="13" height="13" fill="currentColor" viewBox="0 0 192 192">
                            <path d="M141.537 88.988a66.667 66.667 0 00-2.518-1.143c-1.482-27.307-16.403-42.94-41.457-43.1h-.34c-14.986 0-27.449 6.396-35.12 18.036l13.779 9.452c5.73-8.695 14.724-10.548 21.348-10.548h.229c8.249.053 14.474 2.452 18.503 7.129 2.932 3.405 4.893 8.111 5.864 14.05-7.314-1.243-15.224-1.626-23.68-1.14-23.82 1.371-39.134 15.264-38.105 34.568.522 9.792 5.4 18.216 13.735 23.719 7.047 4.652 16.124 6.927 25.557 6.412 12.458-.683 22.231-5.436 29.049-14.127 5.178-6.6 8.453-15.153 9.899-25.93 5.937 3.583 10.337 8.298 12.767 13.966 4.132 9.635 4.373 25.468-8.546 38.376-11.533 11.533-25.531 16.523-46.505 16.674-23.266-.163-40.99-7.731-52.702-22.498C34.054 152.093 28.22 132.603 28 105.13c.22-27.472 6.054-46.963 18.557-62.541C58.269 27.983 76 20.418 99.24 20.255c23.39.162 41.5 7.77 53.83 22.616 6.055 7.295 10.74 16.551 13.95 27.514l16.43-4.373c-3.906-14.395-10.23-26.78-18.942-36.918C147.636 10.983 126.825 1.585 99.31 1.408h-.12C71.677 1.585 50.543 11.016 35.077 29.75 21.07 46.562 13.734 70.322 13.5 105.157c.234 34.835 7.57 58.594 21.577 75.408 15.466 18.733 36.6 28.164 64.114 28.34h.12c24.235-.153 41.35-6.522 55.43-20.59 18.717-18.696 18.178-42.112 12.03-56.48-4.344-10.12-12.649-18.323-24.234-23.847z"/>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </footer>

<script>
  /* ── 0. DRAW CONNECTORS: solid line + > arrow ── */
  function getOffsetRelativeTo(el, ancestor) {
    let x = 0, y = 0;
    while (el && el !== ancestor) {
      x += el.offsetLeft;
      y += el.offsetTop;
      el = el.offsetParent;
    }
    return { x, y };
  }

  function drawStepConnectors() {
    const container = document.querySelector('.how-steps');
    if (!container) return;
    container.querySelectorAll('.step-conn').forEach(el => el.remove());

    const steps = Array.from(container.querySelectorAll('.how-step'));
    const ns = 'http://www.w3.org/2000/svg';

    for (let i = 0; i < steps.length - 1; i++) {
      const numA = steps[i].querySelector('.step-num');
      const numB = steps[i+1].querySelector('.step-num');
      if (!numA || !numB) continue;

      const posA = getOffsetRelativeTo(numA, container);
      const posB = getOffsetRelativeTo(numB, container);
      const r = numA.offsetWidth / 2; // 36px

      const x1 = posA.x + numA.offsetWidth; // right edge of circle A
      const x2 = posB.x;                    // left edge of circle B
      const y  = posA.y + r;               // vertical center of circles
      const mx = (x1 + x2) / 2;
      const w  = x2 - x1;
      const svgH = 24;
      const mid  = svgH / 2;

      const svg = document.createElementNS(ns, 'svg');
      svg.className = 'step-conn';
      svg.setAttribute('width', w);
      svg.setAttribute('height', svgH);
      svg.style.cssText = `position:absolute;left:${x1}px;top:${y - mid}px;pointer-events:none;z-index:0;overflow:visible;`;

      // left line segment
      const l1 = document.createElementNS(ns, 'line');
      l1.setAttribute('x1', 0);       l1.setAttribute('y1', mid);
      l1.setAttribute('x2', mx-x1-12); l1.setAttribute('y2', mid);
      l1.setAttribute('stroke', '#2979ff'); l1.setAttribute('stroke-width', '2.5'); l1.setAttribute('opacity', '0.6');
      svg.appendChild(l1);

      // right line segment
      const l2 = document.createElementNS(ns, 'line');
      l2.setAttribute('x1', mx-x1+12); l2.setAttribute('y1', mid);
      l2.setAttribute('x2', w);        l2.setAttribute('y2', mid);
      l2.setAttribute('stroke', '#2979ff'); l2.setAttribute('stroke-width', '2.5'); l2.setAttribute('opacity', '0.6');
      svg.appendChild(l2);

      // white bg behind arrow
      const bg = document.createElementNS(ns, 'rect');
      bg.setAttribute('x', mx-x1-12); bg.setAttribute('y', mid-12);
      bg.setAttribute('width', 24);   bg.setAttribute('height', 24);
      bg.setAttribute('fill', '#fff');
      svg.appendChild(bg);

      // chevron >
      const chev = document.createElementNS(ns, 'path');
      const cx = mx - x1;
      chev.setAttribute('d', `M${cx-6},${mid-6} L${cx+6},${mid} L${cx-6},${mid+6}`);
      chev.setAttribute('stroke', '#2979ff'); chev.setAttribute('stroke-width', '2.5');
      chev.setAttribute('stroke-linecap', 'round'); chev.setAttribute('stroke-linejoin', 'round');
      chev.setAttribute('fill', 'none');
      svg.appendChild(chev);

      container.appendChild(svg);
    }
  }

  // Run after fonts + layout fully settled
  if (document.readyState === 'complete') {
    setTimeout(drawStepConnectors, 50);
  } else {
    window.addEventListener('load', () => setTimeout(drawStepConnectors, 50));
  }
  window.addEventListener('resize', drawStepConnectors);

  /* ── 1. SCROLL REVEAL ── */
  const revealObs = new IntersectionObserver(entries => {
    entries.forEach(e => { if (e.isIntersecting) e.target.classList.add('visible'); });
  }, { threshold: 0.13 });
  document.querySelectorAll('.reveal').forEach(el => revealObs.observe(el));

  /* ── 2. STEP ACTIVE STATE — highlight on hover only ── */
  const steps = document.querySelectorAll('.how-step');
  steps.forEach(s => {
    s.addEventListener('mouseenter', () => {
      steps.forEach(x => x.classList.remove('active'));
      s.classList.add('active');
    });
    s.addEventListener('mouseleave', () => {
      steps.forEach(x => x.classList.remove('active'));
    });
  });

  /* ── 3. RIPPLE EFFECT on buttons ── */
  document.querySelectorAll('.btn-primary, .btn-secondary').forEach(btn => {
    btn.style.position = 'relative';
    btn.style.overflow = 'hidden';
    btn.addEventListener('click', function(e) {
      const r = document.createElement('span');
      const rect = this.getBoundingClientRect();
      const size = Math.max(rect.width, rect.height) * 2;
      r.style.cssText = `
        position:absolute;border-radius:50%;pointer-events:none;
        width:${size}px;height:${size}px;
        left:${e.clientX - rect.left - size/2}px;
        top:${e.clientY - rect.top - size/2}px;
        background:rgba(255,255,255,0.35);
        transform:scale(0);animation:rippleAnim 0.6s ease-out forwards;
      `;
      this.appendChild(r);
      setTimeout(() => r.remove(), 650);
    });
  });
  const rippleStyle = document.createElement('style');
  rippleStyle.textContent = '@keyframes rippleAnim{to{transform:scale(1);opacity:0}}';
  document.head.appendChild(rippleStyle);

  /* ── 4. MAGNETIC EFFECT on step circles ── */
  document.querySelectorAll('.step-num').forEach(el => {
    el.addEventListener('mousemove', function(e) {
      const r = this.getBoundingClientRect();
      const x = e.clientX - r.left - r.width / 2;
      const y = e.clientY - r.top - r.height / 2;
      this.style.transform = `translate(${x * 0.25}px, ${y * 0.25}px) scale(1.12)`;
    });
    el.addEventListener('mouseleave', function() {
      this.style.transform = '';
    });
  });

  /* ── 5. PARALLAX on hero decorative circles ── */
  const hero = document.querySelector('.hero');
  if (hero) {
    hero.addEventListener('mousemove', function(e) {
      const rx = (e.clientX / window.innerWidth - 0.5) * 20;
      const ry = (e.clientY / window.innerHeight - 0.5) * 20;
      this.style.setProperty('--px', rx + 'px');
      this.style.setProperty('--py', ry + 'px');
    });
  }
  /* inject the CSS var usage */
  const paraStyle = document.createElement('style');
  paraStyle.textContent = `.hero::before{transform:translate(var(--px,0),var(--py,0));transition:transform .4s ease}
  .hero::after{transform:translate(calc(var(--px,0)*-0.6),calc(var(--py,0)*-0.6));transition:transform .5s ease}`;
  document.head.appendChild(paraStyle);

  /* ── 6. FEAT CARD tilt on mousemove ── */
  document.querySelectorAll('.feat-card').forEach(card => {
    card.addEventListener('mousemove', function(e) {
      const r = this.getBoundingClientRect();
      const x = (e.clientX - r.left) / r.width  - 0.5;
      const y = (e.clientY - r.top)  / r.height - 0.5;
      this.style.transform = `translateY(-10px) scale(1.02) rotateX(${-y*8}deg) rotateY(${x*8}deg)`;
      this.style.transition = 'transform .1s ease';
    });
    card.addEventListener('mouseleave', function() {
      this.style.transform = '';
      this.style.transition = 'transform .4s cubic-bezier(.34,1.56,.64,1)';
    });
  });

  /* ── 7. SMOOTH SCROLL PROGRESS BAR at top ── */
  const prog = document.createElement('div');
  prog.style.cssText = 'position:fixed;top:0;left:0;height:3px;width:0%;background:linear-gradient(90deg,#2979ff,#40e0ff);z-index:9999;transition:width .1s linear;border-radius:0 2px 2px 0;';
  document.body.prepend(prog);
  window.addEventListener('scroll', () => {
    const s = document.documentElement;
    const pct = (s.scrollTop / (s.scrollHeight - s.clientHeight)) * 100;
    prog.style.width = pct + '%';
  });

  /* ── 8. PILL hover shimmer ── */
  const shimStyle = document.createElement('style');
  shimStyle.textContent = `
    .pill{cursor:default;transition:background .25s,transform .2s,box-shadow .2s}
    .pill:hover{background:rgba(255,255,255,0.28);transform:translateY(-2px);box-shadow:0 4px 14px rgba(0,0,0,.15)}
    .feat-card{transform-style:preserve-3d}
  `;
  document.head.appendChild(shimStyle);
</script>
</body>
</html>