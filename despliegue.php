<?php
//Obtener datos que envia github
$payload = json_decode(file_get_contents("php://input"));
$payload->ref;

//Comprobaciones

//Ejecutamos
shell_exec('./deploy.sh');

?>