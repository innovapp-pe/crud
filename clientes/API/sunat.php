<?php  
 $ruc = $_POST["ruc"];
      $url = "http://ventas.mbsoftperu.com/App/api/ConsultaRuc/".trim($ruc);
      /*$url = "http://api.sunat.cloud/ruc/".trim($ruc);*/
      $curl = curl_init();

      curl_setopt_array($curl, array(
        CURLOPT_URL => $url,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => "",
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => "GET"
      ));

 

      $response = curl_exec($curl);

 

      curl_close($curl);

 

      echo $response;
?>