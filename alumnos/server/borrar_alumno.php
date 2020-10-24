<?php 
	session_start();
	include('../../connection/config.php');
	// initialize variables
	$id_alumno =  $_POST['id_alumno'];

		//$sql= "DELETE FROM crm_contactos_cargos WHERE id = $id_cargo";
		$sql= "UPDATE alumno SET estado= 0 WHERE id = $id_alumno";
		mysqli_query($link, $sql);
		
		/*mysqli_query($link, "DELETE FROM crm_contactos WHERE id = $id_contacto");*/
			if(mysqli_affected_rows($link)>0){
				echo "OK";
			}else{
				echo "ERROR";
				echo die(mysqli_error($link));
			}
?>