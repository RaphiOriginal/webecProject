<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEventTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('events', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('name', 255)->nullable();
			$table->string('location', 255)->nullable();
			$table->integer('amount')->nullable();
			$table->string('description', 3000)->nullable();
			$table->datetime('startdate')->nullable();
			$table->string('picture', 55)->nullable();
			$table->datetime('created_at')->nullable();
			$table->datetime('updated_at')->nullable();
		});

		Schema::create('department_event', function(Blueprint $table)
		{
			$table->integer('department_id')->unsigned()->index();
			$table->foreign('department_id')->references('id')->on('departments');

			$table->integer('event_id')->unsigned()->index();
			$table->foreign('event_id')->references('id')->on('events');
		});

		Schema::create('event_member', function(Blueprint $table)
		{
			$table->integer('event_id')->unsigned()->index();
			$table->foreign('event_id')->references('id')->on('events');

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
		Schema::drop('events');
		Schema::drop('event_member');
		Schema::drop('department_event');
	}

}
