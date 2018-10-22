@extends('layout')

@section('contenido')
	
	<h1>Contacto</h1>
	<h2>Completa el formulario</h2>
	@if(session()->has('info'))
		<h3>{{ session('info') }}</h3>
	@else
	<form method="POST" action="{{ route('mensajes.store') }}">
		{!! csrf_field() !!}
		<label for="nombre">
			Nombre
			<input type="text" name="nombre" value="{{ old('nombre') }}" required>
			<p class="error">{{ $errors->first('nombre') }}</p>
			
		</label>
		<br>
		<br>
		<label for="email">
			Email
			<input type="email" name="email" value="{{ old('email') }}">
			<p class="error">{{ $errors->first('email') }}</p>
			
		</label>
		<br>
		<br>
		<label for="mensaje">
			Mensaje
			<textarea name="mensaje" value="{{ old('mensaje') }}"></textarea>
			<p class="error">{{ $errors->first('mensaje') }}</p>
			
		</label>
		<br>
		<br>
		<input type="submit" value="Enviar">
	</form>
	@endif

@stop