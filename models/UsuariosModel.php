
<?php

include_once 'models/Model.php';

  class UsuariosModel extends Model{

    private $usuarios;

    function getUsuario($email){ // Devuelve el usuario de la base de datos que se corresponde con el mail ingresado por el visitante
      $consulta = $this->db->prepare("SELECT * FROM usuario WHERE email = ?");
      $consulta->execute(array($email));
      return $consulta ->fetchAll(PDO::FETCH_ASSOC);
  }


  function crearUsuario($email,$pass){
    $sentencia = $this->db->prepare("INSERT INTO usuario(email,pass) VALUES(?,?)");
    $sentencia->execute(array($email,$pass));
    $id_categoria = $this->db->lastInsertId();
    echo $id_categoria;
    return $id_categoria;
  }

  function getUsuarios(){
    $consulta = $this->db->prepare("SELECT * FROM usuario");
    $consulta->execute();
    return $consulta->fetchAll(PDO::FETCH_ASSOC);
  }

  function editarUsuario($usuario,$permiso){
    echo $usuario;
    echo $permiso;
    $consulta = $this->db->prepare("UPDATE usuario SET permiso=?  WHERE id=?");
    $consulta->execute(array($permiso,$usuario));
    echo $this->db->lastInsertId();
  }

}
?>
