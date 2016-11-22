<?php
include_once 'controllers/controller.php';
include_once 'view/viewRegistrar.php';
include_once 'models/usuariosModel.php';

class Registrar_controller extends Controller {

  function __construct() {
    $this->model = new UsuariosModel();
    $this->view = new viewRegistrar();

  }



  function mostrarRegistrar(){
    $this->view->mostrarRegistrar();
  }

  function registrarUsuario(){
    if(isset($_POST['txtEmail']) && (isset($_POST['txtPassword']))){
      $email = $_POST['txtEmail'];
      $pass = password_hash($_REQUEST['txtPassword'],PASSWORD_DEFAULT);
      $mensaje = $this->model->crearUsuario($email,$pass);
      if ($mensaje == '0'){
        $this->view->mostrarError("Ha ocurrido un error");
      }
      }
    }
  



}

?>
