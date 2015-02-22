<?php

class Library extends Eloquent {
	protected $table = "libraries";

	public function scopeSecret($query, $code){
		return $query->where('secretCode', '=', $code);
	}
	public function collections(){
		return $this->hasMany('Collection');
	}
	public function location(){
		if(Cache::has("lib_location_str_".$this->id)){
			return Cache::get("lib_location_str_".$this->id);
		}

		$loc = API::get('http://rajaongkir.com/api/city?key=4f5e1315e648d5137c5eb74efed01b71&id='.$this->kota);
		$loc = $loc["rajaongkir"]["results"]["city_name"] . " - " . $loc["rajaongkir"]["results"]["province"];
		
		Cache::forever("lib_location_str_".$this->id, $loc);
	}
}