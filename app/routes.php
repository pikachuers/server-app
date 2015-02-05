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
	foreach($l as $v){
		$a[] = [
			'id' => $v->id,
			'name' => $v->nama
		];
	}
	return $a;
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

// step 0 konfirmasi pemesanan orang, wait for perpusB, deposit kredit (anggota -- kredit)
		//cancel by perpusB or Anggota (kalo cancel, balikin kredit)
	//----	
// step 1 pengiriman, wait for perpusB, isi resi dan send by perpusB (editable) | perpusB create transaction if acc & bikin interfee A->B sbyk deposit (step(0)->message, 
		//cancel by perpusB or Anggota (kalo cancel, balikin kredit)
// step 2 penerimaan, wait for perpusC
	//-----
// step 3 peminjaman, wait for perpusC, start intertransaction (kasi tanggal mulai, jatuh tempo)
// step 4 pengembalian, init by perpusD, end intertransaction count denda with 1000 / hari, kasi tanggal pengmbalian
	//count denda  + biaya pengiriman(D->B), jika tidak cukup segitu maka tidak bisa dikembalikan.
	// create Interfee A->B sebesar denda
	// deposit (step(4)->message) sebesar biaya pengiriman
	//-----
// step 5 pengiriman, wait for perpusD, isi resi dan send by perpusD (editable) | bikin interfee A->D sbyk deposit (step(4)->message)
// step 6 penerimaan, wait for perpusB, perpusB close transaction local, set interntransac as inactive