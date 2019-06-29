<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" href="/css/app.css">

</head>
<body>
<div class="flex-center position-ref full-height">
    <div class="container-fluid">
        <div class="navbar-header">
            <a href="{{route('categorias.index')}}" class="nav-item nav">Categorias</a>
            <a href="{{route('eventos.index')}}" class="nav-item">Eventos</a>
        </div>
    </div>
    <div class="content">
        @yield('content')
    </div>
    <script src="/js/app.js"></script>
</div>
</body>
</html>
