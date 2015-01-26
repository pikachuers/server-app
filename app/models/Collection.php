<?php

class Collection extends Eloquent {
	protected $table = "collections";
	
	public function library(){
		return $this->belongsTo('Library');
	}
}