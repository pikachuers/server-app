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
			'idpropinsi' => 'required|numeric',
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
			$x->kota = Input::get('idpropinsi');
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
Route::get('library_list', function(){
	$l = Library::all();
	$a = array();
	foreach($l as $v){
		$a[] = [
			'id' => $v->id,
			'nama' => $v->nama
		];
	}
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
			->get(['libraries.nama', 'libraries.url' ,'collections.book_count']);
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