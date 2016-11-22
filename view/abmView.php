<?php
include_once 'view/View.php';

class AbmView extends View {
  
  function mostrarAbm($campeones,$categorias){
    $this->smarty->assign('categorias',$categorias);
    $this->smarty->assign('campeones',$campeones);
    $this->smarty->display('abm.tpl');
  }

  function mostrarEditor ($categoria){
    $this->smarty->assign('categoria',$categoria);
    $this->smarty->display('formularioCategoria.tpl');
  }

  function mostrarEditorCampeon ($campeon,$categoria){
    $this->smarty->assign('categorias',$categoria);
    $this->smarty->assign('campeonOrginal',$campeon);
    $this->smarty->display('formularioCampeonato.tpl');
  }

   function mostrarTabla($campeones){
     $this->smarty->assign('campeones',$campeones);
     $this->smarty->display('tabla.tpl');
   }
}
?>
