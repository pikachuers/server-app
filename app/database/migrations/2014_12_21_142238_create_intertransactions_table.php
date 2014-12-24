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
			$table->unsignedInteger('perpusa_staff_id')->nullable();

			$table->unsignedInteger('perpusb');
			$table->unsignedInteger('perpusb_staff_id')->nullable();
			$table->unsignedInteger('perpusb_collection_id')->nullable(); 

			$table->unsignedInteger('perpusc');
			$table->unsignedInteger('perpusc_staff_id')->nullable();

			$table->unsignedInteger('status');
			$table->text('note')->nullable();

			$table->date('tanggal_peminjaman')->nullable();
			//Tgl peminjaman dimulai sejak buku sampai di perpus tujuan
			$table->date('tanggal_jatuhtempo')->nullable();
			//Tgl jatuh tempo = + 1 mgg dari tgl peminjaman.
			$table->date('tanggal_pengembalian')->nullable();

			$table->double('biaya')->nullable();
			$table->double('denda')->nullable();

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
		Schema::table('intertransactions', function(Blueprint $table)
		{
			//
		});
	}

}
