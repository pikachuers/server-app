<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCollectionsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('collections', function(Blueprint $table)
		{
			$table->engine = 'INNODB';

			$table->increments('id');
			$table->unsignedInteger('library_id');
			$table->unsignedInteger('book_id');
			$table->integer('book_count')->default('0');

			$table->timestamps();
		});
		Schema::table('collections', function(Blueprint $table)
		{
			$table->foreign('library_id')->references('id')->on('libraries');
			$table->foreign('book_id')->references('id')->on('books');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('collections');
		Schema::drop('intertransactions');
		Schema::drop('libraries');
		Schema::drop('books');
		Schema::drop('status');
	}

}
