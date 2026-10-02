<?php
$pageTitle = isset($pageTitle) ? $pageTitle : 'BRDigital';
$isDashboard = isset($isDashboard) ? $isDashboard : false;
?><!doctype html>
<html lang="id">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0, viewport-fit=cover">
    <meta name="theme-color" content="#17221d">
    <title><?= e($pageTitle) ?> | BRDigital</title>
    <link rel="apple-touch-icon" sizes="180x180" href="<?= asset('favicon_io/apple-touch-icon.png?v=3') ?>">
    <link rel="icon" type="image/png" sizes="32x32" href="<?= asset('favicon_io/favicon-32x32.png?v=3') ?>">
    <link rel="icon" type="image/png" sizes="16x16" href="<?= asset('favicon_io/favicon-16x16.png?v=3') ?>">
    <link rel="manifest" href="<?= asset('favicon_io/site.webmanifest?v=3') ?>">
    <link rel="shortcut icon" href="<?= asset('favicon_io/favicon.ico?v=3') ?>">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&family=Space+Grotesk:wght@300..700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <script>
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    colors: {
                        "primary": "#EA580C",
                        "primary-dark": "#C2410C",
                        "primary-light": "#FFF7ED",
                        "canvas-warm": "#FAF9F6",
                        "surface-pure": "#FFFFFF",
                        "slate-obsidian": "#0F172A",
                        "slate-muted": "#64748B",
                        "slate-border": "#E2E8F0",
                        "accent-teal": "#008378",
                        "accent-emerald": "#16A34A"
                    },
                    fontFamily: {
                        "headline": ["Space Grotesk", "sans-serif"],
                        "body": ["DM Sans", "sans-serif"]
                    },
                    boxShadow: {
                        "subtle": "0 1px 3px 0 rgba(15, 23, 42, 0.05), 0 1px 2px -1px rgba(15, 23, 42, 0.05)",
                        "elevated": "0 10px 30px -5px rgba(15, 23, 42, 0.06), 0 4px 10px -3px rgba(15, 23, 42, 0.03)",
                        "glow-orange": "0 12px 25px -4px rgba(234, 88, 12, 0.22)"
                    }
                }
            }
        };
    </script>
    <style type="text/tailwindcss">
        @layer base {
            body:not(.dashboard-body) {
                @apply bg-canvas-warm text-slate-obsidian antialiased selection:bg-orange-100 selection:text-primary;
            }
        }
    </style>
    <link rel="stylesheet" href="<?= asset('assets/style.css') ?>">
</head>
<body class="<?= $isDashboard ? 'dashboard-body' : '' ?>">
<?php if ($isDashboard): ?>
    <aside class="sidebar">
        <a class="brand brand-with-logo" href="<?= url('admin') ?>">
            <img src="https://nos.wjv-1.neo.id/millian/foto_millian_louis/brdigital_logo.jpg" alt="BRDigital Logo" class="brand-logo">
            <span>BR<span>Digital</span></span>
        </a>
        <p class="sidebar-label">Workspace</p>
        <nav>
            <a href="<?= url('admin') ?>">Ringkasan</a>
            <a href="<?= url('admin/leads') ?>">Leads</a>
            <a href="/" target="_blank">Lihat website</a>
            <a href="/logout">Keluar</a>
        </nav>
    </aside>
    <main class="dashboard-main">
<?php else: ?>
    <!-- Top Announcement Bar -->
    <div class="w-full bg-slate-obsidian text-slate-200 py-2 px-4 text-xs font-medium border-b border-slate-800">
        <div class="max-w-7xl mx-auto flex items-center justify-between">
            <div class="flex items-center gap-2">
                <span class="inline-flex items-center px-2 py-0.5 rounded text-[10px] font-bold bg-primary text-white tracking-wider uppercase">Program 2026</span>
                <span class="hidden sm:inline">Subsidi Digitalisasi UMKM Tahap I: Potongan setup katalog 30% untuk 50 pendaftar pertama bulan ini.</span>
                <span class="sm:hidden">Subsidi Digitalisasi UMKM Tersedia!</span>
            </div>
            <a class="text-orange-400 hover:text-white font-semibold inline-flex items-center gap-1 transition-colors" href="<?= url('contact') ?>">
                Klaim Kuota <span class="material-symbols-outlined text-[14px]">arrow_forward</span>
            </a>
        </div>
    </div>
    <!-- Primary Sticky Navigation -->
    <header class="sticky top-0 z-50 bg-white/90 backdrop-blur-md border-b border-slate-border">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 h-20 flex items-center justify-between">
            <!-- Logo Branding -->
            <a class="flex items-center gap-3 group" href="/">
                <img alt="BRDigital Logo" class="h-10 w-auto object-contain transition-transform group-hover:scale-105 rounded-md shadow-sm border border-slate-200" src="https://nos.wjv-1.neo.id/millian/foto_millian_louis/brdigital_logo.jpg">
                <span class="font-headline font-bold text-xl tracking-tight text-slate-800 group-hover:text-primary transition-colors">BR<span class="text-primary">Digital</span></span>
            </a>
            <!-- Desktop Nav Links -->
            <nav class="hidden md:flex items-center gap-1 text-sm font-medium text-slate-600 bg-slate-100/80 p-1.5 rounded-full border border-slate-200/60">
                <a class="px-4 py-1.5 rounded-full text-slate-700 hover:text-slate-obsidian hover:bg-white transition-all" href="/#solusi">Layanan Pilar</a>
                <a class="px-4 py-1.5 rounded-full text-slate-700 hover:text-slate-obsidian hover:bg-white transition-all" href="<?= url('#komparasi') ?>">Komparasi</a>
                <a class="px-4 py-1.5 rounded-full text-slate-700 hover:text-slate-obsidian hover:bg-white transition-all" href="<?= url('#portofolio') ?>">Studi Kasus</a>
                <a class="px-4 py-1.5 rounded-full text-slate-700 hover:text-slate-obsidian hover:bg-white transition-all" href="<?= url('#harga') ?>">Paket Harga</a>
            </nav>
            <!-- Action Button Group -->
            <div class="flex items-center gap-3">
                <a class="hidden sm:inline-flex items-center gap-1.5 text-xs font-semibold text-slate-700 hover:text-primary px-3 py-2 transition-colors" href="<?= url('login') ?>">
                    <span class="material-symbols-outlined text-[18px]">login</span>
                    <span>Portal Tim</span>
                </a>
                <a class="inline-flex items-center gap-2 px-5 py-2.5 rounded-lg bg-primary hover:bg-primary-dark text-white text-xs sm:text-sm font-semibold shadow-glow-orange hover:shadow-none transition-all active:scale-95" href="<?= url('contact') ?>">
                    <span>Konsultasi</span>
                    <span class="material-symbols-outlined text-[16px]">arrow_outward</span>
                </a>
            </div>
        </div>
    </header>
<?php endif; ?>
<?= isset($content) ? $content : '' ?>
<?php if ($isDashboard): ?></main><?php else: ?>
    <!-- CORPORATE HIGH-TRUST FOOTER -->
    <footer class="bg-slate-obsidian text-slate-400 pt-16 pb-12 border-t border-slate-800">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-5 gap-10 pb-12 border-b border-slate-800">
                <!-- Brand summary (2 cols) -->
                <div class="lg:col-span-2 space-y-4">
                    <div class="flex items-center gap-3">
                        <img alt="BRDigital Logo" class="h-10 w-auto rounded-md shadow-sm opacity-90" src="https://nos.wjv-1.neo.id/millian/foto_millian_louis/brdigital_logo.jpg">
                        <span class="font-headline font-bold text-xl tracking-tight text-white">BR<span class="text-primary">Digital</span></span>
                    </div>
                    <p class="text-xs sm:text-sm text-slate-400 max-w-sm leading-relaxed">
                        Agensi digitalisasi & modernisasi sistem transaksi resmi untuk mempercepat skala bisnis UMKM mandiri di seluruh penjuru Indonesia.
                    </p>
                    <div class="pt-2 flex items-center gap-4 text-slate-300">
                        <span class="inline-flex items-center gap-1.5 text-xs text-emerald-400">
                            <span class="w-2 h-2 rounded-full bg-emerald-500"></span> Server Cloud Uptime 99.8%
                        </span>
                    </div>
                </div>
                <!-- Links Pilar Layanan -->
                <div class="space-y-3">
                    <h4 class="text-xs font-bold text-white uppercase tracking-wider">Solusi Digital</h4>
                    <ul class="space-y-2 text-xs">
                        <li><a class="hover:text-white transition-colors" href="/#solusi">Web Katalog QR Meja</a></li>
                        <li><a class="hover:text-white transition-colors" href="/#solusi">Payment Gateway QRIS</a></li>
                        <li><a class="hover:text-white transition-colors" href="/#solusi">Otomasi WhatsApp CRM</a></li>
                        <li><a class="hover:text-white transition-colors" href="/#solusi">Cloud Mini ERP Stok</a></li>
                    </ul>
                </div>
                <!-- Links Navigasi Cepat -->
                <div class="space-y-3">
                    <h4 class="text-xs font-bold text-white uppercase tracking-wider">Navigasi Utama</h4>
                    <ul class="space-y-2 text-xs">
                        <li><a class="hover:text-white transition-colors" href="/#solusi">Layanan Pilar</a></li>
                        <li><a class="hover:text-white transition-colors" href="/#komparasi">Sebelum vs Sesudah</a></li>
                        <li><a class="hover:text-white transition-colors" href="/#portofolio">Studi Kasus Klien</a></li>
                        <li><a class="hover:text-white transition-colors" href="/#harga">Paket & Struktur Biaya</a></li>
                        <li><a class="hover:text-white transition-colors" href="<?= url('contact') ?>">Konsultasi Gratis</a></li>
                        <li><a class="hover:text-white transition-colors" href="<?= url('login') ?>">Portal Tim</a></li>
                    </ul>
                </div>
                <!-- Alamat & Kontak Office -->
                <div class="space-y-3">
                    <h4 class="text-xs font-bold text-white uppercase tracking-wider">Kontak & Operasional</h4>
                    <p class="text-xs leading-relaxed text-slate-400">
                        Jl. Kalibokor Selatan Nomor 136, Surabaya<br>
                        Kota Surabaya, Jawa Timur 60285<br>
                        <span class="text-emerald-400 font-semibold mt-1 inline-flex items-center gap-1">
                            <span class="material-symbols-outlined text-[14px]">chat</span> WA: <a href="https://wa.me/628747620245" target="_blank" class="hover:underline">087 47620245</a>
                        </span><br>
                        <span class="text-slate-300 font-medium mt-1 inline-block">
                            ✉️ <a href="mailto:brdigital.click@brdigital.click" class="hover:text-white">brdigital.click@brdigital.click</a><br>
                            ✉️ <a href="mailto:bumantararaileten@gmail.com" class="hover:text-white">bumantararaileten@gmail.com</a>
                        </span>
                    </p>
                </div>
            </div>
            <!-- Bottom Credits & Legal -->
            <div class="pt-8 flex flex-col sm:flex-row items-center justify-between text-xs text-slate-500 gap-4">
                <div>
                    &copy; 2026 BRDigital Nusantara. Hak Cipta Dilindungi Undang-Undang.
                </div>
                <div class="flex items-center gap-6">
                    <a class="hover:text-slate-300 transition-colors" href="#">Kebijakan Privasi</a>
                    <a class="hover:text-slate-300 transition-colors" href="#">Syarat & Ketentuan</a>
                </div>
            </div>
        </div>
    </footer>
<?php endif; ?>
</body>
</html>
