<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDatosGeneralesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('datos_generales', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('foto');
			$table->integer('grado_id');
			$table->string('cedula');
			$table->string('apellidos');
			$table->string('nombres');
			$table->string('huella_dactilar');
			$table->string('categoria');
			$table->string('clasificacion');
			$table->integer('cefa_1');
			$table->integer('cefa_2');
			$table->date('fecha_graduacion');
			$table->string('nombre_promocion');
			$table->string('instituto_militar_origen');
			$table->date('fecha_ultimo_ascenso');
			$table->integer('cargo_id');
			$table->integer('resolucion_no');
			$table->date('resolucion_fecha');
			$table->integer('tiempo_cargo');
			$table->string('edo_civil');
			$table->string('lugar_nacimiento');
			$table->date('fecha_nacimiento');
			$table->string('genero');
			$table->string('religion');
			$table->string('sn_carnet_militar');
			$table->string('codigo_empleado');
			$table->string('telefono_celular');
			$table->string('telefono_oficina');
			$table->string('telefono_habitacion');
			$table->string('direccion_habitacion');
			$table->string('correo_electronico');
			$table->string('centro_votacion');
			$table->string('cuenta_bancaria');
			$table->string('apellido_nombre_madre');
			$table->string('cedula_madre');
			$table->string('telefono_madre');
			$table->string('direccion_madre');
			$table->string('apellido_nombre_padre');
			$table->string('cedula_padre');
			$table->string('telefono_padre');
			$table->string('direccion_padre');
			$table->string('apellido_nombre_conyugue');
			$table->string('cedula_conyugue');
			$table->string('telefono_conyugue');
			$table->string('direccion_conyugue');
			$table->string('sn_carnet_ipsfa_conyugue');
			$table->date('fecha_aniversario');
			$table->integer('numero_hijos');
			$table->text('apellido_nombre_hijos');
			$table->text('cedula_hijos');
			$table->text('fecha_nacimiento_hijos');
			$table->text('sn_carnet_ipsfa_hijos');
			$table->string('idioma');
			$table->string('habla_idioma');
			$table->string('lee_idioma');
			$table->string('escribe_idioma');
			$table->string('traduce');
			$table->string('curso_ria');
			$table->boolean('posee_vehiculo');
			$table->boolean('posee_vivienda');
			$table->date('prog_vacacional_inicio');
			$table->date('prog_vacacional_fin');
			$table->longText('comisiones_servicio_pais');
			$table->longText('comisiones_servicio_exterior');
			$table->longText('comisiones_especiales');
			$table->longText('sanciones_disciplinarias');
			$table->longText('consejos_investigacion');
			$table->longText('consejos_enjuiciamiento');
			$table->longText('detenciones');
			$table->longText('indisponibilidad_enfermedad');
			$table->longText('indisponibilidad_accidente');
			$table->longText('condecoraciones');
			$table->longText('historia_clinica');
			$table->string('grupo_sanguineo');
			$table->string('licencia_conducir');
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
		Schema::drop('datos_generales');
	}

}
