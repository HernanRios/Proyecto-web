<?php
require_once 'Comentarios_api.php';

$ComentriosApi = new ComentriosApi($_REQUEST['parametros']);
echo $ComentriosApi->processAPI();
?>
