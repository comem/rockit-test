<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateEventsTable extends Migration {

	public function up()
	{
		Schema::create('events', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamp('start_date_hout')->unique();
			$table->integer('event_type_id')->unsigned();
			$table->integer('image_id')->unsigned();
			$table->timestamp('ending_date_hour')->nullable();
			$table->time('opening_doors')->nullable();
			$table->string('title', 200);
			$table->integer('nb_meal');
			$table->integer('nb_vegan_meal');
			$table->string('nb_places');
			$table->text('meal_notes')->nullable();
			$table->text('notes')->nullable();
			$table->timestamps();
		});
	}

	public function down()
	{
		Schema::drop('events');
	}
}