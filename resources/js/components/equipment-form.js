function initializeEquipmentForm() {
    // 1. Cerca il form nella pagina usando il suo ID.
    const equipmentForm = document.getElementById('equipmentForm');

    // 2. Se il form non viene trovato, interrompi l'esecuzione della funzione.
    //    Questo è cruciale per evitare errori nelle altre pagine del sito.
    if (!equipmentForm) {
        return;
    }

    // 3. Cerca gli elementi SOLO ALL'INTERNO del form che abbiamo trovato.
    //    Questo è più efficiente e sicuro.
    const garanziaRadioButtons = equipmentForm.querySelectorAll('input[name="stato_garanzia"]');
    const garanziaDataContainer = equipmentForm.getElementById('garanzia-data-container');

    // Se per qualche motivo gli elementi non esistono, interrompi per sicurezza.
    if (!garanziaRadioButtons.length || !garanziaDataContainer) {
        return;
    }

    // Aggiungi l'event listener a ogni radio button
    garanziaRadioButtons.forEach(radio => {
        radio.addEventListener('change', function() {
            if (this.value === 'in_garanzia') {
                garanziaDataContainer.style.display = 'block';
            } else {
                garanziaDataContainer.style.display = 'none';
            }
        });
    });
}

// Esegui la funzione di inizializzazione quando il DOM è pronto.
document.addEventListener('DOMContentLoaded', initializeEquipmentForm);