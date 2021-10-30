@extends('templates.main')

@section('content')
	<div class="w-9/12 mx-auto bg-white shadow-md p-8 my-10">

		<div class="mb-8">
			<h4 class="text-3xl font-bold">Exportar datos</h4>
			<a href="{{ route('cars.index') }}" class="text-blue-500">Regresar</a>
		</div>

		<form action="{{ route('download') }}" method="POST">
			@csrf

			<small class="text-gray-500">Seleccione un rango entre dos fechas para exportar los registros.</small>


			<div class="grid grid-cols-2 gap-3 my-8">
				<div>
					<label>
						Fecha inicial {{ $firstCar->created_at }} <br>
						<input type="date" name="start_date" min="{{ substr($firstCar->created_at, 0, 10) }}" max="{{ substr($lastCar->created_at, 0, 10) }}">
					</label>
				</div>

				<div>
					<label>
						Fecha final {{ $lastCar->created_at }} <br>
						<input type="date" name="end_date" min="{{ substr($firstCar->created_at, 0, 10) }}" max="{{ substr($lastCar->created_at, 0, 10) }}">
					</label>
				</div>	
			</div>

			<button class="bg-blue-600 hover:bg-blue-dark text-white font-bold py-2 px-4 rounded">
	      Exportar
	    </button>
		</form>
	</div>
@endsection
