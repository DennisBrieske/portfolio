<!doctype html>
<html lang="de">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.84.0">
    <title>{{ config('app.name') }}</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/starter-template/">

    <!-- Bootstrap core CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link href="{{asset('css/app.css')}}" rel="stylesheet">
</head>
<body>

<div class="col-lg-8 mx-auto p-3 py-md-5">
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

    <main>
        <h1>Get started with Bootstrap</h1>
        <p class="fs-5 col-md-8">Quickly and easily get started with Bootstrap's compiled, production-ready files with
            this barebones example featuring some basic HTML and helpful links. Download all our examples to get
            started.</p>

        <div class="mb-5">
            <a href="../examples/" class="btn btn-primary btn-lg px-4">Download examples</a>
        </div>

        <hr class="col-3 col-md-2 mb-5">

        <div class="row g-5">
            <div class="col-md-6">
                <h2>Starter projects</h2>
                <p>Ready to beyond the starter template? Check out these open source projects that you can quickly
                    duplicate to a new GitHub repository.</p>
                <ul class="icon-list">
                    <li><a href="https://github.com/twbs/bootstrap-npm-starter" rel="noopener" target="_blank">Bootstrap
                            npm starter</a></li>
                    <li class="text-muted">Bootstrap Parcel starter (coming soon!)</li>
                </ul>
            </div>

            <div class="col-md-6">
                <h2>Guides</h2>
                <p>Read more detailed instructions and documentation on using or contributing to Bootstrap.</p>
                <ul class="icon-list">
                    <li><a href="../getting-started/introduction/">Bootstrap quick start guide</a></li>
                    <li><a href="../getting-started/webpack/">Bootstrap Webpack guide</a></li>
                    <li><a href="../getting-started/parcel/">Bootstrap Parcel guide</a></li>
                    <li><a href="../getting-started/build-tools/">Contributing to Bootstrap</a></li>
                </ul>
            </div>
        </div>
    </main>
    <footer class="pt-5 my-5 text-muted border-top">
        Created by the Bootstrap team &middot; &copy; 2021
    </footer>
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>


</body>
</html>
