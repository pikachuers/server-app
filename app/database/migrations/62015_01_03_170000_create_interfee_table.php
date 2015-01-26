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
			$table->engine = 'INNODB';

			//Object ini bisa dibuat jikalau terjadi pemotongan duit dari lokal!
			//
			$table->increments('id');
			$table->unsignedInteger('intertransaction_id')->nullable();
			$table->unsignedInteger('perpus_asal');
			$table->unsignedInteger('perpus_tujuan');
			$table->double('biaya');
			$table->text('berita'); //Computer Generated plis.
			$table->dateTime('waktu');
			$table->unsignedInteger('step')->nullable();
			$table->timestamps();
		});
		Schema::table('interfee', function(Blueprint $table)
		{
			$table->foreign('intertransaction_id')->references('id')->on('intertransactions');
			$table->foreign('perpus_asal')->references('id')->on('libraries');
			$table->foreign('perpus_tujuan')->references('id')->on('libraries');
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
