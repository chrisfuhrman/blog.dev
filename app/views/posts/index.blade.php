@extends('layouts.master')

@section('contents')

	@foreach ($posts as $post)

	<h1>{{{ $post->title }}}</h1>
	<p>{{{ $post->body }}}</p>
	
	@endforeach

@stop