@extends('layouts.master')

@section('content')
	<h1>{{{ $post->title }}}</h1>
	<h5>by: {{{ $post->user->email }}}</h5>
	<h3>{{{ $post->body }}}</h3>


	<!-- check to see if user is logged in before displaying edit post link -->
	@if (Auth::check())
		<a href="{{{ action('PostsController@edit', $post->id) }}}" class="">Edit Post</a>

		
		{{ Form::open(['action' => ['PostsController@destroy', $post->id]]) 'method' => 'delete']] }}
			{{ Form::submit('Delete Posts', ['class' => 'btn btn-primary']) }}
		{{ Form::close() }}


	@endif

@stop