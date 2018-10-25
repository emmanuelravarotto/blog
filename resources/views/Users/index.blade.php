@extends('layout')

@section('contenido')

<h1>USERS</h1>

<table class="table">
		<thead>
			<tr>
				<th>ID</th>
				<th>Nombre</th>
				<th>Email</th>
				<th>Role</th>
				<th>Acciones</th>

			</tr>
		</thead>
		<tbody>
			@foreach($users as $user)
				<tr>
					<td>{{ $user->id }}</td>
					<td>{{ $user->name }}</td>
					<td>{{ $user->email }}</td>
					
					@foreach($user->roles as $role)
						<td>{{ $role->display_name }}</td>
					@endforeach
					<td></td>
				</tr>
			@endforeach
		</tbody>

	</table>

@stop