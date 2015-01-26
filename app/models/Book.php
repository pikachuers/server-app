<?php

class Book extends Eloquent{
	protected $table = "books";

	public function collections(){
		return $this->hasMany('Collection');
	}
}