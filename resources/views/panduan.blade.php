<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Panduan — TUNA</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="{{ asset('css/panduan.css') }}">
</head>
<body>

  <a href="{{ url('/') }}" class="back-btn">
    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="15,18 9,12 15,6"/></svg>
    Kembali ke Beranda
  </a>

  <!-- Hero -->
  <section class="pd-hero">
    <div class="orb orb-1"></div>
    <div class="orb orb-2"></div>
    <div class="orb orb-3"></div>
    <div class="particles">
      <div class="particle"></div><div class="particle"></div><div class="particle"></div>
      <div class="particle"></div><div class="particle"></div><div class="particle"></div>
    </div>
    <div class="pd-hero__inner">
      <div class="pd-hero__tag">📘 Panduan TUNA</div>
      <h1>Semua yang perlu kamu <em>ketahui</em></h1>
      <p>Dari visi misi kami, cara memulai, hingga video tutorial dan FAQ — semua ada di sini untuk membantumu.</p>
      <div class="pd-nav">
        <a class="pd-nav__item" onclick="scrollTo('visi-misi')">
  <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
    <circle cx="12" cy="12" r="10"/>
    <circle cx="12" cy="12" r="6"/>
    <circle cx="12" cy="12" r="2"/>
  </svg>
  Visi Misi
</a>

<a class="pd-nav__item" onclick="scrollTo('cara-mulai')">
  <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
    <path d="M4.5 16.5c-1.5 1.26-2 5-2 5s3.74-.5 5-2c.71-.84.7-2.13-.09-2.91a2.18 2.18 0 00-2.91-.09z"/>
    <path d="M12 15l-3-3a22 22 0 012-3.95A12.88 12.88 0 0122 2c0 2.72-.78 7.5-6 11a22.35 22.35 0 01-4 2z"/>
    <path d="M9 12H4s.55-3.03 2-4c1.62-1.08 5 0 5 0M12 15v5s3.03-.55 4-2c1.08-1.62 0-5 0-5"/>
  </svg>
  Cara Mulai
</a>

<a class="pd-nav__item" onclick="scrollTo('video-tutorial')">
  <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
    <polygon points="23 7 16 12 23 17 23 7"/>
    <rect x="1" y="5" width="15" height="14" rx="2"/>
  </svg>
  Video Tutorial
</a>

<a class="pd-nav__item" onclick="scrollTo('faq')">
  <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
    <circle cx="12" cy="12" r="10"/>
    <path d="M9.09 9a3 3 0 015.83 1c0 2-3 3-3 3"/>
    <line x1="12" y1="17" x2="12.01" y2="17"/>
  </svg>
  FAQ
</a>
      </div>
    </div>
  </section>

  <div class="pd-body">

    <!-- VISI MISI -->
    <div id="visi-misi" class="vm-section reveal">
  <div class="pd-section-title">
    <div class="pd-section-title__icon">
      <svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="#fff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
        <circle cx="12" cy="12" r="10"/>
        <circle cx="12" cy="12" r="6"/>
        <circle cx="12" cy="12" r="2"/>
      </svg>
    </div>
    <div><h2>Visi & Misi</h2><p>Landasan dan tujuan besar yang mendorong kami setiap harinya.</p></div>
  </div>

  <div class="vm-grid">
    <div class="vm-card vm-card--visi">
      <span class="vm-card__icon">
        <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="rgba(255,255,255,0.9)" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
          <polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/>
        </svg>
      </span>
      <div class="vm-card__label">Visi</div>
      <h3>Akses Setara untuk Semua</h3>
      <p>Mewujudkan dunia digital yang inklusif agar setiap orang dapat mengakses teknologi, informasi, dan peluang yang sama, tanpa memandang kondisi fisik maupun kognitif.</p>
      <div class="vm-card__orb"></div>
    </div>

    <div class="vm-card vm-card--misi">
      <span class="vm-card__icon">
        <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="#0078ff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
  <circle cx="12" cy="12" r="10"/>
  <line x1="2" y1="12" x2="22" y2="12"/>
  <path d="M12 2a15.3 15.3 0 014 10 15.3 15.3 0 01-4 10 15.3 15.3 0 01-4-10 15.3 15.3 0 014-10z"/>
</svg>
      </span>
      <div class="vm-card__label">Misi</div>
      <h3>Membangun Jembatan Digital</h3>
      <p>Menghadirkan platform teknologi aksesibilitas yang inovatif, terjangkau, dan mudah digunakan untuk memahami kebutuhan teman-teman disabilitas serta membantu mereka menjalani hidup yang lebih mandiri.</p>
    </div>
  </div>

  <div class="vm-values">
    <div class="vm-value">
      <div class="vm-value__icon">
        <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="#0078ff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
          <circle cx="12" cy="12" r="10"/>
          <path d="M12 8v4M12 16h.01"/>
        </svg>
      </div>
      <div class="vm-value__text">Inklusivitas</div>
    </div>

    <div class="vm-value">
      <div class="vm-value__icon">
        <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="#0078ff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
          <line x1="12" y1="2" x2="12" y2="6"/>
          <path d="M12 6a6 6 0 016 6c0 2.5-1.5 4.5-3 6H9c-1.5-1.5-3-3.5-3-6a6 6 0 016-6z"/>
          <line x1="9" y1="22" x2="15" y2="22"/>
          <line x1="10" y1="19" x2="14" y2="19"/>
        </svg>
      </div>
      <div class="vm-value__text">Inovasi</div>
    </div>

    <div class="vm-value">
      <div class="vm-value__icon">
        <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="#0078ff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
          <path d="M20.84 4.61a5.5 5.5 0 00-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 00-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 000-7.78z"/>
        </svg>
      </div>
      <div class="vm-value__text">Empati</div>
    </div>

    <div class="vm-value">
      <div class="vm-value__icon">
        <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="#0078ff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
          <path d="M17 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2"/>
          <circle cx="9" cy="7" r="4"/>
          <path d="M23 21v-2a4 4 0 00-3-3.87"/>
          <path d="M16 3.13a4 4 0 010 7.75"/>
        </svg>
      </div>
      <div class="vm-value__text">Kolaborasi</div>
    </div>

    <div class="vm-value">
      <div class="vm-value__icon">
        <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="#0078ff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
          <rect x="3" y="11" width="18" height="11" rx="2"/>
          <path d="M7 11V7a5 5 0 0110 0v4"/>
        </svg>
      </div>
      <div class="vm-value__text">Kepercayaan</div>
    </div>

    <div class="vm-value">
      <div class="vm-value__icon">
        <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="#0078ff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
          <circle cx="12" cy="12" r="10"/>
          <line x1="2" y1="12" x2="22" y2="12"/>
          <path d="M12 2a15.3 15.3 0 014 10 15.3 15.3 0 01-4 10 15.3 15.3 0 01-4-10 15.3 15.3 0 014-10z"/>
        </svg>
      </div>
      <div class="vm-value__text">Dampak Sosial</div>
    </div>
  </div>
</div>

    <!-- CARA MULAI -->
    <div id="cara-mulai" class="cm-section reveal" style="transition-delay:0.1s;">
  <div class="pd-section-title">
    <div class="pd-section-title__icon">
      <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="#fff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
  <circle cx="12" cy="12" r="10"/>
  <polygon points="10 8 16 12 10 16 10 8" fill="#fff" stroke="none"/>
</svg>
    </div>
    <div><h2>Cara Mulai</h2><p>4 langkah mudah untuk bergabung dan mulai merasakan manfaat TUNA.</p></div>
  </div>

  <div class="cm-steps">

    <div class="cm-step">
      <div class="cm-step__num">1</div>
      <div class="cm-step__icon">
        <svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="#0078ff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
          <rect x="2" y="3" width="20" height="14" rx="2"/>
          <line x1="8" y1="21" x2="16" y2="21"/>
          <line x1="12" y1="17" x2="12" y2="21"/>
          <path d="M9 8l2 2 4-4"/>
        </svg>
      </div>
      <h4>Jelajahi Website</h4>
      <p>Review fitur-fitur unggulan TUNA melalui website kami dan temukan solusi aksesibilitas yang sesuai untukmu.</p>
    </div>

    <div class="cm-step">
      <div class="cm-step__num">2</div>
      <div class="cm-step__icon">
        <svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="#0078ff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
          <rect x="5" y="2" width="14" height="20" rx="2"/>
          <line x1="12" y1="18" x2="12.01" y2="18"/>
          <path d="M12 6v6"/>
          <path d="M9 9l3 3 3-3"/>
        </svg>
      </div>
      <h4>Download Aplikasi</h4>
      <p>Unduh aplikasi TUNA dari App Store atau Google Play secara gratis dan mulai instalasi di perangkatmu.</p>
    </div>

    <div class="cm-step">
      <div class="cm-step__num">3</div>
      <div class="cm-step__icon">
        <svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="#0078ff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
          <path d="M20 21v-2a4 4 0 00-4-4H8a4 4 0 00-4 4v2"/>
          <circle cx="12" cy="7" r="4"/>
          <path d="M16 11l1.5 1.5L20 10"/>
        </svg>
      </div>
      <h4>Buat Akun & Personalisasi</h4>
      <p>Daftar dengan email atau nomor HP, lalu sesuaikan preferensi aksesibilitas agar pengalaman TUNA terasa personal untukmu.</p>
    </div>

    <div class="cm-step">
      <div class="cm-step__num">4</div>
      <div class="cm-step__icon">
        <svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="#0078ff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
          <path d="M13 2L3 14h9l-1 8 10-12h-9l1-8z"/>
        </svg>
      </div>
      <h4>Mulai Gunakan</h4>
      <p>Nikmati semua fitur TUNA dan rasakan bagaimana teknologi hadir untuk memudahkan hidupmu setiap hari.</p>
    </div>

  </div>

  <div class="cm-cta">
    <a href="{{ route('download') }}" class="btn-blue-outline">
      <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
        <rect x="5" y="2" width="14" height="20" rx="2"/>
        <path d="M12 6v6"/>
        <path d="M9 9l3 3 3-3"/>
      </svg>
      Download Sekarang
    </a>
  </div>
</div>

    <!-- VIDEO TUTORIAL -->
    <div id="video-tutorial" class="vt-section reveal" style="transition-delay:0.2s;">
  <div class="pd-section-title">
    <div class="pd-section-title__icon">
      <svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="#fff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
        <polygon points="23 7 16 12 23 17 23 7"/>
        <rect x="1" y="5" width="15" height="14" rx="2"/>
      </svg>
    </div>
    <div><h2>Video Tutorial</h2><p>Pelajari cara menggunakan TUNA lewat video panduan singkat kami.</p></div>
  </div>

      <div class="vt-grid">
        <div class="vt-card">
          <div class="vt-thumb" style="background:linear-gradient(135deg,#0040c8,#0078ff);">
            <span class="vt-thumb__emoji">📱</span>
            <div class="vt-thumb__overlay"><div class="vt-thumb__play"><svg viewBox="0 0 24 24" fill="currentColor"><path d="M8 5v14l11-7z"/></svg></div></div>
            <span class="vt-thumb__duration">03:24</span>
          </div>
          <div class="vt-info">
            <span class="vt-tag">Pemula</span>
            <h4>Cara Install & Setup TUNA</h4>
            <p>Panduan lengkap instalasi dan pengaturan awal aplikasi TUNA dari nol.</p>
          </div>
        </div>

        <div class="vt-card">
          <div class="vt-thumb" style="background:linear-gradient(135deg,#065f46,#10b981);">
            <span class="vt-thumb__emoji">🗣️</span>
            <div class="vt-thumb__overlay"><div class="vt-thumb__play"><svg viewBox="0 0 24 24" fill="currentColor"><path d="M8 5v14l11-7z"/></svg></div></div>
            <span class="vt-thumb__duration">05:10</span>
          </div>
          <div class="vt-info">
            <span class="vt-tag">Fitur</span>
            <h4>Menggunakan Text to Speech</h4>
            <p>Cara mengaktifkan dan memaksimalkan fitur text-to-speech di TUNA.</p>
          </div>
        </div>

        <div class="vt-card">
          <div class="vt-thumb" style="background:linear-gradient(135deg,#7c3aed,#a78bfa);">
            <span class="vt-thumb__emoji">🤖</span>
            <div class="vt-thumb__overlay"><div class="vt-thumb__play"><svg viewBox="0 0 24 24" fill="currentColor"><path d="M8 5v14l11-7z"/></svg></div></div>
            <span class="vt-thumb__duration">07:45</span>
          </div>
          <div class="vt-info">
            <span class="vt-tag">AI Trixie</span>
            <h4>Berkenalan dengan AI Trixie</h4>
            <p>Eksplorasi kemampuan AI Trixie dan cara mendapatkan bantuan terbaik darinya.</p>
          </div>
        </div>

        <div class="vt-card">
          <div class="vt-thumb" style="background:linear-gradient(135deg,#9a3412,#fb923c);">
            <span class="vt-thumb__emoji">🛒</span>
            <div class="vt-thumb__overlay"><div class="vt-thumb__play"><svg viewBox="0 0 24 24" fill="currentColor"><path d="M8 5v14l11-7z"/></svg></div></div>
            <span class="vt-thumb__duration">04:30</span>
          </div>
          <div class="vt-info">
            <span class="vt-tag">Marketplace</span>
            <h4>Belanja di Marketplace TUNA</h4>
            <p>Cara menemukan dan membeli produk aksesibilitas di marketplace TUNA.</p>
          </div>
        </div>

        <div class="vt-card">
          <div class="vt-thumb" style="background:linear-gradient(135deg,#0e7490,#22d3ee);">
            <span class="vt-thumb__emoji">👁️</span>
            <div class="vt-thumb__overlay"><div class="vt-thumb__play"><svg viewBox="0 0 24 24" fill="currentColor"><path d="M8 5v14l11-7z"/></svg></div></div>
            <span class="vt-thumb__duration">06:15</span>
          </div>
          <div class="vt-info">
            <span class="vt-tag">Fitur</span>
            <h4>Object Detection untuk Tunanetra</h4>
            <p>Panduan menggunakan fitur deteksi objek real-time di lingkungan sehari-hari.</p>
          </div>
        </div>

        <div class="vt-card">
          <div class="vt-thumb" style="background:linear-gradient(135deg,#be185d,#f472b6);">
            <span class="vt-thumb__emoji">👑</span>
            <div class="vt-thumb__overlay"><div class="vt-thumb__play"><svg viewBox="0 0 24 24" fill="currentColor"><path d="M8 5v14l11-7z"/></svg></div></div>
            <span class="vt-thumb__duration">04:55</span>
          </div>
          <div class="vt-info">
            <span class="vt-tag">Premium</span>
            <h4>Upgrade ke Premium & Manfaatnya</h4>
            <p>Cara upgrade ke paket Premium dan cara memaksimalkan semua fitur eksklusifnya.</p>
          </div>
        </div>
      </div>
    </div>

    <!-- FAQ -->
    <div id="faq" class="faq-section reveal" style="transition-delay:0.3s;">
  <div class="pd-section-title">
    <div class="pd-section-title__icon">
      <svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="#fff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
        <circle cx="12" cy="12" r="10"/>
        <path d="M9.09 9a3 3 0 015.83 1c0 2-3 3-3 3"/>
        <line x1="12" y1="17" x2="12.01" y2="17"/>
      </svg>
    </div>
    <div><h2>FAQ</h2><p>Pertanyaan yang paling sering ditanyakan oleh pengguna TUNA.</p></div>
  </div>

<div class="faq-list">
  <div class="faq-item" onclick="this.classList.toggle('open')">
    <div class="faq-q">Apa itu aplikasi TUNA? <span class="faq-arrow">▼</span></div>
    <div class="faq-a">TUNA (Transforming User Needs into Access) adalah aplikasi digital berbasis web dan mobile yang dirancang untuk membantu penyandang disabilitas mengakses teknologi dengan lebih mudah, mandiri, dan setara melalui berbagai fitur aksesibilitas.</div>
  </div>

  <div class="faq-item" onclick="this.classList.toggle('open')">
    <div class="faq-q">Siapa saja yang dapat menggunakan TUNA? <span class="faq-arrow">▼</span></div>
    <div class="faq-a">TUNA dirancang untuk berbagai pengguna, termasuk tunanetra, tunarungu, dan tunawicara. Selain itu, orang tua anak disabilitas, sekolah inklusi, serta rumah sakit atau klinik juga dapat memanfaatkan platform ini untuk komunikasi dan akses layanan yang lebih mudah.</div>
  </div>

  <div class="faq-item" onclick="this.classList.toggle('open')">
    <div class="faq-q">Fitur apa saja yang tersedia di TUNA? <span class="faq-arrow">▼</span></div>
    <div class="faq-a">TUNA menyediakan berbagai fitur seperti text-to-speech, speech-to-text, komunikasi Call & Chat, AI assistant, serta navigasi Camera On Point untuk membantu pengguna mengakses informasi, berkomunikasi, dan bergerak dengan lebih mudah.</div>
  </div>

  <div class="faq-item" onclick="this.classList.toggle('open')">
    <div class="faq-q">Apakah TUNA menggunakan teknologi AI? <span class="faq-arrow">▼</span></div>
    <div class="faq-a">Ya. TUNA memanfaatkan teknologi Artificial Intelligence (AI) untuk membantu kebutuhan pengguna seperti fitur tanya jawab, navigasi berbasis kamera, serta personalisasi layanan agar pengalaman penggunaan menjadi lebih efektif.</div>
  </div>

  <div class="faq-item" onclick="this.classList.toggle('open')">
    <div class="faq-q">Apakah aplikasi TUNA gratis digunakan? <span class="faq-arrow">▼</span></div>
    <div class="faq-a">TUNA menggunakan model freemium. Pengguna dapat menggunakan fitur dasar secara gratis. Tersedia juga paket Premium dengan fitur tambahan seperti AI yang lebih lengkap, mode offline penuh, dan pengalaman tanpa iklan.</div>
  </div>

  <div class="faq-item" onclick="this.classList.toggle('open')">
    <div class="faq-q">Bagaimana TUNA membantu kemandirian pengguna disabilitas? <span class="faq-arrow">▼</span></div>
    <div class="faq-a">Melalui fitur aksesibilitas seperti text-to-speech, speech-to-text, navigasi kamera, serta komunikasi digital, TUNA membantu pengguna mengakses informasi, berkomunikasi, dan beraktivitas secara lebih mandiri tanpa harus selalu bergantung pada orang lain.</div>
  </div>
</div>
</div>

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
<script>
  // Scroll reveal
  const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        entry.target.classList.add('visible');
        observer.unobserve(entry.target);
      }
    });
  }, { threshold: 0.1 });

  document.querySelectorAll('.reveal').forEach(el => observer.observe(el));

  // Smooth scroll to section
  function scrollTo(id) {
    document.getElementById(id).scrollIntoView({ behavior: 'smooth' });
  }

  // Stagger vt cards
  document.querySelectorAll('.vt-card').forEach((card, i) => {
    card.style.opacity = '0';
    card.style.transform = 'translateY(24px)';
    card.style.transition = `all 0.4s cubic-bezier(0.25,0.46,0.45,0.94) ${i * 0.08}s`;
    new IntersectionObserver((entries) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          entry.target.style.opacity = '1';
          entry.target.style.transform = 'translateY(0)';
        }
      });
    }, { threshold: 0.1 }).observe(card);
  });

  // Stagger cm steps
  document.querySelectorAll('.cm-step').forEach((step, i) => {
    step.style.opacity = '0';
    step.style.transform = 'translateY(24px)';
    step.style.transition = `all 0.5s cubic-bezier(0.25,0.46,0.45,0.94) ${i * 0.1}s`;
    new IntersectionObserver((entries) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          entry.target.style.opacity = '1';
          entry.target.style.transform = 'translateY(0)';
        }
      });
    }, { threshold: 0.1 }).observe(step);
  });
</script>

</body>
</html>
