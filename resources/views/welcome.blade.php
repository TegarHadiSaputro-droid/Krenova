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

    <!-- ===== VIDEO PEMBELAJARAN ===== -->
<section class="vid-section">
  <div class="tuna-container">
    <div class="tuna-section-head">
      <span class="section-tag">Edukasi</span>
      <h2>Video <span>Pembelajaran</span></h2>
      <p>Kenali lebih dalam tentang teman-teman disabilitas melalui video edukatif kami.</p>
    </div>

    <!-- Banner kepedulian -->
<div class="vid-banner">
  <span>♿</span>
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

<!-- ===== MODAL DESKRIPSI VIDEO ===== -->
<div class="vid-modal-overlay" id="vidModal" onclick="closeVidModal(event)">
  <div class="vid-modal">
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
  </main>


  <!-- ============================================================
       FOOTER
  ============================================================ -->

<footer>
        <div class="f-wrap">
            <!-- Strip: Logo + Tagline centered -->
            <div class="f-strip">
                <div class="f-strip-top">
                    <div class="f-logo-text">TU<span style="color: #0078ff;">NA</span></div>
                    <div class="f-kepanjangan">Transforming User Needs into Access</div>
                </div>
                <p class="f-tagline">Selalu siap membantu teman disabilitas dimana saja dan kapan saja.</p>
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
                        <li><a href="#"><span class="dot"></span>Lihat Paket</a></li>
                        <li><a href="#"><span class="dot"></span>E-Wallet</a></li>
                        <li><a href="#"><span class="dot"></span>Invoice</a></li>
                    </ul>
                </div>

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
                <div class="f-copy">
                    © 2025 <span class="cn">TU</span><span class="ct">NA</span> · All Rights Reserved
                </div>
            </div>
        </div>
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
    emoji: "👁️"
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
  thumb.querySelector('.vid-modal-play').innerHTML = `
    <span style="font-size:2.5rem">${data.emoji}</span>
  `;

  modal.classList.add('active');
  document.body.style.overflow = 'hidden';
}

function closeVidModal(event) {
  if (!event || event.target === document.getElementById('vidModal') || event.currentTarget.classList.contains('vid-modal-close')) {
    document.getElementById('vidModal').classList.remove('active');
    document.body.style.overflow = '';
  }
}

// Close dengan tombol ESC
document.addEventListener('keydown', function(e) {
  if (e.key === 'Escape') closeVidModal();
});
</script>
</body>
</html>