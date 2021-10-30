<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Car;

class DatabaseSeeder extends Seeder
{
  public function run()
  {
    Car::factory(20)->create();
  }
}
