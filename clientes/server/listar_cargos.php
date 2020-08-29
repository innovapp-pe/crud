<?php 
    session_start();
    include('../../connection/config.php');

    $id_contacto = $_POST['id_contacto'];
    $sqlRequest = "SELECT * from crm_contactos_cargos WHERE id_contacto = '$id_contacto' AND estado = 1 order by id_contacto ASC"; 
    $result = mysqli_query($link, $sqlRequest); //save result
    $registros = $result->num_rows;

    if ($registros>0) {
    	while ($row = $result->fetch_assoc()) {

	        $data[] = $row;
	    }

    }else{
    	$data = [];
    }
    
        echo json_encode($data);
?>