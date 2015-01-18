<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/
Route::post('library/validate', function(){
	$perpuskey = Input::get('perpuskey');
	$p = Perpustakaan::secret($perpuskey)->first();
	if($p){
		return "true";
	}
	return "false";
});
Route::post('library/addcollection', function(){
	$perpuskey = Input::get('perpuskey');
	$idbuku = Input::get('idbuku');
	$p = Perpustakaan::secret($perpuskey)->first();
	
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