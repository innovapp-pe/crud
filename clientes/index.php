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

</head>

<body>
	<div class="container">
            <div class="col-sm-12" style="margin-top: 50px;">     
            <h3>Registrar Persona</h3><br>                          
                <form id="formulario">
                    <div class="form-group">
                      <label for="paterno">Apellido Paterno:</label>
                      <input type="text" class="form-control" id="paterno" placeholder="Apellido Paterno" name="paterno">
                    </div>
                    <div class="form-group">
                      <label for="materno">Apellido Materno:</label>
                      <input type="text" class="form-control" id="materno" placeholder="Apellido Materno" name="materno">
                    </div>
                    <div class="form-group">
                      <label for="nombre">Nombres:</label>
                      <input type="text" class="form-control" id="nombre" placeholder="Nombres" name="nombre">
                    </div>
                    <div class="form-group">
                      <label for="cumple">Fecha de Nacimiento:</label>
                      <input type="date" class="form-control" id="cumple" placeholder="" name="cumple">
                    </div>
                    <div class="form-group">
                      <label for="docunum">Número de Documento:</label>
                      <input type="number" class="form-control" id="docunum" placeholder="Número de Documento" name="docunum">
                    </div>
                    <div class="form-group">
                      <label for="email">Email:</label>
                      <input type="email" class="form-control" id="email" placeholder="Email" name="email">
                    </div>
                    <button type="submit" class="btn btn-success" style="display: block; margin: 0 auto;">Guardar</button>
                </form>
            </div>
        </div>
	<script src="https://code.jquery.com/jquery-3.5.1.min.js" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
		<script type="text/javascript">
	  	$(document).ready(function() {
			$('#formulario').submit(function(e) {
				e.preventDefault();
			  	GuardarRegistro();
			});

			$('textarea').keypress(function(event) {

		        if (event.keyCode == 13 || event.keyCode == 39 || event.keyCode == 34 || event.keyCode == 96 || event.keyCode == 126 || event.keyCode == 34) {
		            event.preventDefault();
		        }
		    });
	  	});

	  	function ConsultaSunat(){
            var ruc = $("#ruc").val();
            var url = "http://ventas.mbsoftperu.com/App/api/ConsultaRuc/";

            // Validando datos
                if (ruc == null){
                    alert("Debe ingresar el DNI/RUC del cliente");
                    return;
                }
                if (ruc.length == 0){
                    alert("Debe ingresar el DNI/RUC del cliente");
                    return;
                }


                $.ajax({
				    type: 'POST',
				    url: 'API/sunat.php',
				    data: { ruc: ruc },
				    beforeSend: function() {
				        $("#btn_loading").css('display', '');
				        $("#btn_sunat").css('display', 'none');
				    },
				    success: function(data) {

				    	$("#btn_loading").css('display', 'none');
				    	$("#btn_sunat").css('display', '');

				       	$("#razon_social").val(data.denominacion.trim());
                        $("#direccion").val(data.direccion.trim());
				    },
				    error: function(xhr) { // if error occured
				        console.log(xhr.statusText + xhr.responseText);
				        $("#btn_loading").css('display', 'none');
				    	$("#btn_sunat").css('display', '');
				    },
				    complete: function() {

				    },
				    dataType: 'json'
				});
        }

	  	function GuardarRegistro(){
	  		var formulario = $('#formulario');

	  		$.ajax({
			     type: "POST",
			     url: "server/insertar_cliente.php",
			     dataType : "text",
			     data: formulario.serialize(),
			     success: function(msg){
			     	//alert(msg.length);
			     	if (msg.includes("OK")) {
			     		var exito = new PNotify({
                                  title: 'Éxito',
                                  text: 'Cliente guardado correctamente',
                                  type: 'success',
                                  styling: 'bootstrap3'
                      	});
                      	$('#formulario').trigger("reset");
			     	}else if(msg.includes("RUC EXISTENTE")){
			     		var alerta = new PNotify({
                                  title: 'No se ha guardado la referencia',
                                  text: 'Este RUC ya existe',
                                  type: 'warning',
                                  styling: 'bootstrap3'
                      	});
			     	}else{
			     		var error = new PNotify({
                                  title: 'Error',
                                  text: 'Cliente no se ha guardado',
                                  type: 'error',
                                  styling: 'bootstrap3'
                      	});
			     	}
			       
			     }
		    })
	  	}
	</script>
</body></html>
