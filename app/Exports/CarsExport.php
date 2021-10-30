<?php

namespace App\Exports;

use App\Models\Car;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\Exportable;

class CarsExport implements FromQuery
{
	use Exportable;

	public $first_date;
	public $date2;

	public function __construct($first_date, $last_date)
	{
		$this->first_date = $first_date;
		$this->last_date = $last_date;
	}

  public function query()
  {
    return Car::query()->whereBetween('created_at', [$this->first_date, $this->last_date]);
  }

}
