@extends('_master')

@section('title')
	Lorem Ipsum Generator

@stop

@section('bodyid')
	"lorem"

@stop

@section('subtitle')
	Lorem Ipsum Generator

@stop

@section('info')
	This application will generate random placeholder text. 
	Use the form below to generate your text.

@stop

@section('form')

	{{ Form::open(array(
	'url' => 'lorem'
	))}}

	{{ Form::label('paragraphs', 'Number of paragraphs?') }}
	{{ Form::text('paragraphs', '1', array(
		'maxlength' => 1
		)) }}

	<p class="info">(Max 9)</p>

	{{ Form::submit('Generate',
		array('class' => 'pure-button'
		)) }}

	{{ Form::close() }}

@stop