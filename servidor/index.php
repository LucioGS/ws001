<?php
 
	$numero = $_GET['numero'];

	if(!empty($numero)){
			$numero = $numero * 2;
            respuesta(200, "OK", $numero);
	}else{
            respuesta(200, "KO", null);
    }
 

    function respuesta($estado, $mensaje_estado, $datos){
		
		header("Content-Type:application/json");
        header("HTTP/1.1 $estado $mensaje_estado");
        $respuesta['estado'] = $estado;
        $respuesta['mensaje_estado'] = $mensaje_estado;
        $respuesta['datos'] = $datos;
        $respuesta_json = json_encode($respuesta);
        echo $respuesta_json;
		
    }
  
?>