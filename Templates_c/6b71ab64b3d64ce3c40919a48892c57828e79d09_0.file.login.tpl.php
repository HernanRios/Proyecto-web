<?php
/* Smarty version 3.1.30, created on 2016-11-22 13:23:29
  from "C:\xampp\htdocs\proyectos\Proyecto\templates\login.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_583438c17094c0_87645526',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6b71ab64b3d64ce3c40919a48892c57828e79d09' => 
    array (
      0 => 'C:\\xampp\\htdocs\\proyectos\\Proyecto\\templates\\login.tpl',
      1 => 1479773611,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_583438c17094c0_87645526 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php if (isset($_smarty_tpl->tpl_vars['mensaje']->value)) {?>
      <div class="alert alert-<?php echo $_smarty_tpl->tpl_vars['tipoMensaje']->value;?>
" role="alert"><?php echo $_smarty_tpl->tpl_vars['mensaje']->value;?>
</div>
    <?php }?>
<form id="formulario-acceso" class="form-signin" method="POST" action="login">
      <h2 class="form-signin-heading">Acceso</h2>
      <label for="txtEmail" class="sr-only">Email</label>
      <input type="email" id="txtEmail" name="txtEmail" class="form-control" placeholder="Email" required autofocus>
      <label for="txtPassword" class="sr-only">Password</label>
      <input type="password" id="txtPassword" name="txtPassword" class="form-control" placeholder="Password" required>
      <?php if (count($_smarty_tpl->tpl_vars['errores']->value) > 0) {?>
        <div class="alert alert-danger" role="alert">
          <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
          <span class="sr-only">Error:</span>
          <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['errores']->value, 'error');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['error']->value) {
?>
            <?php echo $_smarty_tpl->tpl_vars['error']->value;?>

          <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

        </div>
      <?php }?>
      <button id="acceder" class="btn btn-lg btn-primary btn-block" type="submit">Acceder</button>
    </form>
    <div id="mensaje"></div>

  </div>

<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php }
}
