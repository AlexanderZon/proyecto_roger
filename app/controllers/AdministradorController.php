<?php

class AdministradorController extends \BaseController {

	protected $route = '/administrador';

	public function getIndex(){

		return View::make('administrador.index');
		
	}

}