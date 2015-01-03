<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class RollbackTables extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('interfee');
		Schema::drop('intertransactions');
		Schema::drop('collections');
		Schema::drop('libraries');
		Schema::drop('books');
		Schema::drop('status');
	}

}
