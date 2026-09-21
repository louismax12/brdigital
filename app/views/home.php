<?php ob_start(); ?>
<main>
    <section class="hero">
        <div class="hero-video-container">
            <iframe id="vimeo-bg-iframe" class="vimeo-bg-iframe" src="https://player.vimeo.com/video/1228725889?background=1&autoplay=1&loop=1&byline=0&title=0" frameborder="0" allow="autoplay; fullscreen" allowfullscreen></iframe>
        </div>
        <div class="hero-video-overlay"></div>
        <div class="hero-content-overlay">
            <div class="hero-grid">
                <div class="hero-text">
                    <div class="eyebrow">Tim Bumantara Digital Raileten</div>
                    <h1>Website yang membuat bisnis kecil terlihat <em>siap melangkah.</em></h1>
                    <p class="hero-copy">BRDigital membantu UMKM membangun identitas digital yang profesional, mudah dikelola, dan dekat dengan kebutuhan bisnis sehari-hari.</p>
                    <div class="hero-actions">
                        <a class="button button-primary" href="/kontak">Konsultasi sekarang</a>
                        <a class="text-link" href="#layanan" style="color: #ffffff;">Jelajahi layanan <span style="color: var(--lime);">→</span></a>
                    </div>
                </div>
                <div class="hero-visual">
                    <div class="hero-stage">
                        <div class="glow-ring"></div>
                        
                        <!-- Floating Pill Top Left -->
                        <div class="floating-pill pill-top-left">
                            <span class="pill-icon">🚀</span>
                            <div class="pill-text">
                                <strong>Performa Cepat</strong>
                                <small>SEO & Mobile Ready</small>
                            </div>
                        </div>

                        <!-- Main Floating Logo Card -->
                        <div class="hero-showcase-card">
                            <div class="logo-wrapper">
                                <img src="/assets/logo_brdigital.jpeg" alt="BRDigital Logo" class="hero-brand-logo">
                            </div>
                            <div class="showcase-content">
                                <h3>BRDigital</h3>
                                <p>Tim Bumantara Digital Raileten</p>
                                <span class="showcase-badge">Website Profesional UMKM</span>
                            </div>
                        </div>

                        <!-- Floating Pill Bottom Right -->
                        <div class="floating-pill pill-bottom-right">
                            <span class="pill-icon">✨</span>
                            <div class="pill-text">
                                <strong>100% Transparan</strong>
                                <small>Portal Klien Internal</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="hero-note" style="color: rgba(255,255,255,0.7);"><strong>01</strong><span>Strategi, desain, dan pengembangan<br>yang dikerjakan bersama.</span></div>
            
            <!-- Video Switcher Controls -->
            <div class="video-switcher">
                <button class="video-btn active" data-vimeo-id="1228725889" onclick="switchBgVideo('1228725889', this)">Vidio 1</button>
                <button class="video-btn" data-vimeo-id="1228725888" onclick="switchBgVideo('1228725888', this)">Vidio 2</button>
                <button class="video-btn" data-vimeo-id="1228725890" onclick="switchBgVideo('1228725890', this)">Vidio 3</button>
            </div>
        </div>
    </section>
    <script>
        function switchBgVideo(videoId, btn) {
            var iframe = document.getElementById('vimeo-bg-iframe');
            if (iframe) {
                iframe.src = 'https://player.vimeo.com/video/' + videoId + '?background=1&autoplay=1&loop=1&byline=0&title=0';
            }
            var buttons = document.querySelectorAll('.video-btn');
            buttons.forEach(function(b) { b.classList.remove('active'); });
            if (btn) {
                btn.classList.add('active');
            }
        }
    </script>
    <section class="intro-band"><p>BRDigital bukan sekadar membuat halaman. Kami merapikan cara bisnis Anda hadir, dipercaya, dan ditemukan di dunia digital.</p><span>BRD / 2026</span></section>
    <section class="section" id="layanan"><div class="section-heading"><div><div class="eyebrow">Yang kami kerjakan</div><h2>Digital presence<br>yang terasa <em>punya arah.</em></h2></div><p>Mulai dari halaman pertama hingga sistem yang mendukung operasional Anda.</p></div><div class="service-grid"><article><b>01</b><h3>Company profile</h3><p>Profil bisnis yang jelas, dipercaya, dan siap dibagikan ke calon pelanggan.</p></article><article><b>02</b><h3>Website UMKM</h3><p>Website responsif untuk katalog, reservasi, layanan, dan kebutuhan unik bisnis.</p></article><article><b>03</b><h3>Maintenance</h3><p>Pendampingan setelah tayang agar website tetap sehat dan relevan.</p></article></div></section>
    <section class="process section" id="proses"><div class="eyebrow">Cara bekerja</div><h2>Dari percakapan<br>menjadi <em>kemajuan.</em></h2><div class="process-list"><div><b>01</b><strong>Konsultasi</strong><span>Kami mendengar konteks bisnis dan tujuan Anda.</span></div><div><b>02</b><strong>Rancang</strong><span>Kebutuhan diterjemahkan menjadi struktur yang masuk akal.</span></div><div><b>03</b><strong>Bangun</strong><span>Desain dan teknologi dipadukan dengan rapi.</span></div><div><b>04</b><strong>Serahkan</strong><span>Website diluncurkan, dijelaskan, dan siap digunakan.</span></div></div></section>
    <section class="cta"><div class="eyebrow">Punya ide?</div><h2>Mari buat ruang digital<br>yang bekerja untuk Anda.</h2><a class="button button-light" href="/kontak">Mulai percakapan →</a></section>
</main>
<?php $content = ob_get_clean(); $pageTitle = 'Website profesional untuk UMKM'; require __DIR__ . '/layout.php'; ?>
