<?php

class AdministradorController extends \BaseController {

	protected static $route = '/administrador';

	protected static $module = 'administrador_index';

	public function getIndex(){

		$args = array(
			'route' => self::$route,
			'module' => self::$module,
			);

		return View::make('administrador.index')->with($args);
		
	}

}