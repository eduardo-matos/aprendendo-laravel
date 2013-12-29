@extends('layout')

@section('content')

	@foreach($posts as $post)
		<div>
			<h2>{{ $post->title }}</h2>
			<p>{{ $post->body }}</p>
			<p>By {{ $post->author()->first()->name }}</p>
			<p>In {{ $post->created_at->format('d/m/Y') }} at {{ $post->created_at->format('H:i:s') }}</p>
		</div>
	@endforeach

@stop