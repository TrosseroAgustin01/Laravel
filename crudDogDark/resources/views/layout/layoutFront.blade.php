<!doctype html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('titulo')</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    @include('componentes.navbarFront')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 col-md-8 mt-2">
                @yield('contenido')
            </div>
            <div class="col-12 col-md-4 mt-2">
                @include('componentes.categorias')
            </div>
        </div>
    </div>

</body>

</html>
