<?php 
    session_start();
    include('../../connection/config.php');

    $sqlRequest = "SELECT * FROM alumno WHERE estado = 1  ORDER BY nombre"; 
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