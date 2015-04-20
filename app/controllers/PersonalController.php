<?php

class PersonalController extends \BaseController {

	protected static $parent = '/administrador';

	protected static $route = '/administrador/personal';

	protected static $module = 'administrador_personal';

	public function getIndex()
	{
		# code...
		$personal = User::getPersonal();

		$args = array(
			'personal' => $personal,
			'route' => self::$route,
			'parent' => self::$parent,
			'module' => self::$module,
			);

		return View::make('administrador.personal.index')->with($args);

	}

	public function getNuevo()
	{
		# code...

	}

	public function postNuevo()
	{
		# code...

	}

	public function getVer( $id )
	{
		# code...

	}

	public function postVer( $id )
	{
		# code...

	}

	public function getGeneral( $id )
	{
		# code...

	}

	public function postGeneral( $id )
	{
		# code...

	}

	public function getOperacional( $id )
	{
		# code...

	}

	public function postOperacional( $id )
	{
		# code...

	}

	public function getLogistico( $id )
	{
		# code...

	}

	public function postLogistico( $id )
	{
		# code...

	}

	public function getBorrar( $id )
	{
		# code...

	}

	public function postBorrar( $id )
	{
		# code...

	}


}