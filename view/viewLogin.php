<?php
include_once 'view/View.php';

class LoginView extends View {

	function mostrarLogin(){
		if(isset($_SESSION["email"])){
			$this->smarty->assign('email', $_SESSION["email"]);
		}
		$this->smarty->assign('errores', $this->errores);
		$this->smarty->display('login.tpl');
	}

  function mostrarAbm($campeones,$categorias){
    $this->smarty->assign('email', $_SESSION["email"]);
		$this->smarty->assign('nombre', $_SESSION["nombre"]);
    $this->smarty->assign('categorias',$categorias);
    $this->smarty->assign('campeones',$campeones);
    $this->smarty->display('abm.tpl');
  }
}
?>
