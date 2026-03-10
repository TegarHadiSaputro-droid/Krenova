@auth
<script>
    // Cek localStorage dulu (real-time), fallback ke DB
    function applySettings() {
        const gelap = localStorage.getItem('mode_gelap') !== null
            ? localStorage.getItem('mode_gelap') === '1'
            : {{ Auth::user()->setting?->mode_gelap ? 'true' : 'false' }};

        const kontras = localStorage.getItem('kontras_tinggi') !== null
            ? localStorage.getItem('kontras_tinggi') === '1'
            : {{ Auth::user()->setting?->kontras_tinggi ? 'true' : 'false' }};

        const animasi = localStorage.getItem('kurangi_animasi') !== null
            ? localStorage.getItem('kurangi_animasi') === '1'
            : {{ Auth::user()->setting?->kurangi_animasi ? 'true' : 'false' }};

        if (gelap) document.body.classList.add('dark-mode');
        if (kontras) document.body.classList.add('high-contrast');
        if (animasi) document.body.classList.add('reduce-motion');
    }

    applySettings();

    // Dengerin perubahan dari tab/halaman lain
    window.addEventListener('storage', function(e) {
        if (e.key === 'mode_gelap') {
            document.body.classList.toggle('dark-mode', e.newValue === '1');
        }
        if (e.key === 'kontras_tinggi') {
            document.body.classList.toggle('high-contrast', e.newValue === '1');
        }
        if (e.key === 'kurangi_animasi') {
            document.body.classList.toggle('reduce-motion', e.newValue === '1');
        }
    });
</script>
@endauth