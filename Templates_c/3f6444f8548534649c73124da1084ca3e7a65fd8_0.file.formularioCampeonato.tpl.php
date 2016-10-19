<?php
/* Smarty version 3.1.30, created on 2016-10-19 18:31:59
  from "C:\xampp\htdocs\proyectos\Proyecto\templates\formularioCampeonato.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58079fffb1c3b0_28393805',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3f6444f8548534649c73124da1084ca3e7a65fd8' => 
    array (
      0 => 'C:\\xampp\\htdocs\\proyectos\\Proyecto\\templates\\formularioCampeonato.tpl',
      1 => 1476894710,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58079fffb1c3b0_28393805 (Smarty_Internal_Template $_smarty_tpl) {
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['campeonOrginal']->value, 'campeon', false, 'index');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['index']->value => $_smarty_tpl->tpl_vars['campeon']->value) {
?>
<form  action="editar_campeon" method="get" enctype="multipart/form-data">
  <div class="form-group">
    <input type="hidden" name="idcampeonato" value="<?php echo $_smarty_tpl->tpl_vars['campeon']->value['id_campeonato'];?>
">
    <label for="campeon">Campeon</label>
    <input type="text" class="form-control" name="campeon" value="<?php echo $_smarty_tpl->tpl_vars['campeon']->value['campeon'];?>
" required />
    <label for="Subcamepon">SubCampeon</label>
    <input type="text" class="form-control" name="subcampeon" value="<?php echo $_smarty_tpl->tpl_vars['campeon']->value['subcampeon'];?>
" required />
    <label for="grupo">Categoria</label>
    <select class="form-control selectpicker" data-style="btn-primary" name="categoria" >
      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['categorias']->value, 'categoria', false, 'index');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['index']->value => $_smarty_tpl->tpl_vars['categoria']->value) {
?>
      <option value=<?php echo $_smarty_tpl->tpl_vars['categoria']->value['id_categoria'];?>
> <?php echo $_smarty_tpl->tpl_vars['categoria']->value['id_categoria'];?>
</option>
      <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

    </select>
    <label for="grupo">Anio</label>
    <input type="text" class="form-control" name="anio" value="<?php echo $_smarty_tpl->tpl_vars['campeon']->value['anio'];?>
" required />
  </div>
  <div class="form-group">
    <input type="submit" name="editar" >
  </form>
  <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

<?php }
}
