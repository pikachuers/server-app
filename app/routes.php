<?php

/**
View Area



**/
Route::get('template', function(){
	return  View::make('template');
});
Route::get('login', function(){
	return View::make('login');
});
Route::post('login', function(){
	$rules = array(
		'email' => 'required|email',
		'password' => 'required|min:3'
	);
	$logindat = array(
		'email' => Input::get('email'),
		'password' => Input::get('password')
	);
	$validator = Validator::make($logindat, $rules);
	if($validator->fails()){
		return Redirect::back()->withErrors($validator)->withInput(Input::except('password'));
	} else {
		if(Auth::attempt($logindat, true)){
			//return Redirect::back();
			return Redirect::to('beranda');
		} else {
			//login fail
			$errbag = new Illuminate\Support\MessageBag;
			$errbag->add('loginerr', 'Login gagal! <br/>Tolong cek kembali email dan password Anda.');
			return Redirect::back()->withErrors($errbag)->withInput(Input::except('password'));
		}
	}
});

/**
Perpustakaan
 **/
Route::group(['prefix' => 'perpustakaan'], function(){
	Route::get('/', function(){
		$p = Library::all();
		return View::make('crud.perpustakaan.listall')
			->with('perpus', $p);
	});
	Route::post('create', function(){

		$rules = [
			'namaperpus' => 'required|min:5',
			'idkota' => 'required|numeric',
			'alamat' => 'required|min:10',
			'telepon' => 'required',
			'email' =>'email|required',
			'url' => 'required'
		];
		$validator = Validator::make(Input::all(), $rules);
		if($validator->fails()){
			$m = "<span style='text-align: left'><ul>";
			$x = $validator->messages()->toArray();

			foreach($x as $k => $v){
				$m .= "<li>".$v[0]."</li>";
			}
			$m.= '</ul></span>';
			return array(
				'status' => 'NG',
				'message' => $m
			);
		} else {
			$x = new Library;
			$x->nama = Input::get('namaperpus');
			$x->kota = Input::get('idkota');
			$x->alamat = Input::get('alamat');
			$x->telepon = Input::get('telepon');
			$x->email = Input::get('email');
			$x->url = Input::get('url');
			$x->secretCode = str_random(40);
			$x->save();
			return [
				'status' => 'OK',
				'message' => 'Data perpustakaan berhasil disimpan, silakan refresh halaman untuk melihat'
			];
		}
	});
});


/** 
	Request from libraries to Server Area



**/

Route::post('activetransactionbyemail', function(){
	try {
	$perpusAid = Input::get('perpusAid');
	$pA = Library::find(Input::get('perpusAid'));
	if(!$pA){
		$pA = Library::secret(Input::get('perpusAid'))->first();
	}
	$email_anggota = Input::get('email_anggota');
	$id_email_anggota = API::get($pA->url . "/user/id" . "/" . $email_anggota);
	if($id_email_anggota == ""){
		$id_email_anggota = 0;
	}

	$t = Intertransaction::where('active', '=', '1')
					->where('perpusa', '=', $perpusAid)
					->where('perpusa_anggota_id', '=', $id_email_anggota)
					->first();
	if($t){
		return $t->id;
	} else {
		return 0;
	}
	} catch (Exception $e){ return $e->getMessage();}
});

Route::post('library/validate', function(){
	$perpuskey = Input::get('perpuskey');
	$p = Library::secret($perpuskey)->first();
	if($p){
		return "true";
	}
	return "false";
});
Route::post('library/addcollection', function(){
	$perpuskey = Input::get('perpuskey');
	$idbuku = Input::get('idbuku');
	$p = Library::secret($perpuskey)->first();
	
	$c = Collection::where('library_id', '=', $p->id)->where('book_id', '=', $idbuku)->first();;
	if($c){
		$c->book_count = $c->book_count + 1;
		$c->save();
	} else {
		$c = new Collection;
		$c->library_id = $p->id;
		$c->book_id = $idbuku;
		$c->book_count = 1;
		$c->save();
	}
});
Route::get('/search/{squery}', 'SearchController@search');
Route::get('/getbookinfo/{id}', function($id){
	$b = Book::find($id);
	return ($b)? $b : "false";
});
Route::get('librarylist', function(){
	$l = Library::all();
	$a = array();
	if(Input::get('simple', 'false') == 'true'){
		foreach ($l as $v) {
			$a[$v->id] = $v->nama;
		}
	} else {
		foreach($l as $v){
			$a[] = [
				'id' => $v->id,
				'name' => $v->nama
			];
		}
	}
	return $a;
});
Route::post('librarybykey', function(){
	$perpuskey = Input::get('perpuskey');
	$p = Library::secret($perpuskey)->first();
	return $p->id;
});
Route::get('emailonlibrary', function(){
	$email = Input::get('email');
	$perpusid = Input::get('perpusid');
	$p = Library::find($perpusid);
	return API::get($p->url ."/user/$email"); 
});

Route::post('topupuser', function(){
	$rules = [
		'perpuskey' => 'required',
		'perpustujuan' => 'required|numeric',
		'userid' => 'required',
		'duit' => 'required|min:1000'
	];
	$v = Validator::make(Input::all(), $rules);
	if($v->fails()){
		return [
			'status' => 'NG',
			'message' => 'Ada kesalahan data'
		];
	} else {
		$d = new \DateTime;
		$p_asal = Library::secret(Input::get('perpuskey'))->first();
		$p_tujuan = Library::find(Input::get('perpustujuan'));
		$l = $p_tujuan->url . '/topuplokal' .'/'. $userid . '/' . $duit;
		API::get($l);
		$if = new Interfee;
		$if->perpus_asal = $p_asal->id;
		$if->perpus_tujuan = $p_tujuan->id;
		$if->berita = "Top up Saldo e-wallet";
		$if->biaya = Input::get('duit');
		$if->waktu = $d;
		$if->save();

		return [
			'status' => 'OK',
			'message' => 'Saldo sebesar '.Input::get('duit').' sudah di Top Up'
		];
	}
});
Route::get('perpusbookcounts/{bookid}', function($bookid){
	$c = DB::table('collections')
			->join('libraries', 'collections.library_id', '=', 'libraries.id')
			->where('book_id', '=', $bookid)
			->get(['libraries.id','libraries.nama', 'libraries.url' ,'collections.book_count']);
	return $c;
});


Route::get('getbookcount', function(){
	return Book::all()->count();
});
Route::get('bookmaxid', function(){
	return Book::max('id');
});

Route::get('getbooks/{lastbookid}', function($lastbookid){
	set_time_limit(0);

	$arr = array();
	$lastbookidserver = Book::max('id');

	++$lastbookid; 
	for($x = intval($lastbookid); $x <= $lastbookidserver; $x++){
		$b = Book::find($x);
		if($b){
			$arr[] = $b;
		}
	}
	return base64_encode(json_encode($arr));
});

/**
	Request Server to Various API (if any)


**/
Route::get('province_list', function(){
	//API
	$r = API::get('http://rajaongkir.com/api/province?key=4f5e1315e648d5137c5eb74efed01b71');
	$r = $r['rajaongkir']['results'];
	$a = array();
	foreach ($r as $v) {
		$a[] = ['id'=>$v['province_id'], 'name'=>$v['province']];
	}
	return $a;
});
Route::get('city_list/{id}', function($id){
	//API
	$r = API::get("http://rajaongkir.com/api/city?key=4f5e1315e648d5137c5eb74efed01b71&province=$id");
	$r = $r['rajaongkir']['results'];
	$a = array();
	foreach ($r as $v) {
		$a[] = ['id'=>$v['city_id'], 'name'=> $v['city_name'] .' ('.$v['type'].')'];
	}
	return $a;
});

/**
Add Book MODULE!!! IMPORTANT
**/

Route::post('processAddRequest', function(){
	$pengarang = Input::get('pengarang');
	$judul = Input::get('judul');
	$ddc_code = Input::get('ddc_code');
	$penerbit = Input::get('penerbit');
	$edisi =  Input::get('edisi');
	$tahun = Input::get('tahun');
	$isbn = Input::get('isbn');
	$book_image_name = "placeholder.jpg";
	if(Input::get('img') != ''){
		$path = 'uploads/';
		$name = microtime(true);
		$img2 = Image::make(Input::get('img'));
		$img2->save($path.$name.'.jpg');
		$book_image_name = $name.'.jpg';
	}
	$book = new Book;
	$book->pengarang = $pengarang;
	$book->judul = $judul;
	$book->ddc_code = $ddc_code;
	$book->penerbit = $penerbit;
	$book->edisi = $edisi;
	$book->tahun = $tahun;
	$book->isbn = $isbn;    		
	$book->book_image_name = $book_image_name;
	$book->save();
	return "OK";
});

/**
 * End
 */
Route::post('exportconfig', function(){
	try {
	$id = Input::get('perpusid');
	$dbhost = Input::get('dbhost');
	$dbname = Input::get('dbname');
	$dbuser = Input::get('dbuser');
	$dbpass = Input::get('dbpass');
	$sessionname = $dbname;

	$l = Library::find($id);
	$perpus_key = array ('perpustakaan.nama', 'perpustakaan.alamat', 'perpustakaan.notelp', 'perpustakaan.email','perpustakaan.server_url', 'perpustakaan.server_token');
	$perpus_val = array(
		$l->nama,
		$l->alamat,
		$l->telepon,
		$l->email,
		Request::root(),
		$l->secretCode
	);

	$db_key = array('database.connections.mysql.host','database.connections.mysql.database','database.connections.mysql.username','database.connections.mysql.password');
	$db_val = array($dbhost, $dbname, $dbuser, $dbpass);

	$ses_key = 'session.cookie';
	$ses_val = $dbname;
	$arr =  [
		[
			$perpus_key, $perpus_val
		],
		[
			$db_key, $db_val
		],
		[
			$ses_key, $ses_val
		]
	];
	return base64_encode(serialize($arr));
} catch (Exception $e) { return $e->getMessage(); }
});



/**
 Pesanan
 */
Route::post('createpemesanan', function(){	
	try {

		$perpusBid = Input::get('perpusBid');
		$perpusCid = Input::get('perpusCid');
		$bookid = Input::get('bookid');
		$anggotaid = Input::get('anggotaid');
		$perpusAkey = Input::get('perpusAkey');

		$pA = Library::secret($perpusAkey)->first();
		$pB = Library::find($perpusBid);
		$pC = Library::find($perpusCid);

		$a = Intertransaction::where('perpusa', '=', $pA->id)
								->where('perpusa_anggota_id', $anggotaid)
								->where('active', '=', true)
								->get();
		$a = $a->count();
		if($a > 0){
			return [
				'status' => 'NG',
				'message' => 'Anda masih punya peminjaman interlib yang aktif'
			];
		} else {
			$i = new Intertransaction;
			$i->perpusa = $pA->id;
			$i->perpusa_anggota_id = $anggotaid;
			$i->perpusb = $perpusBid;
			$i->perpusc = $perpusCid;
			$i->perpusb_book_id = $bookid;

			
			$ongkoses = API::post('http://rajaongkir.com/api/cost',[
				'key' => '4f5e1315e648d5137c5eb74efed01b71',
				'origin' => $pB->kota,
				'destination' => $pC->kota,
				'weight' => 1,
				'courier' => 'jne' 
			]);
			$ongkos = $ongkoses['rajaongkir']['results'][0]['costs'][1]['cost'][0]['value'];
			$hasil = API::get($pA->url."/kuranginlokal/$anggotaid/".$ongkos);
			if($hasil == 'false'){
				return [
					'status' => 'NG',
					'message' => 'Saldo tidak cukup. Minimal Rp.' . $ongkos
				];
			}

			$us = API::get($pA->url ."/userforserver/".$anggotaid);
			$ub = API::get($pB->url ."/bookforserver/".$bookid);

			$arrcon = [$us, $ub, 'deposit'=>$ongkos];


			$i->save();
			$s = new Step;
			$s->step = 0;
			$s->content = json_encode($arrcon);
			$s->intertransaction_id = $i->id;
			$s->save();
			return [
				'status' => 'OK',
				'message' => 'Pemesanan akan segera diproses'
			];
		} 
	} catch (Exception $e) { return $e->getMessage(); }
});

Route::get('interlib_locations/{id}', function($id){
	$i = Intertransaction::find($id);
	return [
		"perpusa" => Library::find($i->perpusa)->location(),
		"perpusb" => Library::find($i->perpusb)->location(),
		"perpusc" => Library::find($i->perpusc)->location(),
		"perpusd" => (Library::find($i->perpusd))? Library::find($i->perpusd)->location() : ""
	];
});

Route::post('interlib_transactions', function(){
	$pk = Input::get('perpusKey');
	$p_req = Library::secret($pk)->first();
	$its = Intertransaction::where('perpusa', '=', $p_req->id)
							->orWhere('perpusb', '=', $p_req->id)
							->orWhere('perpusc', '=', $p_req->id)
							->orWhere('perpusd', '=', $p_req->id)
							->orderBy('active', 'desc')
							->orderBy('currentstep', 'asc')->get();
	return $its;
});
Route::get('interlib_transaction_details/{id}', function($id){
	$i = Intertransaction::find($id);
	return $i;
});
Route::get('interlib_transaction_step/{id}', function($id){
	return Intertransaction::find($id)->steplist();
});
Route::get('interlib_transaction_step/{id}/{stepno}', function($id, $stepno){
	$s = Step::inter($id)->step($stepno)->first();
	if($s){
		return $s->content;
	} else {
		return "";
	}
});

Route::get('interlib_transactions_actions_reject_anggota', function(){
	try {
		$id = Input::get('id');
		$tr = Intertransaction::find($id);
		$tr->currentstep = 9;
		$tr->active = 0;

		$s = Step::inter($id)->step(0)->first();
		$c = json_decode($s->content);
		$deposit = $c->deposit;
		$li = Library::find($tr->perpusa);

		API::get($li->url."/topuplokal/$tr->perpusa_anggota_id/$deposit");
		$tr->save();
	} catch (Exception $e){
		 return $e->getMessage(). " $id"; 
	}
	
});
Route::get('interlib_transactions_actions_reject_staff', function(){
	$id = Input::get('id');
	$tr = Intertransaction::find($id);
	$tr->currentstep = 8;
	$tr->active = 0;
	$s = Step::inter($id)->step(0)->first();
	$c = json_decode($s->content);
	$deposit = $c->deposit;
	$li = Library::find($tr->perpusa);

	API::get($li->url."/topuplokal/$tr->perpusa_anggota_id/$deposit");
	$tr->save();
});
Route::post('interlib_transactions_actions_accept_step0_staff', function(){
	try {
		$id = Input::get('id');
		$perpusbkey = Input::get('perpuskey');
		$i = Intertransaction::find($id);
		if($i->currentstep == 0){
			$l = Library::find($i->perpusb);
			if($l->secretCode == $perpusbkey){
				$i->currentstep = 1;
				$i->save();
				$s = new Step;
				$s->intertransaction_id = $id;
				$s->step=1;
				$s->save();
			}
		}	
	} catch (Exceptipon $e){
		return $e->getMessage();
	}
});
Route::post('interlib_transactions_actions_insert_resi_step1_staff', function(){
	try {
	$id = Input::get('id');
	$perpusbkey =Input::get('perpuskey');
	$resi = Input::get('resi');
	$idkoleksi = Input::get('idkoleksi');

	$i = Intertransaction::find($id);
	if($i->currentstep == 1){
		$l = Library::find($i->perpusb);
		if($l->secretCode == $perpusbkey){
			$olst = Step::inter($id)->step(1)->first();
			$olst->content = json_encode(["resi" => $resi, "idkoleksi" => $idkoleksi]);
			$olst->save();

			API::get($l->url . "/createintertransaction/".$idkoleksi ."/".$i->id);

			$i->currentstep = 2;
			$i->save();

			$s = new Step;
			$s->intertransaction_id = $id;
			$s->step=2;
			$s->save();

			$if = new Interfee;
			$if->stepdetail_id = $i->id; //intertransaction_id
			$if->perpus_asal = $i->perpusa;
			$if->perpus_tujuan = $i->perpusb;

			$s2 = Step::inter($id)->step(0)->first();
			$c2 = json_decode($s2->content);
			$if->biaya = $c2->deposit;

			$if->berita = "Biaya Pengiriman";
			$if->waktu = new \DateTime;

			$if->save();
		}
	}			
} catch (Exception $e) {$e->getMessage();}
});
Route::post('interlib_transactions_actions_konfirmasi_kedatangan_step2_staff', function(){
	try {
	$id = Input::get('id');
	$perpusckey = Input::get('perpuskey');
	$konfirmasi = Input::get('konfirmasi');
	$i = Intertransaction::find($id);
	if($i->currentstep == 2){
		$l = Library::find($i->perpusc);
		if($l->secretCode == $perpusckey){
			$olst = Step::inter($id)->step(2)->first();
			$olst->content = $konfirmasi;
			$olst->save();

			$i->currentstep = 3;
			$i->save();

			$s = new Step;
			$s->intertransaction_id = $id;
			$s->step=3;
			$s->save();
			//send email to member!
			$s0 = Step::inter($id)->step(0)->first();
			$c0 = json_decode($s0->content, TRUE);
			$infouser = new SimpleArray($c0["0"]);
			$infobuku = new SimpleArray($c0["1"]);
			$data = [
				'email' => $infouser->email,
				'nama' => $infouser->nama,
				'konten' => "Buku dengan judul $infobuku->judul, yang dipesan telah sampai di $l->nama (alamat: $l->alamat | telepon: $l->telepon) pada $konfirmasi"
			];
			$view22 = View::make('mailtemplate')
						->with('nama', $data['nama']) 
						->with('email', $data['email'])
						->with('konten', $data['konten']);
			/*Mail::send('mailtemplate', $data, function($message) use ($data){
			    $message->to($data['email'], Config::get('perpustakaan.namaserver'))->subject('Pemberitahuan Status Pemesanan');
			});
			*/
			API::post('https://mandrillapp.com/api/1.0/messages/send.json', [
				"key" => "oWnI-LxjlJJp5d1bTl74AQ",
				"message" => [
				       "html" => $view22->render(),
				       "subject": "Pemberitahuan Status Pemesanan",
				       "from_email": "eliclib.email.notifier@gmail.com",
				       "from_name": Config::get('serverperpustakaan.namaserver'),
				       "to": [
				           {
				               "email": $data['email'],
				               "name": $data['nama'],
				               "type": "to"
				           }
				       ],
				]
			]);
		}
	}
} catch (Exception $e) { $e->getMessage(); }
});
Route::post('interlib_transactions_actions_mulai_peminjaman_step3_staff', function(){
	try {
		$id = Input::get('id');
		$perpusckey = Input::get('perpuskey');
		$i = Intertransaction::find($id);
		if($i->currentstep == 3){
			$l = Library::find($i->perpusc);
			if($l->secretCode == $perpusckey){
				$i->currentstep = 4;
				$i->tanggal_peminjaman = Carbon::now()->toDateString();
				$i->tanggal_jatuhtempo = Carbon::now()->addDays(7)->toDateString();
				$i->save();
				$s = new Step;
				$s->intertransaction_id = $id;
				$s->step=4;
				$s->save();
			}
		}
	} catch (Exception $e) { $e->getMessage(); }
});


Route::post('interlib_transactions_actions_pengembalian_check_step4_staff', function(){
	try {
		$id = Input::get('id');
		$perpusdkey = Input::get('perpuskey');
		$konfirmasi = Input::get('konfirmasi');

		$i = Intertransaction::find($id);
		
			$now = Carbon::now();
			$jatuhtempo = Carbon::createFromFormat('Y-m-d', $i->tanggal_jatuhtempo);
			if($now->gt($jatuhtempo)){
				$denda = 1000 * $jatuhtempo->diffInDays($now);
			} else {
				$denda = 0;
			}
	

		$pD = Library::secret($perpusdkey)->first();
		$pB = Library::find($i->perpusb);
		$ongkoses = API::post('http://rajaongkir.com/api/cost',[
			'key' => '4f5e1315e648d5137c5eb74efed01b71',
			'origin' => $pD->kota,
			'destination' => $pB->kota,
			'weight' => 1,
			'courier' => 'jne' 
		]);
		$biayaantar = $ongkoses['rajaongkir']['results'][0]['costs'][1]['cost'][0]['value'] or 0;
		$pA = Library::find($i->perpusa);		
		$us = API::get($pA->url ."/userforserver/".$i->perpusa_anggota_id);


		return [
			"denda" => $denda,
			"biayaantar" => $biayaantar,
			"user" => $us
		];
	} catch (Exception $e) { $e->getMessage(); }
});

Route::post('interlib_transactions_actions_pengembalian_step4_staff', function(){
	try {
		$id = Input::get('id');
		$perpusdkey = Input::get('perpuskey');
		$konfirmasi = Input::get('konfirmasi');

		$i = Intertransaction::find($id);
		
			$now = Carbon::now();
			$jatuhtempo = Carbon::createFromFormat('Y-m-d', $i->tanggal_jatuhtempo);
			if($now->gt($jatuhtempo)){
				$denda = 1000 * $jatuhtempo->diffInDays($now);
			} else {
				$denda = 0;
			}
	

		$pD = Library::secret($perpusdkey)->first();
		$pB = Library::find($i->perpusb);
		$ongkoses = API::post('http://rajaongkir.com/api/cost',[
			'key' => '4f5e1315e648d5137c5eb74efed01b71',
			'origin' => $pD->kota,
			'destination' => $pB->kota,
			'weight' => 1,
			'courier' => 'jne' 
		]);
		$biayaantar = $ongkoses['rajaongkir']['results'][0]['costs'][1]['cost'][0]['value'] or 0;
		$pA = Library::find($i->perpusa);
		$us = API::get($pA->url ."/userforserver/".$i->perpusa_anggota_id);
		$us = new SimpleArray($us);
		if($us->kredit >= ($biayaantar + $denda)){
			$tm = $biayaantar + $denda;
			$hasil = API::get($pA->url."/kuranginlokal/$i->perpusa_anggota_id/$tm");
			if($hasil == "false"){
				return [
					"status" => 'NG',
					"message" => 'Saldo tidak cukup'
				];
			} else {
				$step4 = Step::inter($id)->step(4)->first();
				$step4->content = json_encode(["denda" => $denda, "biayaantar" => $biayaantar]);
				$step4->save();

				$interfee_denda = new Interfee;
				$interfee_denda->stepdetail_id = $id;
				$interfee_denda->biaya = $denda;
				$interfee_denda->berita = "Denda Buku";
				$interfee_denda->perpus_asal = $pA->id;
				$interfee_denda->perpus_tujuan = $pA->id; //intended
				$interfee_denda->save();


				$step5 = new Step;
				$step5->intertransaction_id = $id;
				$step5->step = 5;
				$step5->save();

				$i->tanggal_pengembalian = Carbon::now()->toDateString();
				$i->perpusd = $pD->id;
				$i->currentstep = 5;
				$i->save();
				return [
					"status" => 'OK',
					"message" => 'Transaksi Sukses'
				];
			}
		} else {
			return [
				"status" => 'NG',
				"message" => "Saldo tidak cukup"
			];
		}
	} catch (Exception $e) { $e->getMessage(); }
});
Route::post('interlib_transactions_actions_insert_resi_step5_staff', function(){
	try {
	$id = Input::get('id');
	$perpusdkey =Input::get('perpuskey');
	$resi = Input::get('resi');

	$i = Intertransaction::find($id);
	if($i->currentstep == 5){
		$l = Library::find($i->perpusd);
		if($l->secretCode == $perpusdkey){
			$olst = Step::inter($id)->step(5)->first();
			$olst->content = json_encode(["resi" => $resi]);
			$olst->save();

			//API::get($l->url . "/createintertransaction/".$idkoleksi ."/".$i->id);

			$i->currentstep = 6;
			$i->save();

			$s = new Step;
			$s->intertransaction_id = $id;
			$s->step=6;
			$s->save();

			$if = new Interfee;
			$if->stepdetail_id = $i->id; //intertransaction_id
			$if->perpus_asal = $i->perpusa;
			$if->perpus_tujuan = $i->perpusd;

			$s2 = Step::inter($id)->step(4)->first();
			$c2 = json_decode($s2->content);
			$if->biaya = $c2->biayaantar;

			$if->berita = "Biaya Pengiriman";
			$if->waktu = new \DateTime;

			$if->save();
		}
	}			
} catch (Exception $e) {$e->getMessage();}
});
Route::post('interlib_transactions_actions_konfirmasi_kedatangan_step6_staff', function(){
	try {
	$id = Input::get('id');
	$perpusbkey = Input::get('perpuskey');
	$konfirmasi = Input::get('konfirmasi');
	$i = Intertransaction::find($id);
	if($i->currentstep == 6){
		$l = Library::find($i->perpusb);
		if($l->secretCode == $perpusbkey){
			$olst = Step::inter($id)->step(6)->first();
			$olst->content = $konfirmasi;
			$olst->save();

			$i->currentstep = 7;
			$i->active = false;
			$i->save();

			$s = new Step;
			$s->intertransaction_id = $id;
			$s->step=7;
			$s->save();

			$pB = Library::find($i->perpusb);

			API::get($pB->url . "/closetransaction/" . $i->id);
			// $s0 = Step::inter($id)->step(5)->first();
			// $c0 = json_decode($s0->content);
			// $infouser = new SimpleArray($c0["0"]);
			// $infobuku = new SimpleArray($c0["1"]);
			// $data = [
			// 	'email' => $infouser->email,
			// 	'nama' => $infouser->nama,
			// 	'konten' => "Buku dengan judul $infobuku->judul, yang dipesan telah sampai di $l->nama (alamat: $l->alamat | telepon: $l->telepon) pada $konfirmasi"
			// ];
			// Mail::send('mailtemplate', $data, function($message) use ($data){
			//     $message->to($data['email'], Config::get('perpustakaan.namaserver'))->subject('Pemberitahuan Status Pemesanan');
			// });
		}
	}
} catch (Exception $e) { $e->getMessage(); }
});
// P1 step 0 konfirmasi pemesanan orang, wait for perpusB, deposit kredit (anggota -- kredit)
		//cancel by perpusB or Anggota (kalo cancel, balikin kredit)
	//----	
// P2 step 1 pengiriman, wait for perpusB, isi resi dan send by perpusB (editable) | perpusB create transaction if acc & bikin interfee A->B sbyk deposit (step(0)->message, 
		//cancel by perpusB or Anggota (kalo cancel, balikin kredit)
// P2 step 2 penerimaan, wait for perpusC
	//-----
// P3 step 3 peminjaman, wait for perpusC, start intertransaction (kasi tanggal mulai, jatuh tempo)
// P3 step 4 pengembalian, init by perpusD, end intertransaction count denda with 1000 / hari, kasi tanggal pengmbalian
	//count denda  + biaya pengiriman(D->B), jika tidak cukup segitu maka tidak bisa dikembalikan.
	// create Interfee A->A sebesar denda
	// potong saldo user sebesar biaya pengiriman + denda
	//-----
// P4 step 5 pengiriman, wait for perpusD, isi resi dan send by perpusD (editable) | bikin interfee A->D sbyk deposit (step(4)->message)
// P4 step 6 penerimaan, wait for perpusB, perpusB close transaction local, set interntransac as inactive