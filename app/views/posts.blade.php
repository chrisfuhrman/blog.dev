@extends('layouts.master')

@section('content')


	<div class="row">
		<div class="col-md-4 col-md-offset-4">
			<form class="form-group" id="blog-form" method="POST" action="{{{ action('PostsController@store') }}}">
				<h2 class="addPersonHeader">Create A Post</h2>

				<div class="form-group">
					<label class="sr-only" for="title">Title</label>
					<input name="title" type="text" class="form-control"  id="title" value="{{{ Input::old('title') }}}"> 
				</div>

				<div class="form-group">
					<label class="sr-only" for="content">Content</label>
					<input name="content" type="text" class="form-control" id="content" placeholder="Blgo Content here!" value="{{{ Input::old('content') }}}">
				</div>	

				<button id="add-btn" type="submit" class="btn btn-default">Create</button>

			</form>
		</div>
	</div>

@stop