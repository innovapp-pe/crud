<?php 
	session_start();
	include('../../connection/config.php');
	// initialize variables
	$id_cliente =  $_POST['id_cliente'];
	$nombre =  $_POST['contacto_nombre'];
	$email =  $_POST['contacto_email'];
	$telefono = $_POST['contacto_telefono'];
	$observacion =  $_POST['contacto_observacion'];
	$usuario = $_SESSION["usu_usuario"];


			mysqli_query($link, "INSERT INTO crm_contactos (id_cliente, nombre, email, telefono, observacion, fecha_creacion, creado_por) VALUES 
				('$id_cliente', '$nombre', '$email', '$telefono', '$observacion', '$g_fecha', '$usuario')");
				if(mysqli_affected_rows($link)>0){
					echo "OK";
				}else{
					echo "ERROR";
					//echo die(mysqli_error($link));
				}
?>
