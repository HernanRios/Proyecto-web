<?php
/* Smarty version 3.1.30, created on 2016-11-22 01:17:52
  from "C:\xampp\htdocs\proyectos\Proyecto\templates\registrar.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58338eb016a822_21087108',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a3888ed1eec84f021ddd77173ccf60a14ade3350' => 
    array (
      0 => 'C:\\xampp\\htdocs\\proyectos\\Proyecto\\templates\\registrar.tpl',
      1 => 1479773723,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_58338eb016a822_21087108 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php if (isset($_smarty_tpl->tpl_vars['mensaje']->value)) {?>
      <div class="alert alert-danger" role="alert"><?php echo $_smarty_tpl->tpl_vars['mensaje']->value;?>
</div>
    <?php }?>
<form class="contenedor" action="registrar" method="post">
  <label for="txtEmail" class="sr-only">Email</label>
  <input type="email" id="txtEmail" name="txtEmail" class="form-control" placeholder="Email" required autofocus>
  <label for="txtPassword" class="sr-only">Password</label>
  <input type="password" id="txtPassword" name="txtPassword" class="form-control" placeholder="Password" required>
  <button id="acceder" class="btn btn-lg btn-primary btn-block" type="submit">Registrar</button>
</form>

<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php }
}
