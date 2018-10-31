@extends('layout')

@section('contenido')

<h1>Edit user</h1>

@if(session()->has('info'))
	<div class="alert alert-success">{{ session('info') }}
	</div>
@endif

<form method="POST" action="{{ route('usuarios.update',$users->id) }}">
		{!! method_field('PUT') !!}
		{!! csrf_field() !!}
		<label for="nombre">
			Nombre
			<input class="form-control" type="text" name="name" value="{{ $users->name }}">
			<p class="error">{{ $errors->first('nombre') }}</p>
			
		</label>
		<br>
		<br>
		<label for="email">
			Email
			<input class="form-control" type="email" name="email" value="{{ $users->email }}">
			<p class="error">{{ $errors->first('email') }}</p>
			
		</label>
		<br>
		<br>
		
		<br>
		<br>
		<input class="btn btn-success" type="submit" value="Enviar">
	</form>

@stop