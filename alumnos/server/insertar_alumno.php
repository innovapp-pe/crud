<?php 
	session_start();
	include('../../connection/config.php');
	// initialize variables
	$dni =  $_POST['dni'];
	$ap_paterno = $_POST['ap_paterno'];
	$ap_materno = $_POST['ap_materno'];
	$nombre = $_POST['nombre'];
	$fecha_nac = $_POST['fecha_nac'];
	$email = $_POST['email'];
	$escuela = $_POST['escuela'];
	$direccion = $_POST['direccion'];
	$telefono = $_POST['telefono'];


		$flag_dni_existente = mysqli_query($link, "SELECT id FROM alumno WHERE dni =  $dni");

			if(mysqli_num_rows($flag_dni_existente) > 0 ){
	
			    //echo mysqli_num_rows($flag_dni_existente);
			    echo "DNI EXISTENTE";
			}
			else{
			    //echo "DNI NO EXISTE";

			    mysqli_query($link, "INSERT INTO alumno (dni, ap_paterno, ap_materno, nombre, fecha_nac, email, escuela, direccion, telefono) VALUES 
				('$dni', '$ap_paterno', '$ap_materno', '$nombre', '$fecha_nac', '$email', '$escuela', '$direccion', '$telefono')");
					if(mysqli_affected_rows($link)>0){
						echo "OK";
					}else{
						echo "ERROR";
						echo die(mysqli_error($link));
					}
			}

?>


	