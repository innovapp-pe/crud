<?php 
	session_start();
	include('../../connection/config.php');
	// initialize variables
	$id_cliente =  $_POST['id_cliente'];

		$sql= "UPDATE crm_clientes SET estado= 0 WHERE id = $id_cliente";
		mysqli_query($link, $sql);
		
		/*mysqli_query($link, "DELETE FROM crm_contactos WHERE id = $id_contacto");*/
			if(mysqli_affected_rows($link)>0){
				echo "OK";
			}else{
				echo "ERROR";
				echo die(mysqli_error($link));
			}
?>