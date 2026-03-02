<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Profil Saya - Trixie AI</title>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200&icon_names=visibility_off" />
    <link rel="stylesheet" href="{{ asset('css/account.css') }}">
</head>
<body>

<div class="banner">
    <div class="banner-nav">
        <a href="javascript:history.back()" class="back-btn">← Kembali</a>
        <span class="banner-title">Profil Saya</span>
        <div style="width:80px;"></div>
    </div>
</div>

<div class="avatar-section">
    <div class="avatar-wrap">
        <div class="avatar-circle" id="avatarCircle">R</div>
        <label class="avatar-edit" for="avatarInput">📷</label>
        <input type="file" id="avatarInput" accept="image/*" onchange="handleAvatar(this)">
    </div>
    <div class="user-name" id="displayName">Revan Putra</div>
    <div class="user-email" id="displayEmail">revan@email.com</div>
    <div class="user-badge">🟢 Akun Aktif</div>
</div>

<div class="stats-row">
    <div class="stat-card">
        <div class="stat-value">24</div>
        <div class="stat-label">Total Chat</div>
    </div>
    <div class="stat-card">
        <div class="stat-value">7</div>
        <div class="stat-label">Hari Aktif</div>
    </div>
    <div class="stat-card">
        <div class="stat-value">142</div>
        <div class="stat-label">Pesan Terkirim</div>
    </div>
</div>

<div class="content">

    <div class="section-card">
        <div class="section-head">
            <div class="section-icon"></div>
            <div>
                <div class="section-title">Informasi Profil</div>
                <div class="section-subtitle">Nama, email, dan nomor telepon</div>
            </div>
        </div>
        <div class="section-body">
            <div class="form-grid">
                <div class="form-group">
                    <label>Nama Depan</label>
                    <input type="text" id="firstName" placeholder="Nama depan" value="">
                </div>
                <div class="form-group">
                    <label>Nama Belakang</label>
                    <input type="text" id="lastName" placeholder="Nama belakang" value="">
                </div>
                <div class="form-group">
                    <label>Email</label>
                    <input type="email" id="email" placeholder="email@contoh.com" value="">
                </div>
                <div class="form-group">
                    <label>Nomor Telepon</label>
                    <input type="tel" id="phone" placeholder="08xxxxxxxxxx">
                </div>
            </div>
        </div>
        <div class="section-footer">
            <button class="btn btn-primary" onclick="saveProfile()"> Simpan</button>
        </div>
    </div>

    <div class="section-card">
        <div class="section-head">
            <div class="section-icon"></div>
            <div>
                <div class="section-title">Ubah Password</div>
                <div class="section-subtitle">Minimal 8 karakter</div>
            </div>
        </div>
        <div class="section-body">
            <div class="form-grid">
                <div class="form-group full">
                    <label>Password Saat Ini</label>
                    <div class="input-wrap">
                        <input type="password" id="currentPw" placeholder="••••••••">
                        <button class="toggle-pw" onclick="togglePw('currentPw', this)"><svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#e3e3e3"><path d="M607.5-372.5Q660-425 660-500t-52.5-127.5Q555-680 480-680t-127.5 52.5Q300-575 300-500t52.5 127.5Q405-320 480-320t127.5-52.5Zm-204-51Q372-455 372-500t31.5-76.5Q435-608 480-608t76.5 31.5Q588-545 588-500t-31.5 76.5Q525-392 480-392t-76.5-31.5ZM214-281.5Q94-363 40-500q54-137 174-218.5T480-800q146 0 266 81.5T920-500q-54 137-174 218.5T480-200q-146 0-266-81.5ZM480-500Zm207.5 160.5Q782-399 832-500q-50-101-144.5-160.5T480-720q-113 0-207.5 59.5T128-500q50 101 144.5 160.5T480-280q113 0 207.5-59.5Z"/></svg></button>
                    </div>
                </div>
                <div class="form-group">
                    <label>Password Baru</label>
                    <div class="input-wrap">
                        <input type="password" id="newPw" placeholder="Min. 8 karakter">
                        <button class="toggle-pw" onclick="togglePw('newPw', this)"><svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#e3e3e3"><path d="M607.5-372.5Q660-425 660-500t-52.5-127.5Q555-680 480-680t-127.5 52.5Q300-575 300-500t52.5 127.5Q405-320 480-320t127.5-52.5Zm-204-51Q372-455 372-500t31.5-76.5Q435-608 480-608t76.5 31.5Q588-545 588-500t-31.5 76.5Q525-392 480-392t-76.5-31.5ZM214-281.5Q94-363 40-500q54-137 174-218.5T480-800q146 0 266 81.5T920-500q-54 137-174 218.5T480-200q-146 0-266-81.5ZM480-500Zm207.5 160.5Q782-399 832-500q-50-101-144.5-160.5T480-720q-113 0-207.5 59.5T128-500q50 101 144.5 160.5T480-280q113 0 207.5-59.5Z"/></svg></button>
                    </div>
                </div>
                <div class="form-group">
                    <label>Konfirmasi Password</label>
                    <div class="input-wrap">
                        <input type="password" id="confirmPw" placeholder="Ulangi password baru">
                        <button class="toggle-pw" onclick="togglePw('confirmPw', this)"><svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#e3e3e3"><path d="M607.5-372.5Q660-425 660-500t-52.5-127.5Q555-680 480-680t-127.5 52.5Q300-575 300-500t52.5 127.5Q405-320 480-320t127.5-52.5Zm-204-51Q372-455 372-500t31.5-76.5Q435-608 480-608t76.5 31.5Q588-545 588-500t-31.5 76.5Q525-392 480-392t-76.5-31.5ZM214-281.5Q94-363 40-500q54-137 174-218.5T480-800q146 0 266 81.5T920-500q-54 137-174 218.5T480-200q-146 0-266-81.5ZM480-500Zm207.5 160.5Q782-399 832-500q-50-101-144.5-160.5T480-720q-113 0-207.5 59.5T128-500q50 101 144.5 160.5T480-280q113 0 207.5-59.5Z"/></svg></button>
                    </div>
                </div>
            </div>
        </div>
        <div class="section-footer">
            <button class="btn btn-primary" onclick="savePassword()"> Ubah Password</button>
        </div>
    </div>

    <div class="section-card">
        <div class="section-head">
            <div class="section-icon danger"></div>
            <div>
                <div class="section-title" style="color:#ef4444;">Hapus Akun</div>
                <div class="section-subtitle">Tindakan ini tidak dapat dibatalkan</div>
            </div>
        </div>
        <div class="section-body">
            <p class="danger-desc">Menghapus akun akan menghapus semua data kamu secara permanen termasuk riwayat chat, pengaturan, dan informasi profil.</p>
            <button class="btn btn-danger" onclick="openDeleteModal()"> Hapus Akun Saya</button>
        </div>
    </div>

</div>

<div class="modal-overlay" id="deleteModal">
    <div class="modal">
        <div class="modal-icon"></div>
        <h3>Hapus Akun?</h3>
        <p>Semua data kamu akan dihapus permanen dan tidak bisa dipulihkan. Yakin ingin melanjutkan?</p>
        <div class="modal-actions">
            <button class="btn btn-ghost" onclick="closeDeleteModal()">Batal</button>
            <button class="btn btn-danger" onclick="confirmDelete()">Ya, Hapus</button>
        </div>
    </div>
</div>

<div class="toast" id="toast"></div>

<script>
    function showToast(msg, type = 'success') {
        const toast = document.getElementById('toast');
        toast.textContent = (type === 'success' ? '✅ ' : '❌ ') + msg;
        toast.className = `toast ${type} show`;
        setTimeout(() => toast.classList.remove('show'), 3000);
    }

    function handleAvatar(input) {
        const file = input.files[0];
        if (!file) return;
        const reader = new FileReader();
        reader.onload = function(e) {
            const circle = document.getElementById('avatarCircle');
            circle.innerHTML = `<img src="${e.target.result}" alt="avatar">`;
            showToast('Foto profil diperbarui');
        };
        reader.readAsDataURL(file);
    }

    function saveProfile() {
        const firstName = document.getElementById('firstName').value.trim();
        const lastName = document.getElementById('lastName').value.trim();
        const email = document.getElementById('email').value.trim();

        if (!firstName || !email) {
            showToast('Nama depan dan email wajib diisi', 'error');
            return;
        }

        document.getElementById('displayName').textContent = `${firstName} ${lastName}`.trim();
        document.getElementById('displayEmail').textContent = email;

        const circle = document.getElementById('avatarCircle');
        if (!circle.querySelector('img')) {
            circle.textContent = firstName[0].toUpperCase();
        }

        showToast('Profil berhasil disimpan');
    }

    function savePassword() {
        const current = document.getElementById('currentPw').value;
        const newPw = document.getElementById('newPw').value;
        const confirm = document.getElementById('confirmPw').value;

        if (!current || !newPw || !confirm) {
            showToast('Semua field wajib diisi', 'error');
            return;
        }
        if (newPw.length < 8) {
            showToast('Password minimal 8 karakter', 'error');
            return;
        }
        if (newPw !== confirm) {
            showToast('Konfirmasi password tidak cocok', 'error');
            return;
        }

        document.getElementById('currentPw').value = '';
        document.getElementById('newPw').value = '';
        document.getElementById('confirmPw').value = '';

        showToast('Password berhasil diubah');
    }

    function togglePw(id, btn) {
    const input = document.getElementById(id);
    input.type = input.type === 'password' ? 'text' : 'password';
    
    // Ganti ikon sesuai state
    if (input.type === 'password') {
        btn.innerHTML = `<svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#e3e3e3"><path d="M607.5-372.5Q660-425 660-500t-52.5-127.5Q555-680 480-680t-127.5 52.5Q300-575 300-500t52.5 127.5Q405-320 480-320t127.5-52.5Zm-204-51Q372-455 372-500t31.5-76.5Q435-608 480-608t76.5 31.5Q588-545 588-500t-31.5 76.5Q525-392 480-392t-76.5-31.5ZM214-281.5Q94-363 40-500q54-137 174-218.5T480-800q146 0 266 81.5T920-500q-54 137-174 218.5T480-200q-146 0-266-81.5ZM480-500Zm207.5 160.5Q782-399 832-500q-50-101-144.5-160.5T480-720q-113 0-207.5 59.5T128-500q50 101 144.5 160.5T480-280q113 0 207.5-59.5Z"/></svg>`;
    } else {
        btn.innerHTML = `<svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#e3e3e3"><path d="m644-428-58-58q9-47-27-88t-93-32l-58-58q17-8 34.5-12t37.5-4q75 0 127.5 52.5T660-500q0 20-4 37.5T644-428Zm128 126-58-56q38-29 67.5-63.5T832-500q-50-101-143.5-160.5T480-720q-29 0-57 4t-55 12l-62-62q41-17 84-25.5t90-8.5q151 0 269 83.5T920-500q-23 59-60.5 109.5T772-302Zm20 246L624-222q-35 11-70.5 16.5T480-200q-151 0-269-83.5T40-500q21-53 53-98.5t73-81.5L56-792l56-56 736 736-56 56ZM222-624q-29 26-53 57t-41 67q50 101 143.5 160.5T480-280q20 0 39-2.5t39-5.5l-36-38q-11 3-21 4.5t-21 1.5q-75 0-127.5-52.5T300-500q0-11 1.5-21t4.5-21l-84-82Zm319 93Zm-151 75Z"/></svg>`;
    }
    }

    function openDeleteModal() {
        document.getElementById('deleteModal').classList.add('open');
    }

    function closeDeleteModal() {
        document.getElementById('deleteModal').classList.remove('open');
    }

    function confirmDelete() {
        closeDeleteModal();
        showToast('Akun berhasil dihapus', 'error');
    }
</script>
</body>
</html>