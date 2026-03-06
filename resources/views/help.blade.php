<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bantuan - Trixie AI</title>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/help.css') }}">
</head>
<body>

<div class="banner">
    <div class="circle circle-1"></div>
    <div class="circle circle-2"></div>
    <div class="circle circle-3"></div>
    <div class="circle circle-4"></div>
    <div class="banner-nav">
        <a href="javascript:history.back()" class="back-btn">← Kembali</a>
        <div style="width:80px"></div>
    </div>
    <div class="banner-body">
        <div class="banner-icon">❓</div>
        <div class="banner-text">
            <div class="banner-heading">Bantuan</div>
            <div class="banner-sub">Temukan jawaban dan hubungi kami</div>
        </div>
    </div>
</div>

<div class="search-bar">
    <span>🔍</span>
    <input type="text" placeholder="Cari pertanyaan atau topik...">
</div>

<div class="grid">

    <!-- Kolom 1: FAQ Umum -->
    <div class="col">
        <div class="section-label">💬 FAQ Umum</div>
        <div class="card">
            <div class="faq-item">
                <div class="faq-q" onclick="toggleFaq(this)">
                    Apa itu Trixie AI?
                    <span class="faq-chevron">›</span>
                </div>
                <div class="faq-a">Trixie AI adalah asisten kecerdasan buatan yang dirancang khusus untuk membantu penyandang disabilitas tuna — tunanetra, tunarungu, dan tunawicara — mengakses informasi dan layanan dengan lebih mudah.</div>
            </div>
            <div class="faq-item">
                <div class="faq-q" onclick="toggleFaq(this)">
                    Bagaimana cara memulai chat?
                    <span class="faq-chevron">›</span>
                </div>
                <div class="faq-a">Klik tombol "Obrolan Baru" di sidebar kiri, lalu ketik pertanyaanmu di kolom pesan dan tekan Enter atau klik tombol kirim.</div>
            </div>
            <div class="faq-item">
                <div class="faq-q" onclick="toggleFaq(this)">
                    Apakah riwayat chat tersimpan?
                    <span class="faq-chevron">›</span>
                </div>
                <div class="faq-a">Ya, riwayat chat tersimpan secara otomatis dan dapat diakses kembali dari sidebar. Kamu bisa mengatur ini di Pengaturan → Chat & AI.</div>
            </div>
            <div class="faq-item">
                <div class="faq-q" onclick="toggleFaq(this)">
                    Bisakah Trixie memahami gambar?
                    <span class="faq-chevron">›</span>
                </div>
                <div class="faq-a">Ya! Klik ikon 📎 di kotak pesan untuk mengunggah gambar. Trixie akan menganalisis dan mendeskripsikan isi gambar tersebut.</div>
            </div>
        </div>
    </div>

    <!-- Kolom 2: FAQ Aksesibilitas -->
    <div class="col">
        <div class="section-label">♿ FAQ Aksesibilitas</div>
        <div class="card">
            <div class="faq-item">
                <div class="faq-q" onclick="toggleFaq(this)">
                    Bagaimana mengaktifkan pembaca layar?
                    <span class="faq-chevron">›</span>
                </div>
                <div class="faq-a">Pergi ke Pengaturan → Aksesibilitas → Pembaca Layar, lalu aktifkan togglenya. Trixie akan kompatibel dengan screen reader seperti NVDA atau JAWS.</div>
            </div>
            <div class="faq-item">
                <div class="faq-q" onclick="toggleFaq(this)">
                    Apa itu Mode Isyarat BISINDO?
                    <span class="faq-chevron">›</span>
                </div>
                <div class="faq-a">Mode Isyarat memungkinkan pengguna tunawicara berkomunikasi menggunakan bahasa isyarat Indonesia (BISINDO/SIBI) melalui kamera. Fitur ini masih dalam tahap beta.</div>
            </div>
            <div class="faq-item">
                <div class="faq-q" onclick="toggleFaq(this)">
                    Bagaimana transkripsi suara bekerja?
                    <span class="faq-chevron">›</span>
                </div>
                <div class="faq-a">Aktifkan Transkripsi Otomatis di Pengaturan. Izinkan akses mikrofon, lalu bicara dan suaramu akan otomatis dikonversi ke teks secara real-time.</div>
            </div>
            <div class="faq-item">
                <div class="faq-q" onclick="toggleFaq(this)">
                    Bagaimana memperbesar ukuran teks?
                    <span class="faq-chevron">›</span>
                </div>
                <div class="faq-a">Pergi ke Pengaturan → Tampilan → Ukuran Teks, lalu pilih ukuran yang sesuai: Kecil, Normal, Besar, atau Sangat Besar.</div>
            </div>
        </div>
    </div>

    <!-- Kolom 3: Hubungi Kami -->
    <div class="col">
        <div class="section-label">📞 Hubungi Kami</div>
        <div class="card">
            <div class="contact-card" style="border-bottom:1px solid #f1f5f9;">
                <div class="contact-icon" style="background:#eff6ff;">💬</div>
                <div class="contact-info">
                    <div class="contact-label">Live Chat</div>
                    <div class="contact-sub">Respons dalam 5 menit</div>
                </div>
                <button class="contact-btn" onclick="showToast('Membuka live chat...')">Chat</button>
            </div>
            <div class="contact-card" style="border-bottom:1px solid #f1f5f9;">
                <div class="contact-icon" style="background:#f0fdf4;">📧</div>
                <div class="contact-info">
                    <div class="contact-label">Email</div>
                    <div class="contact-sub">transforminguserneedsintoacces@gmail.com</div>
                </div>
                <button class="contact-btn" onclick="showToast('Membuka email...')">Kirim</button>
            </div>
            <div class="contact-card">
                <div class="contact-icon" style="background:#fff7ed;">📖</div>
                <div class="contact-info">
                    <div class="contact-label">Dokumentasi</div>
                    <div class="contact-sub">Panduan lengkap penggunaan</div>
                </div>
                <button class="contact-btn" onclick="showToast('Membuka dokumentasi...')">Buka</button>
            </div>
        </div>

        <div class="section-label">🚨 Laporkan Masalah</div>
        <div class="card">
            <div class="row" onclick="showToast('Membuka formulir laporan bug...')">
                <div class="row-left">
                    <div class="row-icon" style="background:#fff1f2;">🐛</div>
                    <div>
                        <div class="row-label">Laporkan Bug</div>
                        <div class="row-sub">Ada yang tidak berfungsi?</div>
                    </div>
                </div>
                <span class="arrow">›</span>
            </div>
            <div class="row" onclick="showToast('Membuka formulir saran...')">
                <div class="row-left">
                    <div class="row-icon" style="background:#f0fdf4;">💡</div>
                    <div>
                        <div class="row-label">Kirim Saran</div>
                        <div class="row-sub">Ide untuk fitur baru?</div>
                    </div>
                </div>
                <span class="arrow">›</span>
            </div>
        </div>
    </div>

</div>

<div class="toast" id="toast"></div>
<script>
    function toggleFaq(el) {
        const item = el.parentElement;
        item.classList.toggle('open');
    }
    function showToast(msg) {
        const t = document.getElementById('toast');
        t.textContent = msg; t.classList.add('show');
        setTimeout(() => t.classList.remove('show'), 2200);
    }
</script>
@include('partials.apply-settings')
</body>
</html>