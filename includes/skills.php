<section class="section section-wrap skills-section" id="skills" aria-labelledby="skills-title">
    <div class="section-heading section-heading-row" data-reveal>
        <div>
            <p class="eyebrow section-index"><span>02</span> Skills &amp; Minat</p>
            <h2 id="skills-title">Hal yang sedang saya <span class="gradient-text">kembangkan.</span></h2>
        </div>
        <p class="section-intro"><?= e($portfolio['skills']['section_intro']) ?></p>
    </div>

    <div class="skills-grid">
        <?php foreach ($portfolio['skills']['items'] as $index => $skill): ?>
            <article class="skill-card glass-card" data-reveal style="--card-index: <?= (int) $index ?>">
                <div class="skill-top"><span class="skill-symbol" aria-hidden="true"><?= skill_icon_svg($skill['icon'] ?? '') ?></span><span class="skill-number">0<?= (int) ($index + 1) ?></span></div>
                <h3><?= e($skill['name']) ?></h3>
                <p><?= e($skill['description']) ?></p>
                <span class="skill-state"><i></i> Sedang dipelajari</span>
            </article>
        <?php endforeach; ?>
    </div>
</section>
