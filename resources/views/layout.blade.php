<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Mi sitio</title>
	<link rel="stylesheet" href="{{ asset('css/app.css') }}">
	<style>

		.active{
			text-decoration: none;
			color: green ;
		}
		.error{
			color:red;
			display: inline;
		}

	</style>
</head>


<body>

	<?php 
		function activeMenu($url){
			return request()->is($url) ? 'active' : '';
		}

	?>
	<header>
		<nav>
			<a class="{{ activeMenu('/') }}" href="{{route('home')}}">Inicio</a>
			<a class="{{ activeMenu('saludo/*') }}" href="{{ route('saludo') }}">Saludar</a>
			<a class="{{ activeMenu('mensajes/create') }}" href="{{ route('mensajes.create')}}">Contacto</a>
			<a class="{{ activeMenu('mensajes') }}" href="{{ route('mensajes.index')}}">Mensajes</a>
		</nav>
	</header>

	@yield('contenido')

	<footer>Copyright° {{ date('Y') }} </footer>
</body>
</html>