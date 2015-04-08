<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class UsuariosTableSeeder extends Seeder {

	public function run()
	{
		User::create( array(
			'id' => 1,
			'username' => 'Administrador',
			'password' => Hash::make('alexis23498535'),
			'type' => 'administrador',
			'status' => 'activo',
			));
	}

}