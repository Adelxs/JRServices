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
        '.cobertura-intro, .integrales-brand, .integrales-text__desc, .integrales-visual'
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


    /* ── Modales: Servicios Principales ── */
    const productoCards = document.querySelectorAll('.producto-card');
    const productoModal = document.getElementById('producto-modal');

    if (productoCards.length && productoModal) {
        const pModalIcono = document.getElementById('producto-modal-icono');
        const pModalTitle = document.getElementById('producto-modal-title');
        const pModalDesc  = document.getElementById('producto-modal-desc');
        const pModalClose = document.getElementById('producto-modal-close');
        const pModalCta   = document.getElementById('producto-modal-cta');
        let pLastFocused  = null;

        const abrirProductoModal = (card) => {
            pModalIcono.textContent = card.dataset.icono || '';
            pModalTitle.textContent = card.dataset.titulo || '';
            pModalDesc.textContent  = card.dataset.desc || '';
            pLastFocused = document.activeElement;
            productoModal.classList.add('open');
            productoModal.setAttribute('aria-hidden', 'false');
            document.body.classList.add('modal-open');
            pModalClose.focus();
        };

        const cerrarProductoModal = () => {
            productoModal.classList.remove('open');
            productoModal.setAttribute('aria-hidden', 'true');
            document.body.classList.remove('modal-open');
            if (pLastFocused) pLastFocused.focus();
        };

        productoCards.forEach(card => {
            card.addEventListener('click', () => abrirProductoModal(card));
            card.addEventListener('keydown', (e) => {
                if (e.key === 'Enter' || e.key === ' ') { e.preventDefault(); abrirProductoModal(card); }
            });
        });

        pModalClose.addEventListener('click', cerrarProductoModal);
        pModalCta.addEventListener('click', cerrarProductoModal);
        productoModal.addEventListener('click', (e) => { if (e.target === productoModal) cerrarProductoModal(); });
        document.addEventListener('keydown', (e) => {
            if (e.key === 'Escape' && productoModal.classList.contains('open')) cerrarProductoModal();
        });
    }


    /* ── Modales: Nuestros Nuevos Productos ── */
    const nuevoCards = document.querySelectorAll('.nuevo-card');
    const nuevoModal  = document.getElementById('nuevo-modal');

    if (nuevoCards.length && nuevoModal) {
        const modalIcono    = document.getElementById('nuevo-modal-icono');
        const modalTitle    = document.getElementById('nuevo-modal-title');
        const modalDesc     = document.getElementById('nuevo-modal-desc');
        const modalFeatures = document.getElementById('nuevo-modal-features');
        const modalClose    = document.getElementById('nuevo-modal-close');
        const modalCta      = document.getElementById('nuevo-modal-cta');
        let lastFocused = null;

        const abrirModal = (card) => {
            const { titulo, icono, desc, caracteristicas } = card.dataset;

            modalIcono.textContent = icono || '';
            modalTitle.textContent = titulo || '';
            modalDesc.textContent  = desc || '';

            modalFeatures.innerHTML = '';
            try {
                const features = JSON.parse(caracteristicas || '[]');
                features.forEach(f => {
                    const li = document.createElement('li');
                    li.textContent = f;
                    modalFeatures.appendChild(li);
                });
            } catch (err) {
                // Si no hay características válidas, simplemente no se muestra la lista
            }

            lastFocused = document.activeElement;
            nuevoModal.classList.add('open');
            nuevoModal.setAttribute('aria-hidden', 'false');
            document.body.classList.add('modal-open');
            modalClose.focus();
        };

        const cerrarModal = () => {
            nuevoModal.classList.remove('open');
            nuevoModal.setAttribute('aria-hidden', 'true');
            document.body.classList.remove('modal-open');
            if (lastFocused) lastFocused.focus();
        };

        nuevoCards.forEach(card => {
            card.addEventListener('click', () => abrirModal(card));
            card.addEventListener('keydown', (e) => {
                if (e.key === 'Enter' || e.key === ' ') {
                    e.preventDefault();
                    abrirModal(card);
                }
            });
        });

        modalClose.addEventListener('click', cerrarModal);
        modalCta.addEventListener('click', cerrarModal);
        nuevoModal.addEventListener('click', (e) => {
            if (e.target === nuevoModal) cerrarModal();
        });
        document.addEventListener('keydown', (e) => {
            if (e.key === 'Escape' && nuevoModal.classList.contains('open')) cerrarModal();
        });
    }


    /* ── Formulario de contacto → WhatsApp (click-to-chat) ── */
    const form    = document.getElementById('contacto-form');
    const notice  = document.getElementById('form-notice');

    if (form) {
        // Número de destino, sin '+', espacios ni guiones (formato requerido por wa.me)
        const whatsappNumero = form.dataset.whatsapp;

        form.addEventListener('submit', (e) => {
            e.preventDefault();
            notice.className = 'form-notice';
            notice.textContent = '';

            const nombre   = form.nombre.value.trim();
            const comuna   = form.comuna ? form.comuna.value.trim() : '';
            const email    = form.email.value.trim();
            const servicio = form.servicio.value.trim();
            const mensaje  = form.mensaje.value.trim();

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
            if (!whatsappNumero) {
                notice.classList.add('error');
                notice.textContent = 'No se encontró un número de WhatsApp configurado.';
                return;
            }

            // Armar el mensaje prellenado
            let texto = `Hola, mi nombre es ${nombre}.`;
            if (comuna) texto += ` Soy de la comuna de ${comuna}.`;
            if (servicio) texto += `\nServicio de interés: ${servicio}.`;
            texto += `\n\n${mensaje}`;
            texto += `\n\n(Email de contacto: ${email})`;

            const url = `https://wa.me/${whatsappNumero}?text=${encodeURIComponent(texto)}`;

            notice.classList.add('success');
            notice.textContent = '✓ Abriendo WhatsApp con tu mensaje listo para enviar…';

            window.open(url, '_blank', 'noopener');

            form.reset();
        });
    }

})();
