<?php 
	session_start();
	include('../../connection/config.php');
	// initialize variables
	$ruc =  $_POST['ruc'];
	$razon_social =  $_POST['razon_social'];
	$direccion =  $_POST['direccion'];
	$telefono = $_POST['telefono'];
	$nombre_comercial = $_POST['nombre_comercial'];
	$usuario = $_SESSION["usu_usuario"];


		$flag_ruc_existente = mysqli_query($link, "SELECT id FROM crm_clientes WHERE ruc =  $ruc");

			if(mysqli_num_rows($flag_ruc_existente) > 0 ){
	
			    //echo mysqli_num_rows($flag_ruc_existente);
			    echo "RUC EXISTENTE";
			}
			else{
			    //echo "RUC NO EXISTE";

			    mysqli_query($link, "INSERT INTO crm_clientes (ruc, razon_social, direccion, telefono, nombre_comercial, fecha_creacion, creado_por) VALUES 
				('$ruc', '$razon_social', '$direccion', '$telefono', '$nombre_comercial', '$g_fecha', '$usuario')");
					if(mysqli_affected_rows($link)>0){
						echo "OK";
					}else{
						echo "ERROR";
						echo die(mysqli_error($link));
					}
			}

?>


	