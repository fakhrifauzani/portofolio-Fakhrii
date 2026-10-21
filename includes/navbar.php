<header class="site-header">
    <div class="nav-shell">
        <a class="brand" href="#home" aria-label="<?= e($portfolio['site']['name']) ?> — ke beranda">
            <span class="brand-mark"><?= e($portfolio['site']['initials']) ?></span>
            <span class="brand-name">Fakhri<span class="brand-dot">.</span></span>
        </a>

        <button class="menu-toggle" type="button" aria-label="Buka menu navigasi" aria-expanded="false" aria-controls="primary-navigation">
            <span></span><span></span>
        </button>

        <nav class="site-nav" id="primary-navigation" aria-label="Navigasi utama">
            <a class="nav-link is-active" href="#home">Home</a>
            <a class="nav-link" href="#about">About</a>
            <a class="nav-link" href="#skills">Skills</a>
            <a class="nav-link" href="#projects">Projects</a>
            <a class="nav-link nav-contact" href="#contact">Contact <span aria-hidden="true">↗</span></a>
        </nav>
    </div>
</header>
