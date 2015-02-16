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
	public function scopeInter($query, $inter_id){
		return $query->where('intertransaction_id', '=', $inter_id);
	}
	public function scopeStep($query, $s){
		return $query->where('step', '=', $s);
	}
}