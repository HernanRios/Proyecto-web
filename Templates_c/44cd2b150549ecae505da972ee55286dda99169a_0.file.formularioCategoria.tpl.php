<?php
/* Smarty version 3.1.30, created on 2016-10-19 00:58:07
  from "C:\xampp\htdocs\proyectos\Proyecto\templates\formularioCategoria.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5806a8ff8d48d9_25034090',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '44cd2b150549ecae505da972ee55286dda99169a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\proyectos\\Proyecto\\templates\\formularioCategoria.tpl',
      1 => 1476831479,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5806a8ff8d48d9_25034090 (Smarty_Internal_Template $_smarty_tpl) {
?>
<form  action="editar_categoria" method="post" enctype="multipart/form-data">
  <div class="form-group">
    <label for="categoria">Categoria</label>
    <input type="text" class="form-control" name="categoria" placeholder="Categoria" required value="<?php echo $_smarty_tpl->tpl_vars['categoria']->value['id_categoria'];?>
"/>
    <label for="cilindrada">cilindrada</label>
    <input type="text" class="form-control" name="cilindrada" placeholder="Cilindrada" required value="<?php echo $_smarty_tpl->tpl_vars['categoria']->value['cilindrada'];?>
"/>
    <label for="zona">Zona</label>
    <input type="text" class="form-control" name="zona" placeholder="Zona" required value="<?php echo $_smarty_tpl->tpl_vars['categoria']->value['zona'];?>
" />
    <input type="submit" name="Editar">
  </form>
<?php }
}
