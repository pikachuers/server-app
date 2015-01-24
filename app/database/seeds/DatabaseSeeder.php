<?php

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Eloquent::unguard();

		$this->call('BookTableSeeder');
		Library::create([
			'nama' => 'Perpustakaan BPAD Jakarta TimurTenggara',
			'alamat' => 'Jalan Kenangan Indah',
			'telepon' => '080988722819',
			'email' => 'a@a.com',
			'url' => 'http://perpusa.isikuesionerku.net/public',
			'secretCode' => 'uhsduifhsodfhhw87ye8a3123y',
		]);
		// $this->call('UserTableSeeder');
	}

}
