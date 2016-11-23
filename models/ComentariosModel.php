<?php



  class ComentariosModel {
    private $db;

    function __construct()
    {
      $this->db = new PDO('mysql:host=localhost;dbname=rfza;charset=utf8', 'root', '');
    }

    function crearComentario($comentario) {
        $sentencia = $this->db->prepare("INSERT INTO comentario(texto, puntaje, fk_id_usuario, fk_id_campeonato) VALUES(?,?,?,?)");
        $sentencia->execute(array($comentario["comentario"], $comentario["puntaje"], $comentario["id_usuario"], $comentario["id_campeonato"]));
        $id_comentario = $this->db->lastInsertId();
        return $id_comentario;
        }

  function puntuarComentario($puntaje,$comentario){
    $sentencia = $this->db->prepare("INSERT INTO puntajecomentario(puntaje,fk_id_comentario) VALUES(?,?)");
    $sentencia->execute(array($puntaje,$comentario));
    $id_categoria = $this->db->lastInsertId();
    return $id_categoria;
  }

  function getComentarios(){
      $sentencia = $this->db->prepare("SELECT * FROM comentario");
      $sentencia->execute();
      return $sentencia->fetchAll(PDO::FETCH_ASSOC);
  }

  function getComentario($id_comentario){
    $sentencia = $this->db->prepare("SELECT * FROM comentario WHERE id_comentario = ?");
    $sentencia->execute(array($id_comentario));
    return $sentencia->fetchAll(PDO::FETCH_ASSOC);
  }

  function eliminarComentario($id_comentario){
    $sentencia = $this->db->prepare("DELETE FROM comentario WHERE id_comentario=?");
    $sentencia->execute(array($id_comentario));
    return $sentencia -> rowCount();
  }



}
?>
