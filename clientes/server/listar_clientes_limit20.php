<?php 
    session_start();
    include('../../connection/config.php');

    $sqlRequest = "SELECT  DATOS_2.id, DATOS_2.nombre_comercial, DATOS_2.ruc, DATOS_2.razon_social, DATOS_2.direccion, DATOS_2.telefono,
        DATOS_2.etapa, E.nombre nombre_etapa
          FROM  ( SELECT  *,
                      CASE WHEN E_BOOKING = 1 THEN 3
                        ELSE CASE WHEN E_PROSPECTO = 1 THEN 2 ELSE 1 END END AS etapa
                    FROM  (SELECT *,
                (SELECT CASE WHEN COUNT(P.Id) > 0 THEN 1 ELSE 0 END
                         FROM crm_prospectos P
                        WHERE P.id_cliente = C.id) AS E_BOOKING,

                (SELECT CASE WHEN COUNT(G.Id) > 0 THEN 1 ELSE 0 END
                         FROM crm_gestion G
                        WHERE G.id_cliente = C.id) AS E_PROSPECTO
                    FROM  crm_clientes C WHERE estado = 1
                  ORDER BY C.id ASC) AS DATOS) AS DATOS_2
        INNER JOIN crm_estados_referencia E ON DATOS_2.etapa = E.Id LIMIT 20"; 
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