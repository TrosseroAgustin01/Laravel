<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Blog</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    @extends('layout.layoutFront')
    @section('titulo')
        blog
    @endsection
    @section('contenido')
        desde blog
    @endsection
</body>

</html>
    {{-- <div id="carouselExampleControlsNoTouching" class="carousel slide" data-bs-touch="false">
        <div class="carousel-inner">
            <div class="carousel-item active border border-black border-1">
                <img src="https://i.pinimg.com/564x/81/92/73/819273b108c7a0d5405f47dd1ed96abf.jpg" class="d-block w-100"
                    alt="Imagen no encontrada">
            </div>
            <div class="carousel-item border border-black border-1">
                <img src="https://i.pinimg.com/564x/46/91/2c/46912c2d37283184328f683b88560eed.jpg" class="d-block w-100"
                    alt="Imagen no encontrada">
            </div>
            <div class="carousel-item border border-black border-1">
                <img src="https://i.pinimg.com/564x/12/4e/7a/124e7ae413859f54b10ac0d9653ace56.jpg" class="d-block w-100"
                    alt="Imagen no encontrada">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControlsNoTouching"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControlsNoTouching"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div> --}}