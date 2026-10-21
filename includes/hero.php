<?php
$profilePath = __DIR__ . '/../assets/images/profile.jpg';
$profileImage = is_file($profilePath) ? 'assets/images/profile.jpg' : 'assets/images/profile-placeholder.svg';
?>
<section class="hero section-wrap" id="home" aria-labelledby="hero-title">
    <div class="hero-copy" data-reveal>
        <p class="eyebrow"><span class="status-dot"></span> <?= e($portfolio['site']['role']) ?></p>
        <h1 id="hero-title">Halo, saya <span class="gradient-text"><?= e($portfolio['site']['name']) ?></span><span class="hero-period">.</span></h1>
        <p class="hero-lead"><?= e($portfolio['site']['hero_description']) ?></p>
        <div class="hero-actions">
            <a class="button button-primary" href="#projects">Lihat Proyek <span aria-hidden="true">↘</span></a>
            <a class="button button-quiet" href="#contact"><span class="button-icon" aria-hidden="true">↗</span> Hubungi Saya</a>
        </div>
        <div class="hero-meta">
            <span><span class="meta-icon" aria-hidden="true">⌖</span> <?= e($portfolio['site']['grade']) ?> · <?= e($portfolio['site']['school']) ?></span>
            <span class="meta-divider" aria-hidden="true"></span>
            <span>Terus belajar, terus berkarya</span>
        </div>
    </div>

    <div class="hero-art" data-reveal aria-label="Kartu profil dan ilustrasi kode">
        <div class="art-orbit orbit-one"></div>
        <div class="art-orbit orbit-two"></div>
        <div class="portrait-card glass-card">
            <div class="portrait-topline"><span>PROFIL</span><span class="portrait-live"><i></i> ONLINE</span></div>
            <div class="portrait-frame">
                <img src="<?= e($profileImage) ?>" alt="Gambar profil Fakhri Fauzani Rahman" width="360" height="420" data-fallback="assets/images/profile-placeholder.svg">
                <span class="portrait-scanline"></span>
            </div>
            <div class="portrait-caption">
                <div><strong><?= e($portfolio['site']['name']) ?></strong><span><?= e($portfolio['site']['grade']) ?> · <?= e($portfolio['site']['school']) ?></span></div>
                <span class="portrait-arrow" aria-hidden="true">↗</span>
            </div>
        </div>
        <div class="code-card glass-card" aria-hidden="true">
            <div class="code-top"><span class="code-dot dot-red"></span><span class="code-dot dot-yellow"></span><span class="code-dot dot-green"></span><span class="code-file">fakhri.php</span></div>
            <div class="code-lines"><p><span class="code-purple">const</span> <span class="code-blue">future</span> = {</p><p class="code-indent"><span class="code-cyan">curiosity</span>: <span class="code-green">true</span>,</p><p class="code-indent"><span class="code-cyan">learning</span>: <span class="code-green">"always"</span>,</p><p>};<span class="code-caret"></span></p></div>
        </div>
        <div class="floating-tag tag-code"><span>&lt;/&gt;</span> Web Development</div>
        <div class="floating-tag tag-audio"><span>∿</span> Audio</div>
    </div>

    <a class="scroll-cue" href="#about"><span class="scroll-line"></span> Scroll untuk mengenal saya</a>
</section>
