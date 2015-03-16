<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDatosLogisticosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('datos_logisticos', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('t_patriota');
			$table->string('t_braga_vuelo');
			$table->string('t_braga_mecanica');
			$table->string('t_pantalon');
			$table->string('t_falda');
			$table->string('t_deporte');
			$table->string('t_camisa');
			$table->string('t_chaqueta');
			$table->string('t_cristina_gorra');
			$table->integer('botas');
			$table->integer('patentes');
			$table->integer('guantes');
			$table->timestamps();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('datos_logisticos');
	}

}
