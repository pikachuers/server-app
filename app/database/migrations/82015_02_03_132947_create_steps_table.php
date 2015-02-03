<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStepsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('steps', function(Blueprint $table)
		{
			$table->increments('id');
			$table->unsignedInteger('intertransaction_id');
			$table->integer('step');
			$table->text('content'); //json

			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('steps');
	}

}
