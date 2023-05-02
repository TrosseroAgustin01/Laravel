@extends('template')

@section('content')

    <h1>Listado</h1>

	<hr>

	@foreach( $posts as $post )
	<p>
		{{-- @dd($post) --}}
		<strong>{{ $post['id'] }}</strong>
		<a href="{{Route('post',$post['slug'])}}">
			{{ $post['title'] }}
		</a>
	</p>
	@endforeach
	
@endsection
