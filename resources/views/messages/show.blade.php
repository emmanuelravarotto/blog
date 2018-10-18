@extends('layout')

@section('contenido')

	<h1>MESSAGE BY ID</h1>
	
	<p>Enviado por {{ $message->nombre }} - {{ $message->email }}</p>
	<p>{{ $message->mensaje }}</p>
@stop