<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Notifikasi - TUNA</title>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/notifications.css') }}">
</head>
<body>

<div class="banner">
    <div class="banner-nav">
        <a href="javascript:history.back()" class="back-btn">← Kembali</a>
        <div style="width:80px"></div>
    </div>
    <div class="banner-body">
        <div class="banner-icon">🔔</div>
        <div class="banner-text">
            <div class="banner-heading">Notifikasi <span class="badge-count">3</span></div>
            <div class="banner-sub">Aktivitas terbaru akun TUNA kamu</div>
        </div>
    </div>
</div>

<div class="filter-tabs">
    <button class="tab active">Semua</button>
    <button class="tab">Belum Dibaca</button>
    <button class="tab">Trixie AI</button>
    <button class="tab">Call & Chat</button>
    <button class="tab">Marketplace</button>
    <button class="tab">Sistem</button>
</div>

<div class="grid full-grid">
    <div class="col">
        <div class="section-label">🔴 Belum Dibaca</div>
        <div class="card notif-list">
            <div class="section-header">
                <span class="section-header-label">3 notifikasi baru</span>
                <button class="btn-clear" onclick="markAllRead()">Tandai semua dibaca</button>
            </div>
            <div class="notif-item unread">
                <div class="notif-icon" style="background:#eff6ff;">🤖</div>
                <div class="notif-body">
                    <div class="notif-title">Trixie AI membalas pesanmu</div>
                    <div class="notif-desc">Jawaban untuk pertanyaanmu tentang layanan tunanetra sudah tersedia di Trixie AI.</div>
                    <div class="notif-time">2 menit lalu</div>
                </div>
                <div class="notif-dot"></div>
            </div>
            <div class="notif-item unread">
                <div class="notif-icon" style="background:#f0fdf4;">💬</div>
                <div class="notif-body">
                    <div class="notif-title">Pesan baru di Call & Chat</div>
                    <div class="notif-desc">Budi mengirim pesan: "Halo, apakah kamu bisa membantu saya dengan fitur isyarat?"</div>
                    <div class="notif-time">15 menit lalu</div>
                </div>
                <div class="notif-dot"></div>
            </div>
            <div class="notif-item unread">
                <div class="notif-icon" style="background:#fff7ed;">🛒</div>
                <div class="notif-body">
                    <div class="notif-title">Pesanan di Marketplace berhasil</div>
                    <div class="notif-desc">Produk "Alat Bantu Dengar Premium" berhasil dibeli. Cek status pengiriman di Marketplace.</div>
                    <div class="notif-time">1 jam lalu</div>
                </div>
                <div class="notif-dot"></div>
            </div>
        </div>

        <div class="section-label">📋 Sebelumnya</div>
        <div class="card notif-list">
            <div class="notif-item">
                <div class="notif-icon" style="background:#f8fafc;">🎉</div>
                <div class="notif-body">
                    <div class="notif-title">Fitur Isyarat ke Teks tersedia!</div>
                    <div class="notif-desc">Mode BISINDO/SIBI kini hadir di TUNA. Aktifkan di Pengaturan → Komunikasi & AI.</div>
                    <div class="notif-time">Kemarin, 10:30</div>
                </div>
                <div class="notif-dot"></div>
            </div>
            <div class="notif-item">
                <div class="notif-icon" style="background:#f8fafc;">⭐</div>
                <div class="notif-body">
                    <div class="notif-title">Coba TUNA Premium gratis 7 hari</div>
                    <div class="notif-desc">Nikmati semua fitur tanpa iklan selama 7 hari. Upgrade sekarang, batalkan kapan saja.</div>
                    <div class="notif-time">2 hari lalu</div>
                </div>
                <div class="notif-dot"></div>
            </div>
            <div class="notif-item">
                <div class="notif-icon" style="background:#f8fafc;">✅</div>
                <div class="notif-body">
                    <div class="notif-title">Profil berhasil diperbarui</div>
                    <div class="notif-desc">Informasi profil dan preferensi aksesibilitas kamu telah disimpan.</div>
                    <div class="notif-time">3 hari lalu</div>
                </div>
                <div class="notif-dot"></div>
            </div>
        </div>
    </div>
</div>

<div class="toast" id="toast"></div>
<script>
    function markAllRead() {
        document.querySelectorAll('.notif-item.unread').forEach(el => el.classList.remove('unread'));
        document.querySelector('.badge-count').textContent = '0';
        document.querySelector('.badge-count').style.background = '#94a3b8';
        showToast('Semua notifikasi ditandai dibaca');
    }
    document.querySelectorAll('.tab').forEach(tab => {
        tab.addEventListener('click', function() {
            document.querySelectorAll('.tab').forEach(t => t.classList.remove('active'));
            this.classList.add('active');
        });
    });
    function showToast(msg) {
        const t = document.getElementById('toast');
        t.textContent = msg; t.classList.add('show');
        setTimeout(() => t.classList.remove('show'), 2200);
    }
</script>
</body>
</html>