<?php

class Interfee extends Eloquent {
	protected $table = "interfee";
	
	public function step (){
		return $this->belongsTo('Step');
	}
}