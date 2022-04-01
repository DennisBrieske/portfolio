<header>
    <div class="d-flex flex-column flex-md-row align-items-center pb-3 mb-4 border-bottom">
        <a href="/" class="d-flex align-items-center text-dark text-decoration-none">
            <span class="fs-4">{{ config('app.name') }}</span>
        </a>
        <nav class="d-inline-flex mt-2 mt-md-0 ms-md-auto">
            @if (Route::has('login'))
                @auth
                    <a class="me-3 py-2 text-dark text-decoration-none" href="{{ url('/home') }}">Home</a>
                @else
                    <a class="me-3 py-2 text-dark text-decoration-none" href="{{ route('login') }}">Login</a>

                    @if (Route::has('register'))
                        <a class="me-3 py-2 text-dark text-decoration-none"
                           href="{{ route('register') }}">Register</a>
                    @endif
                @endauth
            @endif
        </nav>
    </div>
</header>
