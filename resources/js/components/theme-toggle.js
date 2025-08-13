// resources/js/components/theme-toggle.js

function initializeThemeToggle() {
    const themeToggleInput = document.getElementById('theme-toggle-input');
    if (!themeToggleInput) return;

    const applyTheme = (theme) => {
        // Aggiungi o rimuovi solo la classe 'dark-mode'
        document.documentElement.classList.toggle('dark-mode', theme === 'dark');
        
        // Imposta lo stato della checkbox (checked = light, non-checked = dark)
        themeToggleInput.checked = (theme === 'light');
        
        // Salva la preferenza
        localStorage.setItem('theme', theme);
    };

    themeToggleInput.addEventListener('change', () => {
        const newTheme = themeToggleInput.checked ? 'light' : 'dark';
        applyTheme(newTheme);
    });

    // All'avvio, applica il tema salvato o quello di sistema
    const savedTheme = localStorage.getItem('theme');
    const prefersDark = window.matchMedia('(prefers-color-scheme: dark)').matches;

    // Determina il tema iniziale
    const initialTheme = savedTheme ? savedTheme : (prefersDark ? 'dark' : 'light');
    applyTheme(initialTheme);
}

document.addEventListener('DOMContentLoaded', initializeThemeToggle);