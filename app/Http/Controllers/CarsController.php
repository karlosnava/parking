<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// MODELS
use App\Models\Car;

// EXCEL
use App\Exports\CarsExport;

class CarsController extends Controller
{

	public function index()
	{
		$cars = Car::orderBy('created_at', 'desc')->get();
		return view('admin.index', compact('cars'));
	}

	public function create()
	{
		return view('admin.create');
	}

	public function store(Request $request)
	{
		$request->validate([
			'plate' => ['required', 'string', 'min:5', 'max:7', 'unique:cars'],
			'phone' => ['required', 'numeric'],
			'color' => ['required', 'string', 'min:4', 'max:10'],
			'status' => ['required', 'numeric', 'max:1', 'in:1,2']
		]);

		$car = Car::create($request->all());

		return redirect()
			->route('cars.edit', $car)
			->with('info', 'La vehículo se registró con éxito.');;
	}

	public function edit($id)
	{
		$car = Car::find($id);
		return view('admin.edit', compact('car'));
	}

	public function update(Request $request, $id)
	{
		$car = Car::find($id);

		$request->validate([
			'plate' => ['required', 'string', 'min:5', 'max:7', "unique:cars,plate,{$car->id}"],
			'phone' => ['required', 'numeric'],
			'color' => ['required', 'string', 'min:4', 'max:10'],
			'status' => ['required', 'numeric', 'max:2', 'in:1,2']
		]);

		$car->update($request->all());

		return redirect()
			->route('cars.edit', $car)
			->with('info', 'La vehículo se actualizó con éxito.');
	}

	public function destroy(Request $request, $id)
	{
		Car::destroy($id);

		return redirect()->route('cars.index');
	}


	public function export()
	{
		$firstCar = Car::orderBy('created_at', 'asc')->first();
		$lastCar = Car::orderBy('created_at', 'desc')->first();

		return view('export', compact(['firstCar', 'lastCar']));
	}

	public function downloadExcel(Request $request)
	{
		$request->validate([
			'start_date' => ['required'],
			'end_date'   => ['required']
		]);

		$start_date = date('Y-m-d H:i:s', strtotime(str_replace('-', '/', $request['start_date'])));
		$end_date = date('Y-m-d 23:59:59', strtotime(str_replace('-', '/', $request['end_date'])));

		return (new CarsExport($start_date, $end_date))->download('vehiculos.xlsx');
	}
}
