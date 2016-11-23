<?php
require_once 'api_base.php';
require_once(dirname(__DIR__) . '../models/UsuariosModel.php');
require_once(dirname(__DIR__) . '../models/ComentariosModel.php');


class ComentriosApi extends ApiBase {
  private $model;

 public function __construct($request)
{
   parent::__construct($request);
   $this->model = new ComentariosModel();
   $this->modelLogin = new UsuariosModel();
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
             session_start();
             if($_SESSION["permiso"]>0){
             $error['Error'] = "El comentario no se creo";
             $id_comentario = $this->model->crearComentario($_POST);//comentario,puntaje,id_usuario,id_campeonato
             return ($id_comentario > 0) ? json_encode($this->model->getcomentario($id_comentario)) : $error;}
             else {
               return json_encode("no tiene los permisos necesarios");
             }
           }
         break;
     default:
          return "Only accepts GET";
       break;
   }
  }
  protected function login($argumentos){
    switch ($this->method) {
        case 'POST':
            if(count($argumentos)==0){
              echo json_encode( "Holi");
              if(isset( $_REQUEST["email"]) && isset( $_REQUEST["password"])  ){
                json_encode("entro");
                $email= $_REQUEST["email"]; //Traigo email y pass de los Requests del Form
                $password= $_REQUEST["password"]; //Este es texto plano, no HASH.
                $usuario=$this->modelLogin->getUsuario($email); //Le pido al model que me traiga de la base de datos ese email que llego por el form
                if (password_verify($password,$usuario[0]['pass'])){ //Si las pass coinciden
                  session_start(); //inicia una sesion
                  $_SESSION["email"] = $email;
                  $_SESSION["permiso"] = $usuario[0]['permiso'];
                  return json_encode("Usted se ha logeado Correctamente");

                }else{
                  if (isset($_SESSION["email"])){
                    return json_encode("Ya se encontraba logeado");
                }
                  else{
                    return json_encode("los datos son invalidos");
                  }
                }
              }
            }
          break;
      default:
           return "Only accepts POST";
        break;
    }
   }
   protected function logout($argumentos){
     switch ($this->method) {
         case 'POST':
             if(count($argumentos)==0){
               session_start();
               $_SESSION = array();
               if (ini_get("session.use_cookies")) {
                 $params = session_get_cookie_params();
                 setcookie(session_name(), '', time() - 42000,
                 $params["path"], $params["domain"],
                 $params["secure"], $params["httponly"]
               );
             }

             // Destruyo la sesión
             session_destroy();
             return json_encode("Usted se ha deslogueado correctamente");
             }
           break;
       default:
            return "Only accepts POST";
         break;
     }
    }
}


?>
