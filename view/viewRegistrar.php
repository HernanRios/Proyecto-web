<?php
include_once 'view/View.php';

class viewRegistrar extends View {

	function mostrarRegistrar(){
		$this->smarty->display('registrar.tpl');
	}

  public function mostrarError($mensaje)
  {
    $this->smarty->assign('mensaje',$mensaje);
  }
}
?>
