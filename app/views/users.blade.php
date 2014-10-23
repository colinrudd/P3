@extends('_master')

@section('title')
	Random User Generator

@stop

@section('bodyid')
	"users"

@stop

@section('subtitle')
	Random User Generator

@stop

@section('info')
	Use the form below to generate random users.

@stop

@section('form')

	{{ Form::open(array(
	'url' => 'users'
	)) }}

	{{ Form::label('user', 'Number of users?') }}
	{{ Form::text('user', '1', array(
		'maxlength' => 2
		)) }}

	<p class="info">(Max 99)</p>

	{{ Form::label('address', 'Include address?') }}
    {{ Form::checkbox('address', '1'); }}

	<br />
	<br />
	
	{{ Form::label('birthday', 'Include birthday?') }}
	{{ Form::checkbox('birthday', '1'); }}

	<br />
	<br />

	{{ Form::label('blurb', 'Include blurb?') }}
	{{ Form::checkbox('blurb', '1'); }}

	<br />
	<br />

	{{ Form::submit('Generate',
		array('class' => 'pure-button'
		))}}

	{{Form::close() }}

	@stop