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
      <p>Mulai gratis, upgrade kapan saja. Semua paket dirancang agar teknologi aksesibilitas bisa dijangkau semua orang.</p>
    </div>
  </section>

  <!-- Cards + Content -->
  <div class="sub-body">

    <!-- 3 Cards -->
    <div class="sub-cards">

      <!-- FREE -->
      <div class="price-card">
        <div>
          <div class="card-icon">🆓</div>
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
          <div class="card-icon">👑</div>
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
          <div class="card-icon">🚀</div>
          <div class="card-name">Premium Tahunan</div>
          <div class="card-desc">Hemat lebih banyak dengan berlangganan satu tahun penuh — nilai terbaik.</div>
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
      <p>Ada yang ingin kamu tanyakan? Cek dulu di sini.</p>
      <div class="faq-list">
        <div class="faq-item" onclick="this.classList.toggle('open')">
          <div class="faq-q">Apakah saya bisa upgrade atau downgrade kapan saja? <span class="faq-arrow">▼</span></div>
          <div class="faq-a">Ya, kamu bisa upgrade ke Premium atau kembali ke Free kapan saja. Perubahan akan berlaku di siklus penagihan berikutnya.</div>
        </div>
        <div class="faq-item" onclick="this.classList.toggle('open')">
          <div class="faq-q">Apa bedanya Premium Bulanan dan Tahunan? <span class="faq-arrow">▼</span></div>
          <div class="faq-a">Fiturnya sama persis! Bedanya hanya di harga dan periode. Tahunan lebih hemat Rp 29.000 dibanding bayar bulanan selama setahun.</div>
        </div>
        <div class="faq-item" onclick="this.classList.toggle('open')">
          <div class="faq-q">Metode pembayaran apa yang tersedia? <span class="faq-arrow">▼</span></div>
          <div class="faq-a">Kami mendukung transfer bank, e-wallet (GoPay, OVO, Dana), dan kartu kredit/debit.</div>
        </div>
        <div class="faq-item" onclick="this.classList.toggle('open')">
          <div class="faq-q">Apa yang terjadi jika saya batalkan langganan? <span class="faq-arrow">▼</span></div>
          <div class="faq-a">Akses Premium tetap berlaku hingga akhir periode yang sudah dibayar. Setelah itu otomatis beralih ke paket Free.</div>
        </div>
      </div>
    </div>

  </div>

  <!-- Footer Strip -->
  <div class="sub-footer">
    <h3>Siap memulai perjalananmu? 🚀</h3>
    <p>Bergabung dengan ribuan pengguna TUNA yang sudah merasakan manfaatnya.</p>
    <a href="{{ url('/') }}">Kembali ke Beranda</a>
  </div>


</script>

</body>
</html>

