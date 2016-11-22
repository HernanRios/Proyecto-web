<?php
include_once 'controllers/controller.php';
include_once 'view/viewLogin.php';
include_once 'models/usuariosModel.php';

class LoginController extends Controller {

  function __construct() {
    $this->model = new UsuariosModel();
    $this->view = new LoginView();

  }

  function login(){

    if(isset( $_REQUEST["txtEmail"]) && isset( $_REQUEST["txtPassword"])  ){
      $email= $_REQUEST["txtEmail"]; //Traigo email y pass de los Requests del Form
      $password= $_REQUEST["txtPassword"]; //Este es texto plano, no HASH.
      $usuario=$this->model->getUsuario($email); //Le pido al model que me traiga de la base de datos ese email que llego por el form
      if (password_verify($password,$usuario[0]['pass'])){ //Si las pass coinciden
        session_start(); //inicia una sesion
        $_SESSION["email"] = $email;
        $_SESSION["nombre"] = $usuario[0]["nombre"];
        echo"VERIFICO";
        header("Location: index.php?action=abrir_abm");
        echo"VERIFICO";
      }else{
        if (isset($_SESSION["email"])){
          echo "esta logueado";
          $campeones=$this->model->getCampeones();
          $categorias=$this->model->getCategorias();
          $this->view->mostrarAbm($campeones,$categorias);
        }
        else{
          $this->view->mostrarError("Datos de ingreso invalidos");
          $this->view->mostrarLogin();
        }
      }
    }
  }


    function logout(){

      session_start();
      $_SESSION = array();
      if (ini_get("session.use_cookies")) {
        $params = session_get_cookie_params();
        setcookie(session_name(), '', time() - 42000,
        $params["path"], $params["domain"],
        $params["secure"], $params["httponly"]
      );
    }

    // Destruyo la sesión
    session_destroy();
    header("Location: index.php");
    die();
  }

  function mostrarLogin(){
    echo "entro aca";
    $this->view->mostrarLogin();
  }



}

?>
