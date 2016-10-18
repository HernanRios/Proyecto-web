<?php

class RFZAModel
{
  private $tareas;
  private $db;

  function __construct()
  {
      $this->db = new PDO('mysql:host=localhost;dbname=rfza;charset=utf8', 'root', '');
  }

  function crearIngreso($campeon,$categoria,$subcampeon,$anio){
  $sentencia = $this->db->prepare("INSERT INTO campeonato(campeon,subcampeon,fk_id_categoria,anio) VALUES(?,?,?,?)");
  $sentencia->execute(array($campeon,$subcampeon,$categoria,$anio));
  $id_tarea = $this->db->lastInsertId();
}

function crearCategoria($categoria,$cilindrada,$zona){
  $sentencia = $this->db->prepare("INSERT INTO categoria(id_categoria,cilindrada,zona) VALUES(?,?,?)");
  $sentencia->execute(array($categoria,$cilindrada,$zona));
  $id_categoria = $this->db->lastInsertId();
}

function getCampeones(){
    $sentencia = $this->db->prepare( "select * from campeonato");
    $sentencia->execute();
    $campeones = $sentencia->fetchAll(PDO::FETCH_ASSOC);
    return $campeones;
  }
  function getCategorias(){
      $sentencia = $this->db->prepare( "select * from categoria");
      $sentencia->execute();
      $categorias = $sentencia->fetchAll(PDO::FETCH_ASSOC);
      return $categorias;
    }

  function eliminarCampeon($campeon){
    echo '<script language="javascript">alert("casi elimino");</script>';
  $sentencia = $this->db->prepare("delete from campeonato where id_campeonato=?");
  $sentencia->execute(array($campeon));
}
}
?>
