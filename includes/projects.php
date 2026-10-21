<section class="section section-wrap projects-section" id="projects" aria-labelledby="projects-title">
    <div class="section-heading section-heading-row" data-reveal>
        <div>
            <p class="eyebrow section-index"><span>03</span> Proyek</p>
            <h2 id="projects-title">Belajar dengan <span class="gradient-text">membangun.</span></h2>
        </div>
        <p class="section-intro"><?= e($portfolio['projects']['section_intro']) ?></p>
    </div>

    <div class="projects-grid">
        <?php foreach ($portfolio['projects']['items'] as $index => $project): ?>
            <?php
            $fallbackCandidate = $project['image_fallback'] ?? '';
            $fallback = is_string($fallbackCandidate)
                && preg_match('~^assets/images/[A-Za-z0-9._-]+\.svg$~D', $fallbackCandidate) === 1
                && is_file(__DIR__ . '/../' . $fallbackCandidate)
                    ? $fallbackCandidate
                    : 'assets/images/project-portfolio.svg';
            $remoteImage = safe_http_url($project['image_url'] ?? '');
            $localImage = safe_local_image($project['image_url'] ?? '');
            $imageSource = $remoteImage !== '' ? $remoteImage : ($localImage !== '' ? $localImage : $fallback);
            $imageFallbackAttribute = $imageSource !== $fallback ? ' data-fallback="' . e($fallback) . '"' : '';
            $isScreenshot = ($project['image_fit'] ?? '') === 'contain';
            ?>
            <article class="project-card glass-card<?= $isScreenshot ? ' project-card--screenshot' : '' ?>" data-reveal style="--card-index: <?= (int) $index ?>">
                <div class="project-image-wrap">
                    <img class="project-image" src="<?= e($imageSource) ?>" alt="<?= e($project['image_alt']) ?>" width="720" height="460" loading="lazy"<?= $imageFallbackAttribute ?>>
                    <span class="project-image-shade"></span>
                    <span class="project-category"><?= e($project['category']) ?></span>
                </div>
                <div class="project-body">
                    <div class="project-heading"><h3><?= e($project['title']) ?></h3></div>
                    <p class="project-description"><?= e($project['description']) ?></p>
                    <div class="project-tags" aria-label="Teknologi yang digunakan">
                        <?php foreach ($project['technologies'] as $technology): ?><span><?= e($technology) ?></span><?php endforeach; ?>
                    </div>
                    <div class="project-footer">
                        <span class="project-status"><i></i><?= e($project['status']) ?></span>
                    </div>
                </div>
            </article>
        <?php endforeach; ?>
    </div>
</section>
