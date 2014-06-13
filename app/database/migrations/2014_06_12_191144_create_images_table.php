<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateImagesTable extends Migration {

	public function up()
	{
		Schema::create('images', function(Blueprint $table) {
			$table->increments('id');
			$table->string('name_de', 100)->nullable();
			$table->string('caption_de', 200)->nullable();
			$table->string('source', 400);
			$table->timestamps();
			$table->integer('artist_id')->unsigned();
		});
	}

	public function down()
	{
		Schema::drop('images');
	}
}