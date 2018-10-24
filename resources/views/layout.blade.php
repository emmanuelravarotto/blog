<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Mi sitio</title>
	<link rel="stylesheet" href="{{ asset('css/app.css')}}">
	
</head>


<body>

	<?php 
		function activeMenu($url){
			return request()->is($url) ? 'active' : '';
		}

	?>

	<nav class="navbar navbar-default" role="navigation">
		<div class="container">
			<!-- Brand and toggle get grouped for better mobile display -->
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="#">Blog</a>
			</div>
	
			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse navbar-ex1-collapse">
				<ul class="nav navbar-nav">
					<li class="{{ activeMenu('/') }}"><a  href="{{route('home')}}">Inicio</a></li>
					<li class="{{ activeMenu('saludo/*') }}"><a  href="{{ route('saludo') }}">Saludar</a></li>
					<li class="{{ activeMenu('mensajes/create') }}"><a  href="{{ route('mensajes.create')}}">Contacto</a></li>
					@if(Auth::check())
						<li class="{{ activeMenu('mensajes') }}"><a  href="{{ route('mensajes.index')}}">Mensajes</a></li>
						@if(Auth::user()->hasRoles(['admin','estudiante']))
						<li class="{{ activeMenu('usuarios*') }}"><a  href="{{ route('usuarios.index')}}">Usuarios</a></li>
						@endif
					@endif
				</ul>
				
				<ul class="nav navbar-nav navbar-right">
					@guest
                        <li><a href="{{ route('login') }}">Login</a></li>
					@else
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">{{ Auth::user()->name }} <b class="caret"></b></a>
						<ul class="dropdown-menu">
							<li>
								<a href="{{ route('logout') }}"
                                     onclick="event.preventDefault();
                       		            document.getElementById('logout-form').submit();">
                                            Logout
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                </form>
                               </li>
						</ul>
					</li>
					@endguest
				</ul>
			</div><!-- /.navbar-collapse -->
		</div>
	</nav>

	<div class="container">
		@yield('contenido')

		<footer>Copyright° {{ date('Y') }} </footer>
	</div>

	<script
  src="https://code.jquery.com/jquery-3.3.1.min.js"
  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
  crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>