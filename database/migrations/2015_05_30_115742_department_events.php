<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class DepartmentEvents extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('department_events', function(Blueprint $table)
		{
			$table->integer('department')->unsigned();
			$table->integer('event')->unsigned();
			$table->foreign('department')->references('id')->on('department');
			$table->foreign('event')->references('id')->on('event');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('department_events');
	}

}
