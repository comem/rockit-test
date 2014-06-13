<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePublicationsTable extends Migration {

	public function up()
	{
		Schema::create('publications', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('platform_id')->unsigned();
			$table->integer('event_id')->unsigned();
			$table->string('url', 300);
			$table->timestamps();
			$table->softDeletes();
		});
	}

	public function down()
	{
		Schema::drop('publications');
	}
}