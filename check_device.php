<?php $browser = get_browser(null, true); ?>
<?php if ($browser['ismobiledevice']): ?>
    <h2>Selamat Datang di Jagocoding Versi Mobile</h2>
<?php else: ?>
    <h2>Selamat Datang di Jagocoding Versi Desktop</h2>
<?php endif; ?>