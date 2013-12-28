@extends('layout')

@section('content')

	@if (Session::get('flash_message'))
		<div class="flash-message">
			{{ Session::get('flash_message') }}
		</div>
	@endif

	Homepage
	
@stop