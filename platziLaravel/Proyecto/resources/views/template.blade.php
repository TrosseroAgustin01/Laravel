<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Projecto</title>
</head>

<body>
    <strong>
        <p>
            <a href="{{ Route('home') }}">Home</a>
            <a href="{{ Route('blog') }}">blog</a>
        </p>
    </strong>

    <hr>

    @yield('content')
</body>

</html>
