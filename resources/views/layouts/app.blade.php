<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name') }} | Tesseract API Boilerplate.</title>
    <meta name="description" content="API Boilerplate do Grupo Tesseract.">

    <!-- CSS -->
    @include('layouts.css')
</head>

<body class="app header-fixed sidebar-fixed aside-menu-fixed sidebar-lg-show">
    @include('layouts.header')

    <div class="app-body">
        @include('layouts.sidebar')
        <main class="main">
            @yield('content')
        </main>
    </div>

    <!-- Scripts -->
    @include('layouts.js')
</body>
</html>
