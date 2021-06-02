<?php
 function API(){
	
	$url = "https://localhost:44325/WebService1.asmx?op=materia&ci='123'";
	
	$respuesta = $url;
	return $respuesta;
	
}
$arrContextOptions=array(
    "ssl"=>array(
        "verify_peer"=>false,
        "verify_peer_name"=>false,
    ),
);  
$direccion = API();
$json = file_get_contents($direccion,false, stream_context_create($arrContextOptions));

print_r($json);







?>