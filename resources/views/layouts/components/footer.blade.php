<footer class="footer p-5 my-5 d-flex flex-column align-items-center flex-md-row
    text-muted border-top">
    Created by {{ config('app.name', 'Laravel') }} &middot; &copy; 2022
    <nav class="d-inline-flex mt-2 mt-md-0 ms-md-auto">
        @if (Route::has('login'))
            @auth
                <a class="me-3 py-2 text-dark text-decoration-none text-muted" href="{{ url('/home') }}">Home</a>
            @else
                <a class="me-3 py-2 text-dark text-decoration-none text-muted" href="{{ route('login') }}">Login</a>

                @if (Route::has('register'))
                    <a class="me-3 py-2 text-dark text-decoration-none text-muted"
                       href="{{ route('register') }}">Register</a>
                @endif
            @endauth
        @endif
    </nav>
</footer>
