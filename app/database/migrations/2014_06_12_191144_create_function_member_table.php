<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateFunctionMemberTable extends Migration {

	public function up()
	{
		Schema::create('function_member', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('function_id')->unsigned();
			$table->integer('member_id')->unsigned();
		});
	}

	public function down()
	{
		Schema::drop('function_member');
	}
}