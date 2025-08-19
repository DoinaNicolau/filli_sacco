<x-layout>
    <div id="auth-container">
   
        
           
        
        <form method="POST" action="{{ route('login') }}">
            @csrf
            <h2>Login</h2>
            
            <div class="input-box">
                <input id="email" type="email" name="email" required value="{{ old('email') }}" placeholder=" ">
                <label for="email">Email</label>
            </div>
            
            <div class="input-box">
                <input id="password" type="password" name="password" required placeholder=" ">
                <label for="password">Password</label>
            </div>

            <div class="forgot-pass">
                <a href="#">Password dimenticata?</a>
            </div>

            <button class="btn btn-primary" type="submit">Accedi</button>

            <div class="signup-link">
                <p>Non hai un account? <a href="{{ route('register') }}">Registrati</a></p>
            </div>
        </form>
        
         {{-- Qui inseriamo i 50 span per l'animazione --}}
            @for ($i = 0; $i < 50; $i++)
                <span style="--i:{{ $i }};"></span>
            @endfor
    </div>
</x-layout>