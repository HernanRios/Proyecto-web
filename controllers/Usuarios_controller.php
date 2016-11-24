<?php
include_once 'controllers/controller.php';
include_once 'view/UsuariosView.php';
include_once 'view/NavView.php';
include_once 'models/usuariosModel.php';


class Usuarios_controller extends Controller {

  function __construct() {
    $this->model = new UsuariosModel();
    $this->view = new UsuariosView();

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

    function mostrarServicios(){
      session_start();
      if(isset($_SESSION['permiso'])){
      if ($_SESSION['permiso']>1) {
        $usuarios = $this->model->getUsuarios();
        $this->view->mostrarServicios($usuarios);
      }}
      $navView = new NavView();
      $navView->mostrarHome();
    }

    function editarUsuario(){
      echo "hubo un tiempo en que";
      if(isset($_GET['usuario']) && (isset($_GET['permiso']))){
      $usuario = $_GET['usuario'];
      $permiso = $_GET['permiso'];
      $this->model->editarUsuario($usuario,$permiso);
    }}

}

?>
