<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLibrariesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('libraries', function(Blueprint $table)
		{
			$table->engine="INNODB";
			$table->increments('id');
			$table->string('nama', 100);
			$table->unsignedInteger('kota')->nullable(); // untuk ongkoskirim.com
			$table->string('alamat', 100);
			$table->string('telepon', 25);
			$table->string('email', 100);
			$table->string('url', 100);
			$table->string('secretCode', 100);

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

	}

}
