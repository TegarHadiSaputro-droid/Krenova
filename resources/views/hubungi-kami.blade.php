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
      <p>Ada pertanyaan, masukan, atau butuh bantuan? Jangan ragu untuk menghubungi tim TUNA — kami selalu ada untuk kamu.</p>
      <div class="hk-stats">
        <div class="hk-stat"><span class="hk-stat__num">24/7</span><span class="hk-stat__label">Dukungan</span></div>
        <div class="hk-stat"><span class="hk-stat__num">&lt;1 jam</span><span class="hk-stat__label">Respons WA</span></div>
        <div class="hk-stat"><span class="hk-stat__num">8</span><span class="hk-stat__label">Platform Sosmed</span></div>
      </div>
    </div>
  </section>

  <div class="hk-body">

    <div class="hk-cards">
      <div class="hk-card hk-card--accent reveal">
        <div class="hk-card__icon">💬</div>
        <div><div class="hk-card__title">WhatsApp</div><div class="hk-card__desc">Hubungi kami langsung via WhatsApp untuk respons paling cepat. Tim kami siap membantu setiap hari tanpa henti.</div></div>
        <div class="hk-card__info">
          <div class="hk-info-row"><div class="hk-info-row__dot"></div>+62 812-3456-7890</div>
          <div class="hk-info-row"><div class="hk-info-row__dot"></div>Senin – Minggu, 08.00 – 22.00 WITA</div>
        </div>
        <a href="https://wa.me/6281234567890" target="_blank" class="btn-hk btn-hk--white">Buka WhatsApp →</a>
      </div>

      <div class="hk-card reveal" style="transition-delay:0.15s;">
        <div class="hk-card__icon">📧</div>
        <div><div class="hk-card__title">Email Support</div><div class="hk-card__desc">Kirim pertanyaan, laporan, atau saran lewat email. Kami akan merespons dengan solusi terbaik dalam 1×24 jam kerja.</div></div>
        <div class="hk-card__info">
          <div class="hk-info-row"><div class="hk-info-row__dot"></div>support@tuna.id</div>
          <div class="hk-info-row"><div class="hk-info-row__dot"></div>Respons dalam 1×24 jam kerja</div>
        </div>
        <a href="mailto:support@tuna.id" class="btn-hk">Kirim Email →</a>
      </div>
    </div>

    <div class="hk-sosmed reveal" style="transition-delay:0.2s;">
      <div class="hk-sosmed__head">
        <div class="hk-card__icon">🌐</div>
        <div><h3>Sosial Media Kami</h3><p>Ikuti kami untuk update terbaru, tips aksesibilitas, dan konten inspiratif setiap harinya.</p></div>
      </div>
      <div class="sosmed-grid">
        <a href="#" class="sosmed-item"><div class="sosmed-item__icon" style="background:#fce7f3;">📸</div>Instagram</a>
        <a href="#" class="sosmed-item"><div class="sosmed-item__icon" style="background:#f0fdf4;">🎵</div>TikTok</a>
        <a href="#" class="sosmed-item"><div class="sosmed-item__icon" style="background:#fef2f2;">▶️</div>YouTube</a>
        <a href="#" class="sosmed-item"><div class="sosmed-item__icon" style="background:#f8fafc;">𝕏</div>X (Twitter)</a>
        <a href="#" class="sosmed-item"><div class="sosmed-item__icon" style="background:#eff6ff;">🔵</div>Facebook</a>
        <a href="#" class="sosmed-item"><div class="sosmed-item__icon" style="background:#f0f9ff;">💼</div>LinkedIn</a>
        <a href="#" class="sosmed-item"><div class="sosmed-item__icon" style="background:#fdf4ff;">📌</div>Pinterest</a>
        <a href="#" class="sosmed-item"><div class="sosmed-item__icon" style="background:#f0fdf4;">💬</div>Threads</a>
      </div>
    </div>

    <div class="hk-kantor reveal" style="transition-delay:0.3s;">
      <div>
        <div class="hk-kantor__head">
          <div class="hk-card__icon">🏢</div>
          <div><h3>Kantor Kami</h3><p>Kunjungi kami langsung di kantor TUNA Balikpapan.</p></div>
        </div>
        <div class="kantor-detail">
          <div class="kantor-row"><div class="kantor-row__icon">📍</div><div class="kantor-row__text"><strong>Alamat</strong><span>Jl. Aksesibilitas No. 17, Balikpapan Selatan,<br>Balikpapan, Kalimantan Timur 76114</span></div></div>
          <div class="kantor-row"><div class="kantor-row__icon">🕐</div><div class="kantor-row__text"><strong>Jam Operasional</strong><span>Senin – Jumat: 08.00 – 17.00 WITA<br>Sabtu: 09.00 – 14.00 WITA</span></div></div>
          <div class="kantor-row"><div class="kantor-row__icon">📞</div><div class="kantor-row__text"><strong>Telepon</strong><span>(0542) 123-4567</span></div></div>
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

  <div class="hk-footer reveal">
    <h3>Masih ada pertanyaan? 🙋</h3>
    <p>Tim TUNA selalu siap membantu kamu kapan saja dan di mana saja.</p>
    <a href="{{ url('/') }}">Kembali ke Beranda</a>
  </div>

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

    // Stagger sosmed items
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
