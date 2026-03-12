<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>TUNA – Camera On Point</title>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/cameraon.css') }}">
</head>
<body>

{{-- ══ LANDING PAGE — bungkus SEMUA konten landing sampai cta-strip ══ --}}
<div id="landing-page">

  <a href="{{ url('/') }}" class="back-btn reveal">
    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
      <polyline points="15,18 9,12 15,6"/>
    </svg>
    Kembali ke Beranda
  </a>

  <!-- HERO -->
  <section class="hero reveal">
    <div class="hero-inner">
      <div class="hero-text">
        <div class="hero-tag reveal-left">
          <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
            <path d="M23 19a2 2 0 01-2 2H3a2 2 0 01-2-2V8a2 2 0 012-2h4l2-3h6l2 3h4a2 2 0 012 2z"/>
            <circle cx="12" cy="13" r="4"/>
          </svg>
          Camera On Point
        </div>
        <h1 class="reveal-left">Navigasi canggih,<br><em>rasakan dunia sekitar</em></h1>
        <p class="reveal-left" style="transition-delay:0.2s">Alat navigasi berbasis AI yang memberikan arahan suara secara real-time untuk membantu pengguna berjalan dan mengenali lingkungan sekitar. Dibuat khusus untuk teman-teman tunanetra agar dapat bergerak lebih mandiri dan setara.</p>
        <div class="hero-pills reveal-left" style="transition-delay:0.3s">
          <div class="hero-pill">
  <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="#fff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
    <path d="M23 19a2 2 0 01-2 2H3a2 2 0 01-2-2V8a2 2 0 012-2h4l2-3h6l2 3h4a2 2 0 012 2z"/>
    <circle cx="12" cy="13" r="4"/>
  </svg>
  Object Detection
</div>

<div class="hero-pill">
  <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="#fff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
    <polygon points="11 5 6 9 2 9 2 15 6 15 11 19 11 5"/>
    <path d="M19.07 4.93a10 10 0 010 14.14"/>
    <path d="M15.54 8.46a5 5 0 010 7.07"/>
  </svg>
  Text-to-Speech
</div>

<div class="hero-pill">
  <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="#fff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
    <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/>
    <circle cx="12" cy="10" r="3"/>
  </svg>
  Navigasi Real-time
</div>

<div class="hero-pill">
  <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="#fff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
    <path d="M18 11V6a2 2 0 00-2-2v0a2 2 0 00-2 2v0"/>
    <path d="M14 10V4a2 2 0 00-2-2v0a2 2 0 00-2 2v2"/>
    <path d="M10 10.5V6a2 2 0 00-2-2v0a2 2 0 00-2 2v8"/>
    <path d="M18 8a2 2 0 114 0v6a8 8 0 01-8 8h-2c-2.8 0-4.5-.86-5.99-2.34l-3.6-3.6a2 2 0 012.83-2.82L7 15"/>
  </svg>
  Isyarat ke Teks
</div>
        </div>
        <div class="hero-cta reveal-left" style="transition-delay:0.4s">
          <a href="{{ route('download') }}" class="btn-white">
            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
              <path d="M23 19a2 2 0 01-2 2H3a2 2 0 01-2-2V8a2 2 0 012-2h4l2-3h6l2 3h4a2 2 0 012 2z"/>
              <circle cx="12" cy="13" r="4"/>
            </svg>
            Coba Gratis Sekarang
          </a>
          <a href="#cara-kerja" class="btn-outline-white">Cara Kerja →</a>
        </div>
      </div>

      <!-- TROTOAR MOCKUP -->
      <div class="hero-visual reveal-scale" style="transition-delay:0.3s">
        <div class="cam-phone">
          <div class="cam-notch"></div>
          <div class="cam-screen">
            <div class="tw-sky"></div>
            <div class="tw-buildings">
              <div class="tw-building tw-b1"></div>
              <div class="tw-building tw-b2"></div>
              <div class="tw-building tw-b3"></div>
              <div class="tw-building tw-b4"></div>
              <div class="tw-building tw-b5"></div>
              <div class="tw-building tw-b6"></div>
              <div class="tw-building tw-b7"></div>
            </div>
            <div class="tw-road"></div>
            <div class="tw-sidewalk-l"><div class="tw-guide"></div></div>
            <div class="tw-sidewalk-r"><div class="tw-guide"></div></div>
            <div class="tw-tree tw-tree-l"></div>
            <div class="tw-tree tw-tree-r"></div>
            <div class="tw-person"></div>
            <div class="tw-pole"></div>
            <div class="det person"><span class="det-lbl">Orang · 2.1m</span></div>
            <div class="det obstacle"><span class="det-lbl">Halangan</span></div>
            <div class="det path"><span class="det-lbl">Jalur aman</span></div>
            <div class="scanline"></div>
            <div class="corner tl"></div>
            <div class="corner tr"></div>
            <div class="corner bl"></div>
            <div class="corner br"></div>
            <div class="hud-top">
              <div class="hud-rec"><div class="hud-rec-dot"></div> REC</div>
              <div class="hud-mode">NAVIGASI AI</div>
            </div>
            <div class="hud-bot">
              <div class="hud-voice">
                <div class="wave"><span></span><span></span><span></span><span></span><span></span></div>
                "Trotoar aman, lanjutkan lurus 4 meter"
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- KONTEN -->
  <div class="section">

    <!-- STATS -->
    <div class="stats-strip reveal">
      <div class="stat-item">
        <div class="stat-num">11.000+</div>
        <div class="stat-lbl">Target Pengguna</div>
      </div>
      <div class="stat-item">
        <div class="stat-num">Real-time</div>
        <div class="stat-lbl">Deteksi Objek & Arahan Suara</div>
      </div>
      <div class="stat-item">
        <div class="stat-num">Gratis</div>
        <div class="stat-lbl">Object Detection & Navigasi Dasar</div>
      </div>
      <div class="stat-item">
        <div class="stat-num">Rp34rb</div>
        <div class="stat-lbl">Akses Premium / Bulan</div>
      </div>
    </div>

    <!-- FITUR LAYANAN -->
   {{-- ══ FITUR LAYANAN ══ --}}
    <div class="fitur-section reveal">
      <div class="fitur-head">
        <span class="sec-tag">Fitur Layanan</span>
        <h2 class="sec-title">Fitur <span>Camera On Point</span></h2>
        <p class="sec-desc">Fitur dasar tersedia gratis untuk semua pengguna. Upgrade ke Premium untuk pengalaman lebih lengkap tanpa iklan.</p>
      </div>
      <div class="fitur-grid">

        {{-- Object Detection --}}
        <div class="fitur-card free stagger-item delay-1">
          <div class="fitur-icon">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#fff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
    <path d="M23 19a2 2 0 01-2 2H3a2 2 0 01-2-2V8a2 2 0 012-2h4l2-3h6l2 3h4a2 2 0 012 2z"/>
    <circle cx="12" cy="13" r="4"/>
  </svg>
          </div>
          <h4>Object Detection</h4>
          <p>Mendeteksi orang, kendaraan, halangan, dan benda di sekitar pengguna secara real-time menggunakan kamera HP.</p>
          <span class="fitur-badge badge-free">✓ Gratis</span>
        </div>

        {{-- Text-to-Speech --}}
        <div class="fitur-card free stagger-item delay-2">
          <div class="fitur-icon">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#fff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
    <polygon points="11 5 6 9 2 9 2 15 6 15 11 19 11 5"/>
    <path d="M19.07 4.93a10 10 0 010 14.14"/>
    <path d="M15.54 8.46a5 5 0 010 7.07"/>
  </svg>
          </div>
          <h4>Text-to-Speech</h4>
          <p>Setiap objek yang terdeteksi langsung disuarakan — meningkatkan kemandirian tanpa ketergantungan bantuan orang lain.</p>
          <span class="fitur-badge badge-free">✓ Gratis</span>
        </div>

        {{-- Navigasi Real-time --}}
        <div class="fitur-card free stagger-item delay-3">
          <div class="fitur-icon">
           <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#fff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
    <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/>
    <circle cx="12" cy="10" r="3"/>
  </svg>
          </div>
          <h4>Navigasi Real-time</h4>
          <p>Arahan berjalan secara langsung agar pengguna bisa merasakan dan menjelajahi dunia sekitar dengan bantuan panduan tepat.</p>
          <span class="fitur-badge badge-free">✓ Gratis</span>
        </div>

        {{-- Speech-to-Text & Isyarat --}}
        <div class="fitur-card stagger-item delay-4">
          <div class="fitur-icon">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#fff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
    <rect x="9" y="2" width="6" height="11" rx="3"/>
    <path d="M19 10v2a7 7 0 01-14 0v-2"/>
    <line x1="12" y1="19" x2="12" y2="22"/>
    <line x1="9" y1="22" x2="15" y2="22"/>
  </svg>
          </div>
          <h4>Speech-to-Text & Isyarat ke Teks</h4>
          <p>Konversi suara dan isyarat ke teks untuk meningkatkan aksesibilitas komunikasi bagi pengguna tunarungu dan tunawicara.</p>
          <span class="fitur-badge badge-premium">★ Premium</span>
        </div>

        {{-- Offline Mode --}}
        <div class="fitur-card stagger-item delay-5">
          <div class="fitur-icon">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#fff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
    <rect x="5" y="2" width="14" height="20" rx="2"/>
    <circle cx="12" cy="16" r="1" fill="#fff"/>
    <line x1="1" y1="1" x2="23" y2="23"/>
  </svg>
          </div>
          <h4>Offline Mode Penuh</h4>
          <p>Gunakan seluruh fitur navigasi dan deteksi tanpa koneksi internet — cocok untuk area dengan sinyal terbatas di Kalimantan Timur.</p>
          <span class="fitur-badge badge-premium">★ Premium</span>
        </div>

        {{-- AI Assistant --}}
        <div class="fitur-card stagger-item delay-6">
          <div class="fitur-icon">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#fff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
    <rect x="3" y="8" width="18" height="12" rx="3"/>
    <circle cx="9" cy="14" r="1.5" fill="#fff" stroke="none"/>
    <circle cx="15" cy="14" r="1.5" fill="#fff" stroke="none"/>
    <path d="M9 5a3 3 0 016 0v3H9V5z"/>
  </svg>
          </div>
          <h4>AI Assistant Lebih Lengkap</h4>
          <p>Memanfaatkan Artificial Intelligence untuk memenuhi kebutuhan personal secara lebih efektif dan efisien sesuai tujuan TUNA.</p>
          <span class="fitur-badge badge-premium">★ Premium</span>
        </div>

      </div>
    </div>{{-- end .fitur-section --}}

    {{-- ══ CARA KERJA ══ --}}
    <div class="how-section reveal" id="cara-kerja">
      <div style="text-align:center;margin-bottom:12px;"><span class="sec-tag">Cara Kerja</span></div>
      <h2 class="sec-title">Bagaimana <span>Camera On Point bekerja?</span></h2>
      <p class="sec-desc">Empat langkah sederhana yang membantu pengguna berjalan dan merasakan dunia sekitar dengan bantuan arahan.</p>
      <div class="steps-horiz">

        <div class="step-card stagger-item delay-1">
          <div class="step-num">1</div>
          <div class="step-body">
            <h4>Buka Fitur Camera On Point</h4>
            <p>Pengguna membuka fitur Camera On Point di aplikasi, lalu kamera perangkat akan aktif secara otomatis.</p>
          </div>
          <div class="step-arrow">→</div>
        </div>

        <div class="step-card stagger-item delay-2">
          <div class="step-num">2</div>
          <div class="step-body">
            <h4>Arahkan Kamera ke Depan</h4>
            <p>Arahkan kamera ke jalan atau lingkungan di depan pengguna agar aplikasi dapat melihat objek di sekitar.</p>
          </div>
          <div class="step-arrow">→</div>
        </div>

        <div class="step-card stagger-item delay-3">
          <div class="step-num">3</div>
          <div class="step-body">
            <h4>Biarkan Kamera Mendeteksi Lingkungan</h4>
            <p>Aplikasi akan memindai objek di sekitar seperti orang, rintangan, atau benda di depan pengguna.</p>
          </div>
          <div class="step-arrow">→</div>
        </div>

        <div class="step-card stagger-item delay-4">
          <div class="step-num">4</div>
          <div class="step-body">
            <h4>Ikuti Arahan Suara</h4>
            <p>Aplikasi akan memberikan arahan suara secara langsung untuk membantu pengguna berjalan lebih aman dan mandiri.</p>
          </div>
          <div class="step-arrow">✓</div>
        </div>

      </div>
    </div>{{-- end .how-section --}}

  </div>{{-- end .section --}}

</div>{{-- end #landing-page --}}

  <!-- ============================================================
       FOOTER
  ============================================================ -->

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
  </div>


@verbatim
<script>
// ─── Landing reveal ───────────────────────────────────────────
const observer = new IntersectionObserver((entries) => {
  entries.forEach(entry => {
    if (entry.isIntersecting) {
      entry.target.classList.add('visible');
      entry.target.querySelectorAll('.stagger-item').forEach((item, i) => {
        setTimeout(() => item.classList.add('visible'), i * 100);
      });
      observer.unobserve(entry.target);
    }
  });
}, { threshold: 0.1 });

document.querySelectorAll('.reveal, .reveal-left, .reveal-right, .reveal-scale').forEach(el => observer.observe(el));

document.querySelectorAll('a[href^="#"]').forEach(anchor => {
  anchor.addEventListener('click', function(e) {
    const href = this.getAttribute('href');
    if (href === '#') return;
    e.preventDefault();
    const target = document.getElementById(href.substring(1));
    if (target) target.scrollIntoView({ behavior: 'smooth', block: 'start' });
  });
});

// ─── Page transition ──────────────────────────────────────────
function launchNavApp() {
  const pt    = document.getElementById('page-transition');
  const fill  = document.getElementById('pt-fill');
  const ptTxt = document.getElementById('pt-text');
  pt.classList.add('active');
  setTimeout(function(){ fill.style.width = '40%';  ptTxt.textContent = 'Menyiapkan AI...'; }, 50);
  setTimeout(function(){ fill.style.width = '75%';  ptTxt.textContent = 'Menghubungkan kamera...'; }, 400);
  setTimeout(function(){ fill.style.width = '100%'; ptTxt.textContent = 'Siap!'; }, 750);
  setTimeout(function(){
    document.getElementById('landing-page').style.display = 'none';
    document.getElementById('nav-app-page').classList.add('active');
    pt.classList.remove('active');
    fill.style.width = '0';
    setVoiceText('Kamera siap. Tekan tombol untuk mulai navigasi.');
  }, 1100);
}

function closeNavApp() {
  stopCamera();
  document.getElementById('nav-app-page').classList.remove('active');
  document.getElementById('landing-page').style.display = '';
  window.scrollTo({ top: 0, behavior: 'smooth' });
}

// ─── Data ─────────────────────────────────────────────────────
const DETECTION_POOL = [
  { label:"Orang",        color:"#00ff88", textColor:"#0d1b2a", dist:"2.1m", x:38, y:25, w:16, h:30 },
  { label:"Kursi",        color:"#fbbf24", textColor:"#0d1b2a", dist:"1.4m", x:60, y:42, w:18, h:26 },
  { label:"Meja",         color:"#fbbf24", textColor:"#0d1b2a", dist:"1.8m", x:10, y:48, w:28, h:20 },
  { label:"Pintu",        color:"#00c6ff", textColor:"#0d1b2a", dist:"3.5m", x:72, y:20, w:13, h:48 },
  { label:"Halangan",     color:"#ff6b35", textColor:"#fff",    dist:"0.8m", x:44, y:55, w:11, h:17 },
  { label:"Tangga",       color:"#ff4444", textColor:"#fff",    dist:"2.0m", x:20, y:35, w:38, h:28 },
  { label:"Sepeda Motor", color:"#a78bfa", textColor:"#fff",    dist:"3.0m", x:5,  y:40, w:23, h:28 },
  { label:"Jalur Aman",   color:"#00c6ff", textColor:"#0d1b2a", dist:null,   x:30, y:65, w:38, h:14 },
  { label:"Kendaraan",    color:"#f472b6", textColor:"#fff",    dist:"4.2m", x:55, y:30, w:25, h:22 },
  { label:"Tiang",        color:"#fb923c", textColor:"#fff",    dist:"1.2m", x:80, y:15, w:5,  h:55 },
];

const VOICE_LINES = [
  "Trotoar aman, lanjutkan lurus 4 meter",
  "Perhatian! Ada halangan 0.8 meter di depan",
  "Pintu terdeteksi 3.5 meter ke kanan",
  "Ada orang berjalan 2.1 meter di depan Anda",
  "Jalur aman terdeteksi, lanjutkan ke kiri",
  "Tangga terdeteksi 2 meter di depan, hati-hati",
  "Meja terdeteksi 1.8 meter di kiri",
  "Kendaraan terdeteksi 4.2 meter di kanan depan",
  "Tiang lampu 1.2 meter di kanan, belok sedikit ke kiri",
  "Area aman terdeteksi, lanjutkan lurus",
];

// ─── State ────────────────────────────────────────────────────
let cameraActive      = false;
let mediaStream       = null;
let detectionInterval = null;
let scanInterval      = null;
let frameCount        = 0;
let voiceIndex        = 0;
let isSpeaking        = false;
let currentMode       = 'navigasi';
let scanY             = 0;
let compassAngle      = 0;
let muted             = false;
let alertTimeout      = null;

function getRandomDetections() {
  const shuffled = [...DETECTION_POOL].sort(function(){ return Math.random() - 0.5; });
  return shuffled.slice(0, Math.floor(Math.random() * 3) + 2);
}

// ─── Camera ───────────────────────────────────────────────────
async function toggleCamera() {
  if (cameraActive) { stopCamera(); return; }
  await startCamera();
}

async function startCamera() {
  try {
    const stream = await navigator.mediaDevices.getUserMedia({
      video: { facingMode: { ideal: 'environment' }, width: { ideal: 1280 }, height: { ideal: 720 } }
    });
    mediaStream = stream;
    const video = document.getElementById('nap-video');
    video.srcObject = stream;
    await video.play();
    video.classList.add('active');
    document.getElementById('nap-placeholder').classList.add('hidden');
    setCameraActive(true);
    setVoiceText('Kamera aktif. Mendeteksi lingkungan sekitar...');
    startLoops();
  } catch(err) {
    const msg = err.message.includes('NotAllowed')
      ? 'Akses kamera ditolak. Izinkan kamera di browser Anda.'
      : 'Kamera tidak tersedia di perangkat ini.';
    document.getElementById('nap-placeholder').classList.remove('hidden');
    document.getElementById('nap-placeholder').querySelector('h3').textContent = '⚠️ ' + msg;
    setVoiceText(msg);
  }
}

function stopCamera() {
  if (mediaStream) { mediaStream.getTracks().forEach(function(t){ t.stop(); }); mediaStream = null; }
  clearInterval(detectionInterval);
  clearInterval(scanInterval);
  const video = document.getElementById('nap-video');
  video.srcObject = null;
  video.classList.remove('active');
  document.getElementById('nap-placeholder').classList.remove('hidden');
  document.getElementById('nap-placeholder').querySelector('h3').textContent = 'Kamera Belum Aktif';
  clearDetectionBoxes();
  document.getElementById('nap-det-panel').innerHTML = '';
  document.getElementById('nap-obj-count').textContent = '0';
  document.getElementById('nap-scanline').style.opacity = '0';
  document.getElementById('nap-compass').classList.remove('show');
  document.getElementById('nap-mode-badge').style.display = 'none';
  document.getElementById('nap-rec-badge').style.display = 'none';
  setCameraActive(false);
  setVoiceText('Kamera dimatikan.');
  if (window.speechSynthesis) window.speechSynthesis.cancel();
}

function setCameraActive(active) {
  cameraActive = active;
  const btn   = document.getElementById('nap-cam-btn');
  const dot   = document.getElementById('nap-dot');
  const label = document.getElementById('nap-status-label');
  if (active) {
    btn.classList.add('active'); btn.textContent = '⏹';
    dot.classList.add('live');
    label.textContent = 'LIVE · NAVIGASI AI';
    document.getElementById('nap-mode-badge').style.display = '';
    document.getElementById('nap-rec-badge').style.display = '';
    document.getElementById('nap-compass').classList.add('show');
  } else {
    btn.classList.remove('active'); btn.textContent = '📷';
    dot.classList.remove('live');
    label.textContent = 'KAMERA MATI';
  }
}

// ─── Loops ────────────────────────────────────────────────────
function startLoops() {
  scanInterval = setInterval(function() {
    scanY = (scanY + 1.8) % 100;
    const sl = document.getElementById('nap-scanline');
    sl.style.top     = scanY + '%';
    sl.style.opacity = (scanY > 4 && scanY < 96) ? '0.7' : '0';
    compassAngle = (compassAngle + 0.4) % 360;
    document.getElementById('nap-compass-needle').style.transform = 'rotate(' + compassAngle + 'deg)';
  }, 30);

  detectionInterval = setInterval(function() {
    frameCount++;
    document.getElementById('nap-frame-count').textContent = frameCount;

    const dets = getRandomDetections();
    renderDetectionBoxes(dets);
    renderDetPanel(dets);
    document.getElementById('nap-obj-count').textContent = dets.length;

    const hasObstacle = dets.find(function(d){ return d.label === 'Halangan' || d.label === 'Tiang'; });
    if (hasObstacle) showAlert('⚠️ Halangan Terdeteksi!');
    const prox = hasObstacle ? 0.85 : (0.2 + Math.random() * 0.4);
    document.getElementById('nap-proximity-bar').style.transform = 'scaleX(' + prox + ')';

    const line = VOICE_LINES[voiceIndex % VOICE_LINES.length];
    voiceIndex++;
    setVoiceText(line);
    speak(line);
  }, 3200);
}

// ─── Render ───────────────────────────────────────────────────
function renderDetectionBoxes(dets) {
  clearDetectionBoxes();
  const vp = document.getElementById('nap-viewport');
  dets.forEach(function(d, i) {
    const box = document.createElement('div');
    box.className             = 'nap-detection-box';
    box.style.left            = d.x + '%';
    box.style.top             = d.y + '%';
    box.style.width           = d.w + '%';
    box.style.height          = d.h + '%';
    box.style.borderColor     = d.color;
    box.style.animationDelay  = (i * 0.3) + 's';
    const lbl = document.createElement('div');
    lbl.className        = 'nap-det-label';
    lbl.style.background = d.color;
    lbl.style.color      = d.textColor;
    lbl.innerHTML        = d.label + (d.dist ? '<span style="opacity:.65"> · ' + d.dist + '</span>' : '');
    box.appendChild(lbl);
    vp.appendChild(box);
  });
}

function clearDetectionBoxes() {
  document.querySelectorAll('.nap-detection-box').forEach(function(b){ b.remove(); });
}

function renderDetPanel(dets) {
  const panel = document.getElementById('nap-det-panel');
  panel.innerHTML = '';
  dets.forEach(function(d) {
    const pill = document.createElement('div');
    pill.className = 'nap-det-pill';
    pill.style.borderColor = d.color + '50';
    pill.innerHTML =
      '<div class="nap-det-dot" style="background:' + d.color + '"></div>' +
      '<span class="nap-det-name">' + d.label + '</span>' +
      (d.dist ? '<span class="nap-det-dist">' + d.dist + '</span>' : '');
    panel.appendChild(pill);
  });
}

// ─── Helpers ──────────────────────────────────────────────────
function showAlert(msg) {
  const el = document.getElementById('nap-alert');
  el.textContent = msg;
  el.classList.add('show');
  if (alertTimeout) clearTimeout(alertTimeout);
  alertTimeout = setTimeout(function(){ el.classList.remove('show'); }, 2500);
}

function setVoiceText(text) {
  document.getElementById('nap-voice-text').textContent = text;
}

function speak(text) {
  if (muted) return;
  if (!window.speechSynthesis) return;
  if (window.speechSynthesis.speaking) return;
  const utter = new SpeechSynthesisUtterance(text);
  utter.lang  = 'id-ID';
  utter.rate  = 1.05;
  utter.onstart = function(){ setSpeaking(true); };
  utter.onend   = function(){ setSpeaking(false); };
  window.speechSynthesis.speak(utter);
}

function setSpeaking(val) {
  isSpeaking = val;
  document.querySelectorAll('.nap-wave-bar').forEach(function(b) {
    b.style.opacity = val ? '1' : '0.25';
    b.classList.toggle('speaking', val);
  });
  const btn = document.getElementById('nap-sound-btn');
  btn.textContent = val ? '🔊' : '🔇';
  btn.classList.toggle('speaking', val);
}

function muteAll() {
  muted = !muted;
  if (window.speechSynthesis) window.speechSynthesis.cancel();
  setSpeaking(false);
}

function switchMode(btn) {
  document.querySelectorAll('.nap-mode-btn').forEach(function(b){ b.classList.remove('active'); });
  btn.classList.add('active');
  currentMode = btn.dataset.mode;
  const labels = { navigasi:'🧭 Navigasi', deteksi:'🔍 Deteksi Objek', baca:'📖 Baca Teks' };
  document.getElementById('nap-mode-badge').textContent = labels[currentMode];
}
</script>
@endverbatim

</body>
</html>