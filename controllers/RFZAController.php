<?php
require('views/RFZAView.php');
require('models/RFZAModel.php');

class RFZAController
{
  private $vista;
  private $modelo;

  function __construct()
  {
    $this->modelo = new RFZAModel();
    $this->vista = new RFZAView();
  }

  function iniciar(){
    $this->vista->mostrar();
  }
  function abrir_abm(){
    $campeones = $this->modelo->getCampeones();
    $categorias = $this->modelo->getCategorias();
      $this->vista->mostrarAbm($campeones,$categorias);
  }

  function guardar(){
    $campeon = $_POST['campeon'];
    $categoria = $_POST['categoria'];
    $subcampeon = $_POST['subcampeon'];
    $anio = $_POST['anio'];
    $this->modelo->crearIngreso($campeon,$categoria,$subcampeon,$anio);
    $this->abrir_abm();
  }
  function guardarCategoria(){
    $categoria = $_POST['categoria'];
    $cilindrada = $_POST['cilindrada'];
    $zona = $_POST['zona'];
    $this->modelo->crearCategoria($categoria,$cilindrada,$zona);
    $this->abrir_abm();
  }


  function eliminarCampeon(){
    echo '<script language="javascript">alert("php eliminar");</script>';
    $key = $_GET['campeon'];
    $this->modelo->eliminarCampeon($key);
    $campeones = $this->modelo->getCampeones();
    $this->vista->mostrarAbm($campeones);
    echo "Entro";
  }



}

 ?>
