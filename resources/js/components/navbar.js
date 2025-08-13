function initializeMobileMenu() {
    const hamburgerBtn = document.getElementById('hamburger-menu');
    const mobileMenu = document.getElementById('mobile-menu');

    if (!hamburgerBtn || !mobileMenu) {
        return; // Non fare nulla se gli elementi non esistono
    }

    hamburgerBtn.addEventListener('click', () => {
        // Toggle per l'animazione dell'icona (da hamburger a X)
        hamburgerBtn.classList.toggle('is-active');
        
        // Toggle per mostrare/nascondere il menu a tendina
        mobileMenu.classList.toggle('is-open');

        // Blocca lo scroll della pagina quando il menu è aperto (buona pratica)
        document.body.classList.toggle('mobile-menu-open');
    });
}

document.addEventListener('DOMContentLoaded', initializeMobileMenu);