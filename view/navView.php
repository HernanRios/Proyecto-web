<?php
include_once 'view/View.php';

class NavView extends View{

	function mostrarTabla($campeones){
		$this->smarty->assign('campeones',$campeones);
		$this->smarty->display('tabla.tpl');
	}
}
?>
