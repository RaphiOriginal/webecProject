<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDepartmentTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('departments', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('name', 255)->nullable();
			$table->string('description', 3000)->nullable();
			$table->string('location', 255)->nullable();
			$table->string('picture', 255)->nullable();
			$table->string('training_day', 255)->nullable();
			$table->time('straining_start')->nullable();
			$table->datetime('created_at')->nullable();
			$table->datetime('updated_at')->nullable();
		});

		Schema::create('department_member', function(Blueprint $table)
		{
			$table->integer('department_id')->unsigned()->index();
			$table->foreign('department_id')->references('id')->on('departments');

			$table->integer('member_id')->unsigned()->index();
			$table->foreign('member_id')->references('id')->on('members');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('departments');
		Schema::drop('department_member');
	}

}
