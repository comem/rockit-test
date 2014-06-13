<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePrintingsTable extends Migration {

	public function up()
	{
		Schema::create('printings', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('printig_type_id')->unsigned();
			$table->integer('event_id')->unsigned();
			$table->string('source', 200);
			$table->string('nb_copies', 200);
			$table->string('nb_copies_surplus', 200);
		});
	}

	public function down()
	{
		Schema::drop('printings');
	}
}