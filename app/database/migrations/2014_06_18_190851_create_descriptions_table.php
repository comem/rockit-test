<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDescriptionsTable extends Migration {

	public function up()
	{
		Schema::create('descriptions', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('genre_id')->unsigned();
			$table->integer('artist_id')->unsigned();
		});
	}

	public function down()
	{
		Schema::drop('descriptions');
	}
}