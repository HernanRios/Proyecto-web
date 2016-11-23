<?php
include_once 'controllers/controller.php';
include_once 'view/navView.php';
include_once 'models/ABM_model.php';

class NavController extends Controller  {

    function __construct() {
        $this->vista = new NavView();
        $this->model = new ABM_Model();

    }

    function iniciar(){
      $this->vista->mostrarHome();
    }

    function mostrarTabla(){
      $campeones = $this->model->getCampeones();
      $this->vista->mostrarTabla($campeones);
    }

    function filtrarTabla(){
      $categoria = $_GET['idcategoria'];
      $campeones = $this->model->getCampeonesPorCategoria($categoria);
      $this->vista->mostrarTabla($campeones);
    }

    function mostrarCampeones(){
      $campeones = $this->model->getCampeones();
      $categorias = $this->model->getCategorias();
      session_start();
      $permiso = $_SESSION["email"];
      echo $permiso;
      $this->vista->mostrarCampeones($campeones,$categorias,$permiso);

    }

}

?>
