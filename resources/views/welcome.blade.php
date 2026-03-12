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
          <a href="/call-chat" onclick="handleNavigation(event)">Call & Chat</a>
          <a href="/chat">AI Trixie</a>
          <a href="/personalisasi" onclick="handleNavigation(event)">Personalisasi</a>
          <a href="/camera-on" onclick="handleNavigation(event)">Camera On Point</a>
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
<div class="profile-dropdown-wrap" id="profile-dropdown-wrap">  
    <button class="profile-trigger" onclick="toggleDropdown(event)">
        <div class="profile-trigger-avatar" id="triggerAvatar">{{ $userInitials }}</div>
    </button>

    <!-- Header - klik untuk ke halaman profile -->
  <div class="profile-dropdown" id="profileDropdown">
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
</div>
  @endauth
  <button class="hamburger-btn" id="hamburgerBtn" aria-label="Toggle menu">
    <span></span>
    <span></span>
    <span></span>
  </button>
  </div>
</header>

  <div class="mobile-menu" id="mobileMenu">
    <div class="mobile-menu-inner">

      <div class="mobile-nav-item">
        <a href="/" class="mobile-nav-link">Beranda</a>
      </div>

      <div class="mobile-nav-item">
        <div class="mobile-nav-link" onclick="toggleMobileDropdown(this)">
          Layanan <span class="mobile-arrow">▾</span>
        </div>
        <div class="mobile-dropdown">
          <a href="/call-chat" onclick="handleNavigation(event)">Call & Chat</a>
          <a href="/chat">AI Trixie</a>
          <a href="/personalisasi" onclick="handleNavigation(event)">Personalisasi</a>
          <a href="/camera-on" onclick="handleNavigation(event)">Camera On Point</a>
        </div>
      </div>

      <div class="mobile-nav-item">
        <a href="#fitur" class="mobile-nav-link close-menu">Fitur Kami</a>
      </div>

      <div class="mobile-nav-item">
        <div class="mobile-nav-link" onclick="toggleMobileDropdown(this)">
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
        <div class="mobile-nav-link" onclick="toggleMobileDropdown(this)">
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
        <div class="mobile-nav-link" onclick="toggleMobileDropdown(this)">
          Hubungi Kami <span class="mobile-arrow">▾</span>
        </div>
        <div class="mobile-dropdown">
        <a href="/hubungi-kami#whatsapp">WhatsApp</a>
        <a href="/hubungi-kami#email">Email Support</a>
        <a href="/hubungi-kami#sosial-media">Sosial Media Kami</a>
        <a href="/hubungi-kami#kantor">Kantor Kami</a>
        </div>
      </div>
      @auth
        @php
          $userName = Auth::user()->name;
          $userEmail = Auth::user()->email;
          $words = explode(' ', trim($userName));
          $userInitials = count($words) >= 2 
              ? strtoupper($words[0][0] . $words[1][0])
              : strtoupper(substr($userName, 0, 1));
        @endphp
        
        <div class="mobile-nav-item">
          <div class="mobile-nav-link" onclick="toggleMobileDropdown(this)">
            <div style="display: flex; align-items: center; gap: 10px;">
              <div class="mobile-avatar-small">{{ $userInitials }}</div>
              <span>{{ $userName }}</span>
            </div>
            <span class="mobile-arrow">▾</span>
          </div>
          <div class="mobile-dropdown">
            <a href="{{ route('account') }}">Akun Saya</a>
            <a href="{{ route('dashboard.settings') }}">Pengaturan</a>
            <a href="{{ route('dashboard.notifications') }}">Notifikasi</a>
            <a href="{{ route('dashboard.privacy-security') }}">Privasi & Keamanan</a>
            <a href="{{ route('dashboard.about') }}">Tentang Aplikasi</a>
            <a href="{{ route('dashboard.help') }}">Bantuan</a>
            <a href="#" onclick="event.preventDefault(); handleLogout();" class="mobile-logout" style="color: #ef4444;">Keluar</a>
          </div>
        </div>
      @endauth

      @guest
    <div class="mobile-menu-actions">
      <a href="{{ route('login') }}" class="btn-login">Masuk</a>
      <a href="{{ route('download') }}" style="text-decoration:none; flex:1; display:flex;">
        <button class="btn-cta" style="width:100%; justify-content:center;">Coba Gratis</button>
      </a>
    </div>
    @endguest
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

          
          {{-- Visual mockup: hanya muncul ≥900px via CSS --}}
          <div class="hero-visual-wrapper">
            <div class="hero-badge hero-badge--call">
              <span class="hero-badge__icon">📞</span>
              <span>Call & Chat</span>
            </div>
            <div class="hero-badge hero-badge--ai">
              <span class="hero-badge__icon">🤖</span>
              <span>AI Trixie</span>
            </div>
            <div class="hero-badge hero-badge--camera">
              <span class="hero-badge__icon icon-camera">📸</span>
              <span>Camera On Point</span>
            </div>
            <div class="hero-device">
              <div class="hero-device__topbar"></div>
              <div class="hero-device__body">
                <div class="hero-device_line hero-device_line--w80"></div>
                <div class="hero-device_line hero-device_line--w60"></div>
                <div class="hero-device_line hero-device_line--w90"></div>
                <div class="hero-device__cards">
                  <div class="hero-device__mini-card"></div>
                  <div class="hero-device__mini-card"></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- ===== FITUR ===== -->
     <!-- ===== FITUR ===== -->
  <section class="tuna-features" id="fitur">
  <div class="tuna-container">
    <div class="tuna-section-head">
      <span class="section-tag">Layanan Kami</span>
      <h2>Semua yang kamu butuhkan,<br><span>dalam satu platform</span></h2>
      <p>Empat layanan utama yang dirancang khusus agar lebih mudah diakses dan nyaman digunakan oleh semua pengguna.</p>
    </div>

    <div class="tuna-features__grid">

      <!-- 1. Call & Chat -->
      <a href="#" class="feature-card">
        <div class="feature-card__icon">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8">
            <path d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"/>
          </svg>
        </div>
        <div class="feature-card__body">
          <h3>Call & Chat</h3>
          <p>Media komunikasi yang memudahkan pengguna disabilitas untuk berinteraksi, bertanya, dan saling terhubung secara cepat dan mudah.</p>
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

      <!-- 2. AI Trixie (accent) -->
      <a href="#" class="feature-card feature-card--accent">
        <div class="feature-card__icon">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8">
            <path d="M12 2a10 10 0 100 20A10 10 0 0012 2zm0 0v4m0 12v2m-8-8H2m20 0h-2M5.636 5.636l1.414 1.414m9.9 9.9l1.414 1.414M5.636 18.364l1.414-1.414m9.9-9.9l1.414-1.414"/>
          </svg>
        </div>
        <div class="feature-card__body">
          <h3>AI Trixie</h3>
          <p>Asisten AI yang membantu menjawab pertanyaan, memberikan rekomendasi, dan mendukung kebutuhan pengguna secara personal.</p>
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

      <!-- 3. Personalisasi -->
      <a href="#" class="feature-card">
        <div class="feature-card__icon">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
            <circle cx="12" cy="8" r="3"/>
            <path d="M6 20v-2a6 6 0 0112 0v2"/>
            <line x1="19" y1="3" x2="19" y2="9"/>
            <line x1="16" y1="6" x2="22" y2="6"/>
          </svg>
        </div>
        <div class="feature-card__body">
          <h3>Personalisasi</h3>
          <p>Pengaturan aksesibilitas yang dapat disesuaikan dengan kebutuhan pengguna agar layanan lebih nyaman, mudah digunakan, dan mandiri.</p>
        </div>
        <div class="feature-card__silhouette">
          <svg viewBox="0 0 120 80" fill="none">
            <line x1="10" y1="20" x2="110" y2="20" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" opacity=".15"/>
            <circle cx="35" cy="20" r="6" fill="currentColor" opacity=".2"/>
            <line x1="10" y1="40" x2="110" y2="40" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" opacity=".15"/>
            <circle cx="70" cy="40" r="6" fill="currentColor" opacity=".2"/>
            <line x1="10" y1="60" x2="110" y2="60" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" opacity=".15"/>
            <circle cx="50" cy="60" r="6" fill="currentColor" opacity=".2"/>
          </svg>
        </div>
        <span class="feature-card__arrow">→</span>
      </a>

      <!-- 4. Camera On Point (accent) -->
      <a href="#" class="feature-card">
  <span class="feature-card__arrow">→</span>

  <div class="feature-card__icon">
    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8">
      <path d="M23 19a2 2 0 01-2 2H3a2 2 0 01-2-2V8a2 2 0 012-2h4l2-3h6l2 3h4a2 2 0 012 2z"/>
      <circle cx="12" cy="13" r="4"/>
    </svg>
  </div>

  <div class="feature-card__body">
    <h3>Camera On Point</h3>
    <p>Teknologi deteksi objek dan navigasi berbasis AI yang membantu pengguna tunanetra mengenali lingkungan sekitar melalui arahan suara.</p>
  </div>

  <div class="feature-card__silhouette">
    <svg viewBox="0 0 120 80" fill="none">
      <rect x="10" y="10" width="100" height="62" rx="10" fill="currentColor" opacity=".08"/>
      <circle cx="60" cy="41" r="16" fill="currentColor" opacity=".1"/>
      <circle cx="60" cy="41" r="8" fill="currentColor" opacity=".15"/>
      <rect x="10" y="10" width="22" height="12" rx="5" fill="currentColor" opacity=".12"/>
    </svg>
  </div>
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

 
  <!-- ============================================================
      FOOTER
  ============================================================ -->

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
  </div>

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
    console.log('toggleDropdown dipanggil');
    const dropdown = document.getElementById('profileDropdown');
    if (dropdown) {
      dropdown.classList.toggle('open');
    }
  }

  document.addEventListener('click', function(e) {
    const wrap = document.getElementById('profile-dropdown-wrap');
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
<script>
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

function toggleMobileDropdown(el) {
  var item = el.closest('.mobile-nav-item');
  var wasOpen = item.classList.contains('open');

  document.querySelectorAll('.mobile-nav-item.open').forEach(function(i) {
    i.classList.remove('open');
  });

  if (!wasOpen) item.classList.add('open');
}

const vidData = [
  {
    title: "Mengenal Disabilitas Fisik & Cara Mendukungnya",
    tag: "Mobilitas",
    desc: "Video ini membahas secara mendalam tentang berbagai jenis disabilitas fisik, tantangan yang dihadapi dalam kehidupan sehari-hari, serta cara-cara praktis yang bisa kita lakukan untuk mendukung dan menciptakan lingkungan yang lebih inklusif bagi penyandang disabilitas fisik.",
    duration: "12 menit 34 detik",
    bg: "linear-gradient(135deg, #1e3a8a, #3b82f6)",
    emoji: "♿",
    src: "hjvmAUbfXdw"
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
    emoji: "👂",
    src: "Re8XaAr8XRw"
  },
  {
    title: "Memahami Spektrum Autisme & Cara Berinteraksi",
    tag: "Kognitif",
    desc: "Autisme adalah spektrum yang luas. Video ini menjelaskan karakteristik autisme, cara berinteraksi yang tepat, serta bagaimana menciptakan lingkungan yang nyaman dan ramah bagi individu autistik di rumah, sekolah, maupun tempat kerja.",
    duration: "20 menit 5 detik",
    bg: "linear-gradient(135deg, #9a3412, #fb923c)",
    emoji: "🧠",
    src: "rjluLV1F-UI"
  },
  {
    title: "Disabilitas Wicara: Komunikasi Alternatif",
    tag: "Bicara",
    desc: "Mengenal berbagai jenis gangguan wicara dan cara mendukung komunikasi yang efektif menggunakan Augmentative and Alternative Communication (AAC), papan komunikasi, dan aplikasi text-to-speech modern.",
    duration: "10 menit 45 detik",
    bg: "linear-gradient(135deg, #0e7490, #22d3ee)",
    emoji: "🗣️",
    src: "dm7uXtpNiAQ"
  },
  {
    title: "Kesehatan Mental & Disabilitas Psikososial",
    tag: "Mental",
    desc: "Disabilitas psikososial sering kali tidak terlihat namun dampaknya nyata. Video ini membahas pentingnya kesehatan mental, stigma yang dihadapi, serta bagaimana membangun sistem dukungan yang inklusif untuk individu dengan kondisi kesehatan mental.",
    duration: "18 menit 30 detik",
    bg: "linear-gradient(135deg, #be185d, #f472b6)",
    emoji: "❤️",
    src: "Z3faUGgMsNI"
  },
  {
    title: "Membangun Dunia Inklusif untuk Semua",
    tag: "Inklusivitas",
    desc: "Sebuah panduan komprehensif tentang bagaimana individu, komunitas, dan organisasi dapat berkontribusi dalam membangun dunia yang benar-benar inklusif — mulai dari desain universal, kebijakan publik, hingga perubahan pola pikir masyarakat.",
    duration: "22 menit 15 detik",
    bg: "linear-gradient(135deg, #1a2340, #0078ff)",
    emoji: "🌍",
    src: "p1pYKMiPpzU"
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
  document.body.classList.add('modal-open');
}

function closeVidModal(event) {
  const modal = document.getElementById('vidModal');
  if (!event || event.target === modal || event.currentTarget?.classList.contains('vid-modal-close')) {
    modal.classList.remove('active');
    document.body.classList.remove('modal-open');
    const playArea = document.querySelector('#modalThumb .vid-modal-play');
    if (playArea) {
      playArea.innerHTML = '';
    }
  }
}
</script>

@auth
@include('partials.apply-settings')
@endauth
</body>
</html>