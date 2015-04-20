<?php

class GradosController extends \BaseController {

	protected static $parent = '/administrador';

	protected static $route = '/administrador/grados';

	protected static $module = 'administrador_grados';

	public function getIndex()
	{
		# code...
		$grados = Grados::all();

		$args = array(
			'grados' => $grados,
			'route' => self::$route,
			'parent' => self::$parent,
			'module' => self::$module,
			'msg_danger' => Session::get('msg_danger'),
			'msg_success' => Session::get('msg_success'),
			'msg_info' => Session::get('msg_info'),
			'msg_warning' => Session::get('msg_warning'),
			);

		return View::make('administrador.grados.index')->with($args);

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

		return View::make('administrador.grados.create')->with($args);

	}

	public function postNuevo()
	{
		# code...
		$grado = new Grados();
		$grado->siglas = Input::get('siglas');
		$grado->descripcion = Input::get('descripcion');

		if($grado->save()):

			return Redirect::to( self::$route )->with('msg_success', 'El grado '.$grado->descripcion.' ha sido creado satisfactoriamente.');

		else:

			return Redirect::to( self::$route . '/nuevo' )->with('msg_danger', 'Hubo un Error al crear el Cargo.');

		endif;

	}

	public function getEditar( $id )
	{
		# code...
		$args = array(
			'grado' => Cargo::find( $id ),
			'route' => self::$route,
			'parent' => self::$parent,
			'module' => self::$module,
			'msg_danger' => Session::get('msg_danger'),
			'msg_success' => Session::get('msg_success'),
			'msg_info' => Session::get('msg_info'),
			'msg_warning' => Session::get('msg_warning'),
			);

		return View::make('administrador.grados.update')->with( $args );

	}

	public function postEditar( $id )
	{
		# code...
		$grado = Grados::find( $id );
		$grado->siglas = Input::get('siglas');
		$grado->descripcion = Input::get('descripcion');

		if($grado->save()):

			return Redirect::to( self::$route )->with('msg_success', 'El grado '.$grado->descripcion.' ha sido editado satisfactoriamente.');

		else:

			return Redirect::to( self::$route . '/editar' )->with('msg_danger', 'Hubo un Error al editar el Cargo '. $grado->descripcion);

		endif;

	}

	public function getBorrar( $id )
	{
		# code...
		$args = array(
			'grado' => Cargo::find( $id ),
			'route' => self::$route,
			'parent' => self::$parent,
			'module' => self::$module,
			'msg_danger' => Session::get('msg_danger'),
			'msg_success' => Session::get('msg_success'),
			'msg_info' => Session::get('msg_info'),
			'msg_warning' => Session::get('msg_warning'),
			);

		return View::make('administrador.grados.delete')->with( $args );

	}

	public function postBorrar( $id )
	{
		# code...
		$grado = Grados::find( $id );
		$grado->descripcion = Input::get('descripcion');

		if($grado->delete()):

			return Redirect::to( self::$route )->with('msg_success', 'El grado '.$grado->descripcion.' ha sido eliminado satisfactoriamente.');

		else:

			return Redirect::to( self::$route . '/borrar' )->with('msg_danger', 'Hubo un Error al eliminar el Cargo '. $grado->descripcion);

		endif;

	}

}