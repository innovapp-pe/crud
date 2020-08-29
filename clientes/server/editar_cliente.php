<?php 
	session_start();
	include('../../connection/config.php');
	// initialize variables
	$id_cliente =  $_POST['id_cliente'];
	$nombre_comercial =  $_POST['nombre_comercial'];
	$ruc =  $_POST['ruc'];
	$telefono = $_POST['telefono'];
	$direccion =  $_POST['direccion'];

		mysqli_query($link, "UPDATE crm_clientes SET nombre_comercial= '$nombre_comercial', ruc= '$ruc', telefono= '$telefono', direccion = '$direccion' WHERE id = $id_cliente");
			if(mysqli_affected_rows($link)>=0){
				echo "OK";
			}else{
				echo "ERROR";
				echo die(mysqli_error($link));
			}
?>


	