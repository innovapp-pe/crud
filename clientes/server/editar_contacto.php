<?php 
	session_start();
	include('../../connection/config.php');
	// initialize variables
	$id_contacto =  $_POST['id_contacto'];
	$nombre =  $_POST['nombre'];
	$email =  $_POST['email'];
	$telefono = $_POST['telefono'];
	$observacion =  $_POST['observacion'];

		mysqli_query($link, "UPDATE crm_contactos SET nombre= '$nombre', email= '$email', telefono= '$telefono', observacion = '$observacion' WHERE id = $id_contacto");
			if(mysqli_affected_rows($link)>=0){
				echo "OK";
			}else{
				echo "ERROR";
				echo die(mysqli_error($link));
			}
?>


	