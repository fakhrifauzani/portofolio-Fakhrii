<section class="section section-wrap about-section" id="about" aria-labelledby="about-title">
    <div class="section-heading" data-reveal>
        <p class="eyebrow section-index"><span>01</span> Tentang Saya</p>
        <h2 id="about-title"><?= e($portfolio['site']['about']['heading']) ?></h2>
    </div>

    <div class="about-grid">
        <div class="about-copy" data-reveal>
            <?php foreach ($portfolio['site']['about']['paragraphs'] as $paragraph): ?>
                <p><?= e($paragraph) ?></p>
            <?php endforeach; ?>
            <a class="text-link" href="#contact">Mari terhubung <span aria-hidden="true">↗</span></a>
        </div>
        <aside class="about-note glass-card" data-reveal aria-label="Ringkasan profil">
            <div class="note-mark" aria-hidden="true">✳</div>
            <p class="note-label">SAAT INI</p>
            <h3>Menjelajahi dunia digital, satu langkah setiap hari.</h3>
            <div class="note-divider"></div>
            <p class="note-foot"><span class="status-dot"></span><?= e($portfolio['site']['grade']) ?> · <?= e($portfolio['site']['school']) ?></p>
        </aside>
    </div>
</section>
