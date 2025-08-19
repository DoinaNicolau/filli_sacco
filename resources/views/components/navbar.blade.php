<header class="site-header" id="site-header">
    <div class="header-inner">
        <div class="header-container">
            <div class="header-content">
                <!-- Logo -->
                <a href="{{ route('homepage') }}" class="site-logo">
                    <x-logo-light />
                    <x-logo-dark />
                </a>
                <!-- SEZIONE 2: Navigazione per Desktop -->
                <nav class="main-navigation">
                    <ul>
                        <li><a href="{{ route('homepage') }}" class="{{ request()->routeIs('homepage') ? 'active' : '' }}">Home</a></li>
                        <li><a href="#">Chi Siamo</a></li>
                        <li><a href="#">Menù</a></li>
                        <li><a href="#">Blog</a></li>
                        <li><a href="#">Contatti</a></li>
                    </ul>
                </nav>

                <!-- SEZIONE 3: Azioni (Auth, Tema, Hamburger) -->
                <div class="header-actions">
                    <!-- Link di autenticazione -->
                    <div class="auth-links">
                        @guest
                            <a href="{{ route('login') }}" class="btn btn-outline">Accedi</a>
                        @else
                            <a href="#" class="btn btn-primary">Dashboard</a>
                        @endguest
                    </div>

                    <!-- Interruttore Tema Giorno/Notte -->
                    <label class="switch">
                        <input type="checkbox" id="theme-toggle-input" />
                        <span class="slider">
                            <div class="star star_1"></div>
                            <div class="star star_2"></div>
                            <div class="star star_3"></div>
                            <svg viewBox="0 0 16 16" class="cloud">
                                <path
                                transform="matrix(.77976 0 0 .78395-299.99-418.63)"
                                fill="#fff"
                                d="m391.84 540.91c-.421-.329-.949-.524-1.523-.524-1.351 0-2.451 1.084-2.485 2.435-1.395.526-2.388 1.88-2.388 3.466 0 1.874 1.385 3.423 3.182 3.667v.034h12.73v-.006c1.775-.104 3.182-1.584 3.182-3.395 0-1.747-1.309-3.186-2.994-3.379.007-.106.011-.214.011-.322 0-2.707-2.271-4.901-5.072-4.901-2.073 0-3.856 1.202-4.643 2.925"
                                ></path>
                            </svg>
                        </span>
                    </label>

                    <!-- Bottone Hamburger per menu mobile -->
                    <button class="hamburger-menu" id="hamburger-menu" aria-label="Apri menu" aria-expanded="false">
                        <span></span>
                        <span></span>
                        <span></span>
                    </button>
                </div>
            </div>
        </div>
    </div>    
        <!-- Menu a tendina per Mobile (fuori dal flusso principale per una gestione più semplice) -->
    <div class="header-container">
        <div class="mobile-menu" id="mobile-menu">
            <nav>
                <ul>
                    <li><a href="{{ route('homepage') }}" class="{{ request()->routeIs('homepage') ? 'active' : '' }}">Home</a></li>
                    <li><a href="#">Chi Siamo</a></li>
                    <li><a href="#">Menù</a></li>
                    <li><a href="#">Blog</a></li>
                    <li><a href="#">Contatti</a></li>
                </ul>
            </nav>
            <div class="mobile-auth-links">
                @guest
                    <a href="{{ route('login') }}" class="btn btn-primary">Accedi</a>
                @else
                    <a href="#" class="btn btn-primary">Dashboard</a>
                @endguest
            </div>
        </div>
    </div>
</header>