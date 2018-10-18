@extends('layout')

@section('contenido')


	<h1>Edit Message of {{ $message->nombre }}</h1>
	
	<form method="POST" action="{{ route('messages.update',$message->id) }}">
		{!! method_field('PUT') !!}
		{!! csrf_field() !!}
		<label for="nombre">
			Nombre
			<input type="text" name="nombre" value="{{ $message->nombre }}">
			<p class="error">{{ $errors->first('nombre') }}</p>
			
		</label>
		<br>
		<br>
		<label for="email">
			Email
			<input type="email" name="email" value="{{ $message->email }}">
			<p class="error">{{ $errors->first('email') }}</p>
			
		</label>
		<br>
		<br>
		<label for="mensaje">
			Mensaje
			<textarea name="mensaje" >{{ $message->mensaje }}</textarea>
			<p class="error">{{ $errors->first('mensaje') }}</p>
			
		</label>
		<br>
		<br>
		<input type="submit" value="Enviar">
	</form>

@stop