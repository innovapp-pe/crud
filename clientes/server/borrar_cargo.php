<?php 
	session_start();
	include('../../connection/config.php');
	// initialize variables
	$id_cargo =  $_POST['id_cargo'];

		//$sql= "DELETE FROM crm_contactos_cargos WHERE id = $id_cargo";
		$sql= "UPDATE crm_contactos_cargos SET estado= 0 WHERE id = $id_cargo";
		mysqli_query($link, $sql);
		
		/*mysqli_query($link, "DELETE FROM crm_contactos WHERE id = $id_contacto");*/
			if(mysqli_affected_rows($link)>0){
				echo "OK";
			}else{
				echo "ERROR";
				echo die(mysqli_error($link));
			}
?>