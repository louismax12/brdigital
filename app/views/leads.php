<?php ob_start(); ?>
<section class="dashboard-header">
    <div>
        <div class="eyebrow">CRM / Leads</div>
        <h1>Inquiry Konsultasi Masuk</h1>
    </div>
</section>

<section class="panel">
    <div class="lead-detail-list">
        <?php if (empty($leads)): ?>
            <div class="empty">Belum ada inquiry konsultasi yang masuk.</div>
        <?php else: ?>
            <?php foreach ($leads as $lead): ?>
                <?php 
                    $waClean = preg_replace('/[^0-9]/', '', $lead['whatsapp'] ?? '');
                    if (str_starts_with($waClean, '0')) {
                        $waClean = '62' . substr($waClean, 1);
                    }
                ?>
                <article class="lead-card">
                    <header class="lead-card-header">
                        <div class="lead-card-main">
                            <span class="status-badge status-<?= strtolower(str_replace(' ', '-', $lead['status'] ?? 'new')) ?>">
                                <?= e($lead['status'] ?? 'New') ?>
                            </span>
                            <h2><?= e($lead['business_name'] ?: 'Tanpa Nama Usaha') ?></h2>
                        </div>
                        <time class="lead-time">
                            <?= !empty($lead['created_at']) ? date('d M Y, H:i', strtotime($lead['created_at'])) : '-' ?>
                        </time>
                    </header>

                    <div class="lead-card-body">
                        <div class="lead-info-grid">
                            <div>
                                <small>Contact Person</small>
                                <strong><?= e($lead['contact_name']) ?></strong>
                            </div>
                            <div>
                                <small>WhatsApp</small>
                                <strong>
                                    <a href="https://wa.me/<?= e($waClean) ?>" target="_blank" class="wa-link">
                                        <?= e($lead['whatsapp']) ?> ↗
                                    </a>
                                </strong>
                            </div>
                            <div>
                                <small>Email</small>
                                <strong>
                                    <?php if (!empty($lead['email'])): ?>
                                        <a href="mailto:<?= e($lead['email']) ?>"><?= e($lead['email']) ?></a>
                                    <?php else: ?>
                                        <span class="text-muted">-</span>
                                    <?php endif; ?>
                                </strong>
                            </div>
                            <div>
                                <small>Layanan Diminta</small>
                                <strong><?= e($lead['service_type'] ?: 'Umum / Konsultasi') ?></strong>
                            </div>
                        </div>

                        <div class="lead-message-box">
                            <small>Pesan Konsultasi:</small>
                            <p><?= nl2br(e($lead['message'] ?: 'Tidak ada rincian pesan.')) ?></p>
                        </div>
                    </div>

                    <footer class="lead-card-footer">
                        <a href="https://wa.me/<?= e($waClean) ?>?text=Halo%20<?= urlencode($lead['contact_name']) ?>,%20terima%20kasih%20telah%20menghubungi%20BRDigital." target="_blank" class="button button-primary button-sm">
                            Hubungi via WhatsApp
                        </a>
                        <?php if (!empty($lead['email'])): ?>
                            <a href="mailto:<?= e($lead['email']) ?>" class="button button-light button-sm">
                                Kirim Email
                            </a>
                        <?php endif; ?>
                    </footer>
                </article>
            <?php endforeach; ?>
        <?php endif; ?>
    </div>
</section>

<?php 
$content = ob_get_clean(); 
$pageTitle = 'Detail Inquiry Leads'; 
$isDashboard = true; 
require __DIR__ . '/layout.php'; 
?>
