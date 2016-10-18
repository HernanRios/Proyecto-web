<?php
require('controllers/RFZAController.php');
require ('config/ConfigApp.php');

$controller = new RFZAController();

if (!array_key_exists(ConfigApp::$ACTION,$_REQUEST)){
  $controller->iniciar();
  die();
}

switch ($_REQUEST[ConfigApp::$ACTION]) {
  case ConfigApp::$ACTION_GUARDAR_CAMPEON:
  $controller->guardar();
  break;
  case ConfigApp::$ACTION_GUARDAR_CATEGORIA:
  $controller->guardarCategoria();
  break;
  case ConfigApp::$ACTION_ABRIR_ABM:
  $controller->abrir_abm();
  break;
  case ConfigApp::$ACTION_ELIMINAR_CAMPEON:
  $controller->eliminarCampeon();
  break;
  default:
  $controller->iniciar();
  break;
}
?>
