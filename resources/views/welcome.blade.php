<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>TUNA</title>
  <link href="#" rel="stylesheet">
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
 
<body>
<<<<<<< HEAD
    <style>
    body{
        background-color: #f0f0f0;
        font-family: Arial, sans-serif;
        text-align: center;
        padding: 50px;
    }
    
    </style>
 <header>
     <h2>jada ganteng</h2>
     <p>jada gagah</p>
 </header>  
=======
 <header class="main-header">
  <a href="#" class="logo">
  <img src="tunawoi.png" alt="Logo" style="height: 40px; width: auto; border-radius: 10px; margin-right: 10px;">
  
    <div class="logo-text-wrap">
  <div class="logo-main">TU<span>NA</span></div>
  <div class="logo-sub">Transforming User Needs into Access</div>
    </div>
        </a>

   <nav class="main-nav">
    <a href="{{ url('/') }}" class="nav-link">Beranda</a>


     
      <div class="nav-item">
        <span class="nav-link">
          Layanan
          <span class="arrow"></span>
        </span>
        <div class="dropdown">
          <a href="#">Call & Chat</a>
          <a href="#">AI trixie</a>
          <a href="#">Marketplace</a>
          <a href="#">Konsultasi</a>
        </div>
      </div>

      <a href="#" class="nav-link active">Template</a>
      <a href="#" class="nav-link">Portofolio</a>

      <div class="nav-item">
        <span class="nav-link">
          Pembayaran
          <span class="arrow"></span>
        </span>
        <div class="dropdown">
          <a href="#">Transfer Bank</a>
          <a href="#">Kartu Kredit / Debit</a>
          <a href="#">E-Wallet</a>
          <a href="#">Invoice</a>
        </div>
      </div>

      <div class="nav-item">
        <span class="nav-link">
          Panduan
          <span class="arrow"></span>
        </span>
        <div class="dropdown">
          <a href="#">Cara Mulai</a>
          <a href="#">Video Tutorial</a>
          <a href="#">FAQ</a>
          <a href="#">Blog</a>
        </div>
      </div>

      <div class="nav-item">
        <span class="nav-link">
          Hubungi Kami
          <span class="arrow"></span>
        </span>
        <div class="dropdown">
          <a href="#">WhatsApp</a>
          <a href="#">Email Support</a>
          <a href="#">Live Chat</a>
          <a href="#">Kantor Kami</a>
        </div>
      </div>

      <div class="nav-divider"></div>

      <div class="all-products">
        <div class="grid-icon">
          <span></span><span></span><span></span><span></span>
        </div>
        All Products
      </div>
    </nav>

    <div class="header-actions">
       <a href="{{ route('login') }}" class="btn-login">Masuk</a>
  <button class="btn-cta">Coba Gratis</button>
</div>



  </header>

  <div class="page-content">
    <h1>Selamat datang di website kami 👋</h1>
    <p>Header sudah siap — hover menu untuk melihat dropdown.</p>
  </div>

<script>
let closeTimer;

document.querySelectorAll('.nav-item').forEach(item => {
  item.addEventListener('mouseenter', function() {
    clearTimeout(closeTimer);
    document.querySelectorAll('.dropdown').forEach(d => d.style.display = 'none');
    this.querySelector('.dropdown').style.display = 'block';
  });

  

  item.addEventListener('mouseleave', function() {
    closeTimer = setTimeout(() => {
      this.querySelector('.dropdown').style.display = 'none';
    }, 300);
  });
});
</script>

>>>>>>> bcbad540e25e3c375e143c76ae902248c98d35c2

</body>
</html>