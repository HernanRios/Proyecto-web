<?php
/* Smarty version 3.1.30, created on 2016-10-19 20:33:12
  from "C:\xampp\htdocs\proyectos\Proyecto\templates\tabla.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5807bc682c5aa3_68019832',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6676cf316b2fd6bb85b51f11c26d180a9d76234a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\proyectos\\Proyecto\\templates\\tabla.tpl',
      1 => 1476900917,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5807bc682c5aa3_68019832 (Smarty_Internal_Template $_smarty_tpl) {
?>
  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['campeones']->value, 'campeon', false, 'index');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['index']->value => $_smarty_tpl->tpl_vars['campeon']->value) {
?>
  <tr>
    <td><?php echo $_smarty_tpl->tpl_vars['campeon']->value['campeon'];?>
</td>
    <td><?php echo $_smarty_tpl->tpl_vars['campeon']->value['subcampeon'];?>
</td>
    <td><?php echo $_smarty_tpl->tpl_vars['campeon']->value['fk_id_categoria'];?>
</td>
    <td><?php echo $_smarty_tpl->tpl_vars['campeon']->value['anio'];?>
</td>
  </tr>
  <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

<?php }
}
