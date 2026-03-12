<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Berlangganan — TUNA</title>
  <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="{{ asset('css/langganan.css') }}">
</head>
<body>
  <!-- Back Button -->
  <a href="{{ url('/') }}" class="back-btn">
    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
      <polyline points="15,18 9,12 15,6"/>
    </svg>
    Kembali ke Beranda
  </a>

  <!-- Hero -->
  <section class="sub-hero">
    <div class="sub-hero__orb sub-hero__orb-1"></div>
    <div class="sub-hero__orb sub-hero__orb-2"></div>
    <div class="sub-hero__orb sub-hero__orb-3"></div>
    <div class="sub-hero__inner">
      <div class="sub-hero__tag">💙 Berlangganan TUNA</div>
      <h1>Pilih paket yang <em>tepat</em><br>untuk kamu</h1>
      <p>Mulai gratis dan upgrade kapan saja sesuai kebutuhan Anda. Setiap paket dirancang agar teknologi aksesibilitas mudah dijangkau semua orang.</p>
    </div>
  </section>

  <!-- Cards + Content -->
  <div class="sub-body">

    <!-- 3 Cards -->
    <div class="sub-cards">

      <!-- FREE -->
      <div class="price-card">
        <div>
          <div class="card-icon">
  <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="#0078ff" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
    <polyline points="20 12 20 22 4 22 4 12"/>
    <rect x="2" y="7" width="20" height="5"/>
    <line x1="12" y1="22" x2="12" y2="7"/>
    <path d="M12 7H7.5a2.5 2.5 0 010-5C11 2 12 7 12 7z"/>
    <path d="M12 7h4.5a2.5 2.5 0 000-5C13 2 12 7 12 7z"/>
  </svg>
</div>
          <div class="card-name">Free</div>
          <div class="card-desc">Untuk semua pengguna yang ingin mulai menggunakan TUNA tanpa biaya apapun.</div>
        </div>
        <div class="card-price">
          <span class="price-free-text">Gratis</span>
          <span class="price-sub">Selamanya · Tanpa kartu kredit</span>
        </div>
        <div class="card-features">
          <div class="feat"><div class="feat__dot"><svg viewBox="0 0 12 12" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="2,6 5,9 10,3"/></svg></div>Text to Speech dasar</div>
          <div class="feat"><div class="feat__dot"><svg viewBox="0 0 12 12" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="2,6 5,9 10,3"/></svg></div>Object Detection standar</div>
          <div class="feat"><div class="feat__dot"><svg viewBox="0 0 12 12" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="2,6 5,9 10,3"/></svg></div>Navigasi dasar</div>
          <div class="feat"><div class="feat__dot"><svg viewBox="0 0 12 12" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="2,6 5,9 10,3"/></svg></div>Akses marketplace</div>
          <div class="feat"><div class="feat__dot"><svg viewBox="0 0 12 12" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="2,6 5,9 10,3"/></svg></div>Dukungan komunitas</div>
        </div>
        <a href="{{ route('download') }}" class="btn-free">Mulai Gratis</a>
      </div>

      <!-- PREMIUM BULANAN -->
      <div class="price-card price-card--premium">
        <div class="popular-badge">⭐ Paling Populer</div>
        <div>
          <div class="card-icon">
  <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="#fff" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
    <path d="M2 19h20M2 19l3-9 5 5 2-9 2 9 5-5 3 9"/>
    <circle cx="12" cy="5" r="1.5" fill="#fff"/>
    <circle cx="4.5" cy="13.5" r="1.5" fill="#fff"/>
    <circle cx="19.5" cy="13.5" r="1.5" fill="#fff"/>
  </svg>
</div>
          <div class="card-name">Premium Bulanan</div>
          <div class="card-desc">Akses penuh semua fitur TUNA dengan pembayaran fleksibel setiap bulan.</div>
        </div>
        <div class="card-price">
          <div class="price-row">
            <span class="price-rp">Rp</span>
            <span class="price-num">34.000</span>
          </div>
          <span class="price-sub">/bulan · Batalkan kapan saja</span>
        </div>
        <div class="card-features">
          <div class="feat"><div class="feat__dot"><svg viewBox="0 0 12 12" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="2,6 5,9 10,3"/></svg></div>Semua fitur Free</div>
          <div class="feat"><div class="feat__dot"><svg viewBox="0 0 12 12" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="2,6 5,9 10,3"/></svg></div>AI Trixie lengkap</div>
          <div class="feat"><div class="feat__dot"><svg viewBox="0 0 12 12" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="2,6 5,9 10,3"/></svg></div>Offline mode penuh</div>
          <div class="feat"><div class="feat__dot"><svg viewBox="0 0 12 12" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="2,6 5,9 10,3"/></svg></div>Tanpa iklan</div>
          <div class="feat"><div class="feat__dot"><svg viewBox="0 0 12 12" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="2,6 5,9 10,3"/></svg></div>Prioritas support 24/7</div>
        </div>
        <a href="{{ route('login') }}" class="btn-premium">Mulai Premium →</a>
      </div>

      <!-- PREMIUM TAHUNAN -->
      <div class="price-card">
        <div>
          <div class="card-icon">
  <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="#0078ff" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
    <path d="M4.5 16.5c-1.5 1.26-2 5-2 5s3.74-.5 5-2c.71-.84.7-2.13-.09-2.91a2.18 2.18 0 00-2.91-.09z"/>
    <path d="M12 15l-3-3a22 22 0 012-3.95A12.88 12.88 0 0122 2c0 2.72-.78 7.5-6 11a22.35 22.35 0 01-4 2z"/>
    <path d="M9 12H4s.55-3.03 2-4c1.62-1.08 5 0 5 0M12 15v5s3.03-.55 4-2c1.08-1.62 0-5 0-5"/>
  </svg>
</div>
          <div class="card-name">Premium Tahunan</div>
          <div class="card-desc">Paket tahunan memberikan penggunaan satu tahun penuh dengan harga yang lebih hemat.</div>
        </div>
        <div class="card-price">
          <div class="price-row">
            <span class="price-rp">Rp</span>
            <span class="price-num">379.000</span>
          </div>
          <span class="price-sub">/tahun · Setara Rp 31.583/bulan</span>
          <span class="price-note">💰 Hemat Rp 29.000/tahun</span>
        </div>
        <div class="card-features">
          <div class="feat"><div class="feat__dot"><svg viewBox="0 0 12 12" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="2,6 5,9 10,3"/></svg></div>Semua fitur Premium</div>
          <div class="feat"><div class="feat__dot"><svg viewBox="0 0 12 12" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="2,6 5,9 10,3"/></svg></div>AI Trixie lengkap</div>
          <div class="feat"><div class="feat__dot"><svg viewBox="0 0 12 12" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="2,6 5,9 10,3"/></svg></div>Offline mode penuh</div>
          <div class="feat"><div class="feat__dot"><svg viewBox="0 0 12 12" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="2,6 5,9 10,3"/></svg></div>Tanpa iklan</div>
          <div class="feat"><div class="feat__dot"><svg viewBox="0 0 12 12" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="2,6 5,9 10,3"/></svg></div>Harga paling hemat</div>
        </div>
        <a href="{{ route('login') }}" class="btn-free">Pilih Tahunan</a>
      </div>

    </div>

    <!-- Compare Table -->
    <div class="sub-compare">
      <div class="compare-head">
        <div>Fitur</div>
        <div>Free</div>
        <div>Bulanan</div>
        <div>Tahunan</div>
      </div>
      <div class="compare-row"><div class="c-feat">Text to Speech</div><div class="c-val yes">✓</div><div class="c-val yes">✓</div><div class="c-val yes">✓</div></div>
      <div class="compare-row"><div class="c-feat">Object Detection</div><div class="c-val yes">✓</div><div class="c-val yes">✓</div><div class="c-val yes">✓</div></div>
      <div class="compare-row"><div class="c-feat">Navigasi</div><div class="c-val txt">Dasar</div><div class="c-val txt">Penuh</div><div class="c-val txt">Penuh</div></div>
      <div class="compare-row"><div class="c-feat">AI Trixie</div><div class="c-val txt">Terbatas</div><div class="c-val txt">Lengkap</div><div class="c-val txt">Lengkap</div></div>
      <div class="compare-row"><div class="c-feat">Offline Mode</div><div class="c-val no">✗</div><div class="c-val yes">✓</div><div class="c-val yes">✓</div></div>
      <div class="compare-row"><div class="c-feat">Tanpa Iklan</div><div class="c-val no">✗</div><div class="c-val yes">✓</div><div class="c-val yes">✓</div></div>
      <div class="compare-row"><div class="c-feat">Prioritas Support</div><div class="c-val no">✗</div><div class="c-val yes">✓</div><div class="c-val yes">✓</div></div>
      <div class="compare-row"><div class="c-feat">Harga Terbaik</div><div class="c-val no">✗</div><div class="c-val no">✗</div><div class="c-val yes">✓</div></div>
    </div>

    <!-- FAQ -->
    <div class="sub-faq">
  <h2>Pertanyaan yang <span>sering ditanyakan</span></h2>
  <p>Ada yang ingin kamu tanyakan tentang langganan TUNA? Cek di sini.</p>

  <div class="faq-list">
    <div class="faq-item" onclick="this.classList.toggle('open')">
      <div class="faq-q">Apakah TUNA bisa digunakan secara gratis? <span class="faq-arrow">▼</span></div>
      <div class="faq-a">Ya, TUNA dapat digunakan secara gratis. Pengguna bisa mengakses fitur dasar seperti layanan aksesibilitas dan navigasi. Namun beberapa fitur lanjutan tersedia pada paket Premium.</div>
    </div>

    <div class="faq-item" onclick="this.classList.toggle('open')">
      <div class="faq-q">Apa keuntungan menggunakan TUNA Premium? <span class="faq-arrow">▼</span></div>
      <div class="faq-a">Dengan TUNA Premium, pengguna dapat menikmati fitur tambahan seperti AI assistant yang lebih lengkap, mode offline penuh, serta pengalaman penggunaan tanpa iklan.</div>
    </div>

    <div class="faq-item" onclick="this.classList.toggle('open')">
      <div class="faq-q">Apa perbedaan versi Gratis dan Premium di TUNA? <span class="faq-arrow">▼</span></div>
      <div class="faq-a">Versi gratis memungkinkan pengguna menggunakan fitur dasar aksesibilitas. Sedangkan versi Premium memberikan fitur tambahan seperti AI assistant yang lebih lengkap, mode offline penuh, serta pengalaman penggunaan tanpa iklan.</div>
   </div>

    <div class="faq-item" onclick="this.classList.toggle('open')">
      <div class="faq-q">Apakah saya bisa berhenti berlangganan kapan saja? <span class="faq-arrow">▼</span></div>
      <div class="faq-a">Ya, pengguna dapat berhenti berlangganan kapan saja. Setelah masa langganan berakhir, akun akan kembali menggunakan versi gratis dengan fitur dasar.</div>
    </div>
  </div>
</div>

  </div>

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


</script>

</body>
</html>

