<?php
/* Smarty version 3.1.30, created on 2016-10-19 15:57:42
  from "C:\xampp\htdocs\proyectos\Proyecto\templates\formularioCategoria.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58077bd68ca8b2_16527894',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '44cd2b150549ecae505da972ee55286dda99169a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\proyectos\\Proyecto\\templates\\formularioCategoria.tpl',
      1 => 1476884387,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58077bd68ca8b2_16527894 (Smarty_Internal_Template $_smarty_tpl) {
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['categoria']->value, 'category', false, 'index');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['index']->value => $_smarty_tpl->tpl_vars['category']->value) {
?>
<h1>EDITOR DE CATEGORIA</h1>
<form  action="editar_categoria" method="get" enctype="multipart/form-data">
  <div class="form-group">
    <input type="hidden" class="form-control" name="categoriaOriginal" required value="<?php echo $_smarty_tpl->tpl_vars['category']->value['id_categoria'];?>
"/>
    <label for="categoria">Categoria</label>
    <input type="text" class="form-control" name="categoria" placeholder="Categoria" required value="<?php echo $_smarty_tpl->tpl_vars['category']->value['id_categoria'];?>
"/>
    <label for="cilindrada">cilindrada</label>
    <input type="text" class="form-control" name="cilindrada" placeholder="Cilindrada" required value="<?php echo $_smarty_tpl->tpl_vars['category']->value['cilindrada'];?>
"/>
    <label for="zona">Zona</label>
    <input type="text" class="form-control" name="zona" placeholder="Zona" required value="<?php echo $_smarty_tpl->tpl_vars['category']->value['zona'];?>
" />
    <input type="submit" name="Editar">
  </form>
<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

<?php }
}
