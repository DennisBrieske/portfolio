<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name', 'Laravel') }}</title>

    @include('layouts.components.header-scripts')
</head>

<body>
<div id="app">

    <div class="col-lg-8 mx-auto p-3 py-md-5">
        @include('layouts.components.header')
        @yield('content')
        @include('layouts.components.footer')
    </div>
    @include('layouts.components.footer-scripts')
</div>
</body>
</html>
