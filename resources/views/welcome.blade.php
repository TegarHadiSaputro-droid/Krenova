<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>TUNA</title>
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>

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
          <a href="#">Marketplace</a>
          <a href="#">Konsultasi</a>
        </div>
      </div>

      <a href="#" class="nav-link">Fitur Kami</a>

      <div class="nav-item">
        <span class="nav-link">Berlangganan <span class="arrow"></span></span>
        <div class="dropdown">
          <a href="#">Promo</a>
          <a href="#">Lihat Paket</a>
          <a href="#">E-Wallet</a>
          <a href="#">Invoice</a>
        </div>
      </div>

      <div class="nav-item">
        <span class="nav-link">Panduan <span class="arrow"></span></span>
        <div class="dropdown">
          <a href="#">Visi Misi</a>
          <a href="#">Cara Mulai</a>
          <a href="#">Video Tutorial</a>
          <a href="#">FAQ</a>
        </div>
      </div>

      <div class="nav-item">
        <span class="nav-link">Hubungi Kami <span class="arrow"></span></span>
        <div class="dropdown">
          <a href="#">WhatsApp</a>
          <a href="#">Email Support</a>
          <a href="#">Sosial Media Kami</a>
          <a href="#">Kantor Kami</a>
        </div>
      </div>

      <div class="nav-divider"></div>

      <div class="all-products">
        <div class="grid-icon">
          <span></span><span></span><span></span><span></span>
        </div>
        All Products
      </div>
    </nav>

    <div class="header-actions">
      <a href="{{ route('login') }}" class="btn-login">Masuk</a>
      <a href="{{ route('download') }}" style="text-decoration: none;">
        <button class="btn-cta">Coba Gratis</button>
      </a>
    </div>
  </header>

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
            <h1>Teknologi yang <br><em>benar-benar</em> untuk <strong>semua</strong></h1>
            <p>TUNA — <b>Transforming User Needs into Access</b> — adalah platform digital inklusif yang dirancang untuk membantu penyandang disabilitas mengakses layanan, informasi, dan peluang tanpa hambatan.</p>
            <div class="tuna-hero__stats">
              <div class="stat">
                <span class="stat-num">5K+</span>
                <span class="stat-label">Pengguna Aktif</span>
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
              <span class="card-icon">♿</span>
              <span>Aksesibel</span>
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
    <section class="tuna-features" id="layanan">
      <div class="tuna-container">
        <div class="tuna-section-head">
          <span class="section-tag">Layanan Kami</span>
          <h2>Semua yang kamu butuhkan,<br><span>dalam satu platform</span></h2>
          <p>Empat layanan utama yang dirancang khusus untuk aksesibilitas dan kemudahan.</p>
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
              <p>Hubungi kami kapan saja via telepon atau pesan langsung. Layanan responsif 24 jam untuk semua kebutuhanmu.</p>
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
              <p>Asisten AI cerdas yang membantu menjawab pertanyaan, memberi rekomendasi, dan mendampingi aktivitasmu.</p>
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
              <p>Temukan template, tools, e-book, dan produk digital lainnya yang dirancang untuk kebutuhan aksesibilitas.</p>
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
              <p>Sesi konsultasi langsung dengan tim profesional kami untuk solusi yang lebih personal dan tepat sasaran.</p>
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
    <section class="tuna-market" id="marketplace">
      <div class="tuna-container">
        <div class="tuna-section-head">
          <span class="section-tag">Marketplace</span>
          <h2>Produk pilihan <span>untuk kamu</span></h2>
          <p>Template, tools, dan konten digital berkualitas tinggi.</p>
        </div>

        <!-- Scroll horizontal -->
        <div class="tuna-market__scroll-wrap">
          <div class="tuna-market__row">
            <div class="market-card">
              <div class="market-card__badge best">Best Seller</div>
              <div class="market-card__img"><div class="market-card__img-placeholder">🌐</div></div>
              <div class="market-card__info">
                <h4>Template Website</h4>
                <span class="market-price">Rp 199.000</span>
                <button class="btn-market">Lihat</button>
              </div>
            </div>
            <div class="market-card">
              <div class="market-card__img"><div class="market-card__img-placeholder">🤖</div></div>
              <div class="market-card__info">
                <h4>AI Trixie</h4>
                <span class="market-price">Rp 99.000</span>
                <button class="btn-market">Lihat</button>
              </div>
            </div>
            <div class="market-card">
              <div class="market-card__badge new">Baru</div>
              <div class="market-card__img"><div class="market-card__img-placeholder">💼</div></div>
              <div class="market-card__info">
                <h4>Konsultasi 60'</h4>
                <span class="market-price">Rp 299.000</span>
                <button class="btn-market">Lihat</button>
              </div>
            </div>
            <div class="market-card">
              <div class="market-card__img"><div class="market-card__img-placeholder">📖</div></div>
              <div class="market-card__info">
                <h4>E-Book Panduan</h4>
                <span class="market-price">Rp 49.000</span>
                <button class="btn-market">Lihat</button>
              </div>
            </div>
            <div class="market-card">
              <div class="market-card__img"><div class="market-card__img-placeholder">🔍</div></div>
              <div class="market-card__info">
                <h4>Plugin SEO</h4>
                <span class="market-price">Rp 149.000</span>
                <button class="btn-market">Lihat</button>
              </div>
            </div>
            <div class="market-card">
              <div class="market-card__img"><div class="market-card__img-placeholder">🎨</div></div>
              <div class="market-card__info">
                <h4>Desain Grafis</h4>
                <span class="market-price">Rp 89.000</span>
                <button class="btn-market">Lihat</button>
              </div>
            </div>
          </div>
        </div>

        <!-- Grid produk lainnya -->
        <div class="tuna-market__grid">
          <div class="market-card">
            <div class="market-card__img"><div class="market-card__img-placeholder">⭐</div></div>
            <div class="market-card__info">
              <h4>Akun Premium 1 Bulan</h4>
              <span class="market-price">Rp 50.000</span>
              <button class="btn-market">Lihat</button>
            </div>
          </div>
          <div class="market-card">
            <div class="market-card__img"><div class="market-card__img-placeholder">🚀</div></div>
            <div class="market-card__info">
              <h4>Paket Starter</h4>
              <span class="market-price">Rp 120.000</span>
              <button class="btn-market">Lihat</button>
            </div>
          </div>
          <div class="market-card">
            <div class="market-card__img"><div class="market-card__img-placeholder">🎬</div></div>
            <div class="market-card__info">
              <h4>Video Tutorial</h4>
              <span class="market-price">Rp 75.000</span>
              <button class="btn-market">Lihat</button>
            </div>
          </div>
        </div>

        <div style="text-align:center; margin-top: 36px;">
          <a href="#" class="btn-blue">Lihat Semua Produk →</a>
        </div>
      </div>
    </section>

  </main>

  <!-- ============================================================
       FOOTER
  ============================================================ -->

<footer>
  <div class="footer-topbar"></div>

  <div class="footer-main">
    <div class="footer-brand">
      <div class="logo">📣 Layanan Kami</div>
      <p class="tagline">Penyandang disabilitas masih mengalami kendala dalam memanfaatkan teknologi karena belum semua sistem dirancang secara inklusif. Oleh karena itu, dikembangkan Cross-Platform Apllication TUNA sebagai platform digital berbasis web/apps yang menyediakan layanan dan dukungan yang lebih mudah diakses.</p>
      <a href="#" class="btn-cta">🚀 Konsultasi Gratis</a>
      <div class="contact-list">
        <a href="#"><span class="c-icon">📞</span>+62 811-9910-0330</a>
        <a href="#"><span class="c-icon">✉️</span>tuna@gmail.com</a>
        <a href="#"><span class="c-icon">⏰</span>Setiap Hari 24 jam</a>
      </div>
    </div>

    <div class="footer-col">
      <h4>Layanan Kami</h4>
      <ul>
        <li><a href="#">Call&Chat</a></li>
        <li><a href="#">AI Trixie</a></li>
        <li><a href="#">Marketplace</a></li>
        <li><a href="#">Konsultasi</a></li>
      </ul>
    </div>

<<<<<<< HEAD
    <div class="footer-col">
      <h4>Pembayaran</h4>
      <ul>
        <li><a href="#">Transfer Bank</a></li>
        <li><a href="#">Kartu kredit/Debit</a></li>
        <li><a href="#">E-Wallet</a></li>
        <li><a href="#">Invoice</a></li>
      </ul>
    </div>

    <div class="footer-col">
      <h4>Panduan</h4>
      <ul style="margin-bottom:14px;">
        <li><a href="#">Cara mulai</a></li>
        <li><a href="#">Video tutorial</a></li>
        <li><a href="#">FAQ</a></li>
        <li><a href="#">Blog</a></li>
      </ul>
  </div>
 </div>
=======
                <div class="f-col">
                    <h4>Panduan</h4>
                    <ul>
                        <li><a href="#"><span class="dot"></span>Visi Mis</a></li>
                        <li><a href="#"><span class="dot"></span>Cara Mulai</a></li>
                        <li><a href="#"><span class="dot"></span>Video Tutorial</a></li>
                        <li><a href="#"><span class="dot"></span>FAQ</a></li>
                    </ul>
                </div>

                <div class="f-col">
                    <h4>Hubungi Kami</h4>
                    <ul>
                        <li><a href="#"><span class="dot"></span>WhatsApp</a></li>
                        <li><a href="#"><span class="dot"></span>Email Support</a></li>
                        <li><a href="#"><span class="dot"></span>Sosial Media Kami</a></li>
                        <li><a href="#"><span class="dot"></span>Kantor Kami</a></li>
                    </ul>
                </div>
            </div>
>>>>>>> dd72b412d8d8d1ffa1731ee4619c80351677cfe6

    <div class="newsletter-box" style="margin: 0 64px 32px;">
        <p>Dapatkan konsultasi gratis tiap minggu.</p>
        <div class="input-row" style="display:flex; flex-direction:column; gap:8px;">
            <input type="email" placeholder="Email Anda...">
            <button>Daftar</button>
        </div>
<<<<<<< HEAD
    </div>

  <div class="footer-divider"></div>

  <div class="footer-copyright-row">
    <div class="copyright">
      © 2026 <span>TUNA (Transforming User Needs into Access)</span>. Seluruh hak cipta dilindungi undang-undang. &nbsp;·&nbsp; Kebijakan Privasi &nbsp;·&nbsp; Syarat & Ketentuan
    </div>
  </div>

  <div class="footer-social-row">
    <span class="social-label">Ikuti kami:</span>

    <a href="#" class="social-btn ig">
      <svg viewBox="0 0 24 24"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 1.366.062 2.633.334 3.608 1.308.975.975 1.246 2.242 1.308 3.608.058 1.266.07 1.646.07 4.85s-.012 3.584-.07 4.85c-.062 1.366-.333 2.633-1.308 3.608-.975.975-2.242 1.246-3.608 1.308-1.266.058-1.646.07-4.85.07s-3.584-.012-4.85-.07c-1.366-.062-2.633-.333-3.608-1.308-.975-.975-1.246-2.242-1.308-3.608C2.175 15.584 2.163 15.204 2.163 12s.012-3.584.07-4.85c.062-1.366.333-2.633 1.308-3.608.975-.975 2.242-1.246 3.608-1.308C8.416 2.175 8.796 2.163 12 2.163zm0-2.163C8.741 0 8.333.014 7.053.072 2.695.272.273 2.69.073 7.052.014 8.333 0 8.741 0 12c0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98C8.333 23.986 8.741 24 12 24c3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98C15.668.014 15.259 0 12 0zm0 5.838a6.162 6.162 0 1 0 0 12.324 6.162 6.162 0 0 0 0-12.324zM12 16a4 4 0 1 1 0-8 4 4 0 0 1 0 8zm6.406-11.845a1.44 1.44 0 1 0 0 2.881 1.44 1.44 0 0 0 0-2.881z"/></svg>
      Instagram
    </a>

    <a href="#" class="social-btn fb">
      <svg viewBox="0 0 24 24"><path d="M24 12.073C24 5.405 18.627 0 12 0S0 5.405 0 12.073C0 18.1 4.388 23.094 10.125 24v-8.437H7.078v-3.49h3.047V9.41c0-3.025 1.792-4.696 4.533-4.696 1.312 0 2.686.236 2.686.236v2.97h-1.513c-1.491 0-1.956.93-1.956 1.886v2.267h3.328l-.532 3.49h-2.796V24C19.612 23.094 24 18.1 24 12.073z"/></svg>
      Facebook
    </a>

    <a href="#" class="social-btn yt">
      <svg viewBox="0 0 24 24"><path d="M23.495 6.205a3.007 3.007 0 0 0-2.088-2.088c-1.87-.501-9.396-.501-9.396-.501s-7.507-.01-9.396.501A3.007 3.007 0 0 0 .527 6.205a31.247 31.247 0 0 0-.522 5.805 31.247 31.247 0 0 0 .522 5.783 3.007 3.007 0 0 0 2.088 2.088c1.868.502 9.396.502 9.396.502s7.506 0 9.396-.502a3.007 3.007 0 0 0 2.088-2.088 31.247 31.247 0 0 0 .5-5.783 31.247 31.247 0 0 0-.5-5.805zM9.609 15.601V8.408l6.264 3.602z"/></svg>
      YouTube
    </a>

    <a href="#" class="social-btn tk">
      <svg viewBox="0 0 24 24"><path d="M12.525.02c1.31-.02 2.61-.01 3.91-.02.08 1.53.63 3.09 1.75 4.17 1.12 1.11 2.7 1.62 4.24 1.79v4.03c-1.44-.05-2.89-.35-4.2-.97-.57-.26-1.1-.59-1.62-.93-.01 2.92.01 5.84-.02 8.75-.08 1.4-.54 2.79-1.35 3.94-1.31 1.92-3.58 3.17-5.91 3.21-1.43.08-2.86-.31-4.08-1.03-2.02-1.19-3.44-3.37-3.65-5.71-.02-.5-.03-1-.01-1.49.18-1.9 1.12-3.72 2.58-4.96 1.66-1.44 3.98-2.13 6.15-1.72.02 1.48-.04 2.96-.04 4.44-.99-.32-2.15-.23-3.02.37-.63.41-1.11 1.04-1.36 1.75-.21.51-.15 1.07-.14 1.61.24 1.64 1.82 3.02 3.5 2.87 1.12-.01 2.19-.66 2.77-1.61.19-.33.4-.67.41-1.06.1-1.79.06-3.57.07-5.36.01-4.03-.01-8.05.02-12.07z"/></svg>
      TikTok
    </a>

    <a href="#" class="social-btn li">
      <svg viewBox="0 0 24 24"><path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433a2.062 2.062 0 0 1-2.063-2.065 2.064 2.064 0 1 1 2.063 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/></svg>
      LinkedIn
    </a>

    <a href="#" class="social-btn">
      <svg viewBox="0 0 24 24"><path d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-4.714-6.231-5.401 6.231H2.742l7.732-8.855L1.254 2.25H8.08l4.253 5.622 5.91-5.622zm-1.161 17.52h1.833L7.084 4.126H5.117z"/></svg>
      X (Twitter)
    </a>
  </div>

</footer>





=======
    </footer>
<script>
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
</script>
</body>
</html>
>>>>>>> dd72b412d8d8d1ffa1731ee4619c80351677cfe6

<script>
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
</script>
</body>
</html>