<!DOCTYPE html>
<html lang="es">
  <head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<!-- Meta, title, CSS, favicons, etc. -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>App</title>

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/pnotify/2.0.0/pnotify.all.min.css">

	<style type="text/css" media="screen">

	</style>
</head>

<body>
			<nav class="navbar navbar-default">
			  <div class="container-fluid">
			    <div class="navbar-header">
			      <a class="navbar-brand" href="#">App</a>
			    </div>
			    <ul class="nav navbar-nav">
			      <li><a href="index.php">Registrar Alumno</a></li>
			      <li><a href="listar_alumnos.php">Ver Alumnos</a></li>
			    </ul>
			  </div>
			</nav>
			<div class="container-fluid">
				<br><br>
				<h2>Alumnos</h2>
				<div class="col-md-12 col-sm-12 " style="overflow-x: auto">
					<table id="datatable" class="table table-striped table-hover " style="width:100%">
                        <thead>
                            <tr style=" font-size:0.9em; border-color: white">
                                <th>N°</th>
                                <th>DNI</th>
                                <th>NOMBRE</th>
                                <th>APELLIDO PATERNO</th>
                                <th>APELLIDO MATERNO</th>
                                <th>FECHA_ DE NACIMIENTO</th>
                                <th>EMAIL</th>
                                <th>ESCUELA</th>
                                <th>DIRECCIÓN</th>
                                <th>TELÉFONO</th>
                                <th>ACCIONES</th>
                            </tr>
                        </thead>
                        <tbody></tbody>
                    </table>
				</div>
			</div>
		</div>
	</div>
	<script src="https://cdn.jsdelivr.net/pnotify/2.0.0/pnotify.all.min.js" crossorigin="anonymous"></script>
		<script type="text/javascript">
	  	$(document).ready(function() {
	  		ListarAlumnos();
	  	});


	  	function ListarAlumnos(){
	  		var str = "";
	  		$.ajax({
			     type: "GET",
			     url: "server/listar_alumnos.php",
			     dataType : "text",
			     success: function(data){
			     	var data = JSON.parse(data);
			     	console.log(data);
	                $("#datatable tbody").html('');
	               	if (data.length > 0) {
	                    for (var i = 0; i < data.length; i++) {
	                        
	                        str = str
	                        +'<tr id="tb_alumnos_'+ data[i].id +'"><td>'+ (i+1) + '</td>'               
	                        + '<td>' + data[i].dni + '</td>'
	                        + '<td>' + data[i].nombre + '</td>'
	                        + '<td>' + data[i].ap_paterno + '</td>'
	                        + '<td>' + data[i].ap_materno + '</td>'
	                        + '<td>' + data[i].fecha_nac + '</td>'
	                        + '<td>' + data[i].email + '</td>'
	                        + '<td>' + data[i].escuela + '</td>'
	                        + '<td>' + data[i].direccion + '</td>'
	                        + '<td>' + data[i].telefono + '</td>'
	                        //BOTON EDITAR
	                        + '<td><button id="btn_editaralumno_'+ data[i].id +'" title="Editar" onclick="EditarAlumno('+ data[i].id +')" class="btn btn-warning"><span><i class="fa fa-pencil"></i></span></button>'
	                        //BOTON GUARDAR EDICION
	                        +'	<button id="btn_guardaralumno_'+ data[i].id +'" title="Guardar Edición" onclick="GuardarEdicionAlumno('+ data[i].id +')" class="btn btn-primary" disabled><span><i class="fa fa-save"></i></span></button>'
	                        //BOTON BORRAR
	                        +'	<button id="btn_BorrarAlumno_'+ data[i].id +'" title="Eliminar" onclick="BorrarAlumno('+ data[i].id +')" class="btn btn-danger"><span><i class="fa fa-trash"></i></span></button></td></tr>'
	                        
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


	  	function EditarAlumno(id_alumno){

	  		$('#btn_guardaralumno_'+id_alumno).prop("disabled", false);
	  		$('#btn_editaralumno_'+id_alumno).prop("disabled", true);

	  		var tb_dni = $("#tb_alumnos_"+id_alumno).find("td:eq(1)").text();
	  		var tb_nombre = $("#tb_alumnos_"+id_alumno).find("td:eq(2)").text();
	  		var tb_ap_paterno = $("#tb_alumnos_"+id_alumno).find("td:eq(3)").text();
	  		var tb_ap_materno = $("#tb_alumnos_"+id_alumno).find("td:eq(4)").text();

	  		var tb_fecha_nac = $("#tb_alumnos_"+id_alumno).find("td:eq(5)").text();
	  		var tb_email = $("#tb_alumnos_"+id_alumno).find("td:eq(6)").text();
	  		var tb_escuela = $("#tb_alumnos_"+id_alumno).find("td:eq(7)").text();
	  		var tb_direccion = $("#tb_alumnos_"+id_alumno).find("td:eq(8)").text();
	  		var tb_telefono = $("#tb_alumnos_"+id_alumno).find("td:eq(9)").text();

	  		var nuevo_input_dni = '<input class="" id="edit_dni_'+id_alumno+'" type="text" value="'+tb_dni+'"/>';
	  		$("#tb_alumnos_"+id_alumno).find("td:eq(1)").html(nuevo_input_dni);

	  		var nuevo_input_nombre = '<input class="" id="edit_nombre_'+id_alumno+'" type="text" value="'+tb_nombre+'"/>';
	  		$("#tb_alumnos_"+id_alumno).find("td:eq(2)").html(nuevo_input_nombre);

	  		var nuevo_input_ap_paterno = '<input class="" id="edit_ap_paterno_'+id_alumno+'" type="text" value="'+tb_ap_paterno+'"/>';
	  		$("#tb_alumnos_"+id_alumno).find("td:eq(3)").html(nuevo_input_ap_paterno);

	  		var nuevo_input_ap_materno = '<input class="" id="edit_ap_materno_'+id_alumno+'" type="text" value="'+tb_ap_materno+'"/>';
	  		$("#tb_alumnos_"+id_alumno).find("td:eq(4)").html(nuevo_input_ap_materno);

	  		var nuevo_input_fecha_nac = '<input class="" id="edit_fecha_nac_'+id_alumno+'" type="date" value="'+tb_fecha_nac+'"/>';
	  		$("#tb_alumnos_"+id_alumno).find("td:eq(5)").html(nuevo_input_fecha_nac);

	  		var nuevo_input_email = '<input class="" id="edit_email_'+id_alumno+'" type="email" value="'+tb_email+'"/>';
	  		$("#tb_alumnos_"+id_alumno).find("td:eq(6)").html(nuevo_input_email);

	  		var nuevo_input_escuela = '<input class="" id="edit_escuela_'+id_alumno+'" type="text" value="'+tb_escuela+'"/>';
	  		$("#tb_alumnos_"+id_alumno).find("td:eq(7)").html(nuevo_input_escuela);

	  		var nuevo_input_direccion = '<input class="" id="edit_direccion_'+id_alumno+'" type="address" value="'+tb_direccion+'"/>';
	  		$("#tb_alumnos_"+id_alumno).find("td:eq(8)").html(nuevo_input_direccion);

	  		var nuevo_input_telefono = '<input class="" id="edit_telefono_'+id_alumno+'" type="phone" value="'+tb_telefono+'"/>';
	  		$("#tb_alumnos_"+id_alumno).find("td:eq(9)").html(nuevo_input_telefono);
	  	}


	  	function GuardarEdicionAlumno(id_alumno){

	  		var dni = $("#edit_dni_"+id_alumno).val();
	  		var nombre = $("#edit_nombre_"+id_alumno).val();
	  		var ap_paterno = $("#edit_ap_paterno_"+id_alumno).val();
	  		var ap_materno = $("#edit_ap_materno_"+id_alumno).val();

	  		var fecha_nac = $("#edit_fecha_nac_"+id_alumno).val();
	  		var email = $("#edit_email_"+id_alumno).val();
	  		var escuela = $("#edit_escuela_"+id_alumno).val();
	  		var direccion = $("#edit_direccion_"+id_alumno).val();
	  		var telefono = $("#edit_telefono_"+id_alumno).val();

	  		$.ajax({
			     type: "POST",
			     url: "server/editar_alumno.php",
			     dataType : "text",
			     data:{
		          id: id_alumno,
		          dni: dni,
		          nombre: nombre,
		          ap_paterno: ap_paterno,
		          ap_materno: ap_materno,
		          fecha_nac: fecha_nac,
		          email: email,
		          escuela: escuela,
		          direccion: direccion,
		          telefono: telefono,
		         },
			     success: function(msg){
			     	//alert(msg.length);
			     	if (msg.includes("OK")) {
			     		var exito = new PNotify({
                                  title: 'Éxito',
                                  text: 'Alumno editado correctamente',
                                  type: 'success',
                                  styling: 'bootstrap3'
                      	});

                      	ListarAlumnos();

			     	}else{
			     		var error = new PNotify({
                                  title: 'Error',
                                  text: 'Alumno no se ha editado',
                                  type: 'error',
                                  styling: 'bootstrap3'
                      	});
			     	}
			       
			     }
		    })
	  	}

	  	function BorrarAlumno(id_alumno){

	  		$.ajax({
			     type: "POST",
			     beforeSend : function(xhr, opts) {
					var confirmacion = confirm("¿Desea eliminar el Alumno?");
					if (confirmacion == true) {
				    	//alert("Edición Completa");
				 	 } else {
				    	 xhr.abort();
		  			}
				 },
			     url: "server/borrar_alumno.php",
			     dataType : "text",
			     data:{
		          id_alumno: id_alumno,
		         },
			     success: function(msg){
			     	ListarAlumnos();
			     	//alert(msg.length);
			     	if (msg.includes("OK")) {
			     		var exito = new PNotify({
                                  title: 'Hecho',
                                  text: 'El Alumno ha sido borrado',
                                  type: 'warning',
                                  styling: 'bootstrap3'
                      	});

			     	}else{
			     		var error = new PNotify({
                                  title: 'Error',
                                  text: 'Alumno no se ha borrado',
                                  type: 'error',
                                  styling: 'bootstrap3'
                      	});
			     	}
			       
			     }
		    })
	  	}

	</script>
</body></html>
