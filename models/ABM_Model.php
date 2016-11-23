<?php

class ABM_Model
{
  private $db;

  function __construct()
  {
    $this->db = new PDO('mysql:host=localhost;dbname=rfza;charset=utf8', 'root', '');
  }

  function crearIngreso($campeon,$categoria,$subcampeon,$anio,$imagenesCampeonato){
    $sentencia = $this->db->prepare("INSERT INTO campeonato(campeon,subcampeon,fk_id_categoria,anio) VALUES(?,?,?,?)");
    $sentencia->execute(array($campeon,$subcampeon,$categoria,$anio));
    $id_campeonato = $this->db->lastInsertId();
    $cntFotos=0;
    for ($i=0 ; $i < count($imagenesCampeonato['size']) ; $i++ ) {
      $cntFotos = $cntFotos +1;
      $path="img/campeonato/".uniqid()."_".$imagenesCampeonato['name'][$i];
      move_uploaded_file($imagenesCampeonato['tmp_name'][$i], $path);
     $insertImagen = $this->db->prepare("INSERT INTO imagencampeonato(path,fk_id_campeonato) VALUES(?,?)");
     $insertImagen->execute(array($path,$id_campeonato));
   }
    echo $id_campeonato;
  }

  function crearCategoria($categoria,$cilindrada,$zona){
    $sentencia = $this->db->prepare("INSERT INTO categoria(id_categoria,cilindrada,zona) VALUES(?,?,?)");
    $sentencia->execute(array($categoria,$cilindrada,$zona));
    $id_categoria = $this->db->lastInsertId();
  }

  function getCampeon($id_campeonato){
    $sentencia = $this->db->prepare("select * from campeonato where id_campeonato=?");
    $sentencia ->execute(array($id_campeonato));
    $campeonato = $sentencia->fetchAll(PDO::FETCH_ASSOC);
    return $campeonato;
  }

  function getCampeonesPorCategoria($categoria){
    $sentencia = $this->db->prepare( "select * from campeonato where fk_id_categoria=?");
    $sentencia->execute(array($categoria));
    $campeones = $sentencia->fetchAll(PDO::FETCH_ASSOC);
    foreach ($campeones as $key => $campeon) {
      $campeones[$key]['imagenes']=$this->getImagenes($campeon['id_campeonato']);}
    return $campeones;
  }

  function getCampeones(){
    $sentencia = $this->db->prepare( "select * from campeonato");
    $sentencia->execute();
    $campeones = $sentencia->fetchAll(PDO::FETCH_ASSOC);
    foreach ($campeones as $key => $campeon) {
      $campeones[$key]['imagenes']=$this->getImagenes($campeon['id_campeonato']);}
      foreach ($campeones as $key => $campeon) {
        $campeones[$key]['comentarios']=$this->getComentarios($campeon['id_campeonato']);}
    return $campeones;
  }

  function getImagenes($id_campeonato){
      $sentencia = $this->db->prepare( "select * from imagenCampeonato where fk_id_campeonato=?");
      $sentencia->execute(array($id_campeonato));
      return $sentencia->fetchAll(PDO::FETCH_ASSOC);
    }

    function getComentarios($id_campeonato){
        $sentencia = $this->db->prepare( "select * from comentario where fk_id_campeonato=?");
        $sentencia->execute(array($id_campeonato));
        return $sentencia->fetchAll(PDO::FETCH_ASSOC);
      }

  function getCategorias(){
    $sentencia = $this->db->prepare( "select * from categoria");
    $sentencia->execute();
    $categorias = $sentencia->fetchAll(PDO::FETCH_ASSOC);
    return $categorias;
  }

  function getCategoria($id){
    $sentencia = $this->db->prepare("select * from categoria where id_categoria=?");
    $sentencia->execute(array($id));
    $categoria = $sentencia->fetchAll(PDO::FETCH_ASSOC);
    return $categoria;
  }

  function eliminarCampeon($campeon){
    echo $campeon;
    $sentencia = $this->db->prepare("delete from campeonato where id_campeonato=?");
    $sentencia->execute(array($campeon));
  }
  function eliminarCategoria($categoria){
    $sentencia = $this->db->prepare("delete from categoria where id_categoria=?");
    $sentencia->execute(array($categoria));
  }
  function editarCategoria($id_categoria,$cilindrada,$zona, $categoriaOriginal){
    $consulta = $this->db->prepare('UPDATE categoria SET id_categoria=?,cilindrada=?,zona=?  WHERE id_categoria=?');
    $consulta->execute(array($id_categoria,$cilindrada,$zona,$categoriaOriginal));
    echo $this->db->lastInsertId();
  }

  function editarCampeon($campeonOriginal,$campeon,$categoria,$subcampeon,$anio){
    $consulta = $this->db->prepare('UPDATE campeonato SET campeon=?, subcampeon=?,fk_id_categoria=?,anio=? WHERE id_campeonato=?');
    $consulta->execute(array($campeon,$subcampeon,$categoria,$anio,$campeonOriginal));
    $id_campeonato = $this->db->lastInsertId();
    for ($i=0 ; $i < count($imagenesCampeonato['size']) ; $i++ ) {
      $path="img/campeonato/".uniqid()."_".$imagenesCampeonato['name'][$i];
      move_uploaded_file($imagenesCampeonato['tmp_name'][$i], $path);
     $insertImagen = $this->db->prepare("insert into imagenCampeonato(path,fk_id_campeonato) VALUES(?,?)");
     $insertImagen->execute(array($path,$id_campeonato));
  }}

  function eliminarFoto($foto){
    $sentencia = $this->db->prepare("delete from imagencampeonato where path=?");
    $sentencia->execute(array($foto));
  }
}
?>
