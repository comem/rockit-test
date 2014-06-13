<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePlatformsTable extends Migration {

	public function up()
	{
		Schema::create('platforms', function(Blueprint $table) {
			$table->increments('id');
			$table->string('name', 100);
		});
	}

	public function down()
	{
		Schema::drop('platforms');
	}
}