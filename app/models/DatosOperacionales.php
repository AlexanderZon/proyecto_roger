<?php

class DatosOperacionales extends \Eloquent {

	protected $table = 'datos_operacionales';

	public function user(){

		return $this->belongsTo('User');
		
	}
	
}