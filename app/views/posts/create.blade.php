@extends('layouts.master')

@section('content')


	<div class="row">
		<div class="col-md-4 col-md-offset-4">
			{{ Form::open(array('action' => 'PostsController@store', 'class' => 'form-group', 'id' => 'blog-form')) }}

				<h2 class="addPersonHeader">New Blog Post</h2>

				@include('posts.form')

				{{ Form::submit('Save Changes', array('class' => 'btn btn-primary')) }}
			{{ Form::close() }}

		</div>
	</div>

@stop