@extends('layouts.master')

@section('content')
	<h1>Portfolio</h1>

	<a href="{{ action('HomeController@showResume') }}">Check out my resume</a>

@stop