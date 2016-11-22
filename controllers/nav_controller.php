<?php
include_once 'controllers/controller.php';
include_once 'view/navView.php';
include_once 'models/ABM_model.php';

class NavController extends Controller  {

    function __construct() {
        $this->vista = new NavView();
        $this->model = new ABM_Model();
        session_start();
    }

    function iniciar(){
      $this->vista->mostrarHome();
    }

    function mostrarTabla(){
      $campeones = $this->modelo->getCampeones();
      $this->vista->mostrarTabla($campeones);
    }

    function filtrarTabla(){
      $categoria = $_GET['id_categoria'];
      $campeones = $this->modelo->getCampeonesPorCategoria($categoria);
      $this->vista->mostrarTabla($campeones);
    }

}

?>
