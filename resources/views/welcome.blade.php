@extends('templates.main')

@section('content')
	<div class="w-9/12 mx-auto bg-white shadow-md p-8 my-10">

		<div class="mb-8">
			<h4 class="text-3xl font-bold">Bienvenido al sistema de GEMA SAS</h4>
			<p class="text-gray-500">Un sistema para parqueaderos desarrollador por <b>Carlos Rodriguez</b> el <b>10/2021</b></p>
		</div>

		<div class="border-2 border-gray-200 px-4 py-3 rounded-md text-gray-700 text-md">
			<p>Para hacer uso del sistema primero debe <a href="{{ route('login') }}" class="text-blue-500">iniciar sesión</a>, los datos de acceso son:</p>
			<div>
				<span><b>Correo electónico:</b> <a href="mailto:carlosjoser717@gmail.com">carlosjoser717@gmail.com</a></span><br>
				<span><b>Contraseña:</b> password</span>
			</div>
		</div>
	</div>
@endsection

