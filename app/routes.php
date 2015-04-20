<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

if(Auth::check()):
	if(Auth::user()->type == 'administrador'):
		Route::controller('/administrador/grados', 'GradosController');
		Route::controller('/administrador/cargos', 'CargosController');
		Route::controller('/administrador/usuarios', 'UsuariosController');
		Route::controller('/administrador/condecoraciones', 'CondecoracionesController');
		Route::controller('/administrador/sanciones', 'SancionesController');
		Route::controller('/administrador/personal', 'PersonalController');
		Route::controller('/administrador', 'AdministradorController');
		Route::get('/', function(){
			return Redirect::to('/administrador');
		});
	else:
		Route::controller('/perfil','PerfilController');
	endif;
	Route::controller('/auth', 'AuthenticationController');
else:

endif;
	Route::controller('/auth', 'AuthenticationController');
	Route::any('/{one?}/{two?}/{three?}/{four?}/{five?}/', function($one = '' ,$two = '' ,$three = '' ,$four = '' ,$five = '' ){
		
		return Redirect::to('/auth/login');

	});
	# Rutas que nonecesitan Inicio de sesion