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
                    $rawWa = isset($lead['whatsapp']) ? $lead['whatsapp'] : '';
                    $waClean = preg_replace('/[^0-9]/', '', $rawWa);
                    if (substr($waClean, 0, 1) === '0') {
                        $waClean = '62' . substr($waClean, 1);
                    }

                    $status = !empty($lead['status']) ? $lead['status'] : 'New';
                    $businessName = !empty($lead['business_name']) ? $lead['business_name'] : 'Tanpa Nama Usaha';
                    $contactName = isset($lead['contact_name']) ? $lead['contact_name'] : '';
                    $email = isset($lead['email']) ? $lead['email'] : '';
                    $serviceType = !empty($lead['service_type']) ? $lead['service_type'] : 'Umum / Konsultasi';
                    $message = !empty($lead['message']) ? $lead['message'] : 'Tidak ada rincian pesan.';
                    $createdAt = !empty($lead['created_at']) ? $lead['created_at'] : '';
                ?>
                <article class="lead-card">
                    <header class="lead-card-header">
                        <div class="lead-card-main">
                            <span class="status-badge status-<?= strtolower(str_replace(' ', '-', $status)) ?>">
                                <?= e($status) ?>
                            </span>
                            <h2><?= e($businessName) ?></h2>
                        </div>
                        <time class="lead-time">
                            <?= !empty($createdAt) ? date('d M Y, H:i', strtotime($createdAt)) : '-' ?>
                        </time>
                    </header>

                    <div class="lead-card-body">
                        <div class="lead-info-grid">
                            <div>
                                <small>Contact Person</small>
                                <strong><?= e($contactName) ?></strong>
                            </div>
                            <div>
                                <small>WhatsApp</small>
                                <strong>
                                    <a href="https://wa.me/<?= e($waClean) ?>" target="_blank" class="wa-link">
                                        <?= e($rawWa) ?> ↗
                                    </a>
                                </strong>
                            </div>
                            <div>
                                <small>Email</small>
                                <strong>
                                    <?php if (!empty($email)): ?>
                                        <a href="mailto:<?= e($email) ?>"><?= e($email) ?></a>
                                    <?php else: ?>
                                        <span class="text-muted">-</span>
                                    <?php endif; ?>
                                </strong>
                            </div>
                            <div>
                                <small>Layanan Diminta</small>
                                <strong><?= e($serviceType) ?></strong>
                            </div>
                        </div>

                        <div class="lead-message-box">
                            <small>Pesan Konsultasi:</small>
                            <p><?= nl2br(e($message)) ?></p>
                        </div>
                    </div>

                    <footer class="lead-card-footer">
                        <a href="https://wa.me/<?= e($waClean) ?>?text=Halo%20<?= urlencode($contactName) ?>,%20terima%20kasih%20telah%20menghubungi%20BRDigital." target="_blank" class="button button-primary button-sm">
                            Hubungi via WhatsApp
                        </a>
                        <?php if (!empty($email)): ?>
                            <a href="mailto:<?= e($email) ?>" class="button button-light button-sm">
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
