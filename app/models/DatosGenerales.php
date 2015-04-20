<?php

class DatosGenerales extends \Eloquent {

	protected $table = 'datos_generales';

	public function user(){

		return $this->belongsTo('User');
		
	}

	public function cargo(){

		return $this->belongsTo('Cargos');

	}

	public function grado(){

		return $this->belongsTo('Grados');

	}

}