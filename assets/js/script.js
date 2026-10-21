(() => {
    'use strict';

    document.documentElement.classList.add('js-ready');

    const loadingStartedAt = performance.now();
    const finishPageLoading = () => {
        const minimumDisplay = 650;
        const remainingTime = Math.max(0, minimumDisplay - (performance.now() - loadingStartedAt));
        window.setTimeout(() => document.documentElement.classList.remove('js-loading'), remainingTime);
    };
    if (document.readyState === 'complete') {
        finishPageLoading();
    } else {
        window.addEventListener('load', finishPageLoading, { once: true });
    }
    window.setTimeout(() => document.documentElement.classList.remove('js-loading'), 7000);

    const menuButton = document.querySelector('.menu-toggle');
    const navigation = document.querySelector('.site-nav');
    const navigationLinks = [...document.querySelectorAll('.site-nav .nav-link')];
    const topButton = document.querySelector('.top-button');
    const scrollProgress = document.querySelector('.scroll-progress');
    const reducedMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;
    const mobileNavigation = window.matchMedia('(max-width: 760px)');

    const setMenuOpen = (open) => {
        if (!menuButton || !navigation) return;
        const isOpen = mobileNavigation.matches && open;
        menuButton.setAttribute('aria-expanded', String(isOpen));
        menuButton.setAttribute('aria-label', isOpen ? 'Tutup menu navigasi' : 'Buka menu navigasi');
        navigation.classList.toggle('is-open', isOpen);
        navigation.inert = mobileNavigation.matches && !isOpen;
    };

    const closeMenu = () => setMenuOpen(false);

    if (menuButton && navigation) {
        setMenuOpen(false);
        menuButton.addEventListener('click', () => {
            const isOpen = menuButton.getAttribute('aria-expanded') === 'true';
            setMenuOpen(!isOpen);
        });

        navigationLinks.forEach((link) => link.addEventListener('click', closeMenu));
        document.addEventListener('keydown', (event) => {
            if (event.key === 'Escape' && menuButton.getAttribute('aria-expanded') === 'true') {
                closeMenu();
                menuButton.focus();
            }
        });
        document.addEventListener('click', (event) => {
            if (!navigation.contains(event.target) && !menuButton.contains(event.target)) closeMenu();
        });
        mobileNavigation.addEventListener('change', () => setMenuOpen(false));
    }

    document.querySelectorAll('img[data-fallback]').forEach((image) => {
        const useFallback = () => {
            if (image.dataset.fallback && image.dataset.fallbackUsed !== 'true') {
                image.dataset.fallbackUsed = 'true';
                image.src = image.dataset.fallback;
            }
        };
        image.addEventListener('error', useFallback);
        if (image.complete && image.naturalWidth === 0) useFallback();
    });

    const revealItems = document.querySelectorAll('[data-reveal]');
    if (reducedMotion || !('IntersectionObserver' in window)) {
        revealItems.forEach((item) => item.classList.add('is-visible'));
    } else {
        const revealObserver = new IntersectionObserver((entries, observer) => {
            entries.forEach((entry) => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('is-visible');
                    observer.unobserve(entry.target);
                }
            });
        }, { threshold: 0.08, rootMargin: '0px 0px -8% 0px' });
        revealItems.forEach((item) => revealObserver.observe(item));
    }

    const sections = [...document.querySelectorAll('main section[id]')];
    if ('IntersectionObserver' in window) {
        const sectionObserver = new IntersectionObserver((entries) => {
            entries.forEach((entry) => {
                if (!entry.isIntersecting) return;
                navigationLinks.forEach((link) => {
                    link.classList.toggle('is-active', link.getAttribute('href') === `#${entry.target.id}`);
                });
            });
        }, { rootMargin: '-30% 0px -60% 0px' });
        sections.forEach((section) => sectionObserver.observe(section));
    }

    const updateScrollState = () => {
        if (topButton) topButton.classList.toggle('is-visible', window.scrollY > 500);
        if (scrollProgress) {
            const scrollRange = document.documentElement.scrollHeight - window.innerHeight;
            const progress = scrollRange > 0 ? Math.min(Math.max(window.scrollY, 0) / scrollRange, 1) : 0;
            scrollProgress.style.setProperty('--scroll-progress', progress.toFixed(4));
        }
    };
    let scrollFrame = 0;
    const scheduleScrollUpdate = () => {
        if (scrollFrame) return;
        scrollFrame = window.requestAnimationFrame(() => {
            updateScrollState();
            scrollFrame = 0;
        });
    };
    window.addEventListener('scroll', scheduleScrollUpdate, { passive: true });
    window.addEventListener('resize', scheduleScrollUpdate, { passive: true });
    updateScrollState();
})();
