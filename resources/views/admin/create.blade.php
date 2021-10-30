@extends('templates.main')

@section('content')
	<div class="w-9/12 mx-auto bg-white shadow-md p-8 my-10">

		<div class="mb-8">
			<h4 class="text-3xl font-bold">Registrar nuevo vehículo</h4>
			<a href="{{ route('cars.index') }}" class="text-blue-500">Regresar</a>
		</div>

		<form action="{{ route('cars.store') }}" method="POST">
			@csrf
			
			<div class="grid grid-cols-2 gap-3">
				<div>
					<input class="shadow appearance-none border rounded w-full py-2 px-3 text-grey-darker" type="text" name="plate" placeholder="Placa" required value="{{ old('plate') }}">

					@error('plate') <small class="text-red-500">{{ $message }}</small> @enderror
				</div>

				<div>
					<input class="shadow appearance-none border rounded w-full py-2 px-3 text-grey-darker" type="text" name="phone" placeholder="Teléfono" required value="{{ old('phone') }}">
					@error('phone') <small class="text-red-500">{{ $message }}</small> @enderror
				</div>
			</div>

			<div class="grid grid-cols-2 gap-3 my-5">
				<div>
					<input class="shadow appearance-none border rounded w-full py-2 px-3 text-grey-darker" type="text" name="color" placeholder="Color" required value="{{ old('color') }}">
					@error('color') <small class="text-red-500">{{ $message }}</small> @enderror
				</div>

				<div>
					<select name="status" class="w-100">
						<option value="1" {{ old('status') == 1 ? 'selected' : '' }}>En el parqueadero</option>
						<option value="2" {{ old('status') == 2 ? 'selected' : '' }}>Fuera del parqueadero</option>
					</select>
					@error('status') <small class="text-red-500">{{ $message }}</small> @enderror
				</div>
			</div>

			@if(session('info'))
				<div class="bg-green-100 text-green-500 rounded-lg mb-8 p-5">
					{{ session('info') }}
				</div>
			@endif

			<button class="bg-blue-600 hover:bg-blue-dark text-white font-bold py-2 px-4 rounded">
	      Guardar
	    </button>
		</form>
	</div>
@endsection
