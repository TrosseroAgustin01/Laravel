@extends('template')

@section('content')

    <h1 class="h1">Detalle</h1>

    <hr>

    <h1> {{ $post->title }}</h1>
    <p class="h6">
        {{ $post->body }}
    </p>
    {{-- @dd($post) --}}
    
@endsection 
