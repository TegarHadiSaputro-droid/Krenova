<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>TUNA</title>
  <script>
    if ('scrollRestoration' in history) {
      history.scrollRestoration = 'manual';
    }
    window.scrollTo(0, 0);
  </script>
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>

<div class="page-content">
  <!-- ============================================================
       HEADER
  ============================================================ -->
  <header class="main-header">
    <a href="{{ url('/') }}" class="logo">
      <img src="{{ asset('tunawoi.png') }}" alt="Logo" style="height: 40px; width: auto; border-radius: 10px; margin-right: 10px;">
      <div class="logo-text-wrap">
        <div class="logo-main">TU<span>NA</span></div>
        <div class="logo-sub">Transforming User Needs into Access</div>
      </div>
    </a>

    <nav class="main-nav">
      <a href="{{ url('/') }}" class="nav-link">Beranda</a>

      <div class="nav-item">
        <span class="nav-link">Layanan <span class="arrow"></span></span>
        <div class="dropdown">
          <a href="#">Call & Chat</a>
          <a href="#">AI Trixie</a>
          <a href="#marketplace" class="close-menu">Marketplace</a>
          <a href="#">Konsultasi</a>
        </div>
      </div>

      <div class="nav-link" onclick="document.getElementById('fitur').scrollIntoView({behavior:'smooth'})">Fitur Kami</div>

      <div class="nav-item">
        <span class="nav-link">Berlangganan <span class="arrow"></span></span>
        <div class="dropdown">
          <a href="#">Promo</a>
        <a href="{{ url('/berlangganan') }}" onclick="event.stopPropagation()">Lihat Paket</a>
          <a href="#">E-Wallet</a>
          <a href="#">Invoice</a>
        </div>
      </div>

      <div class="nav-item">
        <span class="nav-link">Panduan <span class="arrow"></span></span>
        <div class="dropdown">
        <a href="/panduan#visi-misi">Visi Misi</a>
        <a href="/panduan#cara-mulai">Cara Mulai</a>
        <a href="/panduan#video-tutorial">Video Tutorial</a>
        <a href="/panduan#faq">FAQ</a>
        </div>
      </div>

      <div class="nav-item">
        <span class="nav-link">Hubungi Kami <span class="arrow"></span></span>
        <div class="dropdown">
        <a href="/hubungi-kami#whatsapp">WhatsApp</a>
        <a href="/hubungi-kami#email">Email Support</a>
        <a href="/hubungi-kami#sosial-media">Sosial Media Kami</a>
        <a href="/hubungi-kami#kantor">Kantor Kami</a>
        </div>
      </div>

      <div class="nav-divider"></div>

      <div class="all-products" onclick="document.getElementById('marketplace').scrollIntoView({behavior:'smooth'})">
  <div class="grid-icon">
    <span></span><span></span><span></span><span></span>
  </div>
  All Products
</div>
  </nav>
  <div class="header-actions">
    <!-- Tampil kalau BELUM login -->
    @guest
      <a href="{{ route('login') }}" class="btn-login">Masuk</a>
      <a href="{{ route('download') }}" style="text-decoration: none;">
        <button class="btn-cta">Coba Gratis</button>
      </a>
      @endguest 

  <!-- Tampil kalau SUDAH login -->
  @auth
  @php
      $userName = Auth::user()->name;
      $userEmail = Auth::user()->email;
      $words = explode(' ', trim($userName));
      $userInitials = count($words) >= 2 
          ? strtoupper($words[0][0] . $words[1][0])
          : strtoupper(substr($userName, 0, 1));
  @endphp
  
  <a href="{{ route('download') }}" style="text-decoration: none;">
    <button class="btn-cta" style="padding: 8px 18px; font-size: 0.82rem;">Coba Gratis</button>
  </a>

    <!-- Profile Dropdown -->
<div class="profile-dropdown-wrap" id="profileWrap">  
    <button class="profile-trigger" onclick="toggleDropdown(event)">
        <div class="profile-trigger-avatar" id="triggerAvatar">{{ $userInitials }}</div>
    </button>

    <div class="profile-dropdown" id="profileDropdown">

    <!-- Header - klik untuk ke halaman profile -->
    <a href="{{ route('account') }}" style="text-decoration:none;display:block;">
        <div class="dropdown-header" style="cursor:pointer;">
            <div class="dropdown-avatar" id="dropdownAvatar">{{ $userInitials }}</div>
            <div class="dropdown-user-info">
                <div class="dropdown-name" id="dropdownName">{{ $userName }}</div>
                <div class="dropdown-email" id="dropdownEmail">{{ $userEmail }}</div>
                <span class="dropdown-badge">🟢 Akun Aktif</span>
            </div>
        </div>
    </a>

    <div class="dropdown-divider"></div>

    <!-- Menu -->
    <div class="dropdown-section-label">Menu</div>
    <a href="{{ route('dashboard.settings') }}" class="dropdown-item">
        <span class="dropdown-icon"></span>
        <span class="dropdown-item-label">Pengaturan</span>
    </a>
    <a href="{{ route('dashboard.notifications') }}" class="dropdown-item">
        <span class="dropdown-icon"></span>
        <span class="dropdown-item-label">Notifikasi</span>
        <span class="dropdown-item-badge" style="background:#ef4444;">3</span>
    </a>
    <a href="{{ route('dashboard.privacy-security') }}" class="dropdown-item">
        <span class="dropdown-icon"></span>
        <span class="dropdown-item-label">Privasi & Keamanan</span>
    </a>
    <a href="{{ route('dashboard.about') }}" class="dropdown-item">
        <span class="dropdown-icon"></span>
        <span class="dropdown-item-label">Tentang Aplikasi</span>
    </a>
    <a href="{{ route('dashboard.help') }}" class="dropdown-item">
        <span class="dropdown-icon"></span>
        <span class="dropdown-item-label">Bantuan</span>
    </a>

    <div class="dropdown-divider"></div>

    <button class="dropdown-item dropdown-logout" onclick="handleLogout()">
        <span class="dropdown-icon"></span>
        <span class="dropdown-item-label">Keluar</span>
    </button>

    <div class="dropdown-footer">Transforming User Needs into Access</div>
</div>
   <button class="hamburger-btn" id="hamburgerBtn" aria-label="Toggle menu">
    <span></span>
    <span></span>
    <span></span>
  </button>
  @endauth
  </div>
</header>

  <div class="mobile-menu" id="mobileMenu">
    <div class="mobile-menu-inner">

      <div class="mobile-nav-item">
        <a href="/" class="mobile-nav-link">Beranda</a>
      </div>

      <div class="mobile-nav-item">
        <div class="mobile-nav-link" onclick="toggleDropdown(this)">
          Layanan <span class="mobile-arrow">▾</span>
        </div>
        <div class="mobile-dropdown">
          <a href="#">Call & Chat</a>
          <a href="#">AI Trixie</a>
          <a href="#marketplace" class="close-menu">Marketplace</a>
          <a href="#">Konsultasi</a>
        </div>
      </div>

      <div class="mobile-nav-item">
        <a href="#fitur" class="mobile-nav-link close-menu">Fitur Kami</a>
      </div>

      <div class="mobile-nav-item">
        <div class="mobile-nav-link" onclick="toggleDropdown(this)">
          Berlangganan <span class="mobile-arrow">▾</span>
        </div>
        <div class="mobile-dropdown">
          <a href="#">Promo</a>
          <a href="{{ url('/berlangganan') }}" onclick="event.stopPropagation()">Lihat Paket</a>
          <a href="#">E-Wallet</a>
          <a href="#">Invoice</a>
        </div>
      </div>

      <div class="mobile-nav-item">
        <div class="mobile-nav-link" onclick="toggleDropdown(this)">
          Panduan <span class="mobile-arrow">▾</span>
        </div>
        <div class="mobile-dropdown">
        <a href="/panduan#visi-misi">Visi Misi</a>
        <a href="/panduan#cara-mulai">Cara Mulai</a>
        <a href="/panduan#video-tutorial">Video Tutorial</a>
        <a href="/panduan#faq">FAQ</a>
        </div>
      </div>

      <div class="mobile-nav-item">
        <div class="mobile-nav-link" onclick="toggleDropdown(this)">
          Hubungi Kami <span class="mobile-arrow">▾</span>
        </div>
        <div class="mobile-dropdown">
        <a href="/hubungi-kami#whatsapp">WhatsApp</a>
        <a href="/hubungi-kami#email">Email Support</a>
        <a href="/hubungi-kami#sosial-media">Sosial Media Kami</a>
        <a href="/hubungi-kami#kantor">Kantor Kami</a>
        </div>
      </div>
    </div>
  </div>

  <!-- ============================================================
       MAIN
  ============================================================ -->
  <main>

    <!-- ===== HERO / TENTANG TUNA ===== -->
    <section class="tuna-hero">
      <div class="tuna-hero__bg-circles">
        <span></span><span></span><span></span>
      </div>
      <div class="tuna-container">
        <div class="tuna-hero__inner">
          <div class="tuna-hero__text">
            <span class="tuna-hero__label">Tentang Kami</span>
            <h1>Platform yang <br><em>menghadirkan</em> akses setara <strong> untuk semua</strong></h1>
            <p>TUNA — <b>Transforming User Needs into Access</b> — TUNA adalah platform digital inklusif yang dibuat untuk membantu teman-teman disabilitas agar lebih mudah mengakses layanan, informasi, dan berbagai peluang tanpa merasa terhambat.</p>
            <div class="tuna-hero__stats">
              <div class="stat">
                <span class="stat-num">11k+</span>
                <span class="stat-label">Target Pengguna</span>
              </div>
              <div class="stat-divider"></div>
              <div class="stat">
                <span class="stat-num">4</span>
                <span class="stat-label">Layanan Utama</span>
              </div>
              <div class="stat-divider"></div>
              <div class="stat">
                <span class="stat-num">24/7</span>
                <span class="stat-label">Dukungan</span>
              </div>
            </div>
            <div class="tuna-hero__cta">
              <a href="#layanan" class="btn-blue">Jelajahi Layanan</a>
              <a href="#" class="btn-outline-white">Pelajari Lebih →</a>
            </div>
          </div>

          <div class="tuna-hero__visual">
            <div class="tuna-hero__card-float card-1">
              <span class="card-icon">📞</span>
              <span>Call & Chat</span>
            </div>
            <div class="tuna-hero__card-float card-2">
              <span class="card-icon">🤖</span>
              <span>AI Trixie</span>
            </div>
            <div class="tuna-hero__card-float card-3">
              <span class="card-icon">🛒</span>
              <span>Marketplace</span>
            </div>
            <div class="tuna-hero__mockup">
              <div class="mockup-topbar"></div>
              <div class="mockup-content">
                <div class="mockup-line w80"></div>
                <div class="mockup-line w60"></div>
                <div class="mockup-line w90"></div>
                <div class="mockup-cards-row">
                  <div class="mockup-mini-card"></div>
                  <div class="mockup-mini-card"></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- ===== FITUR ===== -->
    <section class="tuna-features" id="fitur">
      <div class="tuna-container">
        <div class="tuna-section-head">
          <span class="section-tag">Layanan Kami</span>
          <h2>Semua yang kamu butuhkan,<br><span>dalam satu platform</span></h2>
          <p>Empat layanan utama yang dirancang khusus agar lebih mudah diakses dan nyaman digunakan oleh semua pengguna.</p>
        </div>
        <div class="tuna-features__grid">

          <a href="#" class="feature-card">
            <div class="feature-card__icon">
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8">
                <path d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"/>
              </svg>
            </div>
            <div class="feature-card__body">
              <h3>Call & Chat</h3>
              <p>Kamu bisa hubungi kami kapan saja lewat telepon atau chat. Layanan kami siap membantu 24 jam untuk semua kebutuhanmu.</p>
            </div>
            <div class="feature-card__silhouette">
              <svg viewBox="0 0 120 80" fill="none">
                <circle cx="30" cy="40" r="18" fill="currentColor" opacity=".08"/>
                <circle cx="30" cy="40" r="10" fill="currentColor" opacity=".12"/>
                <rect x="50" y="25" width="55" height="8" rx="4" fill="currentColor" opacity=".1"/>
                <rect x="50" y="38" width="40" height="8" rx="4" fill="currentColor" opacity=".08"/>
                <rect x="50" y="51" width="48" height="8" rx="4" fill="currentColor" opacity=".06"/>
              </svg>
            </div>
            <span class="feature-card__arrow">→</span>
          </a>

          <a href="#" class="feature-card feature-card--accent">
            <div class="feature-card__icon">
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8">
                <path d="M12 2a10 10 0 100 20A10 10 0 0012 2zm0 0v4m0 12v2m-8-8H2m20 0h-2M5.636 5.636l1.414 1.414m9.9 9.9l1.414 1.414M5.636 18.364l1.414-1.414m9.9-9.9l1.414-1.414"/>
              </svg>
            </div>
            <div class="feature-card__body">
              <h3>AI Trixie</h3>
              <p>Asisten AI pintar yang siap bantu jawab pertanyaan, memberikan rekomendasi, dan nemenin aktivitas kamu sehari-hari.</p>
            </div>
            <div class="feature-card__silhouette">
              <svg viewBox="0 0 120 80" fill="none">
                <rect x="10" y="15" width="100" height="50" rx="12" fill="currentColor" opacity=".1"/>
                <circle cx="35" cy="40" r="12" fill="currentColor" opacity=".15"/>
                <rect x="55" y="30" width="45" height="6" rx="3" fill="currentColor" opacity=".12"/>
                <rect x="55" y="42" width="35" height="6" rx="3" fill="currentColor" opacity=".09"/>
                <circle cx="35" cy="40" r="5" fill="currentColor" opacity=".2"/>
              </svg>
            </div>
            <span class="feature-card__arrow">→</span>
          </a>

          <a href="#" class="feature-card">
            <div class="feature-card__icon">
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8">
                <path d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"/>
              </svg>
            </div>
            <div class="feature-card__body">
              <h3>Marketplace</h3>
              <p>Temukan berbagai alat bantu, perlengkapan, dan produk aksesibilitas yang dirancang khusus untuk memenuhi kebutuhan teman disabilitas.</p>
            </div>
            <div class="feature-card__silhouette">
              <svg viewBox="0 0 120 80" fill="none">
                <rect x="8" y="20" width="28" height="35" rx="6" fill="currentColor" opacity=".1"/>
                <rect x="46" y="20" width="28" height="35" rx="6" fill="currentColor" opacity=".1"/>
                <rect x="84" y="20" width="28" height="35" rx="6" fill="currentColor" opacity=".1"/>
                <rect x="8" y="58" width="28" height="6" rx="3" fill="currentColor" opacity=".08"/>
                <rect x="46" y="58" width="28" height="6" rx="3" fill="currentColor" opacity=".08"/>
                <rect x="84" y="58" width="28" height="6" rx="3" fill="currentColor" opacity=".08"/>
              </svg>
            </div>
            <span class="feature-card__arrow">→</span>
          </a>

          <a href="#" class="feature-card">
            <div class="feature-card__icon">
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8">
                <path d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0z"/>
              </svg>
            </div>
            <div class="feature-card__body">
              <h3>Konsultasi</h3>
              <p>Butuh solusi yang lebih spesifik? Kamu bisa konsultasi langsung dengan tim kami agar mendapatkan saran yang benar-benar pas untuk kamu.</p>
            </div>
            <div class="feature-card__silhouette">
              <svg viewBox="0 0 120 80" fill="none">
                <circle cx="40" cy="30" r="14" fill="currentColor" opacity=".1"/>
                <circle cx="80" cy="30" r="14" fill="currentColor" opacity=".1"/>
                <rect x="20" y="52" width="35" height="16" rx="8" fill="currentColor" opacity=".08"/>
                <rect x="65" y="52" width="35" height="16" rx="8" fill="currentColor" opacity=".08"/>
              </svg>
            </div>
            <span class="feature-card__arrow">→</span>
          </a>

        </div>
      </div>
    </section>

    <!-- ===== MARKETPLACE ===== -->
    <section class="marketplace" id="marketplace">
      <div class="tuna-container">
        <div class="tuna-section-head">
          <span class="section-tag">Marketplace</span>
          <h2>Produk pilihan <span>untuk kamu</span></h2>
          <p>Perangkat bantu disabilitas dengan kualitas terbaik.</p>
        </div>

        <!-- Scroll horizontal -->
        <div class="tuna-market__scroll-wrap">
          <div class="tuna-market__row">
            <div class="market-card">
              <a href="https://shopee.co.id/Tongkat-Tunanetra-Tongkat-Jalan-Lipat-GEA-FS936L-FS-936-L-FS-936L-i.201164434.10448538109" style="text-decoration: none;">
              <div class="market-card__badge best">Best Seller</div>
              <div class="market-card__img"><img src="{{ asset('tongkattuna.png') }}" alt="market-card__img-placeholder" style="width: 100%; height: 120px; object-fit: cover; object-position: center; display: block;" ></div>
              <div class="market-card__info">
                <h4>Tongkat Tunanetra</h4>
                <span class="market-price">Rp 99.000</span>
                <button class="btn-market">Lihat</button>
              </div>
             </a>
            </div>
            <div class="market-card">
              <a href="https://shopee.co.id/product/103402650/13119339207?gads_t_sig=VTJGc2RHVmtYMTlxTFVSVVRrdENkY0tSanlKZU1BU2Y2RTJzOS9neUtnZXNhK3ByckZiZzVmNmtmSjZEMmc5ellZdWFiNTg4Nkt2Smg1Q25IaDFoNytQTXc4L01Md2hwdzNXNlVaei8vdytBbzJlak8rdksyalk3ODNZSVdZWks1NGoxdC93S2pCM24rbkIwSWYwdVNBPT0" style="text-decoration: none;">
              <div class="market-card__img">
                <img src="{{ asset('alatbantudengar.png') }}" alt="market-card__img-placeholder" style="width: 100%; height: 120px; object-fit: cover; object-position: center; display: block;">
              </div>
              <div class="market-card__info">
                <h4>Alat Bantu Dengar</h4>
                <span class="market-price">Rp 229.000</span>
                <button class="btn-market">Lihat</button>
              </div>
             </a>
            </div>
            <div class="market-card">
              <a href="https://shopee.co.id/Buku-Cerita-Braille-Aku-Sudah-Besar-(Edisi-Braile)-i.34881066.55756198753" style="text-decoration: none">
              <div class="market-card__badge new">Baru</div>
              <div class="market-card__img"><img src="{{ asset('buku.jpg') }}" alt="market-card__img-placeholder" style="width: 100%; height: 120px; object-fit: cover; object-position: center; display: block;"></div>
              <div class="market-card__info">
                <h4>Buku Braille</h4>
                <span class="market-price">Rp 259.000</span>
                <button class="btn-market">Lihat</button>
              </div>
             </a>
            </div>
            <div class="market-card">
              <a href="https://shopee.co.id/product/169113488/14021619935?gads_t_sig=VTJGc2RHVmtYMTlxTFVSVVRrdENkY0tSanlKZU1BU2Y2RTJzOS9neUtnY2I5WEluRnlCWEhIZ1FuRlhVem9XQnhGajBMbmx1cW0rVWtPSlBEYWhHY3hzRUlCcnAyMG5MZHB3M1NGTyt2RE8zRjR6NEpFMTUzSTUvdzFoclZPVS9oNVlua1U3dEgyaTQ2Y1Z6TThyM1dBPT0" style="text-decoration: none">
              <div class="market-card__img"><img src="{{ asset('kursirodda.png') }}" alt="market-card__img-placeholder" style="width: 100%; height: 120px; object-fit: cover; object-position: center; display: block;" ></div>
              <div class="market-card__info">
                <h4>Kursi Roda</h4>
                <span class="market-price">Rp 999.000</span>
                <button class="btn-market">Lihat</button>
              </div>
             </a>
            </div>
            <div class="market-card">
              <a href="https://www.tokopedia.com/pantes-/buku-belajar-bahasa-isyarat-untuk-anak-tunarungu-mari-berbicara-dengan" style="text-decoration: none">
              <div class="market-card__img"><img src="{{ asset('isyarat.jpg') }}" alt="market-card__img-placeholder" style="width: 100%; height: 120px; object-fit: cover; object-position: center; display: block;" ></div>
              <div class="market-card__info">
                <h4>Buku Bahasa Isyarat</h4>
                <span class="market-price">Rp 149.000</span>
                <button class="btn-market">Lihat</button>
              </div>
             </a>
            </div>
            <div class="market-card">
              <a href="https://www.lazada.com.ph/products/english-talking-wrist-watch-sport-style-with-alarm-funtion-665e-i3355610480.html" style="text-decoration: none">
              <div class="market-card__img"><img src="{{ asset('talkingwatch.jpg') }}" alt="market-card__img-placeholder" style="width: 100%; height: 120px; object-fit: cover; object-position: center; display: block;" ></div>
              <div class="market-card__info">
                <h4>Talking Watch</h4>
                <span class="market-price">Rp 999.000</span>
                <button class="btn-market">Lihat</button>
              </div>
             </a>
            </div>
          </div>
        </div>

        <!-- Grid produk lainnya -->
        <div class="tuna-market__grid">
          <div class="market-card">
            <a href="https://www.tokopedia.com/luxebag-store/lb-jam-alarm-jam-dinding-jam-alarm-klasik-jam-weker-klasik-jam-estetik-alarm-clock-classic-jam-beker-r1355-1732713006090848109" style="text-decoration: none">
            <div class="market-card__img"><img src="{{ asset('alarm.jpg') }}" alt="market-card__img-placeholder" style="width: 100%; height: 120px; object-fit: cover; object-position: center; display: block;" ></div>
            <div class="market-card__info">
              <h4>Jam Alarm</h4>
              <span class="market-price">Rp 25.000</span>
              <button class="btn-market">Lihat</button>
            </div>
           </a>
          </div>
          <div class="market-card">
            <a href="https://www.tokopedia.com/juandamart/bel-rumah-bel-rumah-wireless-bel-pintu-bel-wireless-bell-rumah-ac-822" style="text-decoration: none">
            <div class="market-card__img"><img src="{{ asset('belpintu.jpg') }}" alt="market-card__img-placeholder" style="width: 100%; height: 120px; object-fit: cover; object-position: center; display: block;" ></div>
            <div class="market-card__info">
              <h4>Bel Rumah</h4>
              <span class="market-price">Rp 39.999</span>
              <button class="btn-market">Lihat</button>
            </div>
           </a>
          </div>
          <div class="market-card">
            <a href="https://shopee.co.id/loli-Tongkat-Tunanetra-Sensor-Ultrasonik-Type-3S-BW-Bunyi-Buzzer-dan-Deteksi-Air-i.1556583860.43504482470" style="text-decoration: none">
            <div class="market-card__img"><img src="{{ asset('ultrasonik.jpg') }}" alt="market-card__img-placeholder" style="width: 100%; height: 120px; object-fit: cover; object-position: center; display: block;" ></div>
            <div class="market-card__info">
              <h4>Tongkat Tunanetra Sensor Ultrasonik</h4>
              <span class="market-price">Rp 1.534.999</span>
              <button class="btn-market">Lihat</button>
            </div>
           </a>
          </div>
        </div>

        <div style="text-align:center; margin-top: 36px;">
          <a href="#" class="btn-blue">Lihat Semua Produk →</a>
        </div>
      </div>
    </section>

    <!-- ===== VIDEO PEMBELAJARAN ===== -->
<section class="vid-section">
  <div class="tuna-container">
    <div class="tuna-section-head">
      <span class="section-tag">Pengetahuan</span>
      <h2>Video <span>Edukasi</span></h2>
      <p>Kenali lebih dalam tentang teman-teman disabilitas melalui video edukatif kami.</p>
    </div>

    <!-- Banner kepedulian -->
<div class="vid-banner">
  <p>TUNA percaya setiap orang berhak mendapatkan akses yang sama — termasuk akses terhadap ilmu dan informasi.</p>
</div>

    <div class="vid-scroll-wrap">
      <div class="vid-row">

        <!-- Card 1 -->
        <div class="vid-card" onclick="openVidModal(0)">
          <div class="vid-thumb">
            <div class="vid-thumb-inner" style="background: linear-gradient(135deg, #1e3a8a, #3b82f6);">
              <span class="vid-emoji">♿</span>
            </div>
            <div class="vid-play-btn">
              <svg viewBox="0 0 24 24" fill="currentColor"><path d="M8 5v14l11-7z"/></svg>
            </div>
            <span class="vid-duration">12:34</span>
          </div>
          <div class="vid-info">
            <span class="vid-tag">Mobilitas</span>
            <h4>Mengenal Disabilitas Fisik & Cara Mendukungnya</h4>
            <p>Panduan memahami kebutuhan penyandang disabilitas fisik dalam kehidupan sehari-hari.</p>
          </div>
        </div>

        <!-- Card 2 -->
        <div class="vid-card" onclick="openVidModal(1)">
          <div class="vid-thumb">
            <div class="vid-thumb-inner" style="background: linear-gradient(135deg, #065f46, #10b981);">
              <span class="vid-emoji">👁️</span>
            </div>
            <div class="vid-play-btn">
              <svg viewBox="0 0 24 24" fill="currentColor"><path d="M8 5v14l11-7z"/></svg>
            </div>
            <span class="vid-duration">08:20</span>
          </div>
          <div class="vid-info">
            <span class="vid-tag">Visual</span>
            <h4>Teknologi Aksesibilitas untuk Tunanetra</h4>
            <p>Mengenal tools dan aplikasi yang membantu penyandang disabilitas visual beraktivitas.</p>
          </div>
        </div>

        <!-- Card 3 -->
        <div class="vid-card" onclick="openVidModal(2)">
          <div class="vid-thumb">
            <div class="vid-thumb-inner" style="background: linear-gradient(135deg, #7c3aed, #a78bfa);">
              <span class="vid-emoji">👂</span>
            </div>
            <div class="vid-play-btn">
              <svg viewBox="0 0 24 24" fill="currentColor"><path d="M8 5v14l11-7z"/></svg>
            </div>
            <span class="vid-duration">15:10</span>
          </div>
          <div class="vid-info">
            <span class="vid-tag">Pendengaran</span>
            <h4>Bahasa Isyarat: Dasar Komunikasi Tuli</h4>
            <p>Belajar dasar-dasar bahasa isyarat Indonesia (BISINDO) untuk berkomunikasi inklusif.</p>
          </div>
        </div>

        <!-- Card 4 -->
        <div class="vid-card" onclick="openVidModal(3)">
          <div class="vid-thumb">
            <div class="vid-thumb-inner" style="background: linear-gradient(135deg, #9a3412, #fb923c);">
              <span class="vid-emoji">🧠</span>
            </div>
            <div class="vid-play-btn">
              <svg viewBox="0 0 24 24" fill="currentColor"><path d="M8 5v14l11-7z"/></svg>
            </div>
            <span class="vid-duration">20:05</span>
          </div>
          <div class="vid-info">
            <span class="vid-tag">Kognitif</span>
            <h4>Memahami Spektrum Autisme & Cara Berinteraksi</h4>
            <p>Penjelasan mendalam tentang autisme dan cara menciptakan lingkungan yang ramah.</p>
          </div>
        </div>

        <!-- Card 5 -->
        <div class="vid-card" onclick="openVidModal(4)">
          <div class="vid-thumb">
            <div class="vid-thumb-inner" style="background: linear-gradient(135deg, #0e7490, #22d3ee);">
              <span class="vid-emoji">🗣️</span>
            </div>
            <div class="vid-play-btn">
              <svg viewBox="0 0 24 24" fill="currentColor"><path d="M8 5v14l11-7z"/></svg>
            </div>
            <span class="vid-duration">10:45</span>
          </div>
          <div class="vid-info">
            <span class="vid-tag">Bicara</span>
            <h4>Disabilitas Wicara: Komunikasi Alternatif</h4>
            <p>Cara mendukung penyandang gangguan wicara menggunakan media komunikasi alternatif.</p>
          </div>
        </div>

        <!-- Card 6 -->
        <div class="vid-card" onclick="openVidModal(5)">
          <div class="vid-thumb">
            <div class="vid-thumb-inner" style="background: linear-gradient(135deg, #be185d, #f472b6);">
              <span class="vid-emoji">❤️</span>
            </div>
            <div class="vid-play-btn">
              <svg viewBox="0 0 24 24" fill="currentColor"><path d="M8 5v14l11-7z"/></svg>
            </div>
            <span class="vid-duration">18:30</span>
          </div>
          <div class="vid-info">
            <span class="vid-tag">Mental</span>
            <h4>Kesehatan Mental & Disabilitas Psikososial</h4>
            <p>Mengenal disabilitas psikososial dan pentingnya dukungan kesehatan mental inklusif.</p>
          </div>
        </div>

        <!-- Card 7 -->
        <div class="vid-card" onclick="openVidModal(6)">
          <div class="vid-thumb">
            <div class="vid-thumb-inner" style="background: linear-gradient(135deg, #1a2340, #0078ff);">
              <span class="vid-emoji">🌍</span>
            </div>
            <div class="vid-play-btn">
              <svg viewBox="0 0 24 24" fill="currentColor"><path d="M8 5v14l11-7z"/></svg>
            </div>
            <span class="vid-duration">22:15</span>
          </div>
          <div class="vid-info">
            <span class="vid-tag">Inklusivitas</span>
            <h4>Membangun Dunia Inklusif untuk Semua</h4>
            <p>Bagaimana kita bersama menciptakan masyarakat yang ramah dan setara bagi semua orang.</p>
          </div>
        </div>

      </div>
    </div>
  </div>
</section>
</main>

<!-- ===== MODAL DESKRIPSI VIDEO ===== -->
<div class="vid-modal-overlay" id="vidModal" onclick="closeVidModal(event)" style="position:fixed; top:0; left:0; width:100%; height:100%;">
  <div class="vid-modal" onclick="event.stopPropagation()">
    <button class="vid-modal-close" onclick="closeVidModal()">✕</button>
    <div class="vid-modal-thumb" id="modalThumb">
      <div class="vid-modal-play">
        <svg viewBox="0 0 24 24" fill="currentColor"><path d="M8 5v14l11-7z"/></svg>
      </div>
    </div>
    <div class="vid-modal-body">
      <span class="vid-modal-tag" id="modalTag"></span>
      <h3 id="modalTitle"></h3>
      <p id="modalDesc"></p>
      <div class="vid-modal-meta">
        <span id="modalDuration">⏱ </span>
      </div>
      <a href="#" class="btn-blue" style="margin-top: 16px; display: inline-block;">▶ Tonton Sekarang</a>
    </div>
  </div>
</div>

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
                        <li><a href="#"><span class="dot"></span>Call & Chat</a></li>
                        <li><a href="#"><span class="dot"></span>AI Trixie</a></li>
                        <li><a href="#"><span class="dot"></span>Marketplace</a></li>
                        <li><a href="#"><span class="dot"></span>Konsultasi</a></li>
                    </ul>
                </div>

                <div class="f-col">
                    <h4>Berlangganan</h4>
                    <ul>
                        <li><a href="#"><span class="dot"></span>Promo</a></li>
                        <li><a href="{{ route('berlangganan') }}"><span class="dot"></span>Lihat Paket</a></li>
                        <li><a href="#"><span class="dot"></span>E-Wallet</a></li>
                        <li><a href="#"><span class="dot"></span>Invoice</a></li>
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
                    <a href="#" title="YouTube">
                        <svg width="15" height="15" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M19.615 3.184c-3.604-.246-11.631-.245-15.23 0-3.897.266-4.356 2.62-4.385 8.816.029 6.185.484 8.549 4.385 8.816 3.6.245 11.626.246 15.23 0 3.897-.266 4.356-2.62 4.385-8.816-.029-6.185-.484-8.549-4.385-8.816zm-10.615 12.816v-8l8 3.993-8 4.007z"/>
                        </svg>
                    </a>
                    <a href="#" title="X">
                        <svg width="13" height="13" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-4.714-6.231-5.401 6.231H2.74l7.73-8.835L1.254 2.25H8.08l4.713 6.231zm-1.161 17.52h1.833L7.084 4.126H5.117z"/>
                        </svg>
                    </a>
                    <a href="#" title="Facebook">
                        <svg width="15" height="15" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/>
                        </svg>
                    </a>
                    <a href="#" title="LinkedIn">
                        <svg width="14" height="14" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433a2.062 2.062 0 01-2.063-2.065 2.064 2.064 0 112.063 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/>
                        </svg>
                    </a>
                    <a href="#" title="Pinterest">
                        <svg width="14" height="14" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M12 0C5.373 0 0 5.373 0 12c0 5.084 3.163 9.426 7.627 11.174-.105-.949-.2-2.405.042-3.441.218-.937 1.407-5.965 1.407-5.965s-.359-.719-.359-1.782c0-1.668.967-2.914 2.171-2.914 1.023 0 1.518.769 1.518 1.69 0 1.029-.655 2.568-.994 3.995-.283 1.194.599 2.169 1.777 2.169 2.133 0 3.772-2.249 3.772-5.495 0-2.873-2.064-4.882-5.012-4.882-3.414 0-5.418 2.561-5.418 5.207 0 1.031.397 2.138.893 2.738a.36.36 0 01.083.345l-.333 1.36c-.053.22-.174.267-.402.161-1.499-.698-2.436-2.889-2.436-4.649 0-3.785 2.75-7.262 7.929-7.262 4.163 0 7.398 2.967 7.398 6.931 0 4.136-2.607 7.464-6.227 7.464-1.216 0-2.359-.632-2.75-1.378l-.748 2.853c-.271 1.043-1.002 2.35-1.492 3.146C9.57 23.812 10.763 24 12 24c6.627 0 12-5.373 12-12S18.627 0 12 0z"/>
                        </svg>
                    </a>
                   
                </div>
            </div>
        </div>
    </footer>
  </div>
    <a href="/chat" id="trixie-fab">
    <img src="{{ asset('tunawoi.png') }}" alt="Trixie AI">
    </a>
<div class="logout-overlay" id="logoutOverlay">
    <div class="logout-modal">
        <div class="logout-title">Yakin ingin keluar?</div>
        <div class="logout-desc">Kamu akan keluar dari akun. Perubahan yang kamu lakukan di akun ini akan tetap tersimpan</div>
        <div class="logout-actions">
            <button class="logout-btn logout-btn-cancel" onclick="closeLogoutModal()">Batal</button>
            <button class="logout-btn logout-btn-confirm" onclick="confirmLogout()">Ya, Keluar</button>
        </div>
    </div>
</div>  
<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
  @csrf
</form>
@auth
<script>
(function() {
  window.scrollTo(0, 0);
  
  const pageContent = document.querySelector(".page-content");
  
  pageContent.style.animation = 'none';
  pageContent.style.opacity = '0';
  
  void pageContent.offsetHeight;
  
  setTimeout(() => {
    pageContent.style.animation = '';
    pageContent.style.opacity = '';
  }, 10);
})();

window.addEventListener('beforeunload', function() {
  window.scrollTo(0, 0);
});

  // ============================================================
  // PROFILE DROPDOWN & USER AUTH
  // ============================================================
  
  function toggleDropdown(event) {
    if (event) {
      event.stopPropagation();
    }

    const dropdown = document.getElementById('profileDropdown');
    if (dropdown) {
      dropdown.classList.toggle('open');
    }
  }

  document.addEventListener('click', function(e) {
    const wrap = document.getElementById('profileWrap');
    if (wrap && !wrap.contains(e.target)) {
      const dropdown = document.getElementById('profileDropdown');
      if (dropdown) {
        dropdown.classList.remove('open');
      }
    }
  }); 

  function handleLogout() {
    const dropdown = document.getElementById('profileDropdown');
    if (dropdown) {
      dropdown.classList.remove('open');
    }
    const overlay = document.getElementById('logoutOverlay');
    if (overlay) {
      overlay.classList.add('open');
    }
  }

  function closeLogoutModal() {
    const overlay = document.getElementById('logoutOverlay');
    if (overlay) {
      overlay.classList.remove('open');
    }
  }

  function confirmLogout() {
    const form = document.getElementById('logout-form');
    if (form) {
      form.submit();
    }
  }

  const logoutOverlay = document.getElementById('logoutOverlay');
  if (logoutOverlay) {
    logoutOverlay.addEventListener('click', function(e) {
      if (e.target === this) closeLogoutModal();
    });
  }

  function getInitials(text) {
    if (!text) return 'U';
    
    const words = text.trim().split(' ');
    if (words.length >= 2) {
        return (words[0][0] + words[1][0]).toUpperCase();
    }
    
    return text[0].toUpperCase();
}

  // ✨ CEK LOGIN STATUS SAAT PAGE LOAD
  window.addEventListener('load', function() {
    @auth
      updateUserProfile({
        name: "{{ Auth::user()->name }}",
        email: "{{ Auth::user()->email }}"
      });
    @endauth

    @if(session('success'))
      showToast("{{ session('success') }}");
    @endif
  });
  
let closeTimer;

document.querySelectorAll('.nav-item').forEach(item => {
  item.addEventListener('mouseenter', function() {
    clearTimeout(closeTimer);
    document.querySelectorAll('.dropdown').forEach(d => d.style.display = 'none');
    this.querySelector('.dropdown').style.display = 'block';
  });

  item.addEventListener('mouseleave', function() {
    closeTimer = setTimeout(() => {
      this.querySelector('.dropdown').style.display = 'none';
    }, 300);
  });
});

document.addEventListener('DOMContentLoaded', function() {

  var btn  = document.getElementById('hamburgerBtn');
  var menu = document.getElementById('mobileMenu');

  if (!btn || !menu) return;


  // TOGGLE HAMBURGER
  btn.addEventListener('click', function(e) {
    e.stopPropagation();

    var isOpen = menu.classList.toggle('open');
    btn.classList.toggle('open', isOpen);
    document.body.style.overflow = isOpen ? 'hidden' : '';

    if (isOpen) {
      window.scrollTo({ top: 0, behavior: 'smooth' });
    }
  });


  // CLICK OUTSIDE CLOSE
  document.addEventListener('click', function(e) {
    if (
      menu.classList.contains('open') &&
      !menu.contains(e.target) &&
      !btn.contains(e.target)
    ) {
      closeMenu();
    }
  });


  // RESIZE CLOSE
  window.addEventListener('resize', function() {
    if (window.innerWidth > 900) {
      closeMenu();
    }
  });


  // KHUSUS LINK YANG ADA CLASS close-menu
  document.querySelectorAll('.close-menu').forEach(function(link) {
    link.addEventListener('click', function() {
      closeMenu();
      window.scrollTo({ top: 0, behavior: 'smooth' });
    });
  });


  function closeMenu() {
    menu.classList.remove('open');
    btn.classList.remove('open');
    document.body.style.overflow = '';
  }

});


// DROPDOWN
function toggleMobileDropdown(el) {
  var item = el.closest('.mobile-nav-item');
  var wasOpen = item.classList.contains('open');

  document.querySelectorAll('.mobile-nav-item.open').forEach(function(i) {
    i.classList.remove('open');
  });

  if (!wasOpen) item.classList.add('open');
}

const userSettings = {
        mode_gelap: {{ Auth::user()->setting->mode_gelap ?? 'false' ? 'true' : 'false' }},
        kontras_tinggi: {{ Auth::user()->setting->kontras_tinggi ?? 'false' ? 'true' : 'false' }},
        kurangi_animasi: {{ Auth::user()->setting->kurangi_animasi ?? 'false' ? 'true' : 'false' }},
        pembaca_layar: {{ Auth::user()->setting->pembaca_layar ?? 'true' ? 'true' : 'false' }},
        text_to_speech: {{ Auth::user()->setting->text_to_speech ?? 'true' ? 'true' : 'false' }},
    };

    function applySettings() {
        // Mode Gelap
        if (userSettings.mode_gelap) {
            document.body.classList.add('dark-mode');
        }

        // Kontras Tinggi
        if (userSettings.kontras_tinggi) {
            document.body.classList.add('high-contrast');
        }

        // Kurangi Animasi
        if (userSettings.kurangi_animasi) {
            document.body.classList.add('reduce-motion');
        }
    }

    applySettings();

const vidData = [
  {
    title: "Mengenal Disabilitas Fisik & Cara Mendukungnya",
    tag: "Mobilitas",
    desc: "Video ini membahas secara mendalam tentang berbagai jenis disabilitas fisik, tantangan yang dihadapi dalam kehidupan sehari-hari, serta cara-cara praktis yang bisa kita lakukan untuk mendukung dan menciptakan lingkungan yang lebih inklusif bagi penyandang disabilitas fisik.",
    duration: "12 menit 34 detik",
    bg: "linear-gradient(135deg, #1e3a8a, #3b82f6)",
    emoji: "♿"
  },
  {
    title: "Teknologi Aksesibilitas untuk Tunanetra",
    tag: "Visual",
    desc: "Pelajari berbagai teknologi assistive yang membantu penyandang tunanetra dan low vision dalam beraktivitas, mulai dari screen reader, aplikasi pengenalan suara, hingga perangkat braille digital yang tersedia saat ini.",
    duration: "8 menit 20 detik",
    bg: "linear-gradient(135deg, #065f46, #10b981)",
    emoji: "👁️",
    src: "r9Y6XMko9Jc"
  },
  {
    title: "Bahasa Isyarat: Dasar Komunikasi Tuli",
    tag: "Pendengaran",
    desc: "Pengenalan dasar Bahasa Isyarat Indonesia (BISINDO) yang dapat membantu kamu berkomunikasi dengan teman-teman Tuli. Video ini mencakup salam, angka, huruf, dan kalimat sehari-hari yang paling sering digunakan.",
    duration: "15 menit 10 detik",
    bg: "linear-gradient(135deg, #7c3aed, #a78bfa)",
    emoji: "👂"
  },
  {
    title: "Memahami Spektrum Autisme & Cara Berinteraksi",
    tag: "Kognitif",
    desc: "Autisme adalah spektrum yang luas. Video ini menjelaskan karakteristik autisme, cara berinteraksi yang tepat, serta bagaimana menciptakan lingkungan yang nyaman dan ramah bagi individu autistik di rumah, sekolah, maupun tempat kerja.",
    duration: "20 menit 5 detik",
    bg: "linear-gradient(135deg, #9a3412, #fb923c)",
    emoji: "🧠"
  },
  {
    title: "Disabilitas Wicara: Komunikasi Alternatif",
    tag: "Bicara",
    desc: "Mengenal berbagai jenis gangguan wicara dan cara mendukung komunikasi yang efektif menggunakan Augmentative and Alternative Communication (AAC), papan komunikasi, dan aplikasi text-to-speech modern.",
    duration: "10 menit 45 detik",
    bg: "linear-gradient(135deg, #0e7490, #22d3ee)",
    emoji: "🗣️"
  },
  {
    title: "Kesehatan Mental & Disabilitas Psikososial",
    tag: "Mental",
    desc: "Disabilitas psikososial sering kali tidak terlihat namun dampaknya nyata. Video ini membahas pentingnya kesehatan mental, stigma yang dihadapi, serta bagaimana membangun sistem dukungan yang inklusif untuk individu dengan kondisi kesehatan mental.",
    duration: "18 menit 30 detik",
    bg: "linear-gradient(135deg, #be185d, #f472b6)",
    emoji: "❤️"
  },
  {
    title: "Membangun Dunia Inklusif untuk Semua",
    tag: "Inklusivitas",
    desc: "Sebuah panduan komprehensif tentang bagaimana individu, komunitas, dan organisasi dapat berkontribusi dalam membangun dunia yang benar-benar inklusif — mulai dari desain universal, kebijakan publik, hingga perubahan pola pikir masyarakat.",
    duration: "22 menit 15 detik",
    bg: "linear-gradient(135deg, #1a2340, #0078ff)",
    emoji: "🌍"
  }
];

function openVidModal(index) {
  const data = vidData[index];
  const modal = document.getElementById('vidModal');
  const thumb = document.getElementById('modalThumb');

  document.getElementById('modalTag').textContent = data.tag;
  document.getElementById('modalTitle').textContent = data.title;
  document.getElementById('modalDesc').textContent = data.desc;
  document.getElementById('modalDuration').textContent = '⏱ ' + data.duration;

  thumb.style.background = data.bg;
  thumb.querySelector('.vid-modal-play').innerHTML = data.src
  ? `<iframe 
       src="https://www.youtube.com/embed/${data.src}?autoplay=1" 
       style="position:absolute; top:0; left:0; width:100%; height:100%; border:none;"
       allowfullscreen 
       allow="autoplay; encrypted-media">
     </iframe>`
  : `<span style="font-size:2.5rem">${data.emoji}</span>`;

  // ✅ Tampilkan modal
  modal.classList.add('active');
  
  // ✅ Disable scroll di body
  document.body.style.overflow = 'hidden';
  document.body.style.position = 'fixed';
  document.body.style.width = '100%';
}

function closeVidModal(event) {
  const modal = document.getElementById('vidModal');
  
  if (!event || event.target === modal || event.currentTarget?.classList.contains('vid-modal-close')) {
    modal.classList.remove('active');
    
    // ✅ Enable scroll di body lagi
    document.body.style.overflow = '';
    document.body.style.position = '';
    document.body.style.width = '';
    
    // ✅ Stop video
    const playArea = document.querySelector('#modalThumb .vid-modal-play');
    if (playArea) {
      playArea.innerHTML = '';
    }
  }
}

// Close dengan ESC
document.addEventListener('keydown', function(e) {
  if (e.key === 'Escape') {
    const modal = document.getElementById('vidModal');
    if (modal && modal.classList.contains('active')) {
      closeVidModal();
    }
  }
});

const reveals = document.querySelectorAll('.main-header, .tuna-hero, .tuna-features, .marketplace, .vid-section, footer');

reveals.forEach(el => el.classList.add('reveal'));

const revealObserver = new IntersectionObserver((entries) => {
  entries.forEach((entry, i) => {
    if (entry.isIntersecting) {
      setTimeout(() => {
        entry.target.classList.add('visible');
      }, i * 120);
      revealObserver.unobserve(entry.target);
    }
  });
}, { threshold: 0.08 });

reveals.forEach(el => revealObserver.observe(el));
</script>
@endauth
@include('partials.apply-settings')
</body>
</html>