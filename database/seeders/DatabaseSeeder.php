<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Car;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
  public function run()
  {
  	User::factory(1)->create();
    Car::factory(20)->create();
  }
}
