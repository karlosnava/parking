<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCarsTable extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
  	Schema::create('cars', function (Blueprint $table) {
  		$table->id();
  		$table->string('plate', 12)->unique();
  		$table->unsignedInteger('phone');
  		$table->string('color', 10);
  		$table->unsignedInteger('status');
  		$table->timestamps();
  	});
  }

  /**
   * Reverse the migrations.
   *
   * @return void
   */
  public function down()
  {
  	Schema::dropIfExists('cars');
  }
}
