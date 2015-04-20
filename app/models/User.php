<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class User extends Eloquent implements UserInterface, RemindableInterface {

	use UserTrait, RemindableTrait;

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'usuarios';

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = array('password', 'remember_token');

	public static function getPersonal($status='active')
	{
		# code...
		$personal = self::where('type','=','personal');

		if($status != 'all') $personal = $personal->where('status','=',$status);

		return $personal->get();
		
	}

	public static function getUsuarios($status='active')
	{
		# code...
		$personas = self::where('type','=','usuario');

		if($status != 'all') $personas = $personas->where('status','=',$status);

		return $personas->get();

	}

	public static function getAdministradores($status='active')
	{
		# code...
		$personas = self::where('type','=','administrador');

		if($status != 'all') $personas = $personas->where('status','=',$status);

		return $personas->get();

	}

	public function general(){

		return $this->hasOne('DatosGenerales');
		
	}

	public function logistico(){

		return $this->hasOne('DatosLogisticos');
		
	}

	public function operacional(){

		return $this->hasOne('DatosOperacionales');

	}

}
