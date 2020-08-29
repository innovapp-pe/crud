<?php 
    session_start();
    include('../../connection/config.php');

    $id_cliente = $_POST['id_cliente'];
    $sqlRequest = "SELECT * from crm_contactos WHERE id_cliente = '$id_cliente' AND estado = 1 order by id_cliente ASC"; 
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