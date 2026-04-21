(function () {
    'use strict';

    /* --- Menu mobile --------------------------------------- */
    const toggle = document.querySelector('.nav-toggle');
    const nav    = document.querySelector('.main-nav');
    if (toggle && nav) {
        toggle.addEventListener('click', () => {
            const open = nav.classList.toggle('is-open');
            toggle.setAttribute('aria-expanded', open);
        });
        nav.querySelectorAll('a').forEach(a => {
            a.addEventListener('click', () => {
                nav.classList.remove('is-open');
                toggle.setAttribute('aria-expanded', false);
            });
        });
    }

    /* --- Modal produit ------------------------------------- */
    const modal    = document.getElementById('product-modal');
    const modalImg = document.getElementById('modal-img');
    const modalTit = document.getElementById('modal-title');
    const modalDsc = document.getElementById('modal-desc');
    const closeBtn = modal ? modal.querySelector('.modal-close') : null;

    function openModal(card) {
        if (!modal) return;
        modalImg.src          = card.dataset.image;
        modalImg.alt          = card.dataset.name;
        modalTit.textContent  = card.dataset.name;
        modalDsc.textContent  = card.dataset.desc;
        modal.classList.add('is-open');
        modal.setAttribute('aria-hidden', 'false');
        document.body.style.overflow = 'hidden';
    }

    function closeModal() {
        if (!modal) return;
        modal.classList.remove('is-open');
        modal.setAttribute('aria-hidden', 'true');
        document.body.style.overflow = '';
    }

    document.querySelectorAll('.product-card').forEach(card => {
        card.addEventListener('click', () => openModal(card));
    });

    if (closeBtn) closeBtn.addEventListener('click', closeModal);
    if (modal) {
        modal.addEventListener('click', (e) => {
            if (e.target === modal) closeModal();
        });
    }
    document.addEventListener('keydown', (e) => {
        if (e.key === 'Escape') closeModal();
    });
})();
