<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateGenresTable extends Migration {

	public function up()
	{
		Schema::create('genres', function(Blueprint $table) {
			$table->increments('id');
			$table->string('name_de', 50);
		});
	}

	public function down()
	{
		Schema::drop('genres');
	}
}