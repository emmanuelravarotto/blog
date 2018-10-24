@extends('layout')

@section('contenido')


	<h1>Edit Message of {{ $message->nombre }}</h1>
	
	<form method="POST" action="{{ route('mensajes.update',$message->id) }}">
		{!! method_field('PUT') !!}
		{!! csrf_field() !!}
		<label for="nombre">
			Nombre
			<input class="form-control" type="text" name="nombre" value="{{ $message->nombre }}">
			<p class="error">{{ $errors->first('nombre') }}</p>
			
		</label>
		<br>
		<br>
		<label for="email">
			Email
			<input class="form-control" type="email" name="email" value="{{ $message->email }}">
			<p class="error">{{ $errors->first('email') }}</p>
			
		</label>
		<br>
		<br>
		<label for="mensaje">
			Mensaje
			<textarea class="form-control" name="mensaje" >{{ $message->mensaje }}</textarea>
			<p class="error">{{ $errors->first('mensaje') }}</p>
			
		</label>
		<br>
		<br>
		<input class="btn btn-success" type="submit" value="Enviar">
	</form>

@stop