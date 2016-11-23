<?php
include_once 'view/View.php';

class NavView extends View{

	function mostrarTabla($campeones){
		$this->smarty->assign('campeones',$campeones);
		$this->smarty->display('tabla.tpl');
	}

	function mostrarHome(){
		$this->smarty->display('index.tpl');
	}

	function mostrarCampeones($campeones,$categoria,$permiso){
		$this->smarty->assign('campeones',$campeones);
		$this->smarty->assign('categoria',$categoria);
		if($permiso>0){
		$this->smarty->assign('permiso',$permiso);}
		$this->smarty->display('ultimosCampeones.tpl');
	}
}
?>
