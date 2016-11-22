
<?php

abstract class Model {

  protected $db;

  //Abstraigo Model para no tener que llamar a la base de datos varias veces

  function __construct() {
  $this->db = new PDO('mysql:host=localhost;dbname=rfza;charset=utf8', 'root', '');
    $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  }

}
?>
