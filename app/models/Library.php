<?php

class Library extends Eloquent {
	protected $table = "libraries";

	public function scopeSecret($query, $code){
		return $query->where('secretCode', '=', $code);
	}
	public function collections(){
		return $this->hasMany('Collection');
	}
}