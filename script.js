(function() {
    'use strict';

    const app = window.__app || {};

    class Utils {
        static debounce(func, wait) {
            let timeout;
            return function(...args) {
                clearTimeout(timeout);
                timeout = setTimeout(() => func.apply(this, args), wait);
            };
        }

        static throttle(func, limit) {
            let inThrottle;
            return function(...args) {
                if (!inThrottle) {
                    func.apply(this, args);
                    inThrottle = true;
                    setTimeout(() => inThrottle = false, limit);
                }
            };
        }
    }

    class BurgerMenu {
        constructor() {
            this.nav = document.querySelector('.navbar-nav');
            this.toggler = document.querySelector('.navbar-toggler');
            this.body = document.body;
            this.init();
        }

        init() {
            if (!this.nav || !this.toggler) return;
            this.createToggler();
            this.attachEvents();
        }

        createToggler() {
            if (!this.toggler.querySelector('.navbar-toggler-icon')) {
                this.toggler.innerHTML = `
                    <span class="navbar-toggler-icon">
                        <span></span>
                        <span></span>
                        <span></span>
                    </span>
                `;
            }
        }

        attachEvents() {
            this.toggler.addEventListener('click', () => this.toggle());
            
            document.addEventListener('keydown', (e) => {
                if (e.key === 'Escape' && this.isOpen()) this.close();
            });

            document.addEventListener('click', (e) => {
                if (this.isOpen() && !this.nav.contains(e.target) && !this.toggler.contains(e.target)) {
                    this.close();
                }
            });

            this.nav.querySelectorAll('.nav-link').forEach(link => {
                link.addEventListener('click', () => this.close());
            });

            window.addEventListener('resize', Utils.debounce(() => {
                if (window.innerWidth >= 768 && this.isOpen()) this.close();
            }, 250));
        }

        toggle() {
            this.isOpen() ? this.close() : this.open();
        }

        open() {
            this.nav.classList.add('show');
            this.toggler.classList.add('active');
            this.toggler.setAttribute('aria-expanded', 'true');
            this.body.classList.add('u-no-scroll');
        }

        close() {
            this.nav.classList.remove('show');
            this.toggler.classList.remove('active');
            this.toggler.setAttribute('aria-expanded', 'false');
            this.body.classList.remove('u-no-scroll');
        }

        isOpen() {
            return this.nav.classList.contains('show');
        }
    }

    class FormValidator {
        constructor() {
            this.patterns = {
                name: /^[a-zA-ZÀ-ÿs-']{2,50}$/,
                email: /^[^s@]+@[^s@]+.[^s@]+$/,
                phone: /^[+-ds()]{10,20}$/,
                message: /^.{10,}$/s
            };
            this.init();
        }

        init() {
            document.querySelectorAll('form').forEach(form => {
                form.addEventListener('submit', (e) => this.handleSubmit(e));
                
                form.querySelectorAll('input, textarea').forEach(field => {
                    field.addEventListener('blur', () => this.validateField(field));
                    field.addEventListener('input', () => this.clearError(field));
                });
            });
        }

        handleSubmit(e) {
            e.preventDefault();
            const form = e.target;
            const isValid = this.validateForm(form);

            if (isValid) {
                this.submitForm(form);
            }
        }

        validateForm(form) {
            let isValid = true;
            const fields = form.querySelectorAll('input:not([type="checkbox"]), textarea');

            fields.forEach(field => {
                if (!this.validateField(field)) {
                    isValid = false;
                }
            });

            const checkbox = form.querySelector('input[type="checkbox"][required]');
            if (checkbox && !checkbox.checked) {
                this.showError(checkbox, 'Bitte akzeptieren Sie die Datenschutzerklärung');
                isValid = false;
            }

            return isValid;
        }

        validateField(field) {
            const value = field.value.trim();
            const fieldName = field.name || field.id;
            const isRequired = field.hasAttribute('required');

            if (isRequired && !value) {
                this.showError(field, 'Dieses Feld ist erforderlich');
                return false;
            }

            if (!value) {
                this.clearError(field);
                return true;
            }

            if (fieldName.includes('name') || fieldName.includes('Name')) {
                if (!this.patterns.name.test(value)) {
                    this.showError(field, 'Bitte geben Sie einen gültigen Namen ein (2-50 Zeichen)');
                    return false;
                }
            }

            if (fieldName.includes('email') || fieldName.includes('Email')) {
                if (!this.patterns.email.test(value)) {
                    this.showError(field, 'Bitte geben Sie eine gültige E-Mail-Adresse ein');
                    return false;
                }
            }

            if (fieldName.includes('phone') || fieldName.includes('telefon')) {
                if (!this.patterns.phone.test(value)) {
                    this.showError(field, 'Bitte geben Sie eine gültige Telefonnummer ein');
                    return false;
                }
            }

            if (fieldName.includes('message') || fieldName.includes('nachricht')) {
                if (!this.patterns.message.test(value)) {
                    this.showError(field, 'Die Nachricht muss mindestens 10 Zeichen lang sein');
                    return false;
                }
            }

            this.clearError(field);
            return true;
        }

        showError(field, message) {
            const group = field.closest('.c-form__group') || field.parentElement;
            group.classList.add('error');

            let errorElement = group.querySelector('.c-form__error');
            if (!errorElement) {
                errorElement = document.createElement('span');
                errorElement.className = 'c-form__error';
                field.parentElement.appendChild(errorElement);
            }

            errorElement.textContent = message;
            errorElement.classList.add('visible');
        }

        clearError(field) {
            const group = field.closest('.c-form__group') || field.parentElement;
            group.classList.remove('error');

            const errorElement = group.querySelector('.c-form__error');
            if (errorElement) {
                errorElement.classList.remove('visible');
            }
        }

        submitForm(form) {
            const submitBtn = form.querySelector('button[type="submit"], input[type="submit"]');
            
            if (submitBtn) {
                submitBtn.disabled = true;
                const originalText = submitBtn.textContent;
                submitBtn.innerHTML = '<span style="display:inline-block;width:16px;height:16px;border:2px solid #fff;border-top-color:transparent;border-radius:50%;animation:spin 0.6s linear infinite;margin-right:8px;"></span>Wird gesendet...';
                
                const style = document.createElement('style');
                style.textContent = '@keyframes spin{to{transform:rotate(360deg)}}';
                document.head.appendChild(style);

                setTimeout(() => {
                    submitBtn.disabled = false;
                    submitBtn.textContent = originalText;
                    window.location.href = 'thank_you.html';
                }, 1500);
            } else {
                window.location.href = 'thank_you.html';
            }
        }
    }

    class ScrollAnimations {
        constructor() {
            this.observer = null;
            this.init();
        }

        init() {
            const options = {
                root: null,
                rootMargin: '0px 0px -100px 0px',
                threshold: 0.1
            };

            this.observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('animated');
                    }
                });
            }, options);

            this.observeElements();
        }

        observeElements() {
            const elements = document.querySelectorAll('.c-card, .c-flipcard, .c-button, h2, h3, p, img');
            elements.forEach(el => {
                el.style.opacity = '0';
                el.style.transform = 'translateY(30px)';
                el.style.transition = 'opacity 0.8s ease-out, transform 0.8s ease-out';
                this.observer.observe(el);
            });

            const style = document.createElement('style');
            style.textContent = '.animated{opacity:1!important;transform:translateY(0)!important}';
            document.head.appendChild(style);
        }
    }

    class RippleEffect {
        constructor() {
            this.init();
        }

        init() {
            document.querySelectorAll('.c-button, .nav-link, .c-card').forEach(element => {
                element.addEventListener('click', (e) => this.createRipple(e));
            });
        }

        createRipple(event) {
            const button = event.currentTarget;
            const ripple = document.createElement('span');
            const rect = button.getBoundingClientRect();
            const size = Math.max(rect.width, rect.height);
            const x = event.clientX - rect.left - size / 2;
            const y = event.clientY - rect.top - size / 2;

            ripple.style.cssText = `
                position: absolute;
                width: ${size}px;
                height: ${size}px;
                border-radius: 50%;
                background: rgba(255, 255, 255, 0.5);
                left: ${x}px;
                top: ${y}px;
                pointer-events: none;
                transform: scale(0);
                animation: ripple 0.6s ease-out;
            `;

            if (!document.querySelector('#ripple-style')) {
                const style = document.createElement('style');
                style.id = 'ripple-style';
                style.textContent = '@keyframes ripple{to{transform:scale(4);opacity:0}}';
                document.head.appendChild(style);
            }

            button.style.position = 'relative';
            button.style.overflow = 'hidden';
            button.appendChild(ripple);

            setTimeout(() => ripple.remove(), 600);
        }
    }

    class CountUp {
        constructor() {
            this.init();
        }

        init() {
            const counters = document.querySelectorAll('[data-count]');
            
            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting && !entry.target.classList.contains('counted')) {
                        this.animate(entry.target);
                        entry.target.classList.add('counted');
                    }
                });
            }, { threshold: 0.5 });

            counters.forEach(counter => observer.observe(counter));
        }

        animate(element) {
            const target = parseInt(element.getAttribute('data-count'));
            const duration = 2000;
            const step = target / (duration / 16);
            let current = 0;

            const updateCounter = () => {
                current += step;
                if (current < target) {
                    element.textContent = Math.floor(current);
                    requestAnimationFrame(updateCounter);
                } else {
                    element.textContent = target;
                }
            };

            updateCounter();
        }
    }

    class SmoothScroll {
        constructor() {
            this.init();
        }

        init() {
            document.querySelectorAll('a[href^="#"]').forEach(anchor => {
                anchor.addEventListener('click', (e) => {
                    const href = anchor.getAttribute('href');
                    if (href === '#' || href.startsWith('#!')) return;

                    e.preventDefault();
                    const target = document.querySelector(href);
                    
                    if (target) {
                        const headerHeight = document.querySelector('.l-header, .navbar')?.offsetHeight || 72;
                        const targetPosition = target.offsetTop - headerHeight;
                        
                        window.scrollTo({
                            top: targetPosition,
                            behavior: 'smooth'
                        });
                    }
                });
            });
        }
    }

    class ScrollSpy {
        constructor() {
            this.sections = [];
            this.init();
        }

        init() {
            const navLinks = document.querySelectorAll('.nav-link[href^="#"]');
            navLinks.forEach(link => {
                const href = link.getAttribute('href');
                if (href && href !== '#') {
                    const section = document.querySelector(href);
                    if (section) {
                        this.sections.push({ link, section });
                    }
                }
            });

            if (this.sections.length > 0) {
                window.addEventListener('scroll', Utils.throttle(() => this.update(), 100));
                this.update();
            }
        }

        update() {
            const scrollPos = window.scrollY + 100;

            this.sections.forEach(({ link, section }) => {
                const sectionTop = section.offsetTop;
                const sectionBottom = sectionTop + section.offsetHeight;

                if (scrollPos >= sectionTop && scrollPos < sectionBottom) {
                    document.querySelectorAll('.nav-link').forEach(l => {
                        l.classList.remove('active');
                        l.removeAttribute('aria-current');
                    });
                    link.classList.add('active');
                    link.setAttribute('aria-current', 'page');
                }
            });
        }
    }

    class ScrollToTop {
        constructor() {
            this.button = null;
            this.init();
        }

        init() {
            this.createButton();
            window.addEventListener('scroll', Utils.throttle(() => this.toggle(), 200));
        }

        createButton() {
            this.button = document.createElement('button');
            this.button.innerHTML = '↑';
            this.button.style.cssText = `
                position: fixed;
                bottom: 30px;
                right: 30px;
                width: 50px;
                height: 50px;
                border-radius: 50%;
                background: var(--glow-gradient);
                color: white;
                border: none;
                font-size: 24px;
                cursor: pointer;
                opacity: 0;
                transform: scale(0);
                transition: all 0.3s ease-out;
                box-shadow: var(--shadow-lg);
                z-index: 999;
            `;

            this.button.addEventListener('click', () => {
                window.scrollTo({ top: 0, behavior: 'smooth' });
            });

            document.body.appendChild(this.button);
        }

        toggle() {
            if (window.scrollY > 300) {
                this.button.style.opacity = '1';
                this.button.style.transform = 'scale(1)';
            } else {
                this.button.style.opacity = '0';
                this.button.style.transform = 'scale(0)';
            }
        }
    }

    class LazyLoading {
        constructor() {
            this.init();
        }

        init() {
            document.querySelectorAll('img, video').forEach(media => {
                if (!media.hasAttribute('loading') && !media.classList.contains('c-logo__img')) {
                    media.setAttribute('loading', 'lazy');
                }
            });
        }
    }

    class CardAnimations {
        constructor() {
            this.init();
        }

        init() {
            document.querySelectorAll('.c-card, .c-flipcard').forEach(card => {
                card.addEventListener('mouseenter', (e) => {
                    e.currentTarget.style.transform = 'translateY(-8px)';
                    e.currentTarget.style.boxShadow = 'var(--shadow-lg)';
                });

                card.addEventListener('mouseleave', (e) => {
                    if (!e.currentTarget.classList.contains('c-flipcard')) {
                        e.currentTarget.style.transform = 'translateY(0)';
                        e.currentTarget.style.boxShadow = 'var(--shadow-sm)';
                    }
                });
            });
        }
    }

    class AppInitializer {
        static init() {
            if (app.initialized) return;
            app.initialized = true;

            new BurgerMenu();
            new FormValidator();
            new ScrollAnimations();
            new RippleEffect();
            new CountUp();
            new SmoothScroll();
            new ScrollSpy();
            new ScrollToTop();
            new LazyLoading();
            new CardAnimations();
        }
    }

    if (document.readyState === 'loading') {
        document.addEventListener('DOMContentLoaded', () => AppInitializer.init());
    } else {
        AppInitializer.init();
    }

    window.__app = app;

})();
# CSS Additions

.u-no-scroll {
  overflow: hidden;
}

@media (max-width: 767px) {
  .navbar-nav {
    height: calc(100vh - var(--nav-h));
  }
}

.c-form__group.error .c-form__input,
.c-form__group.error .c-form__textarea {
  border-color: #dc2626;
  animation: shake 0.4s ease-in-out;
}

@keyframes shake {
  0%, 100% { transform: translateX(0); }
  25% { transform: translateX(-10px); }
  75% { transform: translateX(10px); }
}
