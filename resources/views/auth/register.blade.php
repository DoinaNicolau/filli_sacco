<x-layout>
    {{-- Contenitore principale per la pagina, centra il form --}}
    <div class="auth-container">
        
        
            {{-- Qui inseriamo i 50 span per l'animazione --}}
            @for ($i = 0; $i < 50; $i++)
                <span style="--i:{{ $i }};"></span>
            @endfor
      

       
            
            <form method="POST" action="{{ route('register') }}"> {{-- Assicurati che l'action sia corretta --}}
                @csrf
                
                <h2>Registrazione</h2>

                {{-- Input per il Nome --}}
                <div class="input-box">
                    <input type="text" id="name" name="name" required value="{{ old('name') }}">
                    <label for="name">Nome</label>
                </div>

                {{-- Input per l'Email --}}
                <div class="input-box">
                    <input type="email" id="email" name="email" required value="{{ old('email') }}">
                    <label for="email">Email</label>
                </div>

                {{-- Input per la Password --}}
                <div class="input-box">
                    <input type="password" id="password" name="password" required>
                    <label for="password">Password</label>
                </div>

                {{-- Input per la Conferma Password --}}
                <div class="input-box">
                    <input type="password" id="password_confirmation" name="password_confirmation" required>
                    <label for="password_confirmation">Conferma Password</label>
                </div>

                {{-- Bottone di invio --}}
                <button type="submit" class="btn btn-primary">Registrati</button>

                {{-- Link per chi ha già un account --}}
                <div class="form-link">
                    <p>Hai già un account? <a href="{{ route('login') }}">Accedi</a></p>
                </div>
            </form>
        
    </div>
</x-layout>