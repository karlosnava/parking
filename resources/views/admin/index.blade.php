@extends('templates.main')

@section('content')
	<div class="w-9/12 mx-auto my-10">

		<div class="my-8 flex items-center">
			<div>
				<a href="{{ route('cars.create') }}" class="text-blue-500 border-2 border-blue-500 px-5 py-3 rounded-md text-sm hover:bg-blue-500 hover:text-white">Registrar nuevo vehículo</a>
			</div>
			<div class="ml-3">
				<a href="{{ route('export') }}" class="text-indigo-500 border-2 border-indigo-500 px-5 py-3 rounded-md text-sm hover:bg-indigo-500 hover:text-white">Exportar</a>
			</div>
		</div>

		<div class="grid grid-cols-4 gap-4 md:grid-cols-3 sm:grid-cols-1">
			@foreach($cars as $car)
				<div class="bg-white py-3 px-5 shadow-md">
					<div class="flex items-center justify-between">						
						<div class="font-black">{{ $car->plate }}</div>

						<div class="flex items-center">
							<small><a href="{{ route('cars.edit', $car->id) }}" class="text-gray-500">Editar</a></small>

							<form action="{{ route('cars.destroy', $car->id) }}" method="POST">
								@csrf
								@method('DELETE')

								<small><button class="text-red-400 ml-2">Eliminar</button></small>
							</form>
						</div>
					</div>

					<div>{{ $car->phone }}</div>
					<div>{{ $car->color }}</div>
					<hr class="my-2">
					<small class="text-gray-500">Fecha de ingreso: {{ $car->created_at }}</small>
				</div>
			@endforeach
		</div>

	</div>
@endsection