<?php
declare(strict_types=1);

require_once __DIR__ . '/includes/helpers.php';
$portfolio = require __DIR__ . '/config/portfolio.php';
?><!doctype html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="<?= e($portfolio['site']['meta_description']) ?>">
    <meta name="theme-color" content="#f4f7fc" media="(prefers-color-scheme: light)">
    <meta name="theme-color" content="#080c18" media="(prefers-color-scheme: dark)">
    <title><?= e($portfolio['site']['title']) ?></title>
    <script>document.documentElement.classList.add('js-loading');</script>
    <link rel="icon" href="assets/images/favicon.svg" type="image/svg+xml">
    <link rel="stylesheet" href="assets/css/style.css">
    <script src="assets/js/script.js" defer></script>
</head>
<body>
    <div class="scroll-progress" aria-hidden="true"><span></span></div>
    <div class="page-loader" role="status" aria-live="polite" aria-label="Memuat portofolio">
        <div class="page-loader-content">
            <span class="loader-mark">FFR</span>
            <span class="loader-spinner" aria-hidden="true"></span>
            <p class="loader-label">Menyiapkan portofolio...</p>
        </div>
    </div>
    <a class="skip-link" href="#main-content">Lewati ke konten utama</a>
    <?php require __DIR__ . '/includes/navbar.php'; ?>

    <main id="main-content">
        <?php require __DIR__ . '/includes/hero.php'; ?>
        <?php require __DIR__ . '/includes/about.php'; ?>
        <?php require __DIR__ . '/includes/skills.php'; ?>
        <?php require __DIR__ . '/includes/projects.php'; ?>
        <?php require __DIR__ . '/includes/contact.php'; ?>
    </main>

    <?php require __DIR__ . '/includes/footer.php'; ?>
</body>
</html>
