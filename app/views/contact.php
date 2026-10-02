<?php ob_start();
$oldContactName = isset($_SESSION['old']['contact_name']) ? $_SESSION['old']['contact_name'] : '';
$oldBusinessName = isset($_SESSION['old']['business_name']) ? $_SESSION['old']['business_name'] : '';
?>
<main class="w-full py-12 lg:py-20 bg-canvas-warm min-h-screen">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 flex flex-col gap-10">
        
        <!-- Breadcrumb & Top Indicator -->
        <div class="flex flex-col md:flex-row md:items-center justify-between gap-4">
            <nav aria-label="Breadcrumb" class="flex items-center gap-2 text-sm font-semibold text-slate-500">
                <a class="hover:text-primary transition-colors flex items-center gap-1" href="<?= url('') ?>">
                    <span class="material-symbols-outlined text-[18px]">home</span> Beranda
                </a>
                <span class="text-slate-300">/</span>
                <span class="text-slate-900">Konsultasi UMKM Gratis</span>
            </nav>
            <div class="inline-flex items-center gap-2 self-start md:self-auto bg-white border border-slate-200 px-3 py-1.5 rounded-full shadow-sm">
                <span class="relative flex h-2.5 w-2.5">
                    <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-emerald-500 opacity-75"></span>
                    <span class="relative inline-flex rounded-full h-2.5 w-2.5 bg-emerald-500"></span>
                </span>
                <span class="text-[10px] font-bold text-slate-800 uppercase tracking-wider">Kuota Konsultasi Hari Ini: 8 Slot Tersedia</span>
            </div>
        </div>

        <?php if ($message = flash('success')): ?>
            <div class="p-4 bg-emerald-100 border border-emerald-200 text-emerald-800 rounded-xl flex items-center gap-3">
                <span class="material-symbols-outlined text-emerald-600">verified</span>
                <div class="flex flex-col">
                    <span class="text-sm font-bold">Berhasil!</span>
                    <span class="text-xs"><?= e($message) ?></span>
                </div>
            </div>
        <?php endif; ?>
        <?php if ($message = flash('error')): ?>
            <div class="p-4 bg-red-100 border border-red-200 text-red-800 rounded-xl flex items-center gap-3">
                <span class="material-symbols-outlined text-red-600">error</span>
                <div class="flex flex-col">
                    <span class="text-sm font-bold">Gagal</span>
                    <span class="text-xs"><?= e($message) ?></span>
                </div>
            </div>
        <?php endif; ?>

        <!-- Editorial Header Section -->
        <div class="bg-white rounded-2xl p-6 sm:p-8 lg:p-10 shadow-sm border border-slate-200 flex flex-col lg:flex-row lg:items-end justify-between gap-8">
            <div class="flex flex-col gap-3 max-w-2xl">
                <div class="inline-flex items-center gap-2 text-primary text-xs font-bold uppercase tracking-wider">
                    <span class="material-symbols-outlined text-[18px]">verified</span> Layanan Resmi BRDigital — Open dari Rp 50.000
                </div>
                <h1 class="font-headline text-3xl sm:text-4xl text-slate-900 font-bold tracking-tight">
                    Mulai Transformasi Digital Usaha Anda
                </h1>
                <p class="text-slate-600 text-sm sm:text-base leading-relaxed">
                    Isi formulir ringkas di bawah. Tim konsultan kami akan menganalisis kebutuhan operasional bisnis Anda dan menghubungi kembali via WhatsApp resmi <strong>087 47620245</strong> atau Email <strong>brdigital.click@brdigital.click</strong> / <strong>bumantararaileten@gmail.com</strong>.
                </p>
            </div>
            
            <!-- Quick SLA & Contact Badge Tile -->
            <div class="flex flex-col gap-2 shrink-0">
                <a href="https://wa.me/628747620245" target="_blank" class="flex items-center gap-3 bg-emerald-50 border border-emerald-200 hover:bg-emerald-100 p-3.5 rounded-xl transition-all">
                    <div class="w-9 h-9 rounded-lg bg-emerald-500 text-white flex items-center justify-center font-bold">💬</div>
                    <div class="flex flex-col">
                        <span class="text-[10px] font-bold text-emerald-800 uppercase">WhatsApp Response</span>
                        <span class="text-sm font-bold text-slate-900">087 47620245</span>
                    </div>
                </a>
                <div class="flex items-center gap-3 bg-slate-50 border border-slate-200 p-3 rounded-xl text-xs text-slate-700">
                    <span class="material-symbols-outlined text-primary text-[18px]">local_offer</span>
                    <span>Layanan Open dari <strong>Rp 50.000</strong></span>
                </div>
            </div>
        </div>

        <!-- Layout Grid: Form (Major) + Trust & Visual Showcase (Sidebar) -->
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-start">
            
            <!-- Primary Form Container -->
            <div class="lg:col-span-8 bg-white rounded-2xl p-6 sm:p-8 lg:p-10 shadow-sm border border-slate-200">
                <form class="flex flex-col gap-8" method="post" action="<?= url('konsultasi') ?>">
                    <input type="hidden" name="_token" value="<?= e(csrf_token()) ?>">
                    
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                        <!-- Field 1: Nama Lengkap -->
                        <div class="flex flex-col gap-2">
                            <label class="text-sm font-bold text-slate-900 flex justify-between">
                                <span>Nama Lengkap <span class="text-red-500">*</span></span>
                            </label>
                            <div class="relative">
                                <span class="material-symbols-outlined absolute left-4 top-1/2 -translate-y-1/2 text-slate-400 text-[20px]">person</span>
                                <input type="text" name="contact_name" required value="<?= e($oldContactName) ?>" class="w-full pl-11 pr-4 py-3 bg-slate-50 border border-slate-200 text-slate-900 text-sm rounded-xl focus:bg-white focus:ring-2 focus:ring-primary outline-none transition-all placeholder:text-slate-400" placeholder="Budi Pratama">
                            </div>
                        </div>

                        <!-- Field 2: Nama Usaha -->
                        <div class="flex flex-col gap-2">
                            <label class="text-sm font-bold text-slate-900 flex justify-between">
                                <span>Nama Usaha / Toko <span class="text-red-500">*</span></span>
                            </label>
                            <div class="relative">
                                <span class="material-symbols-outlined absolute left-4 top-1/2 -translate-y-1/2 text-slate-400 text-[20px]">storefront</span>
                                <input type="text" name="business_name" required value="<?= e($oldBusinessName) ?>" class="w-full pl-11 pr-4 py-3 bg-slate-50 border border-slate-200 text-slate-900 text-sm rounded-xl focus:bg-white focus:ring-2 focus:ring-primary outline-none transition-all placeholder:text-slate-400" placeholder="Kripik Singkong Juara">
                            </div>
                        </div>
                    </div>

                    <!-- Field 3: WhatsApp & Email -->
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                        <div class="flex flex-col gap-2">
                            <label class="text-sm font-bold text-slate-900 flex justify-between items-center">
                                <span>WhatsApp Aktif <span class="text-red-500">*</span></span>
                            </label>
                            <div class="flex rounded-xl overflow-hidden border border-slate-200 bg-slate-50 focus-within:ring-2 focus-within:ring-primary focus-within:bg-white transition-all">
                                <span class="inline-flex items-center px-4 py-3 bg-slate-100 border-r border-slate-200 text-slate-700 font-bold text-sm gap-1">
                                    <span class="material-symbols-outlined text-[18px] text-emerald-600">chat</span> +62
                                </span>
                                <input type="tel" name="whatsapp" required class="w-full px-4 py-3 bg-transparent text-slate-900 text-sm outline-none placeholder-slate-400" placeholder="81234567890">
                            </div>
                        </div>
                        <div class="flex flex-col gap-2">
                            <label class="text-sm font-bold text-slate-900 flex justify-between items-center">
                                <span>Alamat Email <span class="font-normal text-slate-500">(Opsional)</span></span>
                            </label>
                            <div class="relative">
                                <span class="material-symbols-outlined absolute left-4 top-1/2 -translate-y-1/2 text-slate-400 text-[20px]">mail</span>
                                <input type="email" name="email" class="w-full pl-11 pr-4 py-3 bg-slate-50 border border-slate-200 text-slate-900 text-sm rounded-xl focus:bg-white focus:ring-2 focus:ring-primary outline-none transition-all placeholder:text-slate-400" placeholder="nama@bisnis.com">
                            </div>
                        </div>
                    </div>

                    <!-- Field 4: Layanan yang Dibutuhkan -->
                    <div class="flex flex-col gap-2">
                        <label class="text-sm font-bold text-slate-900">Fokus Kebutuhan Digital <span class="text-red-500">*</span></label>
                        <div class="relative">
                            <span class="material-symbols-outlined absolute left-4 top-1/2 -translate-y-1/2 text-slate-400 text-[20px]">category</span>
                            <select name="service_type" required class="w-full pl-11 pr-10 py-3.5 bg-slate-50 border border-slate-200 text-slate-900 text-sm font-semibold rounded-xl appearance-none focus:outline-none focus:bg-white focus:ring-2 focus:ring-primary transition-all cursor-pointer">
                                <option value="" disabled selected>Pilih layanan utama...</option>
                                <option value="Website UMKM">Website Katalog & QR Order Mandiri</option>
                                <option value="Company profile">Company Profile Resmi Perusahaan</option>
                                <option value="Landing page">Landing Page Konversi & Iklan</option>
                                <option value="Maintenance">Sistem Kasir (POS) & Manajemen Stok</option>
                                <option value="Lainnya">Lainnya / Diskusi Custom</option>
                            </select>
                            <span class="material-symbols-outlined absolute right-4 top-1/2 -translate-y-1/2 text-slate-500 pointer-events-none">expand_more</span>
                        </div>
                    </div>

                    <!-- Field 5: Ceritakan Kebutuhan Bisnis -->
                    <div class="flex flex-col gap-2">
                        <div class="flex items-center justify-between">
                            <label class="text-sm font-bold text-slate-900">Ceritakan Kendala & Kebutuhan Anda <span class="text-red-500">*</span></label>
                            <span class="text-xs text-slate-500 hidden sm:inline">Makin rinci, solusi makin akurat</span>
                        </div>
                        <textarea name="message" required rows="4" class="w-full px-4 py-3.5 bg-slate-50 border border-slate-200 text-slate-900 text-sm rounded-xl focus:bg-white focus:ring-2 focus:ring-primary outline-none transition-all placeholder:text-slate-400 resize-y" placeholder="Contoh: Saat ini kami kewalahan melayani orderan via chat manual di jam makan siang. Kami ingin katalog digital berbasis QR di meja..."></textarea>
                    </div>

                    <!-- Privacy Agreement -->
                    <div class="p-4 bg-slate-50 border border-slate-200 rounded-xl flex items-start gap-3 mt-2">
                        <input type="checkbox" required id="privacyAgreement" class="mt-1 w-5 h-5 rounded text-primary focus:ring-0 cursor-pointer accent-primary shrink-0">
                        <label for="privacyAgreement" class="text-xs text-slate-600 cursor-pointer select-none leading-relaxed">
                            Saya setuju bahwa data ini digunakan oleh tim konsultan <strong class="text-slate-900">BRDigital</strong> untuk menyusun blueprint konsultasi cuma-cuma dan menghubungi saya lewat WhatsApp. Data aman, tidak diperjualbelikan, serta terlindungi.
                        </label>
                    </div>

                    <!-- Submit Button -->
                    <div class="flex flex-col gap-2 mt-2">
                        <button type="submit" class="w-full bg-primary hover:bg-primary-dark active:scale-[0.99] text-white font-headline text-lg font-bold py-4 px-6 rounded-xl shadow-glow-orange transition-all duration-150 flex items-center justify-center gap-3">
                            <span>Kirim Permintaan Konsultasi</span>
                            <span class="material-symbols-outlined text-[24px]">arrow_forward</span>
                        </button>
                        <div class="flex flex-wrap items-center justify-center gap-3 text-slate-500 text-[10px] sm:text-xs font-bold uppercase tracking-wide pt-2">
                            <span class="flex items-center gap-1"><span class="material-symbols-outlined text-[14px] text-emerald-500">check_circle</span> 100% Bebas Biaya</span>
                            <span class="hidden sm:inline">•</span>
                            <span class="flex items-center gap-1"><span class="material-symbols-outlined text-[14px] text-emerald-500">check_circle</span> Tanpa Komitmen</span>
                        </div>
                    </div>
                </form>
            </div>

            <!-- Trust Elements & Social Proof Sidebar -->
            <div class="lg:col-span-4 flex flex-col gap-6">
                <!-- Live Consultant Card -->
                <div class="bg-white rounded-2xl p-6 shadow-sm border border-slate-200 flex flex-col gap-4">
                    <div class="flex items-center gap-4">
                        <div class="relative">
                            <img src="https://nos.wjv-1.neo.id/millian/kocimos/profesional_pas_foto.png" class="w-14 h-14 rounded-full object-cover" alt="Louis Maximillian, S.Kom.">
                            <span class="absolute bottom-0 right-0 w-3.5 h-3.5 rounded-full bg-emerald-500 ring-2 ring-white"></span>
                        </div>
                        <div class="flex flex-col min-w-0">
                            <span class="text-sm font-bold text-slate-900 truncate">Louis Maximillian, S.Kom.</span>
                            <span class="text-xs text-slate-500 truncate">Lead Solution Architect UMKM</span>
                            <span class="text-[10px] font-bold text-emerald-600 uppercase tracking-wider mt-0.5">Online & Siap Mereview</span>
                        </div>
                    </div>
                    <div class="p-3 bg-slate-50 border border-slate-200 rounded-xl flex items-start gap-2 text-slate-700 text-xs leading-relaxed">
                        <span class="material-symbols-outlined text-primary text-[18px]">verified_user</span>
                        <span>Telah mendampingi <strong>420+ UMKM</strong> lokal tumbuh secara digital sejak 2021.</span>
                    </div>
                </div>

                <!-- Trust Metric Badges -->
                <div class="bg-white rounded-2xl p-6 shadow-sm border border-slate-200 flex flex-col gap-5">
                    <span class="text-xs font-bold text-slate-500 uppercase tracking-wider">Jaminan Kepuasan</span>
                    
                    <div class="flex items-start gap-4">
                        <div class="w-10 h-10 rounded-xl bg-teal-50 text-accent-teal flex items-center justify-center shrink-0 border border-teal-100">
                            <span class="material-symbols-outlined text-[20px]">speed</span>
                        </div>
                        <div class="flex flex-col">
                            <span class="text-sm font-bold text-slate-900">Garansi Respon Cepat</span>
                            <span class="text-xs text-slate-500 leading-relaxed mt-1">Kami menghargai waktu Anda. Proposal digitalisasi akan kami siapkan secepatnya.</span>
                        </div>
                    </div>
                    
                    <div class="flex items-start gap-4">
                        <div class="w-10 h-10 rounded-xl bg-orange-50 text-primary flex items-center justify-center shrink-0 border border-orange-100">
                            <span class="material-symbols-outlined text-[20px]">lock</span>
                        </div>
                        <div class="flex flex-col">
                            <span class="text-sm font-bold text-slate-900">Kerahasiaan Data</span>
                            <span class="text-xs text-slate-500 leading-relaxed mt-1">Seluruh data internal bisnis dan kendala operasional Anda dilindungi sistem kami.</span>
                        </div>
                    </div>
                </div>

                <!-- Client Testimonial Snapshot -->
                <div class="bg-slate-900 text-white rounded-2xl p-6 shadow-elevated flex flex-col gap-4 relative overflow-hidden">
                    <div class="absolute -top-4 -right-4 w-24 h-24 bg-primary rounded-full blur-3xl opacity-20"></div>
                    <div class="flex items-center gap-1 text-amber-400">
                        <span class="material-symbols-outlined text-[18px]" style="font-variation-settings: 'FILL' 1;">star</span>
                        <span class="material-symbols-outlined text-[18px]" style="font-variation-settings: 'FILL' 1;">star</span>
                        <span class="material-symbols-outlined text-[18px]" style="font-variation-settings: 'FILL' 1;">star</span>
                        <span class="material-symbols-outlined text-[18px]" style="font-variation-settings: 'FILL' 1;">star</span>
                        <span class="material-symbols-outlined text-[18px]" style="font-variation-settings: 'FILL' 1;">star</span>
                    </div>
                    <p class="text-sm italic opacity-95 leading-relaxed">
                        “Konsultasi 30 menit dengan BRDigital membukakan jalan kami mengganti rekapan nota kertas ke POS cloud. Omset naik 35% karena pesanan tidak pernah terselip lagi.”
                    </p>
                    <div class="flex items-center gap-3 pt-2">
                        <img class="w-10 h-10 rounded-full object-cover ring-2 ring-primary" src="https://lh3.googleusercontent.com/aida-public/AB6AXuByY9x7A8WR0rCfo0FrV0LgHUIzD3Yvk1j8DQkRUSULfJBGo9clHWaXs5qGzsZh1wW9njUeVybvYm1uLneRXA9x0IUdBDwEDxv3_wd3p5OfuHTqmrQ-p7ls_MwqqSUD0DOjt5laQP4qBzxmvxewf6M-vFDuU3CmEf4yvEkRbg-QvwLCXsfU1aB6iaQDNMovJBP8LQtybvVeq8xMlExpY0fWfH9cwiZUCPX1_E4d9G-JbPz7AsDTnoHz" alt="Rina Melati">
                        <div class="flex flex-col min-w-0">
                            <span class="text-sm font-bold text-white truncate">Rina Melati</span>
                            <span class="text-[10px] font-bold text-slate-400 uppercase tracking-wider truncate">Owner Dapur Roti Manis</span>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
</main>
<?php unset($_SESSION['old']); $content = ob_get_clean(); $pageTitle = 'Konsultasi Gratis - BRDigital'; require __DIR__ . '/layout.php'; ?>
