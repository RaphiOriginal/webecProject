<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('members', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('picture', 255)->nullable();
			$table->string('name', 255)->nullable();
			$table->string('prename', 255)->nullable();
			$table->string('password', 255)->nullable();
			$table->string('stv_number', 255)->nullable();
			$table->string('email', 255)->nullable();
			$table->string('adress', 255)->nullable();
			$table->integer('PLZ')->nullable();
			$table->string('location', 255)->nullable();
			$table->integer('is_admin')->nullable();
			$table->datetime('created_at')->nullable();
			$table->datetime('updated_at')->nullable();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('members');
	}

}
