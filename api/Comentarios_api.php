<?php
require_once 'api_base.php';
require_once '../models/ComentariosModel.php';

class ComentriosApi extends ApiBase {
  private $model;

 public function __construct($request)
{
   parent::__construct($request);
   $this->model = new ComentariosModel();
 }
 protected function comentario($argumentos){
   switch ($this->method) {
     case 'GET':
         if(count($argumentos)>0){
           $comentario = $this->model->getComentario($argumentos[0]);
           $error['Error'] = "No existis comentario";
           $error['comentario'] = $comentario;
           return ($comentario) ? $comentario : $error;
         }else{
           return $this->model->getComentarios();
         }
       break;
     case 'DELETE':
         if(count($argumentos)>0){
           $error['Error'] = "No existe el comentrio";
           $success['Success'] = "Se borro exitosamente el comentario";
           $filasAfectadas = $this->model->eliminarComentario($argumentos[0]);
           return ($filasAfectadas == 1) ? $success : $error;
         }
       break;
       case 'POST':
           if(count($argumentos)==0){
             $error['Error'] = "El comentario no se creo";
             $id_comentario = $this->model->crearComentario($_POST);//id usuario, id producto, comentario, puntaje
             return ($id_comentario > 0) ? json_encode($this->model->getcomentario($id_comentario)) : $error;
           }
         break;
     default:
          return "Only accepts GET";
       break;
   }
  }
}


?>
