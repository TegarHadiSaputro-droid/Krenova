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
        <div class="profile-trigger-avatar" id="triggerAvatar">R</div>
    </button>

    <div class="profile-dropdown" id="profileDropdown">

    <!-- Header - klik untuk ke halaman profile -->
    <a href="/account" style="text-decoration:none;display:block;">
        <div class="dropdown-header" style="cursor:pointer;">
            <div class="dropdown-avatar" id="dropdownAvatar">R</div>
            <div class="dropdown-user-info">
                <div class="dropdown-name" id="dropdownName">Revan Putra</div>
                <div class="dropdown-email" id="dropdownEmail">revan@email.com</div>
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
    <a href="/privacy" class="dropdown-item">
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

</script>
</body>
</html>