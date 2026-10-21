<?php
$githubUrl = safe_http_url($portfolio['contact']['github_url'] ?? '');
$emailAddress = is_string($portfolio['contact']['email'] ?? null) ? trim($portfolio['contact']['email']) : '';
$emailUrl = safe_mailto($emailAddress);
?>
<section class="section section-wrap contact-section" id="contact" aria-labelledby="contact-title">
    <div class="contact-panel glass-card" data-reveal>
        <div class="contact-glow" aria-hidden="true"></div>
        <div class="contact-main">
            <p class="eyebrow section-index"><span>04</span> Kontak</p>
            <h2 id="contact-title">Punya ide untuk <span class="gradient-text">dibicarakan?</span></h2>
            <p class="contact-copy"><?= e($portfolio['contact']['message']) ?></p>
            <?php if ($emailUrl !== ''): ?>
                <a class="button button-primary contact-cta" href="<?= e($emailUrl) ?>">Kirim email <span aria-hidden="true">↗</span></a>
            <?php elseif ($githubUrl !== ''): ?>
                <a class="button button-primary contact-cta" href="<?= e($githubUrl) ?>" target="_blank" rel="noopener noreferrer">Kunjungi GitHub <span aria-hidden="true">↗</span></a>
            <?php else: ?>
                <p class="contact-pending"><span aria-hidden="true">ⓘ</span> Kontak belum ditambahkan. Tautan akan muncul setelah konfigurasi diisi.</p>
            <?php endif; ?>
        </div>
        <div class="contact-list" aria-label="Tautan kontak">
            <div class="contact-item">
                <span class="contact-icon" aria-hidden="true">GH</span>
                <div><span class="contact-label">GitHub</span><?php if ($githubUrl !== ''): ?><a href="<?= e($githubUrl) ?>" target="_blank" rel="noopener noreferrer"><?= e(parse_url($githubUrl, PHP_URL_HOST) ?: 'Buka profil') ?> <span aria-hidden="true">↗</span></a><?php else: ?><span class="contact-unavailable">Belum ditambahkan</span><?php endif; ?></div>
                <?php if ($githubUrl === ''): ?><code class="contact-hint"><?= e($portfolio['contact']['github_placeholder']) ?></code><?php endif; ?>
            </div>
            <div class="contact-item">
                <span class="contact-icon" aria-hidden="true">@</span>
                <div><span class="contact-label">Email</span><?php if ($emailUrl !== ''): ?><a href="<?= e($emailUrl) ?>"><?= e($emailAddress) ?> <span aria-hidden="true">↗</span></a><?php else: ?><span class="contact-unavailable">Opsional · belum diisi</span><?php endif; ?></div>
            </div>
            <?php foreach (($portfolio['contact']['other_links'] ?? []) as $link): ?>
                <?php $otherUrl = safe_http_url($link['url'] ?? ''); if ($otherUrl === '') { continue; } ?>
                <div class="contact-item">
                    <span class="contact-icon" aria-hidden="true"><?= e($link['symbol'] ?? '↗') ?></span>
                    <div><span class="contact-label"><?= e($link['label'] ?? 'Tautan') ?></span><a href="<?= e($otherUrl) ?>" target="_blank" rel="noopener noreferrer"><?= e($link['display'] ?? parse_url($otherUrl, PHP_URL_HOST)) ?> <span aria-hidden="true">↗</span></a></div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
