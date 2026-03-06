@auth
<script>
    const userSettings = {
        mode_gelap: {{ Auth::user()->setting?->mode_gelap ? 'true' : 'false' }},
        kontras_tinggi: {{ Auth::user()->setting?->kontras_tinggi ? 'true' : 'false' }},
        kurangi_animasi: {{ Auth::user()->setting?->kurangi_animasi ? 'true' : 'false' }},
    };
    function applySettings() {
        if (userSettings.mode_gelap) document.body.classList.add('dark-mode');
        if (userSettings.kontras_tinggi) document.body.classList.add('high-contrast');
        if (userSettings.kurangi_animasi) document.body.classList.add('reduce-motion');
    }
    applySettings();
</script>
@endauth