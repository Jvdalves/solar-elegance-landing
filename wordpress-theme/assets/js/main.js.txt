/**
 * Solux Energy Theme - Main JavaScript
 * 
 * @package Solux_Energy
 */

(function() {
    'use strict';

    // ========================================
    // Header Scroll Effect
    // ========================================
    const header = document.getElementById('site-header');
    
    function handleHeaderScroll() {
        if (window.scrollY > 50) {
            header.classList.add('scrolled');
        } else {
            header.classList.remove('scrolled');
        }
    }

    window.addEventListener('scroll', handleHeaderScroll);
    handleHeaderScroll(); // Initial check

    // ========================================
    // Mobile Menu Toggle
    // ========================================
    const mobileMenuToggle = document.getElementById('mobile-menu-toggle');
    const mobileMenu = document.getElementById('mobile-menu');

    if (mobileMenuToggle && mobileMenu) {
        mobileMenuToggle.addEventListener('click', function() {
            mobileMenu.classList.toggle('active');
            document.body.classList.toggle('menu-open');
            
            // Update aria-expanded
            const isExpanded = mobileMenu.classList.contains('active');
            mobileMenuToggle.setAttribute('aria-expanded', isExpanded);
        });

        // Close menu when clicking on links
        mobileMenu.querySelectorAll('a').forEach(function(link) {
            link.addEventListener('click', function() {
                mobileMenu.classList.remove('active');
                document.body.classList.remove('menu-open');
            });
        });
    }

    // ========================================
    // Smooth Scroll for Anchor Links
    // ========================================
    document.querySelectorAll('a[href^="#"]').forEach(function(anchor) {
        anchor.addEventListener('click', function(e) {
            const targetId = this.getAttribute('href');
            
            if (targetId === '#') return;
            
            const target = document.querySelector(targetId);
            
            if (target) {
                e.preventDefault();
                const headerHeight = header.offsetHeight;
                const targetPosition = target.getBoundingClientRect().top + window.pageYOffset - headerHeight;
                
                window.scrollTo({
                    top: targetPosition,
                    behavior: 'smooth'
                });
            }
        });
    });

    // ========================================
    // Scroll Reveal Animation
    // ========================================
    const revealElements = document.querySelectorAll('.reveal');
    
    function revealOnScroll() {
        const windowHeight = window.innerHeight;
        
        revealElements.forEach(function(element) {
            const elementTop = element.getBoundingClientRect().top;
            const revealPoint = 150;
            
            if (elementTop < windowHeight - revealPoint) {
                element.classList.add('active');
            }
        });
    }

    window.addEventListener('scroll', revealOnScroll);
    revealOnScroll(); // Initial check

    // ========================================
    // Lead Form Submission (AJAX)
    // ========================================
    const leadForms = document.querySelectorAll('.lead-form');

    leadForms.forEach(function(form) {
        form.addEventListener('submit', function(e) {
            e.preventDefault();
            
            const submitButton = form.querySelector('button[type="submit"]');
            const originalText = submitButton.innerHTML;
            
            // Show loading state
            submitButton.disabled = true;
            submitButton.innerHTML = '<span>Enviando...</span>';
            
            // Get form data
            const formData = new FormData(form);
            formData.append('action', 'solux_lead_form');
            formData.append('nonce', soluxAjax.nonce);
            
            // Send AJAX request
            fetch(soluxAjax.ajaxurl, {
                method: 'POST',
                body: formData,
                credentials: 'same-origin'
            })
            .then(function(response) {
                return response.json();
            })
            .then(function(data) {
                if (data.success) {
                    // Success - show message and reset form
                    showNotification(data.data.message, 'success');
                    form.reset();
                } else {
                    // Error - show message
                    showNotification(data.data.message || 'Erro ao enviar. Tente novamente.', 'error');
                }
            })
            .catch(function(error) {
                console.error('Form submission error:', error);
                showNotification('Erro de conexão. Tente novamente.', 'error');
            })
            .finally(function() {
                // Reset button state
                submitButton.disabled = false;
                submitButton.innerHTML = originalText;
            });
        });
    });

    // ========================================
    // Notification System
    // ========================================
    function showNotification(message, type) {
        // Remove existing notifications
        const existingNotification = document.querySelector('.solux-notification');
        if (existingNotification) {
            existingNotification.remove();
        }
        
        // Create notification element
        const notification = document.createElement('div');
        notification.className = 'solux-notification ' + type;
        notification.innerHTML = `
            <span>${message}</span>
            <button class="notification-close" aria-label="Fechar">&times;</button>
        `;
        
        // Add styles
        notification.style.cssText = `
            position: fixed;
            top: 100px;
            right: 20px;
            padding: 1rem 1.5rem;
            border-radius: 8px;
            display: flex;
            align-items: center;
            gap: 1rem;
            z-index: 9999;
            animation: slideIn 0.3s ease-out;
            max-width: 400px;
            box-shadow: 0 10px 40px rgba(0,0,0,0.3);
        `;
        
        if (type === 'success') {
            notification.style.background = 'hsl(142, 76%, 36%)';
            notification.style.color = 'white';
        } else {
            notification.style.background = 'hsl(0, 84%, 60%)';
            notification.style.color = 'white';
        }
        
        document.body.appendChild(notification);
        
        // Close button handler
        notification.querySelector('.notification-close').addEventListener('click', function() {
            notification.remove();
        });
        
        // Auto-remove after 5 seconds
        setTimeout(function() {
            if (notification.parentNode) {
                notification.style.animation = 'slideOut 0.3s ease-out';
                setTimeout(function() {
                    notification.remove();
                }, 300);
            }
        }, 5000);
    }

    // ========================================
    // Phone Input Mask
    // ========================================
    const phoneInputs = document.querySelectorAll('input[type="tel"]');
    
    phoneInputs.forEach(function(input) {
        input.addEventListener('input', function(e) {
            let value = e.target.value.replace(/\D/g, '');
            
            if (value.length <= 11) {
                if (value.length > 2) {
                    value = '(' + value.substring(0, 2) + ') ' + value.substring(2);
                }
                if (value.length > 10) {
                    value = value.substring(0, 10) + '-' + value.substring(10);
                }
            }
            
            e.target.value = value;
        });
    });

    // ========================================
    // Testimonial Video Modal (Placeholder)
    // ========================================
    const testimonialCards = document.querySelectorAll('.testimonial-card');
    
    testimonialCards.forEach(function(card) {
        card.addEventListener('click', function() {
            // Placeholder - integrate with video modal or redirect to video
            console.log('Testimonial clicked - integrate video modal here');
        });
    });

    // ========================================
    // Add CSS Keyframes for Notifications
    // ========================================
    const style = document.createElement('style');
    style.textContent = `
        @keyframes slideIn {
            from {
                opacity: 0;
                transform: translateX(100px);
            }
            to {
                opacity: 1;
                transform: translateX(0);
            }
        }
        
        @keyframes slideOut {
            from {
                opacity: 1;
                transform: translateX(0);
            }
            to {
                opacity: 0;
                transform: translateX(100px);
            }
        }
        
        .notification-close {
            background: transparent;
            border: none;
            color: inherit;
            font-size: 1.5rem;
            cursor: pointer;
            line-height: 1;
            opacity: 0.8;
        }
        
        .notification-close:hover {
            opacity: 1;
        }
        
        /* Mobile Menu Styles */
        .mobile-menu {
            position: fixed;
            top: 80px;
            left: 0;
            right: 0;
            bottom: 0;
            background: hsl(160, 84%, 8%);
            z-index: 999;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            transform: translateX(-100%);
            transition: transform 0.3s ease-out;
        }
        
        .mobile-menu.active {
            transform: translateX(0);
        }
        
        .mobile-menu-content {
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 2rem;
        }
        
        .mobile-nav {
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 1.5rem;
        }
        
        .mobile-nav a {
            font-size: 1.25rem;
            color: hsl(210, 40%, 98%);
            font-weight: 500;
        }
        
        body.menu-open {
            overflow: hidden;
        }
    `;
    document.head.appendChild(style);

})();
