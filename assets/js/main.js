/**
 * Solux Energy - Main JavaScript
 *
 * @package Solux_Energy
 */

(function () {
    'use strict';

    // DOM Elements
    const header = document.getElementById('site-header');
    const mobileMenuToggle = document.getElementById('mobile-menu-toggle');
    const mobileMenu = document.getElementById('mobile-menu');
    const leadForm = document.getElementById('lead-form');
    const notification = document.getElementById('notification');

    /**
     * Header Scroll Effect
     */
    function handleHeaderScroll() {
        if (!header) return;

        const scrolled = window.scrollY > 50;
        header.classList.toggle('scrolled', scrolled);
    }

    /**
     * Mobile Menu Toggle
     */
    function toggleMobileMenu() {
        if (!mobileMenu || !mobileMenuToggle) return;

        const isOpen = mobileMenu.classList.contains('active');
        mobileMenu.classList.toggle('active');
        mobileMenuToggle.setAttribute('aria-expanded', !isOpen);

        // Toggle body scroll
        document.body.style.overflow = isOpen ? '' : 'hidden';
    }

    /**
     * Close Mobile Menu on Link Click
     */
    function closeMobileMenuOnLinkClick() {
        if (!mobileMenu) return;

        const links = mobileMenu.querySelectorAll('a');
        links.forEach(link => {
            link.addEventListener('click', () => {
                mobileMenu.classList.remove('active');
                document.body.style.overflow = '';
            });
        });
    }

    /**
     * Smooth Scroll for Anchor Links
     */
    function initSmoothScroll() {
        const anchorLinks = document.querySelectorAll('a[href^="#"]');

        anchorLinks.forEach(link => {
            link.addEventListener('click', function (e) {
                const targetId = this.getAttribute('href');
                if (targetId === '#') return;

                const target = document.querySelector(targetId);
                if (!target) return;

                e.preventDefault();

                const headerHeight = header ? header.offsetHeight : 0;
                const targetPosition = target.getBoundingClientRect().top + window.pageYOffset - headerHeight;

                window.scrollTo({
                    top: targetPosition,
                    behavior: 'smooth'
                });
            });
        });
    }

    /**
     * Scroll Reveal Animation
     */
    function initScrollReveal() {
        const elements = document.querySelectorAll('.fade-in, .fade-in-left, .fade-in-right');

        if (!elements.length) return;

        const observerOptions = {
            root: null,
            rootMargin: '0px',
            threshold: 0.1
        };

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('visible');
                    observer.unobserve(entry.target);
                }
            });
        }, observerOptions);

        elements.forEach(el => observer.observe(el));
    }

    /**
     * Show Notification
     */
    function showNotification(message, type = 'success') {
        if (!notification) return;

        notification.textContent = message;
        notification.className = 'notification show';
        if (type === 'error') {
            notification.classList.add('error');
        }

        setTimeout(() => {
            notification.classList.remove('show');
        }, 5000);
    }

    /**
     * Handle Lead Form Submission
     */
    function handleLeadFormSubmit(e) {
        e.preventDefault();

        const form = e.target;
        const submitBtn = form.querySelector('button[type="submit"]');
        const originalText = submitBtn.innerHTML;

        // Disable button and show loading
        submitBtn.disabled = true;
        submitBtn.innerHTML = `
            <svg class="animate-spin" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                <path d="M21 12a9 9 0 1 1-6.219-8.56"/>
            </svg>
            Enviando...
        `;

        // Collect form data
        const formData = new FormData(form);
        formData.append('action', 'solux_submit_lead');
        formData.append('nonce', soluxAjax.nonce);

        // Send AJAX request
        fetch(soluxAjax.ajaxurl, {
            method: 'POST',
            body: formData
        })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    showNotification(data.data.message, 'success');
                    form.reset();

                    // Optional: Track conversion
                    if (typeof gtag === 'function') {
                        gtag('event', 'generate_lead', {
                            event_category: 'engagement',
                            event_label: 'Lead Form Submission'
                        });
                    }
                } else {
                    showNotification(data.data.message || 'Erro ao enviar. Tente novamente.', 'error');
                }
            })
            .catch(error => {
                console.error('Error:', error);
                showNotification('Erro de conexão. Tente novamente.', 'error');
            })
            .finally(() => {
                submitBtn.disabled = false;
                submitBtn.innerHTML = originalText;
            });
    }

    /**
     * Phone Input Mask
     */
    function initPhoneMask() {
        const phoneInput = document.getElementById('phone');
        if (!phoneInput) return;

        phoneInput.addEventListener('input', function (e) {
            let value = e.target.value.replace(/\D/g, '');

            if (value.length > 11) {
                value = value.slice(0, 11);
            }

            if (value.length > 2) {
                value = `(${value.slice(0, 2)}) ${value.slice(2)}`;
            }
            if (value.length > 10) {
                value = `${value.slice(0, 10)}-${value.slice(10)}`;
            }

            e.target.value = value;
        });
    }

    /**
     * Initialize
     */
    function init() {
        // Header scroll effect
        window.addEventListener('scroll', handleHeaderScroll, { passive: true });
        handleHeaderScroll(); // Check initial state

        // Mobile menu
        if (mobileMenuToggle) {
            mobileMenuToggle.addEventListener('click', toggleMobileMenu);
        }
        closeMobileMenuOnLinkClick();

        // Smooth scroll
        initSmoothScroll();

        // Scroll reveal
        initScrollReveal();

        // Lead form
        if (leadForm) {
            leadForm.addEventListener('submit', handleLeadFormSubmit);
        }

        // Phone mask
        initPhoneMask();
    }

    // Run on DOM ready
    if (document.readyState === 'loading') {
        document.addEventListener('DOMContentLoaded', init);
    } else {
        init();
    }

})();
