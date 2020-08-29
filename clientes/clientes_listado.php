<!DOCTYPE html>
<html lang="es">
  <head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<!-- Meta, title, CSS, favicons, etc. -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>App</title>

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

	<style type="text/css" media="screen">
		table,
		td,
		tr {
			text-align: center;
		  border-collapse: collapse;
		}
	</style>
</head>

<body class="nav-md">
	<div class="container body">
		<div class="main_container">
			<!-- page content -->
			<div class="right_col" role="main">
				<div class="">
					<div class="clearfix"></div>
					<div class="row">
						<div class="col-md-12 col-sm-12 ">
							<div class="x_panel">
								<div class="x_title">
									<h2>Referencias</h2>
									<div class="clearfix"></div>
								</div>
								<div class="x_content" style=" overflow-x: auto;">
									<br />
									<table id="datatable" class="table table-striped table-hover jambo_table " style="width:100%">
                                        <thead>
                                            <tr style="color: white; font-size:0.9em; border-color: white">
                                                <th>Nª</th>
                                                <th>NOMBRE COMERCIAL</th>
                                                <th>RUC</th>
                                                <th>DIRECCIÒN</th>
                                                <th>TELÉFONOS</th>
                                                <th>ESTADO</th>
                                                <th>CONTACTOS</th>
                                                <th>ACCIONES</th>
                                            </tr>
                                        </thead>
                                        <tbody></tbody>
                                    </table>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<!-- Modal Para registro de Contactos -->
			<div id="modal_contactos" class="modal fade bs-example-modal-xl" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="modal-dialog modal-xl">
                  	<div class="modal-content">

                    	<div class="modal-header">
	                      <h4 class="modal-title" id="myModalLabel">Contactos</h4>
	                      <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
	                      </button>
                    	</div>
                    	<div class="modal-body">
							<div class="x_content">
			                    <ul class="nav nav-tabs bar_tabs" id="myTab" role="tablist">
			                      <li class="nav-item">
			                        <a class="nav-link active" id="existentes-tab" data-toggle="tab" href="#existentes" role="tab" aria-controls="existentes" aria-selected="true">Contactos Existentes</a>
			                      </li>
			                      <li class="nav-item">
			                        <a class="nav-link" id="nuevo-contacto-tab" data-toggle="tab" href="#nuevo-contacto" role="tab" aria-controls="nuevo-contacto" aria-selected="false">Nuevo Contacto</a>
			                      </li>
			                    </ul>
			                    <div class="tab-content" id="myTabContent">
			                      <div class="tab-pane fade show active" id="existentes" role="tabpanel" aria-labelledby="existentes-tab">
			                      	<div class="x_content" style=" overflow-x: auto;">
			                        	<table id="datatable_contactos" class="table table-striped table-hover jambo_table " style="width:100%">
				                            <thead>
				                                <tr style="color: white; font-size:0.9em; border-color: white">
				                                    <th>N°</th>
				                                    <th>NOMBRE</th>
				                                    <th>EMAIL</th>
				                                    <th>TELÉFONOS</th>
				                                    <th>OBSERVACIÓN</th>
				                                    <th>CARGOS</th>
				                                    <th>ACCIONES</th>
				                                </tr>
				                            </thead>
				                            <tbody></tbody>
				                        </table>
			                    	</div>
			                      </div>
			                      <div class="tab-pane fade" id="nuevo-contacto" role="tabpanel" aria-labelledby="nuevo-contacto-tab">
			                        <form id="formulario" class="form-horizontal form-label-left">
		                        		<div class="col-md-12">
		                        			<br>
		                        			<h5>Datos del nuevo contacto</h5>
		                        			<br>
		                        			<input type="hidden" id="id_cliente" name="id_cliente">
		                        			<div class="item form-group">
												<label class="col-form-label col-md-2 col-sm-2 label-align" for="contacto_nombre">Nombre <span class="required">*</span>
												</label>
												<div class="col-md-8 col-sm-8 ">
													<input type="text" id="contacto_nombre" name="contacto_nombre" required="required" class="form-control">
												</div>
											</div>
											<div class="item form-group">
												<label for="contacto_email" class="col-form-label col-md-2 col-sm-2 label-align">Email</label>
												<div class="col-md-8 col-sm-8 ">
													<input id="contacto_email" class="form-control" type="address" name="contacto_email">
												</div>
											</div>
											<div class="item form-group">
												<label for="contacto_telefono" class="col-form-label col-md-2 col-sm-2 label-align">Teléfonos</label>
												<div class="col-md-8 col-sm-8 ">
													<input id="contacto_telefono" class="form-control" type="phone" name="contacto_telefono">
												</div>
											</div>
											<div class="item form-group">
												<label for="contacto_telefono" class="col-form-label col-md-2 col-sm-2 label-align">Observación</label>
												<div class="col-md-8 col-sm-8 ">
													<textarea id="contacto_observacion" class="form-control" type="text" name="contacto_observacion"></textarea>
												</div>
											</div>
											<div class="ln_solid"></div>
											<div class="item form-group">
												<div class="col-md-10">
													<button type="submit" class="btn btn-success" style="display: block; margin: 0 auto;">Guardar</button>
												</div>
											</div>
		                        		</div>
									</form>
			                      </div>
			                    </div>
		                  	</div>
	                    </div>
	                    <div class="modal-footer">
						<!--<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
	                      <button type="button" class="btn btn-primary">Save changes</button> -->
	                    </div>
                  	</div>
                </div>
          	</div>
          	<!-- Fin de Modal Para registro de Contactos -->
			<!-- /page content -->
		</div>
	</div>
	<script src="https://code.jquery.com/jquery-3.5.1.min.js" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
		<script type="text/javascript">
	  	$(document).ready(function() {
	  		ListarClientes();
	  		CargarFiltroClientes();
	  		CargarFiltroEstadoReferencias();

			$('#formulario').submit(function(e) {
				e.preventDefault();
			  	GuardarContacto();
			});


			$('textarea').keypress(function(event) {

		        if (event.keyCode == 13 || event.keyCode == 39 || event.keyCode == 34 || event.keyCode == 96 || event.keyCode == 126 || event.keyCode == 34) {
		            event.preventDefault();
		        }
		    });
	  	});


	  	function ListarClientes(){
	  		var str = "";
	  		$.ajax({
			     type: "GET",
			     url: "server/listar_clientes_limit20.php",
			     dataType : "text",
			     success: function(data){
			     	var data = JSON.parse(data);
			     	console.log(data);
	                $("#datatable tbody").html('');
	               	if (data.length > 0) {
	                    for (var i = 0; i < data.length; i++) {
	                        
	                        str = str
	                        +'<tr id="tb_clientes_'+ data[i].id +'"><td>'+ (i+1) + '</td>'               
	                        + '<td>' + data[i].nombre_comercial + '</td>'
	                        + '<td>' + data[i].ruc + '</td>'
	                        + '<td>' + data[i].direccion + '</td>'
	                        + '<td>' + data[i].telefono + '</td>'
	                        + '<td>' + data[i].nombre_etapa + '</td>'
	                        + '<td><button data-toggle="modal" data-target="#modal_contactos" onclick="MostrarContactos('+ data[i].id+')" class="btn btn-success"><span><i class="fa fa-search"></i></span></button></td>'
	                        //BOTON EDITAR
	                        + '<td><button id="btn_editarcliente_'+ data[i].id +'" title="Editar" onclick="EditarCliente('+ data[i].id +')" class="btn btn-warning"><span><i class="fa fa-pencil"></i></span></button>'
	                        //BOTON GUARDAR EDICION
	                        +'	<button id="btn_guardarcliente_'+ data[i].id +'" title="Guardar Edición" onclick="GuardarEdicionCliente('+ data[i].id +')" class="btn btn-primary" disabled><span><i class="fa fa-save"></i></span></button>'
	                        //BOTON BORRAR
	                        +'	<button id="btn_borrarcliente_'+ data[i].id +'" title="Eliminar" onclick="BorrarCliente('+ data[i].id +')" class="btn btn-danger"><span><i class="fa fa-trash"></i></span></button></td></tr>'
	                        
	                        $("#datatable tbody").append(str);
	                        str="";
	                    }

	                } else {
		                    str = '<tr><td colspan="6">No se encontraron Clientes.</td></tr>';
		                     $("#datatable tbody").append(str);
		                     str="";
		                }
			       
			     }
		    })
	  	}


	  	function EditarCliente(id_cliente){

	  		$('#btn_guardarcliente_'+id_cliente).prop("disabled", false);
	  		$('#btn_editarcliente_'+id_cliente).prop("disabled", true);

	  		var tb_cliente_nombre_comercial = $("#tb_clientes_"+id_cliente).find("td:eq(1)").text();
	  		var tb_cliente_ruc = $("#tb_clientes_"+id_cliente).find("td:eq(2)").text();
	  		var tb_cliente_direccion = $("#tb_clientes_"+id_cliente).find("td:eq(3)").text();
	  		var tb_cliente_telefono = $("#tb_clientes_"+id_cliente).find("td:eq(4)").text();

	  		var nuevo_input_nombre_comercial = '<input class="" id="cliente_edit_nombre_comercial_'+id_cliente+'" type="text" value="'+tb_cliente_nombre_comercial+'"/>';
	  		$("#tb_clientes_"+id_cliente).find("td:eq(1)").html(nuevo_input_nombre_comercial);

	  		var nuevo_input_ruc = '<input class="" id="cliente_edit_ruc_'+id_cliente+'" type="number" value="'+tb_cliente_ruc+'"/>';
	  		$("#tb_clientes_"+id_cliente).find("td:eq(2)").html(nuevo_input_ruc);

	  		var nuevo_input_direccion = '<input class="" id="cliente_edit_direccion_'+id_cliente+'" type="text" value="'+tb_cliente_direccion+'"/>';
	  		$("#tb_clientes_"+id_cliente).find("td:eq(3)").html(nuevo_input_direccion);

	  		var nuevo_input_telefono = '<input class="" id="cliente_edit_telefono_'+id_cliente+'" type="phone" value="'+tb_cliente_telefono+'"/>';
	  		$("#tb_clientes_"+id_cliente).find("td:eq(4)").html(nuevo_input_telefono);
	  	}


	  	function GuardarContacto(){
	  		var id_cliente = $('#id_cliente').val();
	  		var formulario = $('#formulario');

	  		$.ajax({
			     type: "POST",
			     url: "server/insertar_contacto.php",
			     dataType : "text",
			     data: formulario.serialize(),
			     success: function(msg){
			     	//alert(msg.length);
			     	if (msg.includes("OK")) {
			     		var exito = new PNotify({
                                  title: 'Éxito',
                                  text: 'Contacto guardado correctamente',
                                  type: 'success',
                                  styling: 'bootstrap3'
                      	});

			     		//Limpiar campos del formulario
                      	$('#formulario').trigger("reset");
                      	MostrarContactos(id_cliente);

                      	$('#existentes-tab').trigger('click');

			     	}else{
			     		var error = new PNotify({
                                  title: 'Error',
                                  text: 'Contacto no se ha guardado',
                                  type: 'error',
                                  styling: 'bootstrap3'
                      	});
			     	}
			       
			     }
		    })
	  	}

	  	function EditarContacto(id_contacto){

	  		$('#btn_guardar_'+id_contacto).prop("disabled", false);
	  		$('#btn_editar_'+id_contacto).prop("disabled", true);

	  		var tb_contacto_nombre = $("#tb_contactos_"+id_contacto).find("td:eq(1)").text();
	  		var tb_contacto_email = $("#tb_contactos_"+id_contacto).find("td:eq(2)").text();
	  		var tb_contacto_telefono = $("#tb_contactos_"+id_contacto).find("td:eq(3)").text();
	  		var tb_contacto_observacion = $("#tb_contactos_"+id_contacto).find("td:eq(4)").text();

	  		var nuevo_input_nombre = '<input class="" id="contacto_edit_nombre_'+id_contacto+'" type="text" value="'+tb_contacto_nombre+'"/>';
	  		$("#tb_contactos_"+id_contacto).find("td:eq(1)").html(nuevo_input_nombre);

	  		var nuevo_input_email = '<input class="" id="contacto_edit_email_'+id_contacto+'" type="email" value="'+tb_contacto_email+'"/>';
	  		$("#tb_contactos_"+id_contacto).find("td:eq(2)").html(nuevo_input_email);

	  		var nuevo_input_telefono = '<input class="" id="contacto_edit_telefono_'+id_contacto+'" type="phone" value="'+tb_contacto_telefono+'"/>';
	  		$("#tb_contactos_"+id_contacto).find("td:eq(3)").html(nuevo_input_telefono);

	  		var nuevo_input_observacion = '<textarea class="" id="contacto_edit_observacion_'+id_contacto+'">'+tb_contacto_observacion+'</textarea>';
	  		$("#tb_contactos_"+id_contacto).find("td:eq(4)").html(nuevo_input_observacion);
	  	}

	  	function GuardarEdicionContacto(id_contacto){

	  		var contacto_nuevo_nombre = $("#contacto_edit_nombre_"+id_contacto).val();
	  		var contacto_nuevo_email = $("#contacto_edit_email_"+id_contacto).val();
	  		var contacto_nuevo_telefono = $("#contacto_edit_telefono_"+id_contacto).val();
	  		var contacto_nuevo_observacion = $("#contacto_edit_observacion_"+id_contacto).val();

	  		var id_cliente = $("#id_cliente").val();

	  		$.ajax({
			     type: "POST",
			     url: "server/editar_contacto.php",
			     dataType : "text",
			     data:{
		          id_contacto: id_contacto,
		          nombre: contacto_nuevo_nombre,
		          email: contacto_nuevo_email,
		          telefono: contacto_nuevo_telefono,
		          observacion: contacto_nuevo_observacion
		         },
			     success: function(msg){
			     	//alert(msg.length);
			     	if (msg.includes("OK")) {
			     		var exito = new PNotify({
                                  title: 'Éxito',
                                  text: 'Contacto editado correctamente',
                                  type: 'success',
                                  styling: 'bootstrap3'
                      	});

			     		//Limpiar campos del formulario
                      	$('#formulario').trigger("reset");
                      	MostrarContactos(id_cliente);

			     	}else{
			     		var error = new PNotify({
                                  title: 'Error',
                                  text: 'El contacto no se ha editado',
                                  type: 'error',
                                  styling: 'bootstrap3'
                      	});
			     	}
			       
			     }
		    })
	  	}


	  	function BorrarCargo(id_cargo){
	  		var id_contacto = $("#id_contacto").val();

	  		$.ajax({
			     type: "POST",
			     beforeSend : function(xhr, opts) {
					var confirmacion = confirm("¿Desea eliminar el Cargo?");
					if (confirmacion == true) {
				    	//alert("Edición Completa");
				 	 } else {
				    	 xhr.abort();
		  			}
				 },
			     url: "server/borrar_cargo.php",
			     dataType : "text",
			     data:{
		          id_cargo: id_cargo,
		         },
			     success: function(msg){
			     	//alert(msg.length);
			     	if (msg.includes("OK")) {
			     		var exito = new PNotify({
                                  title: 'Hecho',
                                  text: 'El Cargo ha sido borrado',
                                  type: 'warning',
                                  styling: 'bootstrap3'
                      	});

                      	MostrarCargos(id_contacto);

			     	}else{
			     		var error = new PNotify({
                                  title: 'Error',
                                  text: 'Cargo no se ha borrado',
                                  type: 'error',
                                  styling: 'bootstrap3'
                      	});
			     	}
			       
			     }
		    })
	  	}



	</script>
</body></html>
