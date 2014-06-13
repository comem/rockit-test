<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateEquipmentsTable extends Migration {

	public function up()
	{
		Schema::create('equipments', function(Blueprint $table) {
			$table->increments('id');
			$table->string('name_de', 200);
		});
	}

	public function down()
	{
		Schema::drop('equipments');
	}
}