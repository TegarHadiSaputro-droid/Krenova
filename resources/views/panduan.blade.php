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
        <a class="pd-nav__item" onclick="scrollTo('visi-misi')">🎯 Visi Misi</a>
        <a class="pd-nav__item" onclick="scrollTo('cara-mulai')">🚀 Cara Mulai</a>
        <a class="pd-nav__item" onclick="scrollTo('video-tutorial')">🎬 Video Tutorial</a>
        <a class="pd-nav__item" onclick="scrollTo('faq')">❓ FAQ</a>
      </div>
    </div>
  </section>

  <div class="pd-body">

    <!-- VISI MISI -->
    <div id="visi-misi" class="vm-section reveal">
      <div class="pd-section-title">
        <div class="pd-section-title__icon">🎯</div>
        <div><h2>Visi & Misi</h2><p>Landasan dan tujuan besar yang mendorong kami setiap harinya.</p></div>
      </div>

      <div class="vm-grid">
        <div class="vm-card vm-card--visi">
          <span class="vm-card__icon">🌟</span>
          <div class="vm-card__label">Visi</div>
          <h3>Akses Setara untuk Semua</h3>
          <p>Mewujudkan dunia digital yang inklusif, di mana setiap individu — terlepas dari kondisi fisik maupun kognitif — memiliki akses yang setara terhadap teknologi, informasi, dan peluang.</p>
          <div class="vm-card__orb"></div>
        </div>
        <div class="vm-card vm-card--misi">
          <span class="vm-card__icon">🚀</span>
          <div class="vm-card__label">Misi</div>
          <h3>Membangun Jembatan Digital</h3>
          <p>Menghadirkan platform teknologi aksesibilitas yang inovatif, terjangkau, dan mudah digunakan — yang benar-benar memahami kebutuhan teman-teman disabilitas dan membantu mereka hidup lebih mandiri.</p>
        </div>
      </div>

      <div class="vm-values">
        <div class="vm-value"><div class="vm-value__icon">♿</div><div class="vm-value__text">Inklusivitas</div></div>
        <div class="vm-value"><div class="vm-value__icon">💡</div><div class="vm-value__text">Inovasi</div></div>
        <div class="vm-value"><div class="vm-value__icon">❤️</div><div class="vm-value__text">Empati</div></div>
        <div class="vm-value"><div class="vm-value__icon">🤝</div><div class="vm-value__text">Kolaborasi</div></div>
        <div class="vm-value"><div class="vm-value__icon">🔒</div><div class="vm-value__text">Kepercayaan</div></div>
        <div class="vm-value"><div class="vm-value__icon">🌍</div><div class="vm-value__text">Dampak Sosial</div></div>
      </div>
    </div>

    <!-- CARA MULAI -->
    <div id="cara-mulai" class="cm-section reveal" style="transition-delay:0.1s;">
      <div class="pd-section-title">
        <div class="pd-section-title__icon">🚀</div>
        <div><h2>Cara Mulai</h2><p>4 langkah mudah untuk mulai menggunakan TUNA.</p></div>
      </div>

      <div class="cm-steps">
        <div class="cm-step">
          <div class="cm-step__num">1</div>
          <div class="cm-step__icon">📥</div>
          <h4>Download Aplikasi</h4>
          <p>Unduh aplikasi TUNA dari App Store atau Google Play secara gratis.</p>
        </div>
        <div class="cm-step">
          <div class="cm-step__num">2</div>
          <div class="cm-step__icon">📝</div>
          <h4>Buat Akun</h4>
          <p>Daftar dengan email atau nomor HP kamu. Prosesnya cepat dan mudah.</p>
        </div>
        <div class="cm-step">
          <div class="cm-step__num">3</div>
          <div class="cm-step__icon">⚙️</div>
          <h4>Sesuaikan</h4>
          <p>Atur preferensi aksesibilitas sesuai kebutuhan spesifik kamu.</p>
        </div>
        <div class="cm-step">
          <div class="cm-step__num">4</div>
          <div class="cm-step__icon">✨</div>
          <h4>Mulai Gunakan</h4>
          <p>Nikmati semua fitur TUNA dan rasakan perbedaannya!</p>
        </div>
      </div>

      <div class="cm-cta">
        <a href="{{ route('download') }}" class="btn-blue-outline">📥 Download Sekarang</a>
      </div>
    </div>

    <!-- VIDEO TUTORIAL -->
    <div id="video-tutorial" class="vt-section reveal" style="transition-delay:0.2s;">
      <div class="pd-section-title">
        <div class="pd-section-title__icon">🎬</div>
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
        <div class="pd-section-title__icon">❓</div>
        <div><h2>FAQ</h2><p>Pertanyaan yang paling sering ditanyakan oleh pengguna TUNA.</p></div>
      </div>

      <div class="faq-list">
        <div class="faq-item" onclick="this.classList.toggle('open')">
          <div class="faq-q">Apakah TUNA tersedia di iOS dan Android? <span class="faq-arrow">▼</span></div>
          <div class="faq-a">Ya! TUNA tersedia di App Store (iOS) dan Google Play Store (Android). Kamu bisa mengunduhnya secara gratis dan langsung mencoba semua fitur dasar tanpa biaya.</div>
        </div>
        <div class="faq-item" onclick="this.classList.toggle('open')">
          <div class="faq-q">Apakah TUNA bisa digunakan tanpa koneksi internet? <span class="faq-arrow">▼</span></div>
          <div class="faq-a">Beberapa fitur dasar bisa digunakan secara offline. Namun untuk fitur lengkap seperti AI Trixie dan sinkronisasi data, kamu memerlukan koneksi internet. Offline mode penuh tersedia untuk pengguna Premium.</div>
        </div>
        <div class="faq-item" onclick="this.classList.toggle('open')">
          <div class="faq-q">Bagaimana cara mengganti bahasa di aplikasi? <span class="faq-arrow">▼</span></div>
          <div class="faq-a">Buka menu Pengaturan > Bahasa & Aksesibilitas > pilih bahasa yang kamu inginkan. TUNA saat ini mendukung Bahasa Indonesia dan Bahasa Inggris.</div>
        </div>
        <div class="faq-item" onclick="this.classList.toggle('open')">
          <div class="faq-q">Apakah data saya aman di TUNA? <span class="faq-arrow">▼</span></div>
          <div class="faq-a">Keamanan data pengguna adalah prioritas utama kami. Semua data dienkripsi dengan standar industri dan tidak pernah dijual atau dibagikan ke pihak ketiga tanpa persetujuan kamu.</div>
        </div>
        <div class="faq-item" onclick="this.classList.toggle('open')">
          <div class="faq-q">Bagaimana cara melaporkan bug atau memberikan saran? <span class="faq-arrow">▼</span></div>
          <div class="faq-a">Kamu bisa melaporkan bug atau memberikan saran melalui menu Bantuan di aplikasi, atau langsung hubungi tim kami via WhatsApp dan Email Support di halaman Hubungi Kami.</div>
        </div>
        <div class="faq-item" onclick="this.classList.toggle('open')">
          <div class="faq-q">Apakah TUNA mendukung semua jenis disabilitas? <span class="faq-arrow">▼</span></div>
          <div class="faq-a">TUNA dirancang untuk mendukung berbagai jenis disabilitas termasuk tunanetra, tunarungu, tunadaksa, dan disabilitas kognitif. Kami terus mengembangkan fitur baru berdasarkan masukan dari komunitas pengguna.</div>
        </div>
      </div>
    </div>

  </div>

  <!-- Footer -->
  <div class="pd-footer reveal">
    <h3>Masih ada pertanyaan? 🙋</h3>
    <p>Hubungi tim kami atau kunjungi halaman Hubungi Kami untuk bantuan lebih lanjut.</p>
    <a href="{{ url('/') }}">Kembali ke Beranda</a>
  </div>

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
