// Aggiungi questo codice al tuo file JS principale

document.addEventListener('DOMContentLoaded', function() {
    const hamburgerButton = document.getElementById('hamburger-menu');
    const mobileMenu = document.getElementById('mobile-menu');

    if (hamburgerButton && mobileMenu) {
        hamburgerButton.addEventListener('click', function() {
            // Aggiunge o rimuove la classe 'is-open' al menu
            mobileMenu.classList.toggle('is-open');

            // Aggiorna gli attributi ARIA per l'accessibilità
            const isExpanded = this.getAttribute('aria-expanded') === 'true';
            this.setAttribute('aria-expanded', !isExpanded);
        });
    }
});