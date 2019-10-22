<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="Tesseract API Boilerplate." />
    <title>{{ config('app.name') }}</title>
    <link rel="icon" type="image/x-icon" href="https://grupotesseract.com.br/favicon.ico">

    <!-- CSS -->
    <link rel="stylesheet" href="/css/pages/welcome.css" />
</head>

<body>
    <div class="flex-center position-ref full-height">
        @if (Route::has('login'))
            <div class="top-right links d-none">
                @auth
                    <a href="{{ url('/home') }}">Home</a>
                @else
                    <a href="{{ route('login') }}">Login</a>

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}">Register</a>
                    @endif
                @endauth
            </div>
        @endif

        <div class="content">
            <div class="title">
                <img class="logo" src="https://res.cloudinary.com/tesseract/image/upload/c_scale,h_200/v1567190357/grupo-tesseract/logo-tesseract-completo-preto.png" />

                <p class="slogan">Laravel API Boilerplate</p>
            </div>

            <div class="links">
                <a class="btn btn-primary px-4" href="{{ route('login') }}">Login</a>
            </div>
        </div>
    </div>

    <script async src="http://localhost:3000/browser-sync/browser-sync-client.js?v=2.26.7"></script>
</body>
</html>
