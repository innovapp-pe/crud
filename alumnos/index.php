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
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/pnotify/2.0.0/pnotify.all.min.css">

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
	<div class="container">

            <div class="col-sm-12" style="margin-top: 50px;">     
            <h3>Registrar Alumno</h3><br>                          
                <form id="formulario">
                	<div class="form-group">
                      <label for="dni">DNI:</label>
                      <input type="text" class="form-control" id="dni" placeholder="DNI" name="dni" required>
                    </div>
                    <div class="form-group">
                      <label for="ap_paterno">Apellido Paterno:</label>
                      <input type="text" class="form-control" id="ap_paterno" placeholder="Apellido Paterno" name="ap_paterno" required>
                    </div>
                    <div class="form-group">
                      <label for="ap_materno">Apellido Materno:</label>
                      <input type="text" class="form-control" id="ap_materno" placeholder="Apellido Materno" name="ap_materno" required>
                    </div>
                    <div class="form-group">
                      <label for="nombre">Nombres:</label>
                      <input type="text" class="form-control" id="nombre" placeholder="Nombres" name="nombre" required>
                    </div>
                    <div class="form-group">
                      <label for="fecha_nac">Fecha de Nacimiento:</label>
                      <input type="date" class="form-control" id="fecha_nac" placeholder="" name="fecha_nac" required>
                    </div>
                    <div class="form-group">
                      <label for="email">Email:</label>
                      <input type="email" class="form-control" id="email" placeholder="Email" name="email" required>
                    </div>
                    <div class="form-group">
                      <label for="escuela">Escuela:</label>
                      <input type="text" class="form-control" id="escuela" placeholder="Escuela" name="escuela" required>
                    </div>
                    <div class="form-group">
                      <label for="direccion">Dirección:</label>
                      <input type="text" class="form-control" id="direccion" placeholder="Dirección" name="direccion" required>
                    </div>
                    <div class="form-group">
                      <label for="telefono">Teléfono:</label>
                      <input type="text" class="form-control" id="telefono" placeholder="Teléfono" name="telefono" required>
                    </div>
                    <button type="submit" class="btn btn-success" style="display: block; margin: 0 auto;">Guardar</button>
                </form>
            </div>
        </div>

    <script src="https://cdn.jsdelivr.net/pnotify/2.0.0/pnotify.all.min.js" crossorigin="anonymous"></script>
		<script type="text/javascript">
	  	$(document).ready(function() {
			$('#formulario').submit(function(e) {
				e.preventDefault();
			  	GuardarRegistro();
			});
	  	});

	  	function GuardarRegistro(){
	  		var formulario = $('#formulario');

	  		$.ajax({
			     type: "POST",
			     url: "server/insertar_alumno.php",
			     dataType : "text",
			     data: formulario.serialize(),
			     success: function(msg){
			     	//alert(msg.length);
			     	if (msg.includes("OK")) {
			     		var exito = new PNotify({
                                  title: 'Éxito',
                                  text: 'Alumno guardado correctamente',
                                  type: 'success',
                                  styling: 'bootstrap3'
                      	});
                      	$('#formulario').trigger("reset");
			     	}else if(msg.includes("DNI EXISTENTE")){
			     		var alerta = new PNotify({
                                  title: 'No se ha guardado el alumno',
                                  text: 'Este DNI ya existe',
                                  type: 'warning',
                                  styling: 'bootstrap3'
                      	});
			     	}else{
			     		var error = new PNotify({
                                  title: 'Error',
                                  text: 'Alumno no se ha guardado',
                                  type: 'error',
                                  styling: 'bootstrap3'
                      	});
			     	}
			       
			     }
		    })
	  	}
	</script>
</body></html>
