<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Task Tracker</title>
        <link rel="shortcut icon" href="{{ asset('img/favicon.ico') }}">
        <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
        <script type="text/javascript" src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    </head>
    <body class="bg-secondary bg-opacity-25">
    <header class="p-3 bg-dark text-white">
        <div class="">
            
        </div>
        @if (Route::has('login'))
            <nav class="nav">

                <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
                    <li><a href="#" class="nav-link px-2 text-white">About</a></li>
                </ul>
                @auth
                    <button type="button" class="btn btn-outline-light me-2"><a
                        href="{{ url('/dashboard') }}"
                        class="text-white text-decoration-none rounded-md px-3 py-2 text-black ring-1 ring-transparent transition dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white"
                    >
                        Dashboard
                    </a></button>
                    
                @else
                    <button type="button" class="btn btn-outline-light me-2"><a
                        href="{{ route('login') }}"
                        class="text-decoration-none rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white"
                    >
                        Log in
                    </a></button>
                    

                    @if (Route::has('register'))
                        <button type="button" class="btn btn-warning"><a
                            href="{{ route('register') }}"
                            class="text-decoration-none rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white"
                        >
                            Register
                        </a></button>
                    @endif
                @endauth
            </nav>
        @endif
    </header>

    <div>
        <div id="about" class="display-5 text-center text-primary py-5">
            Welcome to Task Tracker!
        </div>
        <div clas="container">
            <div class="row">
                <div class="col-3"></div>
                    <div class="col-6 bg-primary bg-opacity-25 mx-3 py-3 px-3">
                        <div class="h4 text-dark text-center">
                            About us
                        </div>
                        <div class="fs-7">
                            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ea nesciunt aliquid odit expedita iure, nihil itaque maiores fuga dolorem sint quibusdam commodi tenetur soluta consectetur excepturi placeat, debitis est? Ullam!
                        </div>
                    </div>
                    <div class="col-3"></div>
                </div>
            </div>
        </div>
    </body>
</html>
