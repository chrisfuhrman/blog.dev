<div class="form-group {{{ $errors->has('title') ? 'has-error' : '' }}}">
	{{ Form::label('title', 'Post Title') }}
	{{ Form::text('title', Input::old('title'), array('class' => 'form-control', 'id' => 'title')) }}
</div>

<div class="form-group {{{ $errors->has('body') ? 'has-error' : '' }}}">
	{{ Form::label('body', 'Blog Content') }}
	{{ Form::textarea('body', Input::old('body'), array('class' => 'form-control', 'id' => 'content', 'placeholder' => 'Blog Content here!')) }}
</div>
