<?php 
	session_start();
	include('../../connection/config.php');
	// initialize variables
	$id_contacto =  $_POST['id_contacto'];

		$sql= "UPDATE crm_contactos SET estado= 0 WHERE id = $id_contacto";
		//$sql= "UPDATE crm_contactos_cargos SET estado= 0 WHERE id_contacto = $id_contacto";

		//$sql = "DELETE FROM crm_contactos WHERE id = '$id_contacto';";
		//$sql .= "DELETE FROM crm_contactos_cargos WHERE id_contacto = $id_contacto";
		
		mysqli_multi_query($link, $sql);
		
		/*mysqli_query($link, "DELETE FROM crm_contactos WHERE id = $id_contacto");*/
			if(mysqli_affected_rows($link)>0){
				echo "OK";
			}else{
				echo "ERROR";
				echo die(mysqli_error($link));
			}
?>