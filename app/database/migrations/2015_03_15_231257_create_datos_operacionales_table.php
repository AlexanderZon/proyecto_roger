<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDatosOperacionalesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('datos_operacionales', function(Blueprint $table)
		{
			$table->increments('id');
			$table->longText('armamento');
			$table->string('serial');
			$table->string('tipo');
			$table->string('ubicacion');
			$table->string('clasificacion_aeronautica');
			$table->string('funcion');
			$table->date('fecha_graduacion_piloto');
			$table->string('llamado_vuelo');
			$table->string('situacion_actual_piloto');
			$table->text('causa_inactividad_vuelo');
			$table->text('sistemas_que_vuela');
			$table->text('campa_as_acciones_guerra');
			$table->text('tiro');
			$table->boolean('manejo_defensivo');
			$table->boolean('curso_brigadista');
			$table->boolean('junta_medica');
			$table->date('examen_control_anual');
			$table->date('fisiologico');
			$table->boolean('vuelo_instrumental');
			$table->date('examen_fisico');
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
		Schema::drop('datos_operacionales');
	}

}
