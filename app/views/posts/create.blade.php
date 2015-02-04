@extends('layouts.master')

@section('content')


	<div class="row">
		<div class="col-md-6 col-md-offset-3">
			{{ Form::open(array('action' => 'PostsController@store', 'class' => 'form-group', 'id' => 'blog-form')) }}

				<h2 class="addPersonHeader">Create Post</h2>

				@include('posts.form')

				{{ Form::submit('Save Changes', array('class' => 'btn btn-primary')) }}
			{{ Form::close() }}

		</div>
	</div>

@stop