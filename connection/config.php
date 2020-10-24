<?php
	/* Database credentials. Assuming you are running MySQL
	server with default setting (user 'root' with no password) */
		define('DB_SERVER', 'localhost');
		define('DB_USERNAME', 'root');
		define('DB_PASSWORD', '');
		define('DB_NAME', 'caminper');
	 
	/* Attempt to connect to MySQL database */
		$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

	// Cambiando idioma al servidor
		$query = "SET NAMES 'utf8'";

		if ($res = mysqli_query($link, $query)) {
		}

	// Actualizando zona horaria del servidor
		$q_timezone = "SET TIME_ZONE = 'America/Lima'";

		if ($res = mysqli_query($link, $q_timezone)) {
		}

	// Fecha y hora del sistema
		date_default_timezone_set("America/Lima"); 

		$g_date = date('Y-m-d');
		$g_time = date('H:i:s');

		$g_fecha = $g_date.' ' .$g_time;
		$g_anho = date('Y');
		$g_mes = date('n');
 
	// Check connection
		if($link === false){
		    die("ERROR: Could not connect. " . mysqli_connect_error());
	}
?>