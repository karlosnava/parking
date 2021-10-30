<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Car;

class CarFactory extends Factory
{
  public function definition()
  {
  	$plate = $this->faker->lexify('???') . "-" . $this->faker->randomNumber(3, true);

    return [
    	'plate' => $plate,
    	'phone' => 316 . $this->faker->randomNumber(7, true),
    	'color' => $this->faker->safeColorName(),
    	'status' => $this->faker->randomElement([1, 2]),
    ];
  }
}
