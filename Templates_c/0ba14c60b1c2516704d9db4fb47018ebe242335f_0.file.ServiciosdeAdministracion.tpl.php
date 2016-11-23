<?php
/* Smarty version 3.1.30, created on 2016-11-23 01:25:43
  from "C:\xampp\htdocs\proyectos\Proyecto\templates\ServiciosdeAdministracion.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5834e2072dc283_50114134',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0ba14c60b1c2516704d9db4fb47018ebe242335f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\proyectos\\Proyecto\\templates\\ServiciosdeAdministracion.tpl',
      1 => 1479860739,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5834e2072dc283_50114134 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="contenedor col-md-6">
  <h1>Administracion de Usuarios</h1>
  <h2>Modificar Permisos</h2>
  <select class="form-control selectpicker" id="selectUsuario" data-style="btn-primary" name="categoria" >
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['usuarios']->value, 'usuario', false, 'index');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['index']->value => $_smarty_tpl->tpl_vars['usuario']->value) {
?>
    <option value="<?php echo $_smarty_tpl->tpl_vars['usuario']->value['email'];?>
"><?php echo $_smarty_tpl->tpl_vars['usuario']->value['email'];?>
</option>
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

  </select>
  <select class="" id="selectPermiso" name="usuario">
    <option value="0">Usuario Comun</option>
    <option value="1">Administrador</option>
    <option value="2">Jefe</option>
    <option value="3">Consultor de Dios</option>
  </select>
  <button class="btnCambiarPermiso" type="button" name="button">Aplicar</button>
</div>
<div class="contenedor col-md-6">
  <h1>Borrar Comentarios</h1>
  <ul>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['usuarios']->value, 'usuario', false, 'index');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['index']->value => $_smarty_tpl->tpl_vars['usuario']->value) {
?>
    <li><?php echo $_smarty_tpl->tpl_vars['usuario']->value['email'];?>
 , <?php echo $_smarty_tpl->tpl_vars['usuario']->value['permiso'];?>

    </li>
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

  </ul>
</div>
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php }
}
