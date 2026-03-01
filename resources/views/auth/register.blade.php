<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Daftar - TUNA</title>
  <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="{{ asset('css/register.css') }}">
</head>
<body>

<div class="login-wrapper">
  <div class="login-left">
    <div class="left-logo">
      <div class="brand">TU<span>NA</span></div>
      <div class="tagline">Transforming Needs Into Access</div>
    </div>

    <div class="left-content">
      <h1>Bergabung sekarang, gratis!</h1>
      <p>Buat akun dan mulai nikmati semua layanan TUNA untuk kebutuhanmu.</p>
    </div>

    <div class="features">
      <div class="feature-item"><div class="feature-dot"></div> Daftar gratis, tanpa kartu kredit</div>
      <div class="feature-item"><div class="feature-dot"></div> Akses semua fitur dasar</div>
      <div class="feature-item"><div class="feature-dot"></div> Support 24/7 siap membantu</div>
    </div>
  </div>

  <div class="login-right">
    <h2>Buat akun baru ✨</h2>
    <p class="sub">Isi data di bawah untuk mulai</p>

    @if ($errors->any())
      <div class="alert-error">{{ $errors->first() }}</div>
    @endif

    <form method="POST" action="/register">
      @csrf

      <div class="form-group">
        <label>Nama Lengkap</label>
        <input type="text" name="name" placeholder="John Doe" required>
      </div>

      <div class="form-group">
        <label>Email</label>
        <input type="email" name="email" placeholder="email@example.com" required>
      </div>

      <div class="form-group">
        <label>Password</label>
        <input type="password" name="password" placeholder="Min. 6 karakter" required>
      </div>

      <div class="form-group">
        <label>Konfirmasi Password</label>
        <input type="password" name="password_confirmation" placeholder="Ulangi password" required>
      </div>

      <button type="submit" class="btn-masuk">Daftar Sekarang</button>
    </form>

    <div class="divider">atau</div>

    <p class="register-link">Sudah punya akun? <a href="{{ route('login') }}">Masuk di sini</a></p>

    <div style="text-align: center; margin-top: 10px;">
    <a href="{{ url('/') }}" style="font-size: 12px; color: gray;">← Kembali ke Beranda</a>
</div>

</div>
  </div>
</div>

</body>
</html>