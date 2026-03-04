<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8"/>
  <title>Custom Cursor Only</title>
  <style>
    /* ==============================
       CUSTOM CURSOR — PASTE KE WEB MU
       ============================== */

    * { cursor: none !important; }

    #cursor-dot {
      position: fixed;
      top: 0; left: 0;
      width: 8px; height: 8px;
      background: #fff;
      border-radius: 50%;
      pointer-events: none;
      z-index: 99999;
      transform: translate(-50%, -50%);
      transition: width 0.2s ease, height 0.2s ease, opacity 0.2s ease;
      mix-blend-mode: difference;
    }

    #cursor-ring {
      position: fixed;
      top: 0; left: 0;
      width: 36px; height: 36px;
      border: 1.5px solid rgba(255,255,255,0.85);
      border-radius: 50%;
      pointer-events: none;
      z-index: 99998;
      transform: translate(-50%, -50%);
      transition: width 0.3s ease, height 0.3s ease, border-color 0.3s ease, background 0.3s ease, border-radius 0.3s ease;
      mix-blend-mode: difference;
    }

    /* Saat hover link/button */
    body.cursor-hover #cursor-ring {
      width: 64px; height: 64px;
      background: rgba(255,255,255,0.08);
    }
    body.cursor-hover #cursor-dot {
      width: 4px; height: 4px;
    }

    /* Saat klik */
    body.cursor-click #cursor-ring {
      width: 24px; height: 24px;
    }

    /* Saat hover input/textarea */
    body.cursor-text #cursor-ring {
      width: 3px; height: 36px;
      border-radius: 2px;
    }
    body.cursor-text #cursor-dot { opacity: 0; }

  </style>
</head>
<body>

  <!-- CURSOR: tambahkan 2 div ini ke <body> web kamu -->
  <div id="cursor-dot"></div>
  <div id="cursor-ring"></div>

  <!-- Demo -->
  <p>GERAKKAN MOUSE — INI DEMO</p>
  <a href="#">Hover link ini</a>
  <button>Atau tombol ini</button>
  <input type="text" placeholder="Atau input ini..." />

  <!-- CURSOR SCRIPT: tambahkan sebelum </body> -->
  <script>
    const dot  = document.getElementById('cursor-dot');
    const ring = document.getElementById('cursor-ring');

    let mouseX = 0, mouseY = 0;
    let ringX  = 0, ringY  = 0;

    document.addEventListener('mousemove', e => {
      mouseX = e.clientX;
      mouseY = e.clientY;
      dot.style.left = mouseX + 'px';
      dot.style.top  = mouseY + 'px';
    });

    (function animateRing() {
      ringX += (mouseX - ringX) * 0.12;
      ringY += (mouseY - ringY) * 0.12;
      ring.style.left = ringX + 'px';
      ring.style.top  = ringY + 'px';
      requestAnimationFrame(animateRing);
    })();

    document.querySelectorAll('a, button').forEach(el => {
      el.addEventListener('mouseenter', () => document.body.classList.add('cursor-hover'));
      el.addEventListener('mouseleave', () => document.body.classList.remove('cursor-hover'));
    });

    document.querySelectorAll('input, textarea').forEach(el => {
      el.addEventListener('mouseenter', () => document.body.classList.add('cursor-text'));
      el.addEventListener('mouseleave', () => document.body.classList.remove('cursor-text'));
    });

    document.addEventListener('mousedown', () => document.body.classList.add('cursor-click'));
    document.addEventListener('mouseup',   () => document.body.classList.remove('cursor-click'));

    document.addEventListener('mouseleave', () => { dot.style.opacity = '0'; ring.style.opacity = '0'; });
    document.addEventListener('mouseenter', () => { dot.style.opacity = '1'; ring.style.opacity = '1'; });
  </script>

</body>
</html>
