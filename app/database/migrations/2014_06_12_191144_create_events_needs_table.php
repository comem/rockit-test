<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateEventsNeedsTable extends Migration {

	public function up()
	{
		Schema::create('events_needs', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('nb_people');
			$table->integer('function_id')->unsigned();
			$table->integer('event_id')->unsigned();
		});
	}

	public function down()
	{
		Schema::drop('events_needs');
	}
}