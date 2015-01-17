<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInterfeeTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('interfee', function(Blueprint $table)
		{
			//Object ini bisa dibuat jikalau terjadi pemotongan duit dari lokal!
			$table->increments('id');
			$table->unsignedInteger('intertransaction_id');
			$table->unsignedInteger('perpusAsal');
			$table->unsignedInteger('perpusTujuan');
			$table->double('biaya');
			$table->text('berita'); //Computer Generated plis.
			$table->dateTime('waktu');
			$table->unsignedInteger('step');
			$table->timestamps();
		});
		Schema::table('interfee', function(Blueprint $table)
		{
			$table->foreign('intertransaction_id')->references('id')->on('intertransactions');
			$table->foreign('perpusAsal')->references('id')->on('libraries');
			$table->foreign('perpusTujuan')->references('id')->on('libraries');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		//
	}

}
