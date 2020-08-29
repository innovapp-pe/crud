<?php 
	session_start();
	include('../../connection/config.php');
	// initialize variables
	$id_contacto =  $_POST['id_contacto'];
	$descripcion =  $_POST['cargo_descripcion'];
	$fecha_inicio =  $_POST['cargo_finicio'];
	$flag_actual = $_POST['cargo_flag_actual'];
	$usuario = $_SESSION["usu_usuario"];


			mysqli_query($link, "INSERT INTO crm_contactos_cargos (id_contacto, descripcion, fecha_inicio, flag_actual, fecha_creacion, creado_por) VALUES 
				('$id_contacto', '$descripcion', '$fecha_inicio', '$flag_actual', '$g_fecha', '$usuario')");
				if(mysqli_affected_rows($link)>0){
					echo "OK";
				}else{
					echo "ERROR";
					//echo die(mysqli_error($link));
				}
?>


	