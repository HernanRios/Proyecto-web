<?php
require('libs/Smarty.class.php');

class RFZAView
{
  private $smarty;

  function __construct()
  {
    $this->smarty = new Smarty();
  }

  function agregarError($error){
    $this->smarty->assign('error',$error);
  }

  function mostrarMensaje($mensaje, $tipo){
    $this->smarty->assign('mensaje',$mensaje);
    $this->smarty->assign('tipoMensaje',$tipo);
  }

  function mostrar(){
    $this->smarty->display('index.tpl');
  }

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
