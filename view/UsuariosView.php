<?php
include_once 'view/View.php';

class UsuariosView extends View {

	function mostrarRegistrar(){
		$this->smarty->display('registrar.tpl');
	}

  public function mostrarError($mensaje)
  {
    $this->smarty->assign('mensaje',$mensaje);
  }

	function mostrarServicios($usuarios){
		$this->smarty->assign('usuarios',$usuarios);
		$this->smarty->display('ServiciosdeAdministracion.tpl');

	}
}
?>
