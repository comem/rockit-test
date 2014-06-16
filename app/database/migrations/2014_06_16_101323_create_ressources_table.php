<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateRessourcesTable extends Migration {

	public function up()
	{
		Schema::create('ressources', function(Blueprint $table) {
			$table->increments('id');
			$table->string('model', 50);
			$table->string('function', 400);
			$table->timestamps();
			$table->softDeletes();
			$table->unique(array('model','function'));
		});
	}

	public function down()
	{
		Schema::drop('ressources');
	}
}