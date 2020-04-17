<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield ('title')</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>


    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

</head>

<body>
    <div id="app">
        <header>
            <nav class="navbar sticky-top navbar-expand-sm navbar-light">
                <a class="navbar-brand" href="/">
                    <img src="img/logo2.png" class="img-fluid" alt="">
                </a>
                <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse"
                    data-target="#collapsibleNavId" aria-controls="collapsibleNavId" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="collapsibleNavId">
                    <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
                        <li class="nav-item active">
                            <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('archi.index') }}">Architecture</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('decor.index') }}">Event Decoration</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <main>
            @yield('content')
        </main>

        <footer class="row">
            <div class="sect1 col-md-4">
                <img src="img/logo2.png" alt="">
                <p class="py-4">Inspirasi Dekor, Indonesia</p>
            </div>
            <div class="sect2 col-md-4">
                <ul>
                    <li><a href="">Home</a> </li>
                    <li><a href="">Architecture</a> </li>
                    <li><a href="">Event Decoration</a></li>
                </ul>
            </div>
            <div class="sect3 col-md-4">
                <ul>
                    <li><a href="">Link</a> </li>
                    <li><a href="">Link</a> </li>
                    <li><a href="">Link</a> </li>
                    <li><a href="">Link</a> </li>
                </ul>
            </div>
        </footer>


        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/js/all.min.js"
            integrity="sha256-MAgcygDRahs+F/Nk5Vz387whB4kSK9NXlDN3w58LLq0=" crossorigin="anonymous"></script>

    </div>


</body>

</html>