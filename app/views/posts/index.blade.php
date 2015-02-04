@extends('layouts.master')

@section('content')
	
<!-- 	$id = Input::get('id');
 -->
	@foreach ($posts as $post)
		<article class="posts">
			<h1 class="post-title">{{{ $post->title }}}</h1>
			<h5>by: {{{ $post->user->email }}}</h5>
			<small class="post-date">{{{ $post->created_at->diffForHumans() }}}</small>

			<hr>
			<p>{{{ $post->body }}}</p>
			<a href="{{{ action('PostsController@show', $post->id) }}}">Test</a>
			<a href="{{{ action('PostsController@destroy', $post->id) }}}">Delete Post</a>
		</article>
	@endforeach

{{ $posts->appends['search' => Input::get('search')]->links() }}

@stop