function initializeHeaderScroll() {
    const siteHeader = document.querySelector('.site-header');
    
    // Se non c'è l'header, non fare nulla
    if (!siteHeader) {
        return;
    }

    // Aggiungiamo un elemento "sentinella" per evitare calcoli complessi sul layout
    // Questo è un approccio più moderno e performante rispetto al calcolo dell'offset
    const sentinel = document.createElement('div');
    sentinel.style.width = '1px';
    sentinel.style.height = '1px';
    siteHeader.parentNode.insertBefore(sentinel, siteHeader);

    const observer = new IntersectionObserver(
        ([entry]) => {
            // entry.isIntersecting è 'true' quando la sentinella è visibile (siamo in cima)
            // è 'false' quando la sentinella non è più visibile (abbiamo scrollato)
            siteHeader.classList.toggle('is-sticky', !entry.isIntersecting);
        },
        {
            // La soglia 0 significa che l'evento si attiva appena 1px della sentinella esce dalla vista
            threshold: 0,
            rootMargin: '0px'
        }
    );

    // Inizia ad osservare la sentinella
    observer.observe(sentinel);
}

document.addEventListener('DOMContentLoaded', initializeHeaderScroll);