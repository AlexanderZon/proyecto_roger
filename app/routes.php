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
		Route::controller('/administrador', 'AdministradorController');
	else:
		Route::controller('/perfil','PerfilController');
	endif;
else:

	Route::controller('/auth', 'AuthenticationController');
	Route::any('/{one?}/{two?}/{three?}/{four?}/{five?}/', function($one = '' ,$two = '' ,$three = '' ,$four = '' ,$five = '' ){
		
		return Redirect::to('/auth/login');

	});
	# Rutas que nonecesitan Inicio de sesion
endif;