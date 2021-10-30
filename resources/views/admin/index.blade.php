@extends('templates.main')

@section('content')
	Panel de administracion

	<form action="logout" method="POST">
		@csrf
		<button>Cerrar sesión</button>
	</form>
@endsection