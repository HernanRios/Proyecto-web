<?php
include_once 'view/View.php';

class NavView extends View{

	function mostrarHome(){
    $this->smarty->display('index.tpl');
  }

	function mostrar($contenedor_principal){
		if(isset($_SESSION["email"])){
			$this->smarty->assign('email', $_SESSION["email"]);
			$this->smarty->assign('nombre', $_SESSION["nombre"]);
		}
		else {
			$this->smarty->assign('email', 'Visitante');
		}
			$this->smarty->assign('errores', $this->errores);
			$this->smarty->display($contenedor_principal.'.tpl');
	}

	function cargaInicial($contenedor_principal){
		if(isset($_SESSION["email"])){
			$this->smarty->assign('email', $_SESSION["email"]);
			$this->smarty->assign('nombre', $_SESSION["nombre"]);
		}
		else {
			$this->smarty->assign('nombre', 'Visitante');
		}
		$this->smarty->assign('errores', $this->errores);
		$this->smarty->assign('contenedor_principal', $contenedor_principal);
		$this->smarty->display('index.tpl');
	}


	function mostrarMain($noticias){
		$this->smarty->assign('errores', $this->errores);
		$this->smarty->assign('noticias', $noticias);
		$this->smarty->display('inicio.tpl');
	}

}
?>
