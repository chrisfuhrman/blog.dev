
{{ Form::open(['action' => 'AuthController@doLogin']) }}
	<div class="form-group">
		{{Form::label('') }}
		{{Form::text('email', Input::old('email'), ['class' => 'form-control', 'placeholder' => 'username']) }}
	</div>	

	<div class="form-group">
		{{Form::label('') }}
		{{Form::password('password', ['class' => 'form-control', 'placeholder' => 'password']) }}
	</div>
	<div class="form-group">
		{{Form::submit('Log In', ['class' => 'btn btn-primary'])}}
	</div>

	
{{ Form::close() }}

