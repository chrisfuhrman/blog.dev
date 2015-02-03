@extends('layout.master')

@section('content')

<div><h1>Update Post</h1></div>

	{{ Form::model($post, array('action' => array('PostsController@update', $post->id), 'method' => 'put')) }}

		@include('posts.form')

		{{ Form::submit('Save Changes', array('class' => 'btn btn-primary')) }}
	{{ Form::close() }}

@stop