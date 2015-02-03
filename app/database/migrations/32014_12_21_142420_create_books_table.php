<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBooksTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('books', function(Blueprint $table)
		{
			$table->engine="INNODB";
			$table->increments('id');
			$table->string('judul', 100);
			$table->string('pengarang', 100);
			$table->string('ddc_code', 20);
			$table->string('penerbit', 100);
			$table->string('edisi', 100)->nullable();
			$table->string('tahun', 10);
			$table->string('isbn', 100)->nullable();
			$table->string('book_image_name', 200)->nullable();

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
		Schema::table('books', function(Blueprint $table)
		{
			//
		});
	}

}
