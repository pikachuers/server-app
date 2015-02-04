<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateIntertransactionsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('intertransactions', function(Blueprint $table)
		{
			//PerpusA = Perpus Peminjam
			//PerpusB = Perpus Dipinjam
			//PerpusC = Perpus Tujuan
			$table->engine = 'INNODB';
			$table->increments('id');

			$table->unsignedInteger('perpusa');
			$table->unsignedInteger('perpusa_anggota_id');

			$table->unsignedInteger('perpusb');
			$table->unsignedInteger('perpusb_book_id')->nullable(); 

			$table->unsignedInteger('perpusc')->nullable();

			$table->unsignedInteger('perpusd')->nullable();

			$table->text('note')->nullable();

			$table->date('tanggal_peminjaman')->nullable();
			//Tgl peminjaman dimulai sejak buku sampai di perpus tujuan
			$table->date('tanggal_jatuhtempo')->nullable();
			//Tgl jatuh tempo = + 1 mgg dari tgl peminjaman.
			$table->date('tanggal_pengembalian')->nullable();

			$table->double('biaya')->nullable();
			$table->double('denda')->nullable();

			$table->unsignedInteger('currentstep')->default(0);
			$table->boolean('active')->default(true);
			$table->timestamps();
		});

		Schema::table('intertransactions', function(Blueprint $table){
			$table->foreign('perpusa')->references('id')->on('libraries');
			$table->foreign('perpusb')->references('id')->on('libraries');
			$table->foreign('perpusc')->references('id')->on('libraries');
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
