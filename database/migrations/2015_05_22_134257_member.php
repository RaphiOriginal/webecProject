<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Member extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('member', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('picture', 255);
			$table->string('name', 255);
			$table->string('prename', 255);
			$table->string('password', 255);
			$table->string('stv_number', 255);
			$table->string('email', 255);
			$table->string('adress', 255);
			$table->integer('PLZ');
			$table->string('location', 255);
			$table->integer('is_admin');
			$table->primary('id');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('member');
	}

}
