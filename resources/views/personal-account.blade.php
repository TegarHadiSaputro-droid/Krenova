<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Profil Saya</title>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/personal-account.css') }}">  
</head>
<body>

<div class="page-header">
    <h1>Profil Saya</h1>
    <p>Kelola informasi akun dan keamanan kamu</p>
</div>

<div class="layout">

    <!-- LEFT: Profile Card -->
    <div class="card profile-card">
        <div class="avatar-wrap">
            <div class="avatar-placeholder" id="avatarPlaceholder"></div>
            <img class="avatar" id="avatarImg" src="" alt="Foto Profil" style="display:none;">
            <label class="avatar-edit-btn" for="avatarInput" title="Ubah foto">📷</label>
            <input type="file" id="avatarInput" accept="image/*" onchange="handleAvatarChange(this)">
        </div>

        <div class="profile-name" id="displayName"></div>
        <div class="profile-email" id="displayEmail"></div>
        <div class="profile-badge">🟢 Akun Aktif</div>

        <div class="profile-card-divider"></div>

        <div class="profile-stats">
            <div class="stat">
                <div class="stat-value">24</div>
                <div class="stat-label">Chat</div>
            </div>
            <div class="stat">
                <div class="stat-value">7</div>
                <div class="stat-label">Hari</div>
            </div>
        </div>
    </div>

    <!-- RIGHT: Form Card -->
    <div class="card form-card">

        <!-- Profile Info -->
        <div class="form-section">
            <div class="section-title">Informasi Profil</div>
            <div class="form-row">
                <div class="form-group">
                    <label for="firstName">Nama Depan</label>
                    <input type="text" id="firstName" placeholder="Nama depan" value="">
                </div>
                <div class="form-group">
                    <label for="lastName">Nama Belakang</label>
                    <input type="text" id="lastName" placeholder="Nama belakang" value="">
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" id="email" placeholder="email@contoh.com" value="">
                </div>
                <div class="form-group">
                    <label for="phone">Nomor Telepon</label>
                    <input type="tel" id="phone" placeholder="08xxxxxxxxxx" value="">
                </div>
            </div>
        </div>

        <!-- Save Profile -->
        <div class="form-actions" style="border-top:none;padding-top:0;padding-bottom:20px;">
            <button class="btn btn-primary" onclick="saveProfile()">
                Simpan Perubahan
            </button>
        </div>

        <!-- Password -->
        <div class="form-section">
            <div class="section-title">Ubah Password</div>
            <div class="form-group">
                <label for="currentPw">Password Saat Ini</label>
                <div class="input-wrap">
                    <input type="password" id="currentPw" placeholder="••••••••">
                    <button class="toggle-pw" onclick="togglePw('currentPw', this)"></button>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group">
                    <label for="newPw">Password Baru</label>
                    <div class="input-wrap">
                        <input type="password" id="newPw" placeholder="Min. 8 karakter">
                        <button class="toggle-pw" onclick="togglePw('newPw', this)"></button>
                    </div>
                </div>
                <div class="form-group">
                    <label for="confirmPw">Konfirmasi Password</label>
                    <div class="input-wrap">
                        <input type="password" id="confirmPw" placeholder="Ulangi password baru">
                        <button class="toggle-pw" onclick="togglePw('confirmPw', this)"></button>
                    </div>
                </div>
            </div>
        </div>

        <div class="form-actions" style="border-top:none;padding-top:0;padding-bottom:20px;">
            <button class="btn btn-primary" onclick="savePassword()">
                Ubah Password
            </button>
        </div>

        <!-- Danger Zone -->
        <div class="form-section" style="border-top: 1px solid #fee2e2; background: #fffbfb;">
            <div class="danger-zone">
                <div class="danger-zone-title">Hapus Akun</div>
                <div class="danger-zone-desc">
                    Tindakan ini bersifat permanen dan tidak dapat dibatalkan. Semua data termasuk riwayat chat akan dihapus selamanya.
                </div>
                <button class="btn btn-danger" onclick="openDeleteModal()">
                    Hapus Akun Saya
                </button>
            </div>
        </div>

    </div>
</div>

<!-- Delete Modal -->
<div class="modal-overlay" id="deleteModal">
    <div class="modal">
        <h3>Hapus Akun?</h3>
        <p>Kamu yakin ingin menghapus akun ini? Semua data, riwayat chat, dan informasi profil akan hilang permanen dan tidak bisa dipulihkan.</p>
        <div class="modal-actions">
            <button class="btn btn-ghost" onclick="closeDeleteModal()">Batal</button>
            <button class="btn btn-danger" onclick="confirmDelete()">Ya, Hapus Akun</button>
        </div>
    </div>
</div>

<!-- Toast -->
<div class="toast" id="toast"></div>

<script>
    function showToast(message, type = 'success') {
        const toast = document.getElementById('toast');
        toast.textContent = (type === 'success' ? '✅ ' : '❌ ') + message;
        toast.className = `toast ${type} show`;
        setTimeout(() => toast.classList.remove('show'), 3000);
    }

    function handleAvatarChange(input) {
        const file = input.files[0];
        if (!file) return;
        const reader = new FileReader();
        reader.onload = function(e) {
            const img = document.getElementById('avatarImg');
            const placeholder = document.getElementById('avatarPlaceholder');
            img.src = e.target.result;
            img.style.display = 'block';
            placeholder.style.display = 'none';
            showToast('Foto profil berhasil diubah');
        };
        reader.readAsDataURL(file);
    }

    function saveProfile() {
        const firstName = document.getElementById('firstName').value.trim();
        const lastName = document.getElementById('lastName').value.trim();
        const email = document.getElementById('email').value.trim();

        if (!firstName || !email) {
            showToast('Nama dan email wajib diisi', 'error');
            return;
        }

        // Update display
        document.getElementById('displayName').textContent = `${firstName} ${lastName}`.trim();
        document.getElementById('displayEmail').textContent = email;

        // Update avatar placeholder letter
        document.getElementById('avatarPlaceholder').textContent = firstName[0].toUpperCase();

        showToast('Profil berhasil disimpan');
    }

    function savePassword() {
        const current = document.getElementById('currentPw').value;
        const newPw = document.getElementById('newPw').value;
        const confirm = document.getElementById('confirmPw').value;

        if (!current || !newPw || !confirm) {
            showToast('Semua field password wajib diisi', 'error');
            return;
        }

        if (newPw.length < 8) {
            showToast('Password baru minimal 8 karakter', 'error');
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
        if (input.type === 'password') {
            input.type = 'text';
            btn.textContent = '🙈';
        } else {
            input.type = 'password';
            btn.textContent = '👁️';
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
        // Nanti: window.location.href = '/delete-account'
    }
</script>
</body>
</html>