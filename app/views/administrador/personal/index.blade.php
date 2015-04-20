@extends('layouts.master')

@section('css')

@stop

@section('content')

<div class="row">
	<div class="col-md-1"></div>
	<div class="col-md-10">
		<div class="info">
			<h2>Listado de Personal </h2><a href="{{$route}}/nuevo" class="label label-primary">Añadir nuevo</a>
		</div>
	    <table class="datatable">
		    <thead>
		        <tr>
		            <th>Cédula</th>
		            <th>Apellido</th>
		            <th>Nombre</th>
		            <th>Grado</th>
		            <th>Cargo</th>
		            <th>Acciones</th>
		        </tr>
		    </thead>
		    <tbody>
		    	@foreach($personal as $persona)
			        <tr>
			            <td>{{$persona->general->cedula}}</td>
			            <td>{{$persona->general->apellidos}}</td>
			            <td>{{$persona->general->nombres}}</td>
			            <td>{{$persona->general->grado->descripcion}}</td>
			            <td>{{$persona->general->cargo->descripcion}}</td>
			            <td>General Logistico Operacional Eliminar</td>
			        </tr>
		        @endforeach
		    </tbody>
	    </table>
	</div>
	<div class="col-md-1"></div>
</div>

@stop

@section('javascripts')

	<script type="text/javascript">
		$(document).ready( function () {
			var table = $('.datatable').dataTable({
				language: {
			        processing:     "Procesando...",
			        search:         "Buscar&nbsp;:",
			        lengthMenu:    	"Mostrar _MENU_ registros",
			        info:           "Mostrando desde _START_ a _END_ de _TOTAL_ elementos",
			        infoEmpty:      "Mostrando desde 0 a 0 de 0 elementos",
			        infoFiltered:   "(filtrado de _MAX_ elementos en total)",
			        infoPostFix:    "",
			        loadingRecords: "Cargando...",
			        zeroRecords:    "Ningún elemento encontrado",
			        emptyTable:     "No existen datos disponibles para mostrar",
			        paginate: {
			            first:      "Primero",
			            previous:   "Anterior",
			            next:       "Siguiente",
			            last:       "Último"
			        },
			        aria: {
			            sortAscending:  ": Activar para ordenar la columna de manera ascendente",
			            sortDescending: ": Activar para ordenar la columna de manera descendente"
			        }
			    }
			});
    		var tableTools = new $.fn.dataTable.TableTools( table, {
		        "buttons": [
		            "copy",
		            "csv",
		            "xls",
		            "pdf",
		            { "type": "print", "buttonText": "Print me!" }
		        ]
		    } );
		      
		    $( tableTools.fnContainer() ).insertAfter('div.info');
		} );
	</script>

@stop