<?php
include_once "controllers/ABM_Controller.php";
include_once "controllers/controllerLogin.php";
include_once "controllers/nav_controller.php";
include_once "controllers/Registrar_controller.php";
require ('config/ConfigApp.php');



if (!array_key_exists(ConfigApp::$ACTION,$_REQUEST)){
  $navController = new NavController();
  $navController->iniciar();
}

switch ($_REQUEST[ConfigApp::$ACTION]) {
  case ConfigApp::$ACTION_MOSTRAR_LOGIN:
  $Login_Controller = new LoginController();
  $Login_Controller->Mostrarlogin();
  break;
  case ConfigApp::$ACTION_MOSTRAR_REGISTRAR:
  $Login_Controller = new registrar_Controller();
  $Login_Controller->mostrarRegistrar();
  break;
  case ConfigApp::$ACTION_REGISTRAR:
  $Login_Controller = new registrar_Controller();
  $Login_Controller->registrarUsuario();
  break;
  case ConfigApp::$ACTION_LOGIN:
  $Login_Controller = new LoginController();
  $Login_Controller->login();
  break;
  case ConfigApp::$ACTION_GUARDAR_CAMPEON:
  $ABM_Controller = new ABM_Controller();
  $ABM_Controller->guardar();
  break;
  case ConfigApp::$ACTION_GUARDAR_CATEGORIA:
  $ABM_Controller = new ABM_Controller();
  $ABM_Controller->guardarCategoria();
  break;
  case ConfigApp::$ACTION_ABRIR_ABM:
  $ABM_Controller = new ABM_Controller();
  $ABM_Controller->abrir_abm();
  break;
  case ConfigApp::$ACTION_ELIMINAR_CAMPEON:
  $ABM_Controller = new ABM_Controller();
  $ABM_Controller->eliminarCampeon();
  break;
  case ConfigApp::$ACTION_ELIMINAR_CATEGORIA:
  $ABM_Controller = new ABM_Controller();
  $ABM_Controller->eliminarCategoria();
  break;
  case ConfigApp::$ACTION_CARGAR_EDITORCATEGORIA:
  $ABM_Controller = new ABM_Controller();
  $ABM_Controller->cargarEditorCategoria();
  break;
  case ConfigApp::$ACTION_EDITAR_CATEGORIA:
  $ABM_Controller = new ABM_Controller();
  $ABM_Controller->EditarCategoria();
  break;
  case ConfigApp::$ACTION_CARGAR_EDITORCAMPEON:
  $ABM_Controller = new ABM_Controller();
  $ABM_Controller->cargarEditorCampeon();
  break;
  case ConfigApp::$ACTION_EDITAR_CAMPEON:
  $ABM_Controller = new ABM_Controller();
  $ABM_Controller->EditarCampeon();
  break;
  case ConfigApp::$ACTION_MOSTRAR_TABLA:
  $navController = new NavController();
  $navController->mostrarTabla();
  break;
  case ConfigApp::$ACTION_FILTRAR_TABLA:
  $navController = new NavController();
  $navController->FiltrarTabla();
  break;
  default:
  $navController = new NavController();
  $navController->iniciar();
  break;
}
?>
