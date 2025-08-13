<x-layout> 
 
       {{-- Sezione Hero --}}
    <section class="hero-section">
        <div class="container">
            {{-- Creiamo un contenitore flex per il layout a due colonne --}}
            <div class="hero-content">
                
                {{-- Colonna Sinistra: Testo --}}
                <div class="hero-text">
                    <h1>Il nostro prodotto, come non l'hai mai visto</h1>
                    <p>Scopri ogni dettaglio del nostro prodotto di punta. Interagisci, esplora e apprezza la qualità artigianale direttamente dal tuo browser.</p>
                    <a href="#dettagli-prodotto" class="btn btn-primary">Scopri di più</a>
                </div>

                {{-- Colonna Destra: Visualizzatore 3D --}}
                <div class="hero-3d-viewer">
                    <model-viewer
                        src="{{ asset('models/frigo.glb') }}"
                        alt="Descrizione SEO del tuo prodotto per l'accessibilità"
                        auto-rotate
                        camera-controls
                        environment-image="neutral"
                        shadow-intensity="1.5"
                        poster="{{ asset('images/poster-prodotto.webp') }}"
                        loading="lazy"
                        ar
                        ar-modes="webxr scene-viewer quick-look"
                    >
                        <div class="progress-bar" slot="progress-bar">
                            <div class="update-bar"></div>
                        </div>
                    </model-viewer>
                </div>

            </div>
        </div>
    </section>

    {{-- Sezione Chi Siamo (un piccolo assaggio) --}}
    <section class="about-us-intro">
        <div class="container">
            <h2>La Nostra Storia</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo animi explicabo deleniti! Dignissimos, assumenda quis. Tenetur perferendis asperiores veniam dolorem porro. Inventore perferendis ratione dicta, dolorum iusto iste necessitatibus illum.</p>
        </div>
    </section>

    {{-- Sezione Ultimi Articoli dal Blog --}}
    <section class="latest-articles">
        <div class="container">
            <h2>Dal Nostro Blog</h2>
            
            @if($articles->count())
                <div class="articles-grid">
                    {{-- Iteriamo sulla variabile $articles passata dal controller --}}
                    @foreach($articles as $article)
                        <div class="article-card">
                            {{-- Aggiungi un'immagine se il tuo modello Article la prevede --}}
                            {{-- <img src="{{ asset('storage/' . $article->image_path) }}" alt="{{ $article->title }}"> --}}
                            <div class="card-content">
                                <h3>{{ $article->title }}</h3>
                                <p>{{ Str::limit($article->excerpt, 120) }}</p> {{-- Mostra un estratto --}}
                                <a href="{{ route('articles.show', $article) }}" class="read-more">Leggi tutto</a>
                            </div>
                        </div>
                    @endforeach
                </div>
            @else
                <p>Nessun articolo da mostrare al momento.</p>
            @endif
        </div>
    </section>
  
 
</x-layout>