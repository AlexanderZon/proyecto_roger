@extends('layouts.master')

@section('css')

@stop

@section('content')

<div class="row">
	<div class="col-md-1"></div>
	<div class="col-md-10 ">
		<div class="row info">
			<div class="col-md-4">
				<h2>Listado de Cargos </h2>
				<!-- <a class="btn btn-primary label label-primary"  data-toggle="modal" data-target="#myModal">Añadir nuevo</a> -->
				<button type="button" class="btn btn-primary label label-primary" data-toggle="modal" data-target="#modalFormularioAnadir" data-descripcion="" data-action="{{$route}}/nuevo">Añadir Nuevo</button>
				<!-- Modal Formulario Añadir -->
				<div class="modal fade" id="modalFormularioAnadir" tabindex="-1" role="dialog" aria-labelledby="modalFormularioAnadirLabel" aria-hidden="true">
				  <div class="modal-dialog">
				    <form action="{{$route}}/nuevo" method="post">
				    <div class="modal-content">
				      <div class="modal-header">
				        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				        <h4 class="modal-title" id="modalFormularioAnadirLabel">Nuevo Cargo</h4>
				      </div>
				      <div class="modal-body">
				          <div class="form-group">
				            <label for="descripcion" class="control-label">Nombre</label>
				            <input type="text" class="form-control" id="descripcion" name="descripcion" required>
				          </div>
				      </div>
				      <div class="modal-footer">
				        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
				        <input type="submit" class="btn btn-primary" value="Agregar">
				      </div>
				    </div>
				    </form>
				  </div>
				</div>
				<!-- Modal Formulario Editar -->
				<div class="modal fade" id="modalFormularioEditar" tabindex="-1" role="dialog" aria-labelledby="modalFormularioEditarLabel" aria-hidden="true">
				  <div class="modal-dialog">
				    <form id="formularioEditar" action="{{$route}}/editar" method="post">
				    <div class="modal-content">
				      <div class="modal-header">
				        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				        <h4 class="modal-title" id="modalFormularioAnadirLabel">Editar Cargo</h4>
				      </div>
				      <div class="modal-body">
				          <div class="form-group">
				            <label for="descripcion" class="control-label">Nombre</label>
				            <input type="text" class="form-control" id="descripcion" name="descripcion" required>
				          </div>
				      </div>
				      <div class="modal-footer">
				        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
				        <input type="submit" class="btn btn-primary" value="Editar">
				      </div>
				    </div>
				    </form>
				  </div>
				</div>
				<!-- Modal Formulario Eliminar -->
				<div class="modal fade" id="modalFormularioEliminar" tabindex="-1" role="dialog" aria-labelledby="modalFormularioEliminarLabel" aria-hidden="true">
				  <div class="modal-dialog">
				    <form id="formularioEliminar" action="{{$route}}/editar" method="post">
				    <div class="modal-content">
				      <div class="modal-header">
				        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				        <h4 class="modal-title" id="modalFormularioAnadirLabel">Eliminar Cargo</h4>
				      </div>
				      <div class="modal-body">
				          <div class="form-group">
				            <label for="descripcion" class="control-label">Nombre</label>
				            <input type="text" class="form-control" id="descripcion" name="descripcion" required readonly>
				          </div>
				      </div>
				      <div class="modal-footer">
				        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
				        <input type="submit" class="btn btn-primary" value="Eliminar">
				      </div>
				    </div>
				    </form>
				  </div>
				</div>
			</div>
			<div class="col-md-8">
				@if($msg_success != null)
					<div class="alert alert-success" role="alert">{{ $msg_success }}</div>
				@endif
				@if($msg_info != null)
					<div class="alert alert-info" role="alert">{{ $msg_info }}</div>
				@endif
				@if($msg_warning != null)
					<div class="alert alert-warning" role="alert">{{ $msg_warning }}</div>
				@endif
				@if($msg_danger != null)
					<div class="alert alert-danger" role="alert">{{ $msg_danger }}</div>
				@endif
			</div>
		</div>
		<div class="row">
		    <table class="datatable">
			    <thead>
			        <tr>
			            <th>Nombre</th>
			            <th>Acciones</th>
			        </tr>
			    </thead>
			    <tbody>
			    	@foreach($cargos as $cargo)
				        <tr>
				            <td>{{$cargo->descripcion}}</td>
				            <td>
								<button type="button" class="btn btn-warning label label-warning" data-toggle="modal" data-target="#modalFormularioEditar" data-descripcion="{{$cargo->descripcion}}" data-action="{{$route}}/editar/{{$cargo->id}}">Editar</button> 
								<button type="button" class="btn btn-danger label label-danger" data-toggle="modal" data-target="#modalFormularioEliminar" data-descripcion="{{$cargo->descripcion}}" data-action="{{$route}}/borrar/{{$cargo->id}}">Eliminar</button> 
							</td>
				        </tr>
			        @endforeach
			    </tbody>
		    </table>
		</div>
	</div>
	<div class="col-md-1"></div>
</div>

@stop

@section('javascripts')

	<script type="text/javascript">

		var route = '{{$route}}';

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

		    $('#modalFormularioEditar').on('show.bs.modal', function (event) {
			  var button = $(event.relatedTarget) // Button that triggered the modal
			  var descripcion = button.data('descripcion') // Extract info from data-* attributes
			  var action = button.data('action') // Extract info from data-* attributes
			  if(descripcion != ''){
				  var modal = $(this);
				  $('#formularioEditar').attr('action', action);	
				  modal.find('.modal-title').text('Editar el Cargo: ' + descripcion);
				  modal.find('.modal-body input').val(descripcion);  	
			  }
			  // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
			  // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
			});

		    $('#modalFormularioEliminar').on('show.bs.modal', function (event) {
			  var button = $(event.relatedTarget) // Button that triggered the modal
			  var descripcion = button.data('descripcion') // Extract info from data-* attributes
			  var action = button.data('action') // Extract info from data-* attributes
			  if(descripcion != ''){
				  var modal = $(this);
				  $('#formularioEliminar').attr('action', action);	
				  modal.find('.modal-title').text('Eliminar el Cargo: ' + descripcion);
				  modal.find('.modal-body input').val(descripcion);  	
			  }
			  // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
			  // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
			});
		} );
	</script>

@stop