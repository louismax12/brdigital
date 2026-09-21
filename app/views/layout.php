<?php
$pageTitle = $pageTitle ?? 'BRDigital';
$isDashboard = $isDashboard ?? false;
?><!doctype html>
<html lang="id">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0, viewport-fit=cover">
    <meta name="theme-color" content="#17221d">
    <title><?= e($pageTitle) ?> | BRDigital</title>
    <link rel="stylesheet" href="/assets/style.css">
</head>
<body class="<?= $isDashboard ? 'dashboard-body' : '' ?>">
<?php if ($isDashboard): ?>
    <aside class="sidebar">
        <a class="brand brand-with-logo" href="/admin">
            <img src="/assets/logo_brdigital.jpeg" alt="BRDigital Logo" class="brand-logo">
            <span>BR<span>Digital</span></span>
        </a>
        <p class="sidebar-label">Workspace</p>
        <nav>
            <a href="/admin">Ringkasan</a>
            <a href="/admin/leads">Leads</a>
            <a href="/" target="_blank">Lihat website</a>
            <a href="/logout">Keluar</a>
        </nav>
    </aside>
    <main class="dashboard-main">
<?php else: ?>
    <header class="site-header">
        <a class="brand brand-with-logo" href="/">
            <img src="/assets/logo_brdigital.jpeg" alt="BRDigital Logo" class="brand-logo">
            <span>BR<span>Digital</span></span>
        </a>
        <nav>
            <a href="/#layanan">Layanan</a>
            <a href="/#proses">Proses kerja</a>
            <a href="/kontak">Konsultasi</a>
            <a class="nav-login" href="/login">Portal tim</a>
        </nav>
    </header>
<?php endif; ?>
<?= $content ?? '' ?>
<?php if ($isDashboard): ?></main><?php else: ?><footer>BRDigital · Memajukan UMKM melalui profesionalisme website.</footer><?php endif; ?>
</body>
</html>
