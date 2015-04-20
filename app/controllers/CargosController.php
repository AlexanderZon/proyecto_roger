<?php

class CargosController extends \BaseController {

	protected static $parent = '/administrador';

	protected static $route = '/administrador/cargos';

	protected static $module = 'administrador_cargos';

	public function getIndex()
	{
		# code...
		$cargos = Cargos::all();

		$args = array(
			'cargos' => $cargos,
			'route' => self::$route,
			'parent' => self::$parent,
			'module' => self::$module,
			'msg_danger' => Session::get('msg_danger'),
			'msg_success' => Session::get('msg_success'),
			'msg_info' => Session::get('msg_info'),
			'msg_warning' => Session::get('msg_warning'),
			);

		return View::make('administrador.cargos.index')->with($args);

	}

	public function getNuevo()
	{
		# code...
		$args = array(
			'route' => self::$route,
			'parent' => self::$parent,
			'module' => self::$module,
			'msg_danger' => Session::get('msg_danger'),
			'msg_success' => Session::get('msg_success'),
			'msg_info' => Session::get('msg_info'),
			'msg_warning' => Session::get('msg_warning'),
			);

		return View::make('administrador.cargos.create')->with($args);

	}

	public function postNuevo()
	{
		# code...
		$cargo = new Cargos();
		$cargo->descripcion = Input::get('descripcion');

		if($cargo->save()):

			return Redirect::to( self::$route )->with('msg_success', 'El cargo '.$cargo->descripcion.' ha sido creado satisfactoriamente.');

		else:

			return Redirect::to( self::$route . '/nuevo' )->with('msg_danger', 'Hubo un Error al crear el Cargo.');

		endif;

	}

	public function getEditar( $id )
	{
		# code...
		$args = array(
			'cargo' => Cargo::find( $id ),
			'route' => self::$route,
			'parent' => self::$parent,
			'module' => self::$module,
			'msg_danger' => Session::get('msg_danger'),
			'msg_success' => Session::get('msg_success'),
			'msg_info' => Session::get('msg_info'),
			'msg_warning' => Session::get('msg_warning'),
			);

		return View::make('administrador.cargos.update')->with( $args );

	}

	public function postEditar( $id )
	{
		# code...
		$cargo = Cargos::find( $id );
		$cargo->descripcion = Input::get('descripcion');

		if($cargo->save()):

			return Redirect::to( self::$route )->with('msg_success', 'El cargo '.$cargo->descripcion.' ha sido editado satisfactoriamente.');

		else:

			return Redirect::to( self::$route . '/editar' )->with('msg_danger', 'Hubo un Error al editar el Cargo '. $cargo->descripcion);

		endif;

	}

	public function getBorrar( $id )
	{
		# code...
		$args = array(
			'cargo' => Cargo::find( $id ),
			'route' => self::$route,
			'parent' => self::$parent,
			'module' => self::$module,
			'msg_danger' => Session::get('msg_danger'),
			'msg_success' => Session::get('msg_success'),
			'msg_info' => Session::get('msg_info'),
			'msg_warning' => Session::get('msg_warning'),
			);

		return View::make('administrador.cargos.delete')->with( $args );

	}

	public function postBorrar( $id )
	{
		# code...
		$cargo = Cargos::find( $id );
		$cargo->descripcion = Input::get('descripcion');

		if($cargo->delete()):

			return Redirect::to( self::$route )->with('msg_success', 'El cargo '.$cargo->descripcion.' ha sido eliminado satisfactoriamente.');

		else:

			return Redirect::to( self::$route . '/borrar' )->with('msg_danger', 'Hubo un Error al eliminar el Cargo '. $cargo->descripcion);

		endif;

	}

}