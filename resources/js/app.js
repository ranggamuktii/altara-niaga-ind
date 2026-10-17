/**
 * TradeCorp Landing Page Scripts
 * ─────────────────────────────────
 * Mobile menu, navbar scroll effect, smooth scroll, scroll animations.
 */

document.addEventListener('DOMContentLoaded', () => {

    // ── Mobile Menu Toggle ──────────────────────────────────────────────
    const mobileToggle = document.querySelector('[data-mobile-toggle]');
    const mobileMenu = document.querySelector('[data-mobile-menu]');

    if (mobileToggle && mobileMenu) {
        mobileToggle.addEventListener('click', () => {
            const isOpen = !mobileMenu.classList.contains('hidden');

            if (isOpen) {
                mobileMenu.classList.add('hidden');
                mobileToggle.setAttribute('aria-expanded', 'false');
            } else {
                mobileMenu.classList.remove('hidden');
                mobileToggle.setAttribute('aria-expanded', 'true');
            }
        });

        // Close mobile menu when a link inside it is clicked
        mobileMenu.querySelectorAll('a').forEach(link => {
            link.addEventListener('click', () => {
                mobileMenu.classList.add('hidden');
                mobileToggle.setAttribute('aria-expanded', 'false');
            });
        });
    }

    // ── Navbar Scroll Effect ────────────────────────────────────────────
    const navbar = document.querySelector('[data-navbar]');

    if (navbar) {
        const scrollClasses = ['border-neutral-700', 'bg-[#000000]/95', 'shadow-2xl'];

        const handleScroll = () => {
            if (window.scrollY > 30) {
                navbar.classList.add(...scrollClasses);
            } else {
                navbar.classList.remove(...scrollClasses);
            }
        };

        window.addEventListener('scroll', handleScroll, { passive: true });
        handleScroll(); // Run on load in case page is already scrolled
    }

    // ── Smooth Scroll for Anchor Links ──────────────────────────────────
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', (e) => {
            const targetId = anchor.getAttribute('href');

            if (targetId === '#') return;

            const targetElement = document.querySelector(targetId);

            if (targetElement) {
                e.preventDefault();
                targetElement.scrollIntoView({
                    behavior: 'smooth',
                    block: 'start',
                });
            }
        });
    });

    // ── Scroll-Triggered Fade-In Animation ──────────────────────────────
    const animatedElements = document.querySelectorAll('[data-animate]');

    if (animatedElements.length > 0) {
        // Set initial hidden state
        animatedElements.forEach(el => {
            el.style.opacity = '0';
            el.style.transform = 'translateY(24px)';
            el.style.transition = 'opacity 0.6s ease-out, transform 0.6s ease-out';
        });

        const observer = new IntersectionObserver(
            (entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.style.opacity = '1';
                        entry.target.style.transform = 'translateY(0)';
                        observer.unobserve(entry.target); // Animate only once
                    }
                });
            },
            {
                threshold: 0.15,
                rootMargin: '0px 0px -40px 0px',
            }
        );

        animatedElements.forEach(el => observer.observe(el));
    }

});
