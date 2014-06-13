<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAddressesTable extends Migration {

	public function up()
	{
		Schema::create('addresses', function(Blueprint $table) {
			$table->increments('id');
			$table->string('street', 300);
			$table->string('npa', 10);
			$table->string('city', 100);
			$table->string('country', 100)->nullable();
		});
	}

	public function down()
	{
		Schema::drop('addresses');
	}
}