<?php
include_once 'controllers/controller.php';
include_once 'view/abmView.php';
include_once 'models/ABM_Model.php';

class ABM_Controller extends Controller  {

  function __construct() {
      $this->vista = new AbmView();
      $this->modelo = new ABM_Model();
      session_start();
  }

  function abrir_abm(){
    if ((isset($_SESSION["email"]))&&(($_SESSION["permiso"]>0))){
    $campeones = $this->modelo->getCampeones();
    $categorias = $this->modelo->getCategorias();
    $this->vista->mostrarAbm($campeones,$categorias);
  }
  else {
    header("Location: index.php");
  }}

  function guardar(){
    if((isset($_POST['campeon']) && (isset($_POST['categoria'])) && (isset($_POST['categoria']) &&
     (isset($_POST['subcampeon']) && (isset($_POST['anio'])))))){
      $campeon = $_POST['campeon'];
      $categoria = $_POST['categoria'];
      $subcampeon = $_POST['subcampeon'];
      $anio = $_POST['anio'];
      $imagenesCampeonato = $_FILES['imagenesCampeonato'];
      $this->modelo->crearIngreso($campeon,$categoria,$subcampeon,$anio,$imagenesCampeonato);
      $this->abrir_abm();
    }
    else{
      $this->vista->mostrarMensaje("Error debe completar todos los campos", "danger");
    }
  }


  function guardarCategoria(){
    $categoria = $_POST['categoria'];
    $cilindrada = $_POST['cilindrada'];
    $zona = $_POST['zona'];
    $this->modelo->crearCategoria($categoria,$cilindrada,$zona);
    $this->abrir_abm();
  }


  function eliminarCampeon(){
    $key = $_GET['idcampeonato'];
    $this->modelo->eliminarCampeon($key);
    $this->abrir_abm();
  }
  function eliminarCategoria(){
    $key = $_GET['idcategoria'];
    $this->modelo->eliminarCategoria($key);
    $this->abrir_abm();
  }

  function eliminarFoto(){
    $key = $_GET['idfoto'];
    $this->modelo->eliminarFoto($key);
    $this->abrir_abm();
  }


  function cargarEditorCategoria(){
    $id_categoria = $_GET['idcategoria'];
    $categoria = $this->modelo->getCategoria($id_categoria);
    $this->vista->mostrarEditor($categoria);
  }

  function EditarCategoria(){
    $categoria = $_GET['categoria'];
    $cilindrada = $_GET['cilindrada'];
    $zona = $_GET['zona'];
    $categoriaOriginal = $_GET['categoriaOriginal'];
    $this->modelo->editarCategoria($categoria,$cilindrada,$zona,$categoriaOriginal);
    $this->abrir_abm();
  }

  function cargarEditorCampeon(){
    $id_campeon = $_GET['idcampeonato'];
      $campeon = $this->modelo->getCampeon($id_campeon);
    $categorias = $this->modelo->getCategorias();
    $this->vista->mostrarEditorCampeon($campeon,$categorias);
  }

  function EditarCampeon(){
    $campeonOriginal = $_GET['idcampeonato'];
    $campeon = $_GET['campeon'];
    $categoria = $_GET['categoria'];
    $subcampeon = $_GET['subcampeon'];
    $anio = $_GET['anio'];
    $this->modelo->editarCampeon($campeonOriginal,$campeon,$categoria,$subcampeon,$anio);
    $this->abrir_abm();
  }

}

?>
