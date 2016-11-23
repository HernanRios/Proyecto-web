<?php

include_once 'models/Model.php';

  class ComentariosModel extends Model{



  function crearComentario($comentario,$campeonato){
    $sentencia = $this->db->prepare("INSERT INTO comentario(comentario,fk_id_campeonato) VALUES(?,?)");
    $sentencia->execute(array($comentario,$campeonto));
    $id_categoria = $this->db->lastInsertId();
    return $id_categoria;
  }

  function puntuarComentario($puntaje,$comentario){
    $sentencia = $this->db->prepare("INSERT INTO puntajecomentario(puntaje,fk_id_comentario) VALUES(?,?)");
    $sentencia->execute(array($puntaje,$comentario));
    $id_categoria = $this->db->lastInsertId();
    return $id_categoria;
  }



}
?>
