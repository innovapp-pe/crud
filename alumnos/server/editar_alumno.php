<?php 
	session_start();
	include('../../connection/config.php');
	// initialize variables
	$id =  $_POST['id'];
	$dni =  $_POST['dni'];
	$nombre =  $_POST['nombre'];
	$ap_paterno = $_POST['ap_paterno'];
	$ap_materno =  $_POST['ap_materno'];
	$fecha_nac =  $_POST['fecha_nac'];
	$email =  $_POST['email'];
	$escuela =  $_POST['escuela'];
	$direccion = $_POST['direccion'];
	$telefono =  $_POST['telefono'];

		mysqli_query($link, "UPDATE alumno SET dni= '$dni', nombre= '$nombre', ap_paterno= '$ap_paterno', ap_materno = '$ap_materno', 
							fecha_nac= '$fecha_nac', email= '$email', escuela= '$escuela', direccion = '$direccion', telefono = '$telefono'
			WHERE id = $id");
			if(mysqli_affected_rows($link)>=0){
				echo "OK";
			}else{
				echo "ERROR";
				echo die(mysqli_error($link));
			}
?>


	