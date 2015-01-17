<?php

class Perpustakaan extends Eloquent {
	protected $table = "libraries";

	public function scopeSecret($query, $code){
		return $query->where('secretCode', '=', $code);
	}
}