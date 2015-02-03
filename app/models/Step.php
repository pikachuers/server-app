<?php

class Step extends Eloquent {
	protected $table= "steps";

	public function accept(){
		$this->accepted = true;
		$this->save();
	}
	public function intertransaction(){
		return $this->belongsTo('Intertransaction');
	}
	public function interfee(){
		return $this->hasMany('Interfee');
	}
	public function isEditable(){
		return ($this->step == $this->intertransaction->currentstep);
	}
}