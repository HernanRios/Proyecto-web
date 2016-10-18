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
    $key = $_GET['idcampeonato'];
    $this->modelo->eliminarCampeon($key);
    $this->abrir_abm();
  }
  function eliminarCategoria(){
    $key = $_GET['idcategoria'];
    $this->modelo->eliminarCategoria($key);
    $this->abrir_abm();
  }



}

 ?>
