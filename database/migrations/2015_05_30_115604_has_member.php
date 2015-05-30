<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class HasMember extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('has_member', function(Blueprint $table)
		{
			$table->integer('department')->unsigned();
			$table->integer('member')->unsigned();
			$table->foreign('department')->references('id')->on('department');
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
		Schema::drop('has_member');
	}

}
