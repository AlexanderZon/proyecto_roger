<?php

class DatosLogisticos extends \Eloquent {

	protected $table = 'datos_logisticos';

	public function user(){

		return $this->belongsTo('User');
		
	}

}