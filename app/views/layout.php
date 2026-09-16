<?php
$pageTitle = $pageTitle ?? 'BRDigital';
$isDashboard = $isDashboard ?? false;
?><!doctype html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= e($pageTitle) ?> | BRDigital</title>
    <link rel="stylesheet" href="/assets/style.css">
</head>
<body class="<?= $isDashboard ? 'dashboard-body' : '' ?>">
<?php if ($isDashboard): ?>
    <aside class="sidebar">
        <a class="brand" href="/admin">BR<span>Digital</span></a>
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
        <a class="brand" href="/">BR<span>Digital</span></a>
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
