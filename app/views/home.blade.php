@extends('_master')

@section('title')
	Developers Best Friend

@stop

@section('bodyid')
	"home"

@stop

@section('subtitle')
	Developers Best Friend

@stop

@section('info')
	Developers Best Friend is a collection of useful applications for developers.
	DBF includes a Lorem Ipsum text generator and a Random User generator. 
	Follow the links below to get started. <br />
@stop

@section('result')
	<p><a class="pure-button" href="/lorem">Lorem Ipsum generator</a>&nbsp;
		<a class="pure-button" href="/users">Random User generator</a></p>

@stop
