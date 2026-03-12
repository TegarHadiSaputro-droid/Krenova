<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>TUNA – Call & Chat</title>
  <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:ital,wght@0,400;0,600;0,700;0,800;1,700&family=Manrope:wght@400;500;600&display=swap" rel="stylesheet"/>
  <link rel="stylesheet" href="{{ asset('css/call-chat.css') }}">
</head>
<body>
    
<nav>
    <a href="{{ url('/') }}" class="back-btn">
    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
      <polyline points="15,18 9,12 15,6"/>
    </svg>
    Kembali ke Beranda
  </a>  

<section class="hero">
  <div class="hero-inner">
  <div class="hero-left">
    <div class="badge">
      <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><rect x="2" y="3" width="20" height="14" rx="2"/><path d="M8 21h8M12 17v4"/></svg>
      CALL &amp; CHAT
    </div>
    <h1>Terhubung lebih<br><em>dekat, kapan saja</em></h1>
    <p class="hero-desc">Fitur Call & Chat berbasis AI yang mengubah suara, teks, dan bahasa isyarat secara real-time sehingga penyandang disabilitas dapat berkomunikasi dengan lebih mudah, mandiri, dan setara.</p>
    <div class="feature-pills">
      <span class="pill"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="2" y="3" width="20" height="14" rx="2"/><path d="M8 21h8M12 17v4"/></svg>Video Call</span>
      <span class="pill"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 1a3 3 0 00-3 3v8a3 3 0 006 0V4a3 3 0 00-3-3z"/><path d="M19 10v2a7 7 0 01-14 0v-2M12 19v4M8 23h8"/></svg>Speech-to-Text</span>
      <span class="pill"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"/></svg>Isyarat ke Teks</span>
      <span class="pill"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M17 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 00-3-3.87M16 3.13a4 4 0 010 7.75"/></svg>Komunitas</span>
    </div>
    <div class="cta-row">
      <a href="{{ route('download') }}" class="btn-primary">
        <svg width="17" height="17" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><rect x="2" y="3" width="20" height="14" rx="2"/><path d="M8 21h8M12 17v4"/></svg>
        Mulai Video Call
      </a>
      <a href="#cara-kerja" class="btn-secondary" onclick="scrollToCara(event)">Cara Kerja →</a>
    </div>
  </div>

  <!-- TABLET RIGHT -->
  <div class="hero-right">
  <div class="tablets-row">

    <div class="tablet-wrap">
      <div class="tablet-shell">
        <div class="tablet-screen">
          <div class="vc-topbar">
            <div class="vc-rec"><span class="rdot"></span> REC</div>
            <div class="vc-title">VIDEO CALL</div>
            <div class="vc-timer">00:24</div>
          </div>
          <div class="vc-main">
            <div class="sil-glow"></div>

            <!-- siluet bulat original -->
            <svg width="340" height="290" viewBox="0 0 260 230" xmlns="http://www.w3.org/2000/svg" style="position:relative;z-index:2">
              <path d="
                M 130 18
                C 108 18, 88 26, 78 42
                C 68 56, 66 72, 68 84
                C 66 88, 62 92, 60 98
                C 58 106, 62 112, 68 112
                C 70 120, 74 128, 80 134
                C 84 138, 90 142, 96 144
                C 100 146, 104 147, 108 148
                L 108 158
                C 104 160, 100 163, 96 166
                C 88 170, 78 172, 66 172
                C 48 172, 28 176, 14 186
                C 6 192, 0 200, 0 210
                L 0 230 L 260 230 L 260 210
                C 260 200, 254 192, 246 186
                C 232 176, 212 172, 194 172
                C 182 172, 172 170, 164 166
                C 160 163, 156 160, 152 158
                L 152 148
                C 156 147, 160 146, 164 144
                C 170 142, 176 138, 180 134
                C 186 128, 190 120, 192 112
                C 198 112, 202 106, 200 98
                C 198 92, 194 88, 192 84
                C 194 72, 192 56, 182 42
                C 172 26, 152 18, 130 18 Z
              " fill="rgba(255,255,255,0.22)"/>
              <!-- telinga kiri -->
              <path d="M 68 84 C 62 82, 56 86, 54 94 C 52 102, 56 110, 62 112 C 64 112, 66 112, 68 112" fill="rgba(255,255,255,0.22)"/>
              <!-- telinga kanan -->
              <path d="M 192 84 C 198 82, 204 86, 206 94 C 208 102, 204 110, 198 112 C 196 112, 194 112, 192 112" fill="rgba(255,255,255,0.22)"/>
              <rect x="90" y="216" width="80" height="13" rx="6.5" fill="rgba(41,100,255,0.7)"/>
              <text x="130" y="226" text-anchor="middle" font-size="8" fill="white" font-family="Manrope,sans-serif" font-weight="700">Andi · 00:24</text>
            </svg>

            <!-- self view tablet 1 -->
            <div class="self-view">
              <svg width="58" height="52" viewBox="0 0 80 70" xmlns="http://www.w3.org/2000/svg">
                <rect width="80" height="70" fill="#0c0f20"/>
                <path d="M 40 5 C 33 5, 27 8, 24 13 C 21 17, 20 22, 21 26 C 20 27, 19 28, 18 30 C 18 33, 19 34, 21 34 C 22 37, 23 39, 25 41 C 26 42, 28 43, 30 44 C 31 45, 33 45, 33 46 L 33 48 C 32 49, 31 50, 30 51 C 27 52, 24 53, 20 53 C 15 53, 9 54, 4 57 C 2 59, 0 61, 0 64 L 0 70 L 80 70 L 80 64 C 80 61, 78 59, 76 57 C 71 54, 65 53, 60 53 C 56 53, 53 52, 50 51 C 49 50, 48 49, 47 48 L 47 46 C 48 45, 49 45, 50 44 C 52 43, 54 42, 55 41 C 57 39, 58 37, 59 34 C 61 34, 62 33, 62 30 C 61 28, 60 27, 59 26 C 60 22, 59 17, 56 13 C 53 8, 47 5, 40 5 Z" fill="rgba(255,255,255,0.2)"/>
                <path d="M 21 26 C 19 25, 17 27, 17 29 C 17 31, 19 34, 21 34" fill="rgba(255,255,255,0.2)"/>
                <path d="M 59 26 C 61 25, 63 27, 63 29 C 63 31, 61 34, 59 34" fill="rgba(255,255,255,0.2)"/>
              </svg>
              <div class="self-lbl">Kamu</div>
            </div>

            <div class="vc-caption">
              <div class="vc-waves"><div class="vw"></div><div class="vw"></div><div class="vw"></div><div class="vw"></div><div class="vw"></div></div>
              <div class="vc-cap-txt">AI: "Halo! Apa kabar?"</div>
            </div>
          </div>
          <div class="vc-controls">
            <div class="ai-badge"><div class="ai-dot"></div><div class="ai-txt">AI aktif</div></div>
            <div class="ctrl-btns">
              <div class="cbtn cmute"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"><path d="M12 1a3 3 0 00-3 3v8a3 3 0 006 0V4a3 3 0 00-3-3z"/><path d="M19 10v2a7 7 0 01-14 0v-2M12 19v4M8 23h8"/></svg></div>
              <div class="cbtn cvid"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"><rect x="2" y="3" width="20" height="14" rx="2"/><path d="M8 21h8M12 17v4"/></svg></div>
              <div class="cbtn cend"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M22 16.92v3a2 2 0 01-2.18 2 19.79 19.79 0 01-8.63-3.07A19.5 19.5 0 013.07 9.81a19.79 19.79 0 01-3.07-8.68A2 2 0 012 .11h3a2 2 0 012 1.72c.127.96.361 1.903.7 2.81a2 2 0 01-.45 2.11L6.09 7.91a16 16 0 006 6l1.27-1.27a2 2 0 012.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0122 14.92z"/></svg></div>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div><!-- /tablets-row -->
  </div><!-- /hero-right -->
  </div><!-- /hero-inner -->
</section>

<!-- WAVE -->
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 60" preserveAspectRatio="none" style="display:block;width:100%;margin-top:-2px;background:#fff;">
  <path d="M0,0 C360,60 1080,0 1440,60 L1440,0 L0,0 Z" fill="url(#wg)"/>
  <defs><linearGradient id="wg" x1="0" y1="0" x2="1" y2="0"><stop offset="0%" stop-color="#2979ff"/><stop offset="100%" stop-color="#40e0ff"/></linearGradient></defs>
</svg>

<!-- FITUR UNGGULAN -->
<section class="features">
  <div class="section-label reveal">Fitur Unggulan</div>
  <h2 class="section-title reveal">Komunikasi inklusif untuk semua</h2>
  <div class="features-grid">
    <div class="feat-card reveal">
      <div class="feat-icon" style="background:#e8f0ff"><svg viewBox="0 0 24 24" fill="none" stroke="#2979ff" stroke-width="2"><rect x="2" y="3" width="20" height="14" rx="2"/><path d="M8 21h8M12 17v4"/></svg></div>
      <div class="feat-name">Video Call Inklusif</div>
      <div class="feat-desc">Panggilan video dengan subtitle otomatis dan deteksi bahasa isyarat agar semua bisa berkomunikasi setara.</div>
    </div>
    <div class="feat-card reveal" style="transition-delay:0.1s">
      <div class="feat-icon" style="background:#fff3ee"><svg viewBox="0 0 24 24" fill="none" stroke="#ff6b35" stroke-width="2"><path d="M12 1a3 3 0 00-3 3v8a3 3 0 006 0V4a3 3 0 00-3-3z"/><path d="M19 10v2a7 7 0 01-14 0v-2M12 19v4M8 23h8"/></svg></div>
      <div class="feat-name">Voice &amp; Speech-to-Text</div>
      <div class="feat-desc">Suara dikonversi menjadi teks real-time oleh AI agar pengguna tunarungu tetap mengikuti percakapan.</div>
    </div>
    <div class="feat-card reveal" style="transition-delay:0.2s">
      <div class="feat-icon" style="background:#f0fff4"><svg viewBox="0 0 24 24" fill="none" stroke="#22c55e" stroke-width="2"><path d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"/></svg></div>
      <div class="feat-name">Isyarat ke Teks AI</div>
      <div class="feat-desc">Gunakan kamera untuk konversi bahasa isyarat ke teks secara otomatis dengan teknologi AI terkini.</div>
    </div>
    <div class="feat-card reveal" style="transition-delay:0.3s">
      <div class="feat-icon" style="background:#fdf4ff"><svg viewBox="0 0 24 24" fill="none" stroke="#a855f7" stroke-width="2"><path d="M17 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 00-3-3.87M16 3.13a4 4 0 010 7.75"/></svg></div>
      <div class="feat-name">Grup Komunitas</div>
      <div class="feat-desc">Terhubung dengan komunitas, sekolah inklusi, orang tua, dan tenaga kesehatan dalam satu platform.</div>
    </div>
  </div>
</section>

<!-- WAVE 2 -->
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 60" preserveAspectRatio="none" style="display:block;width:100%;background:#fff;">
  <path d="M0,60 C360,0 1080,60 1440,0 L1440,60 L0,60 Z" fill="#eef6ff"/>
</svg>

<!-- CARA KERJA -->
<section class="how" id="cara-kerja">
  <div class="section-label reveal">Cara Kerja</div>
  <h2 class="section-title reveal">Mudah digunakan, langsung terasa manfaatnya</h2>
  <div class="how-steps">

    <div class="how-step reveal">
      <div class="step-num">
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"><path d="M16 21v-2a4 4 0 00-4-4H6a4 4 0 00-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M22 21v-2a4 4 0 00-3-3.87M16 3.13a4 4 0 010 7.75"/></svg>
      </div>
      <div class="step-title">Daftar & Buat Profil</div>
      <div class="step-desc">Buat akun TUNA dan atur profil sesuai kebutuhan aksesibilitasmu.</div>
      <div class="step-arrow"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="9 18 15 12 9 6"/></svg></div>
    </div>

    <div class="how-step reveal" style="transition-delay:0.1s">
      <div class="step-num">
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"><path d="M21 15a2 2 0 01-2 2H7l-4 4V5a2 2 0 012-2h14a2 2 0 012 2z"/></svg>
      </div>
      <div class="step-title">Pilih Kontak</div>
      <div class="step-desc">Temukan teman, keluarga, atau tenaga kesehatan di direktori komunitas TUNA.</div>
      <div class="step-arrow"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="9 18 15 12 9 6"/></svg></div>
    </div>

    <div class="how-step reveal" style="transition-delay:0.2s">
      <div class="step-num">
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"><rect x="2" y="3" width="20" height="14" rx="2"/><path d="M8 21h8M12 17v4"/></svg>
      </div>
      <div class="step-title">Mulai Video Call</div>
      <div class="step-desc">Tekan tombol panggil — AI langsung aktif mendeteksi suara dan gerakan isyarat.</div>
      <div class="step-arrow"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="9 18 15 12 9 6"/></svg></div>
    </div>

    <div class="how-step reveal" style="transition-delay:0.3s">
      <div class="step-num">
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"><path d="M12 20h9M16.5 3.5a2.121 2.121 0 013 3L7 19l-4 1 1-4L16.5 3.5z"/></svg>
      </div>
      <div class="step-title">AI Konversi Real-time</div>
      <div class="step-desc">Suara diubah jadi teks, isyarat dikenali, dan caption tampil otomatis di layar.</div>
      <div class="step-arrow"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="9 18 15 12 9 6"/></svg></div>
    </div>

    <div class="how-step reveal" style="transition-delay:0.4s">
      <div class="step-num">
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"><path d="M22 11.08V12a10 10 0 11-5.93-9.14"/><polyline points="22 4 12 14.01 9 11.01"/></svg>
      </div>
      <div class="step-title">Komunikasi Setara</div>
      <div class="step-desc">Semua pihak bisa saling memahami tanpa hambatan, kapan saja dan di mana saja.</div>
    </div>

  </div>
</section>

<!-- WAVE: cara kerja → footer -->
<div style="display:block;width:100%;overflow:hidden;line-height:0;background:#eef6ff;">
  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 80" preserveAspectRatio="none" style="display:block;width:100%;height:80px;">
    <path d="M0,0 C240,80 480,0 720,40 C960,80 1200,10 1440,50 L1440,80 L0,80 Z" fill="#dce8f2"/>
    <path d="M0,30 C300,80 600,20 900,55 C1100,75 1300,30 1440,60 L1440,80 L0,80 Z" fill="#ccdae8" opacity="0.6"/>
  </svg>
</div>

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
    
</body>
<script>
    // ── Page entrance: fade in dari atas ──
  document.body.style.opacity = '0';
  document.body.style.transform = 'translateY(20px)';
  document.body.style.transition = 'opacity 0.6s ease, transform 0.6s ease';
  window.addEventListener('load', () => {
    requestAnimationFrame(() => {
      document.body.style.opacity = '1';
      document.body.style.transform = 'translateY(0)';
    });
  });

  // ── Smooth scroll ke #cara-kerja ──
  function scrollToCara(e) {
    e.preventDefault();
    const target = document.getElementById('cara-kerja');
    if (target) {
      target.scrollIntoView({ behavior: 'smooth', block: 'start' });
    }
  }

  // ── Scroll reveal (fadeInUp saat masuk viewport) ──
  const revealEls = document.querySelectorAll('.reveal');
  const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        entry.target.classList.add('visible');
        observer.unobserve(entry.target);
      }
    });
  }, { threshold: 0.15 });
  revealEls.forEach(el => observer.observe(el));

  // ── Navigasi dengan fade transition ──
  function handleNavigation(event) {
    event.preventDefault();
    const target = event.currentTarget.getAttribute('href');
    document.body.style.transition = 'opacity .3s ease';
    document.body.style.opacity = '0';
    setTimeout(() => { window.location.href = target; }, 300);
  }

  // ── Cara Kerja step click ──
  const steps = document.querySelectorAll('.how-step');
  steps.forEach((step) => {
    step.addEventListener('click', () => {
      const isActive = step.classList.contains('active');
      steps.forEach(s => s.classList.remove('active'));
      if (!isActive) step.classList.add('active');
    });
    step.addEventListener('mousedown', () => {
      step.style.transform = 'translateX(12px) scale(0.97)';
    });
    step.addEventListener('mouseup',    () => { step.style.transform = ''; });
    step.addEventListener('mouseleave', () => { step.style.transform = ''; });
  });
</script>
</style>
</html>