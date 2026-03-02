<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>TUNA</title>
  <link href="#" rel="stylesheet">
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">
  <link rel="stylesheet" href="{{ asset('css/footer.css') }}">
</head>
 <body>
 <header class="main-header">
  <a href="#" class="logo">
  <img src="tunawoi.png" alt="Logo" style="height: 40px; width: auto; border-radius: 10px; margin-right: 10px;">
  
    <div class="logo-text-wrap">
  <div class="logo-main">TU<span>NA</span></div>
  <div class="logo-sub">Transforming User Needs into Access</div>
    </div>
        </a>

   <nav class="main-nav">
    <a href="{{ url('/') }}" class="nav-link">Beranda</a>


     
      <div class="nav-item">
        <span class="nav-link">
          Layanan
          <span class="arrow"></span>
        </span>
        <div class="dropdown">
          <a href="#">Call & Chat</a>
          <a href="#">AI trixie</a>
          <a href="#">Marketplace</a>
          <a href="#">Konsultasi</a>
        </div>
      </div>

      <a href="#" class="nav-link active">Template</a>
      <a href="#" class="nav-link">Portofolio</a>

      <div class="nav-item">
        <span class="nav-link">
        Berlangganan
          <span class="arrow"></span>
        </span>
        <div class="dropdown">
          <a href="#">Promo</a>
          <a href="#">Lihat paket</a>
          <a href="#">E-W</a>
          <a href="#">Invoice</a>
        </div>
      </div>

      <div class="nav-item">
        <span class="nav-link">
          Panduan
          <span class="arrow"></span>
        </span>
        <div class="dropdown">
          <a href="#">Cara Mulai</a>
          <a href="#">Video Tutorial</a>
          <a href="#">FAQ</a>
          <a href="#">Blog</a>
        </div>
      </div>

      <div class="nav-item">
        <span class="nav-link">
          Hubungi Kami
          <span class="arrow"></span>
        </span>
        <div class="dropdown">
          <a href="#">WhatsApp</a>
          <a href="#">Email Support</a>
          <a href="#">Live Chat</a>
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

<main>



  <!-- MARKETPLACE SECTION -->
<section class="marketplace">
  <div class="container">
    <!-- Bagian Rekomendasi (Horizontal Scroll) -->
    <div class="section-header">
      <h2>Rekomendasi <span>Produk</span></h2>
      <p>Produk pilihan untuk kamu</p>
    </div>

    <div class="scroll-wrapper">
      <div class="product-row">
        <!-- Card 1 -->
        <div class="product-card">
          <div class="product-badge best">Best Seller</div>
          <img src="https://via.placeholder.com/250x150" alt="Produk">
          <h3>Template Website</h3>
          <p class="price">Rp 199.000</p>
          <button class="btn-small">Lihat</button>
        </div>
        <!-- Card 2 -->
        <div class="product-card">
          <img src="https://via.placeholder.com/250x150" alt="Produk">
          <h3>AI Trixie</h3>
          <p class="price">Rp 99.000</p>
          <button class="btn-small">Lihat</button>
        </div>
        <!-- Card 3 -->
        <div class="product-card">
          <div class="product-badge new">New</div>
          <img src="https://via.placeholder.com/250x150" alt="Produk">
          <h3>Konsultasi 60'</h3>
          <p class="price">Rp 299.000</p>
          <button class="btn-small">Lihat</button>
        </div>
        <!-- Card 4 -->
        <div class="product-card">
          <img src="https://via.placeholder.com/250x150" alt="Produk">
          <h3>E-Book Panduan</h3>
          <p class="price">Rp 49.000</p>
          <button class="btn-small">Lihat</button>
        </div>
        <!-- Card 5 -->
        <div class="product-card">
          <img src="https://via.placeholder.com/250x150" alt="Produk">
          <h3>Plugin SEO</h3>
          <p class="price">Rp 149.000</p>
          <button class="btn-small">Lihat</button>
        </div>
        <!-- Card 6 -->
        <div class="product-card">
          <img src="https://via.placeholder.com/250x150" alt="Produk">
          <h3>Desain Grafis</h3>
          <p class="price">Rp 89.000</p>
          <button class="btn-small">Lihat</button>
        </div>
      </div>
    </div>

    <!-- Bagian Produk Lainnya (Grid) -->
    <div class="section-header" style="margin-top: 50px;">
      <h2>Produk <span>Lainnya</span></h2>
      <p>Temukan lebih banyak produk menarik</p>
    </div>

    <div class="product-grid">
      <!-- Card 1 -->
      <div class="product-card">
        <img src="https://via.placeholder.com/300x180" alt="Produk">
        <h3>Akun Premium 1 Bulan</h3>
        <p class="price">Rp 50.000</p>
        <button class="btn-small">Lihat</button>
      </div>
      <!-- Card 2 -->
      <div class="product-card">
        <img src="https://via.placeholder.com/300x180" alt="Produk">
        <h3>Paket Starter</h3>
        <p class="price">Rp 120.000</p>
        <button class="btn-small">Lihat</button>
      </div>
      <!-- Card 3 -->
      <div class="product-card">
        <img src="https://via.placeholder.com/300x180" alt="Produk">
        <h3>Kipas Angin</h3>
        <p class="price">Rp 75.000</p>
        <button class="btn-small">Lihat</button>
      </div>
    </div>

    <div class="text-center" style="margin-top: 30px;">
      <a href="#" class="btn-lihat-semua">Lihat Semua Produk →</a>
    </div>
  </div>
</section>
</main>

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
                        <li><a href="#"><span class="dot"></span>Cara Mulai</a></li>
                        <li><a href="#"><span class="dot"></span>Video Tutorial</a></li>
                        <li><a href="#"><span class="dot"></span>FAQ</a></li>
                        <li><a href="#"><span class="dot"></span>Blog</a></li>
                    </ul>
                </div>

                <div class="f-col">
                    <h4>Hubungi Kami</h4>
                    <ul>
                        <li><a href="#"><span class="dot"></span>WhatsApp</a></li>
                        <li><a href="#"><span class="dot"></span>Email Support</a></li>
                        <li><a href="#"><span class="dot"></span>Live Chat</a></li>
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
</script>
</body>
</html>