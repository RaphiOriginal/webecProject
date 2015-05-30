<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class HasParticipant extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('has_participant', function(Blueprint $table)
		{
			$table->integer('event')->unsigned();
			$table->integer('member')->unsigned();
			$table->foreign('event')->references('id')->on('event');
			$table->foreign('member')->references('id')->on('member');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('has_participant');
	}

}
