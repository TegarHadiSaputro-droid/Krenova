<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Masuk-TUNA</title>
  <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="{{ asset('css/register.css') }}">
</head>
<body>
<body>

<div class="login-wrapper">
  <div class="login-left">
    <div class="left-logo">
      <div class="brand">TU<span>NA</span></div>
      <div class="tagline">Transforming User Needs Into Access</div>
    </div>

    <div class="left-content">
      <h1>Kami mendukung aksebilitas pengguna dalam mengakses</h1>
      <p>Gabunglah bersama kami dan rasakan pengalaman baru sebagai pengguna TUNA karena kami hadir untuk memberikan solusi digital bagi anda.</p>
    </div>

    <div class="features">
      <div class="feature-item"><div class="feature-dot"></div> Layanan yang dapat diakses dimana saja</div>
      <div class="feature-item"><div class="feature-dot"></div> Dashboard profesional untuk anda</div>
      <div class="feature-item"><div class="feature-dot"></div> Dan banyak fitur lainnya</div>
    </div>
  </div>

  <div class="login-right">
    <h2>Selamat datang kembali 👋</h2>
    <p class="sub">Masuk ke akun kamu untuk melanjutkan</p>

    <form method="POST" action="/login">
  @csrf

    <div class="form-group">
      <label>Email</label>
      <input type="email" placeholder="email@example.com">
    </div>

    <div class="form-group">
      <label>Password</label>
      <input type="password" placeholder="••••••••">
    </div>

    <div class="forgot"><a href="#">Lupa password?</a></div>

    <button class="btn-masuk">Masuk</button>

    <div class="divider">atau</div>

    <p class="register-link">Belum punya akun? <a href="{{ route('register') }}">Daftar sekarang</a></p>
  </div>
</div>

</body>
</html>