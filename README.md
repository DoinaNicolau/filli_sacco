
Progetto F.lli Sacco - Sito Web Dinamico
<p align="center">
<a href="https://laravel.com" target="_blank">
<img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo">
</a>
</p>


Sito web dinamico e moderno per F.lli Sacco, realizzato con Laravel e un frontend avanzato. Il progetto è caratterizzato da un design d'impatto con effetti di luce, animazioni SCSS, un'interfaccia utente reattiva e un sistema di temi Chiaro/Scuro.

✨ Caratteristiche Principali

Sistema di Temi Chiaro/Scuro: Interruttore per cambiare tema in tempo reale, con stili personalizzati per ogni modalità.

Design Neon & Glow: Effetti di luce su titoli e bottoni per un look moderno e accattivante, gestiti dinamicamente in base al tema.

Header "Glassmorphism": Header con effetto vetro traslucido che diventa "sticky" durante lo scroll.

Animazioni CSS: Interfaccia utente arricchita da animazioni, come quella sulla pagina di autenticazione.

Design Completamente Responsivo: Layout ottimizzato per desktop, tablet e dispositivi mobili.

Autenticazione Utente: Sistema di Login e Registrazione sicuro basato su Laravel Fortify.

Struttura SCSS Modulare: Codice frontend organizzato in modo pulito e manutenibile secondo le moderne best practice.

🚀 Tecnologie Utilizzate

Backend: Laravel 12 / PHP 8.2+

Frontend: SCSS (Sass), JavaScript (ES6+), Vite

Database: MySQL

Autenticazione: Laravel Fortify

⚙️ Installazione e Avvio in Locale

Segui questi passaggi per avviare il progetto in un ambiente di sviluppo.

Prerequisiti:

PHP >= 8.2

Composer

Node.js & NPM

Un server MySQL

1. Clona il repository

code
Bash
download
content_copy
expand_less

git clone [URL_DEL_TUO_REPOSITORY]
cd flli_sacco

2. Installa le dipendenze PHP

code
Bash
download
content_copy
expand_less
IGNORE_WHEN_COPYING_START
IGNORE_WHEN_COPYING_END
composer install

3. Configura l'ambiente
Copia il file di ambiente di esempio e genera la chiave dell'applicazione.

code
Bash
download
content_copy
expand_less
IGNORE_WHEN_COPYING_START
IGNORE_WHEN_COPYING_END
cp .env.example .env
php artisan key:generate

4. Configura il Database
Apri il file .env e inserisci le credenziali del tuo database locale:

code
Dotenv
download
content_copy
expand_less
IGNORE_WHEN_COPYING_START
IGNORE_WHEN_COPYING_END
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=flli_sacco
DB_USERNAME=root
DB_PASSWORD=

5. Esegui le Migrazioni
Questo comando creerà tutte le tabelle necessarie nel tuo database.

code
Bash
download
content_copy
expand_less
IGNORE_WHEN_COPYING_START
IGNORE_WHEN_COPYING_END
php artisan migrate

6. Installa le dipendenze Frontend

code
Bash
download
content_copy
expand_less
IGNORE_WHEN_COPYING_START
IGNORE_WHEN_COPYING_END
npm install

7. Avvia i server
Apri due terminali separati:

Nel primo, avvia il server di sviluppo di Laravel:

code
Bash
download
content_copy
expand_less
IGNORE_WHEN_COPYING_START
IGNORE_WHEN_COPYING_END
php artisan serve

Nel secondo, avvia il compilatore di asset di Vite in modalità "watch":

code
Bash
download
content_copy
expand_less
IGNORE_WHEN_COPYING_START
IGNORE_WHEN_COPYING_END
npm run dev

Ora puoi visitare il sito all'indirizzo http://127.0.0.1:8000.

📂 Struttura del Frontend (SCSS)

Il codice SCSS è organizzato in resources/scss/ con una struttura modulare per una facile manutenzione:

abstracts/: Contiene variabili, mixin e funzioni.

_variables.scss: Palette colori, breakpoints, etc.

_mixins.scss: Mixin per effetti riutilizzabili (es. neon-text).

base/: Stili di base e reset.

_reset.scss: Reset CSS.

_typography.scss: Stili per i font e i titoli.

components/: Stili per componenti specifici e riutilizzabili.

_buttons.scss: Stili per i bottoni.

_header.scss: Stili per l'header.

layout/: Stili per la struttura principale della pagina.

pages/: Stili specifici per singole pagine.

_home.scss: Stili per la homepage.

_auth-form.scss: Stili per i form di login/registrazione.

themes/: Definizioni delle variabili per i temi.

_light-theme.scss: Tema chiaro (default).

_dark-theme.scss: Tema scuro.

app.scss: File principale che importa tutti gli altri parziali.

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects...

(...il resto del README originale di Laravel continua da qui...)

Learning Laravel

...

Laravel Sponsors

...

Contributing

...

Code of Conduct

...

Security Vulnerabilities

...

License

The Laravel framework is open-sourced software licensed under the MIT license.