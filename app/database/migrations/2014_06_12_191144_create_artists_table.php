<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateArtistsTable extends Migration {

	public function up()
	{
		Schema::create('artists', function(Blueprint $table) {
			$table->increments('id');
			$table->string('name', 100);
			$table->string('short_description', 200);
			$table->text('complete_description');
			$table->timestamps();
		});
	}

	public function down()
	{
		Schema::drop('artists');
	}
}