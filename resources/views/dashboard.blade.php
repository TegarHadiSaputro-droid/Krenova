<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile Dropdown Demo</title>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">
</head>
<body>

<!-- Profile Dropdown -->
<div class="profile-dropdown-wrap" id="profileWrap">
    <button class="profile-trigger" onclick="toggleDropdown()">
        <div class="profile-trigger-avatar" id="triggerAvatar">{{ getInitials(Auth::user()->name) }}</div>
    </button>

    <div class="profile-dropdown" id="profileDropdown">

    <!-- Header - klik untuk ke halaman profile -->
    <a href="/account" style="text-decoration:none;display:block;">
        <div class="dropdown-header" style="cursor:pointer;">
            <div class="dropdown-avatar" id="dropdownAvatar">{{ getInitials(Auth::user()->name) }}</div>
            <div class="dropdown-user-info">
                <div class="dropdown-name" id="dropdownName">{{ Auth::user()->name }}</div>
                <div class="dropdown-email" id="dropdownEmail">{{ Auth::user()->email }}</div>
                <span class="dropdown-badge">🟢 Akun Aktif</span>
            </div>
        </div>
    </a>

    <div class="dropdown-divider"></div>

    <!-- Menu -->
    <div class="dropdown-section-label">Menu</div>
    <a href="/settings" class="dropdown-item">
        <span class="dropdown-icon"></span>
        <span class="dropdown-item-label">Pengaturan</span>
    </a>
    <a href="/notifications" class="dropdown-item">
        <span class="dropdown-icon"></span>
        <span class="dropdown-item-label">Notifikasi</span>
        <span class="dropdown-item-badge" style="background:#ef4444;">3</span>
    </a>
    <a href="/privacy-security" class="dropdown-item">
        <span class="dropdown-icon"></span>
        <span class="dropdown-item-label">Privasi & Keamanan</span>
    </a>
    <a href="/about" class="dropdown-item">
        <span class="dropdown-icon"></span>
        <span class="dropdown-item-label">Tentang Aplikasi</span>
    </a>
    <a href="/help" class="dropdown-item">
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

<script>
    function toggleDropdown() {
        document.getElementById('profileDropdown').classList.toggle('open');
    }

    document.addEventListener('click', function(e) {
        const wrap = document.getElementById('profileWrap');
        if (wrap && !wrap.contains(e.target)) {
            document.getElementById('profileDropdown').classList.remove('open');
        }
    }); 

    function handleLogout() {
        document.getElementById('profileDropdown').classList.remove('open');
        document.getElementById('logoutOverlay').classList.add('open');
    }

    function closeLogoutModal() {
        document.getElementById('logoutOverlay').classList.remove('open');
    }

    function confirmLogout() {
        window.location.href = '/logout';
    }

    document.getElementById('logoutOverlay').addEventListener('click', function(e) {
        if (e.target === this) closeLogoutModal();
    });
</script>
</body>
</html>