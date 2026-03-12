<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Hubungi Kami — TUNA</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="{{ asset('css/hubungi.css') }}">
</head>
<body>

  <a href="{{ url('/') }}" class="back-btn">
    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="15,18 9,12 15,6"/></svg>
    Kembali ke Beranda
  </a>

  <section class="hk-hero">
    <div class="orb orb-1"></div>
    <div class="orb orb-2"></div>
    <div class="orb orb-3"></div>
    <div class="particles">
      <div class="particle"></div><div class="particle"></div><div class="particle"></div><div class="particle"></div>
      <div class="particle"></div><div class="particle"></div><div class="particle"></div><div class="particle"></div>
    </div>
    <div class="hk-hero__inner">
      <div class="hk-hero__tag">📬 Hubungi Kami</div>
      <h1>Kami siap <em>mendengar</em><br>dan membantu kamu</h1>
      <p>Jika Anda memiliki pertanyaan, masukan, atau membutuhkan bantuan, jangan ragu untuk menghubungi tim TUNA. Kami siap membantu dan mendukung aksesibilitas teknologi yang lebih mudah dan setara bagi semua pengguna.</p>
      <div class="hk-stats">
        <div class="hk-stat"><span class="hk-stat__num">24/7</span><span class="hk-stat__label">Dukungan</span></div>
        <div class="hk-stat"><span class="hk-stat__num">&lt;1 jam</span><span class="hk-stat__label">Respons WA</span></div>
        <div class="hk-stat"><span class="hk-stat__num">8</span><span class="hk-stat__label">Platform Sosmed</span></div>
      </div>
    </div>
  </section>

  <div class="hk-body">

    <div class="hk-cards">
  <div id="whatsapp" class="hk-card hk-card--accent reveal">
    <div class="hk-card__icon">
      <div class="hk-card__icon">
        <svg width="28" height="28" viewBox="0 0 24 24" fill="none">
    <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347z" fill="#fff"/>
    <path d="M12 0C5.373 0 0 5.373 0 12c0 2.126.556 4.121 1.528 5.855L0 24l6.334-1.508A11.955 11.955 0 0012 24c6.627 0 12-5.373 12-12S18.627 0 12 0zm0 21.818a9.818 9.818 0 01-5.006-1.371l-.36-.214-3.732.888.936-3.617-.235-.372A9.818 9.818 0 1112 21.818z" fill="#fff"/>
  </svg>
</div>
    </div>
    <div>
      <div class="hk-card__title">WhatsApp</div>
      <div class="hk-card__desc">Ada yang ingin ditanyakan? Chat WhatsApp kami saja. Kami selalu siap membantu kapan pun anda butuh.</div>
    </div>
    <div class="hk-card__info">
      <div class="hk-info-row"><div class="hk-info-row__dot"></div>(123) 456-7890-1234</div>
      <div class="hk-info-row"><div class="hk-info-row__dot"></div>Setiap Hari, 24 Jam</div>
    </div>
    <a href="https://wa.me/6281234567890" target="_blank" class="btn-hk btn-hk--white">Buka WhatsApp →</a>
  </div>

  <div id="email-support" class="hk-card reveal" style="transition-delay:0.15s;">
    <div class="hk-card__icon">
      <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="#0078ff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
    <rect x="2" y="4" width="20" height="16" rx="2" fill="#0078ff" opacity="0.1"/>
    <polyline points="2,4 12,13 22,4"/>
  </svg>
    </div>
    <div>
      <div class="hk-card__title">Email Support</div>
      <div class="hk-card__desc">Punya pesan, laporan, atau saran? Kirimkan lewat email saja. Kami akan membalas secepat mungkin, maksimal dalam 1×24 jam kerja.</div>
    </div>
    <div class="hk-card__info">
      <div class="hk-info-row"><div class="hk-info-row__dot"></div>support@tuna.id</div>
      <div class="hk-info-row"><div class="hk-info-row__dot"></div>Respons dalam 1×24 jam kerja</div>
    </div>
    <a href="mailto:support@tuna.id" class="btn-hk">Kirim Email →</a>
  </div>
</div>

<div id="sosial-media" class="hk-sosmed reveal" style="transition-delay:0.2s;">
  <div class="hk-sosmed__head">
    <div class="hk-card__icon">
      <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="#0078ff" stroke-linecap="round" stroke-linejoin="round">
        <circle cx="12" cy="12" r="10" fill="#0078ff" opacity="0.1" stroke="#0078ff" stroke-width="2"/>
        <line x1="2" y1="12" x2="22" y2="12" stroke="#0078ff" stroke-width="2"/>
        <path d="M12 2a15.3 15.3 0 014 10 15.3 15.3 0 01-4 10 15.3 15.3 0 01-4-10 15.3 15.3 0 014-10z" stroke="#0078ff" stroke-width="2"/>
      </svg>
    </div>
    <div><h3>Sosial Media Kami</h3><p>Ikuti kami untuk update terbaru, tips aksesibilitas, dan konten inspiratif setiap harinya.</p></div>
  </div>
  
  <div class="sosmed-grid">

    <!-- Instagram -->
    <a href="#" class="sosmed-item">
      <div class="sosmed-item__icon" style="background:#fff0f2;">
        <svg width="28" height="28" viewBox="0 0 24 24" fill="none">
          <defs>
            <radialGradient id="ig1" cx="25%" cy="110%" r="130%">
              <stop offset="0%"  stop-color="#fbe18a"/>
              <stop offset="20%" stop-color="#fcbb45"/>
              <stop offset="40%" stop-color="#f75274"/>
              <stop offset="60%" stop-color="#d53692"/>
              <stop offset="80%" stop-color="#8f39ce"/>
              <stop offset="100%" stop-color="#5b4fe9"/>
            </radialGradient>
          </defs>
          <rect x="1.5" y="1.5" width="21" height="21" rx="6.5" fill="url(#ig1)"/>
          <circle cx="12" cy="12" r="5" stroke="#fff" stroke-width="2" fill="none"/>
          <circle cx="17.8" cy="6.2" r="1.3" fill="#fff"/>
        </svg>
      </div>
      Instagram
    </a>

    <!-- TikTok -->
    <a href="#" class="sosmed-item">
      <div class="sosmed-item__icon" style="background:#f0fdf4;">
        <svg width="22" height="26" viewBox="0 0 30 34" fill="none">
          <path d="M21.8 6.7A7.8 7.8 0 0118 0h-5.3v23.3a4.6 4.6 0 01-4.6 4 4.6 4.6 0 01-4.6-4.6 4.6 4.6 0 014.6-4.6c.45 0 .88.06 1.28.17V13.6a10.3 10.3 0 00-1.28-.08A10.3 10.3 0 000 23.8 10.3 10.3 0 0010.1 34a10.3 10.3 0 0010.3-10.3V13.4a13 13 0 007.6 2.42v-5.2a7.85 7.85 0 01-6.2-3.92z" fill="#010101"/>
          <path d="M21.8 6.7A7.8 7.8 0 0118 0h-5.3v23.3a4.6 4.6 0 01-4.6 4 4.6 4.6 0 01-4.6-4.6 4.6 4.6 0 014.6-4.6c.45 0 .88.06 1.28.17V13.6a10.3 10.3 0 00-1.28-.08A10.3 10.3 0 000 23.8 10.3 10.3 0 0010.1 34a10.3 10.3 0 0010.3-10.3V13.4a13 13 0 007.6 2.42v-5.2a7.85 7.85 0 01-6.2-3.92z" fill="#69C9D0" opacity="0.55"/>
          <path d="M21.8 6.7A7.8 7.8 0 0118 0h-5.3v23.3a4.6 4.6 0 01-4.6 4 4.6 4.6 0 01-4.6-4.6 4.6 4.6 0 014.6-4.6c.45 0 .88.06 1.28.17V13.6a10.3 10.3 0 00-1.28-.08A10.3 10.3 0 000 23.8 10.3 10.3 0 0010.1 34a10.3 10.3 0 0010.3-10.3V13.4a13 13 0 007.6 2.42v-5.2a7.85 7.85 0 01-6.2-3.92z" fill="#FE2C55" opacity="0.3"/>
        </svg>
      </div>
      TikTok
    </a>

    <!-- X (Twitter) -->
    <a href="#" class="sosmed-item">
      <div class="sosmed-item__icon" style="background:#f7f7f7;">
        <svg width="26" height="26" viewBox="0 0 24 24">
          <path d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-4.714-6.231-5.401 6.231H2.746l7.73-8.835L2.25 2.25H8.08l4.253 5.622zm-1.161 17.52h1.833L7.084 4.126H5.117z" fill="#0f1419"/>
        </svg>
      </div>
      X (Twitter)
    </a>

    <!-- Threads -->
    <a href="#" class="sosmed-item">
      <div class="sosmed-item__icon" style="background:#f3f0ff;">
        <svg width="22" height="26" viewBox="0 0 192 192" fill="none">
          <path fill="#000" d="M141.537 88.9883C140.71 88.5919 139.87 88.2104 139.019 87.8451C137.537 60.5382 122.616 44.905 97.5619 44.745C97.4484 44.7443 97.3355 44.7443 97.222 44.7443C82.2364 44.7443 69.7731 51.1409 62.102 62.7807L75.881 72.2328C81.6116 63.5383 90.6052 61.6849 97.2286 61.6849C97.3051 61.6849 97.3819 61.6849 97.4576 61.6859C105.707 61.7381 111.932 64.1366 115.961 68.814C118.893 72.2193 120.854 76.925 121.825 82.8638C114.511 81.6207 106.601 81.2385 98.145 81.7233C75.3251 83.0954 60.0114 96.9879 61.0405 116.292C61.5567 126.084 66.4348 134.508 74.7698 140.011C81.8168 144.663 90.8936 146.938 100.327 146.423C112.785 145.74 122.558 140.987 129.376 132.296C134.554 125.696 137.829 117.143 139.275 106.366C145.213 109.949 149.613 114.664 152.043 120.332C156.175 129.967 156.416 145.8 143.497 158.707C132.032 170.166 118.034 175.212 97.773 175.23C75.1587 175.21 57.9935 168.377 46.3951 154.932C35.4697 142.243 29.8241 123.527 29.7974 99.9985C29.8241 76.4715 35.4697 57.7556 46.3951 45.0661C57.9935 31.6213 75.1587 24.7883 97.773 24.7686C120.549 24.7886 138.179 31.6525 150.376 45.2209C156.398 51.9193 160.876 60.6985 163.77 71.1441L179.336 66.8392C175.768 54.1579 170.062 43.0821 162.223 33.6509C147.292 16.2627 126.054 7.38948 97.8496 7.36035H97.7325C69.591 7.38876 48.7198 16.2937 34.3576 33.7483C21.5742 49.3203 14.9476 71.5477 14.9199 99.9985C14.9476 128.449 21.5742 150.677 34.3576 166.249C48.7198 183.703 69.591 192.608 97.7325 192.636H97.8496C122.587 192.611 141.932 185.878 156.769 172.316C174.588 155.982 175.258 133.479 169.543 120.498C165.205 110.706 157.162 102.786 145.611 96.5963ZM98.4143 129.321C88.5022 129.886 78.0608 125.603 77.5057 116.477C77.097 109.372 82.6023 101.398 99.0302 100.458C101.11 100.337 103.151 100.278 105.158 100.278C111.97 100.278 118.375 100.876 124.278 102.022C122.212 128.068 108.593 128.743 98.4143 129.321Z"/>
        </svg>
      </div>
      Threads
    </a>

  </div>
</div>

    <div id="kantor" class="hk-kantor reveal" style="transition-delay:0.3s;">
      <div>
        <div class="hk-kantor__head">
  <div class="hk-card__icon">
    <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="#0078ff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
  <rect x="2" y="7" width="20" height="15" rx="2" fill="#dbeafe"/>
  <path d="M2 7l10-5 10 5"/>
  <rect x="10" y="14" width="4" height="8" rx="1" fill="#93c5fd" stroke="none"/>
</svg>
  </div>
  <div><h3>Kantor Kami</h3><p>Kunjungi kami langsung di kantor TUNA Balikpapan.</p></div>
</div>

<div class="kantor-detail">
  <div class="kantor-row">
    <div class="kantor-row__icon">
      <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#0078ff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
  <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z" fill="#dbeafe"/>
  <circle cx="12" cy="10" r="3" fill="#93c5fd" stroke="none"/>
</svg>
    </div>
    <div class="kantor-row__text">
      <strong>Alamat</strong>
      <span>JL. Marsma R.Iswahyudi<br>Balikpapan, Kalimantan Timur 76114</span>
    </div>
  </div>

  <div class="kantor-row">
    <div class="kantor-row__icon">
      <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#0078ff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
  <circle cx="12" cy="12" r="10" fill="#dbeafe"/>
  <polyline points="12 6 12 12 16 14"/>
  <circle cx="12" cy="12" r="1.5" fill="#0078ff" stroke="none"/>
</svg>
    </div>
    <div class="kantor-row__text">
      <strong>Jam Operasional</strong>
      <span>Setiap Hari - 24 Jam</span>
    </div>
  </div>

  <div class="kantor-row">
    <div class="kantor-row__icon">
      <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#0078ff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
  <path d="M22 16.92v3a2 2 0 01-2.18 2 19.79 19.79 0 01-8.63-3.07A19.5 19.5 0 013.07 11 19.79 19.79 0 01.11 2.38 2 2 0 012.11 0h3a2 2 0 012 1.72c.127.96.361 1.903.7 2.81a2 2 0 01-.45 2.11L6.09 7.91a16 16 0 006 6l1.27-1.27a2 2 0 012.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0122 14.92z" fill="#dbeafe"/>
</svg>
    </div>
    <div class="kantor-row__text">
      <strong>Telepon</strong>
      <span>(123) 456-7890-1234</span>
    </div>
  </div>
</div>
        <a href="https://maps.google.com" target="_blank" class="btn-hk">Buka Google Maps →</a>
      </div>
      <div class="hk-map">
        <div class="map-pin">
          <div class="map-pin__dot"></div>
          <div class="map-pin__ring"></div>
        </div>
        <div class="map-label">
          <strong>Kantor TUNA</strong>
          <span>Balikpapan, Kalimantan Timur</span>
          <a href="https://maps.google.com" target="_blank">Lihat di Maps →</a>
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
  const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        entry.target.classList.add('visible');
        observer.unobserve(entry.target);
      }
    });
  }, { threshold: 0.1 });

  document.querySelectorAll('.reveal').forEach(el => observer.observe(el));

  window.addEventListener('load', function() {
    if (window.location.hash) {
      const hash = window.location.hash.substring(1);
      const targetElement = document.getElementById(hash);
      
      if (targetElement) {
        setTimeout(() => {
          targetElement.scrollIntoView({ 
            behavior: 'smooth',
            block: 'start'
          });
        }, 100);
      }
    }
  });

  document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function(e) {
      e.preventDefault();
      const targetId = this.getAttribute('href').substring(1);
      const targetElement = document.getElementById(targetId);
      
      if (targetElement) {
        targetElement.scrollIntoView({ 
          behavior: 'smooth',
          block: 'start'
        });
      }
    });
  });

  document.querySelectorAll('.sosmed-item').forEach((item, i) => {
    item.style.opacity = '0';
    item.style.transform = 'translateY(20px)';
    item.style.transition = `all 0.4s cubic-bezier(0.25,0.46,0.45,0.94) ${i * 0.06}s`;

    new IntersectionObserver((entries) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          entry.target.style.opacity = '1';
          entry.target.style.transform = 'translateY(0)';
        }
      });
    }, { threshold: 0.1 }).observe(item);
  });
</script>

</body>
</html>
