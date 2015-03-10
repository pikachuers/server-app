<?php

class Intertransaction extends Eloquent {
	protected $table= "intertransactions";

	public function steps(){
		return $this->hasMany('Step');
	}
	public function steplist(){
		return $this->steps()->lists('step');
	}

	public function scopeActive($query){
		return $query->where("active", "=", true);
	}
	public function scopeInactive($query){
		return $query->where("active", "=", false);
	}
	public function waitingFor(){
		$x= 0;
		if($this->currentstep == 0 || $this->currentstep == 1){
			$x = $this->perpusb;
		} else if ($this->currentstep == 2 || $this->currentstep == 3){
			$x = $this->perpusc;
		} else if ($this->currentstep == 4 || $this->currentstep == 5){
			if($this->perpusd == ""){
				$x = $this->perpusc;
			} else {
				$x = $this->perpusd;
			}
		}
		return $x;
	}
	public function toArray()
    {
        $array = parent::toArray();
        $array['waiting'] = $this->waitingFor();
        return $array;
    }
}
// step 0 konfirmasi pemesanan orang, wait for perpusB, deposit kredit (anggota -- kredit)
		//cancel by perpusB or Anggota (kalo cancel, balikin kredit)
	//----	
// step 1 pengiriman, wait for perpusB, isi resi dan send by perpusB (editable) | perpusB create transaction if acc & bikin interfee A->B sbyk deposit (step(0)->message, 
		//cancel by perpusB or Anggota (kalo cancel, balikin kredit)
// step 2 penerimaan, wait for perpusC
	//-----
// step 3 peminjaman, wait for perpusC, start intertransaction (kasi tanggal mulai, jatuh tempo)
// step 4 pengembalian, init by perpusD, end intertransaction count denda with 1000 / hari, kasi tanggal pengmbalian
	//count denda  + biaya pengiriman(D->B), jika tidak cukup segitu maka tidak bisa dikembalikan.
	// create Interfee A->B sebesar denda
	// deposit (step(4)->message) sebesar biaya pengiriman
	//-----
// step 5 pengiriman, wait for perpusD, isi resi dan send by perpusD (editable) | bikin interfee A->D sbyk deposit (step(4)->message)
// step 6 penerimaan, wait for perpusB, perpusB close transaction local, set interntransac as inactive
// step 7 peminjaman selesai
// step 8 peminjaman dibatalkan 