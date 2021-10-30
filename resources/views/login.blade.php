@extends('templates.main')

@section('content')

	<div class="w-1/4 mt-20 mx-auto">
		<form method="POST">
			@csrf
		
			<div class="bg-white shadow-md rounded px-8 py-8">
				<img src="{{ asset('img/logo.png') }}" class="w-1/4 mb-5 mx-auto" alt="Logo InterWap">

		    <div class="mb-4">
		      <label class="block text-grey-darker text-sm font-bold mb-2" for="email">
		        Correo electrónico
		      </label>
		      <input class="shadow appearance-none border rounded w-full py-2 px-3 text-grey-darker" type="email" name="email" placeholder="Correo electrónico" required value="{{ old('email') }}">
					@error('email') <div class="text-red-500">{{ $message }}</div> @enderror
		    </div>
		    <div class="mb-6">
		      <label class="block text-grey-darker text-sm font-bold mb-2" for="password">
		        Constraseña
		      </label>
		      <input class="shadow appearance-none border border-red rounded w-full py-2 px-3 text-grey-darker mb-3" type="password" name="password" placeholder="********" required>
					@error('password') <div class="text-red-500">{{ $message }}</div> @enderror
		    </div>
		    
		    <button class="bg-blue-600 hover:bg-blue-dark text-white font-bold py-2 px-4 rounded">
		      Iniciar sesión
		    </button>
			</div>
		</form>
	</div>

@endsection
