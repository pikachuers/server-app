<?php
/**
 * Created by PhpStorm.
 * User: Willy
 * Date: 10/29/2014
 * Time: 6:18 PM
 */

class BookTableSeeder extends Seeder {
	public function run(){
		Book::create(
			array(
				'judul' => 'Kode-kode jatuh cinta',
				'pengarang' => 'Willy',
				'dcc_code' => '421.219',
				'penerbit' => 'Penerbit Airlangga',
				'edisi' => '2' //nullable
				'isbn' => '234567892345678', //nullable
				'tahun' => '2014'
			)
		);
	}
} 