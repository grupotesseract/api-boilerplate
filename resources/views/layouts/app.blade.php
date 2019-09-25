<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name') }} | Serviços Especializados de Engenharia Ltda.</title>
    <meta name="description" content="Serviços Especializados de Engenharia Ltda.">

    <!-- CSS -->
    <link rel="stylesheet" href="https://unpkg.com/@coreui/coreui/dist/css/coreui.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="/css/app.css" />
    @yield('css')
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
    <script src="/js/App.js"></script>
    @yield('scripts')
    <script async src="http://localhost:3000/browser-sync/browser-sync-client.js?v=2.26.7"></script>
</body>
</html>
