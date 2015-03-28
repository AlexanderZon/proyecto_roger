<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class UsuariosTableSeeder extends Seeder {

	public function run()
	{
		User::create( array(
			'id' => 1,
			'username' => 'Administrador',
			'email' => 'amontenegro@magicmedia.com.ve',
			'password' => Hash::make('alexis23498535'),
			'type' => 'administrador',
			));
		User::create( array(
			'id' => 1,
			'username' => '23498535',
			'email' => 'amontenegro@magicmedia.com.ve',
			'password' => Hash::make('23498535'),
			'type' => 'usuario',
			));
	}

}