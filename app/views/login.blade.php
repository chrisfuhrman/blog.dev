@extends('layouts.master')

@section('content')

<h1>Please Log In </h1>

{{ Form::open(['action' => 'AuthController@doLogin']) }}
	<div class="form-group">
		{{Form::label('email', 'email Address') }}
		{{Form::email('email', Input::old('email'), ['class' => 'form-control']) }}
	</div>	

	<div class="form-group">
		{{Form::label('password', 'password') }}
		{{Form::password('password', ['class' => 'form-control']) }}
	</div>
	<div class="form-group">
		{{Form::submit('Log In', ['class' => 'btn btn-primary'])}}
	</div>
{{ Form::close() }}

@stop

