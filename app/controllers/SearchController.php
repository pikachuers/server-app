<?php
	
class SearchController extends Controller{
	public function search($squery){
		//judul, isbn, pengarang 
		$b = Book::where('judul', 'LIKE', "%$squery%")
					->orWhere('isbn', 'LIKE', "%$squery%")
					->orWhere('pengarang', 'LIKE', "%$squery%")
					->get();
		$arr = array();
		foreach ($b as $c){
			$arr[]= [
				'id' => $c->id,
				'name' => $c->judul . " - " . $c->pengarang . " - " . $c->isbn . " (Tahun: ".$c->tahun.")" 
			];
		}
		return $arr;
	}
}