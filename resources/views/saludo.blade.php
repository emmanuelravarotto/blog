@extends('layout')


@section('contenido')


@if(Auth::check())

	<h1>Welcome to project {{ Auth::user()->name }}</h1>

@else

<h2>You are not loggin ,you cant´t to see messages</h2>	

@endif

@stop