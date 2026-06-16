/* ============================================================
   JR SERVICES SpA — JavaScript principal
   Funciones: navbar scroll, menú mobile, reveal animations,
              formulario de contacto
   ============================================================ */

(function () {
    'use strict';

    /* ── Navbar: sombra al hacer scroll ── */
    const navbar = document.getElementById('navbar');
    const handleScroll = () => {
        navbar.classList.toggle('scrolled', window.scrollY > 40);

        // Resaltar enlace activo según sección visible
        const sections = document.querySelectorAll('section[id]');
        const scrollY = window.scrollY + 100;
        sections.forEach(section => {
            const link = navbar.querySelector(`a[href="#${section.id}"]`);
            if (!link) return;
            const top    = section.offsetTop;
            const bottom = top + section.offsetHeight;
            link.classList.toggle('active', scrollY >= top && scrollY < bottom);
        });
    };
    window.addEventListener('scroll', handleScroll, { passive: true });


    /* ── Menú hamburguesa (mobile) ── */
    const hamburger = document.getElementById('hamburger');
    const mainNav   = document.getElementById('main-nav');

    hamburger.addEventListener('click', () => {
        const open = mainNav.classList.toggle('open');
        hamburger.setAttribute('aria-expanded', open);
        // Animar barras
        const [b1, b2, b3] = hamburger.querySelectorAll('span');
        if (open) {
            b1.style.transform = 'translateY(7px) rotate(45deg)';
            b2.style.opacity   = '0';
            b3.style.transform = 'translateY(-7px) rotate(-45deg)';
        } else {
            b1.style.transform = '';
            b2.style.opacity   = '';
            b3.style.transform = '';
        }
    });

    // Cerrar al hacer clic en un enlace
    mainNav.querySelectorAll('a').forEach(link => {
        link.addEventListener('click', () => {
            mainNav.classList.remove('open');
            hamburger.setAttribute('aria-expanded', 'false');
            const [b1, b2, b3] = hamburger.querySelectorAll('span');
            b1.style.transform = b2.style.opacity = b3.style.transform = '';
            b2.style.opacity = '';
        });
    });


    /* ── Reveal al scroll (Intersection Observer) ── */
    const revealTargets = document.querySelectorAll(
        '.vm-card, .producto-card, .seguridad-item, .nuevo-card, ' +
        '.alianza-card, .marca-card, .zona-card, .section-title, ' +
        '.cobertura-intro, .integrales-text, .integrales-visual'
    );

    revealTargets.forEach(el => el.setAttribute('data-reveal', ''));

    const observer = new IntersectionObserver((entries) => {
        entries.forEach((entry, i) => {
            if (entry.isIntersecting) {
                // Pequeño delay escalonado para elementos en la misma fila
                const delay = (Array.from(entry.target.parentElement.children).indexOf(entry.target) % 4) * 80;
                setTimeout(() => entry.target.classList.add('revealed'), delay);
                observer.unobserve(entry.target);
            }
        });
    }, { threshold: 0.12 });

    revealTargets.forEach(el => observer.observe(el));


    /* ── Formulario de contacto ── */
    const form    = document.getElementById('contacto-form');
    const notice  = document.getElementById('form-notice');

    if (form) {
        form.addEventListener('submit', (e) => {
            e.preventDefault();
            notice.className = 'form-notice';
            notice.textContent = '';

            const nombre  = form.nombre.value.trim();
            const email   = form.email.value.trim();
            const mensaje = form.mensaje.value.trim();

            if (!nombre || !email || !mensaje) {
                notice.classList.add('error');
                notice.textContent = 'Por favor completa todos los campos requeridos.';
                return;
            }
            if (!/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email)) {
                notice.classList.add('error');
                notice.textContent = 'Por favor ingresa un email válido.';
                return;
            }

            // Simulación de envío (aquí iría el fetch a send_mail.php)
            const btn = form.querySelector('button[type="submit"]');
            btn.disabled = true;
            btn.textContent = 'Enviando…';

            setTimeout(() => {
                notice.classList.add('success');
                notice.textContent = '✓ ¡Mensaje enviado! Te contactaremos pronto.';
                form.reset();
                btn.disabled = false;
                btn.textContent = 'Enviar mensaje';
            }, 1200);
        });
    }

})();
