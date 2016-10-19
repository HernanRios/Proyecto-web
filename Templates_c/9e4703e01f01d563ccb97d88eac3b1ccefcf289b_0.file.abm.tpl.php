<?php
/* Smarty version 3.1.30, created on 2016-10-19 01:33:45
  from "C:\xampp\htdocs\proyectos\Proyecto\templates\abm.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5806b1593015f5_68828866',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9e4703e01f01d563ccb97d88eac3b1ccefcf289b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\proyectos\\Proyecto\\templates\\abm.tpl',
      1 => 1476833604,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5806b1593015f5_68828866 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="container">
  <form  action="guardar_campeon" method="post" enctype="multipart/form-data">
    <div class="form-group">
      <label for="campeon">Campeon</label>
      <input type="text" class="form-control" name="campeon" placeholder="Campeon" required />
      <label for="Subcamepon">SubCampeon</label>
      <input type="text" class="form-control" name="subcampeon" placeholder="SubCampeon" required />
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
      <input type="text" class="form-control" name="anio" placeholder="anio" required />
    </div>
    <div class="form-group">
      <input type="submit" name="Agregar" id="agregarTareaBtn">
    </form>
  </div>
  <div>
    <table class="table table-stripper">
      <thead>
        <tr>
          <th>Campeon</th>
          <th>SubCampeon</th>
          <th>Categoria</th>
          <th>A&ntildeo</th>
          <th>Borrar</th>
          <th>Editar</th>
        </tr>
      </thead>
      <tbody id="mostrarTabla">
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
          <td><?php echo $_smarty_tpl->tpl_vars['campeon']->value['id_campeonato'];?>
</td>
          <td><a class="eliminarCampeon" href="#" data-idcampeonato="<?php echo $_smarty_tpl->tpl_vars['campeon']->value['id_campeonato'];?>
"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
          <td><a class="editarCampeon" href="#" data-idcampeonato="<?php echo $_smarty_tpl->tpl_vars['campeon']->value['id_campeonato'];?>
"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a></td>
        </tr>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

      </tbody>
    </table>
  </div>
  <div>
    <form  action="guardar_categoria" method="post" enctype="multipart/form-data">
      <div class="form-group">
        <label for="categoria">Categoria</label>
        <input type="text" class="form-control" name="categoria" placeholder="Categoria" required />
        <label for="cilindrada">cilindrada</label>
        <input type="text" class="form-control" name="cilindrada" placeholder="Cilindrada" required />
        <label for="zona">Zona</label>
        <input type="text" class="form-control" name="zona" placeholder="Zona" required />
        <input type="submit" name="Agregar">
      </form>
    </div>
  </div>
  <div>
    <table class="table table-stripper">
      <thead>
        <tr>
          <th>Categoria</th>
          <th>Cilindrada</th>
          <th>Zona</th>
          <th>Borrar</th>
          <th>Editar</th>
        </tr>
      </thead>
      <tbody>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['categorias']->value, 'categoria', false, 'index');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['index']->value => $_smarty_tpl->tpl_vars['categoria']->value) {
?>
        <tr>
          <td><?php echo $_smarty_tpl->tpl_vars['categoria']->value['id_categoria'];?>
</td>
          <td><?php echo $_smarty_tpl->tpl_vars['categoria']->value['cilindrada'];?>
</td>
          <td><?php echo $_smarty_tpl->tpl_vars['categoria']->value['zona'];?>
</td>
          <td><a class="eliminarCategoria" href="#" data-idcategoria="<?php echo $_smarty_tpl->tpl_vars['categoria']->value['id_categoria'];?>
"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
          <td><a class="editarCategoria" href="#" data-idcategoria="<?php echo $_smarty_tpl->tpl_vars['categoria']->value['id_categoria'];?>
"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a></td>
        </tr>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

      </tbody>
    </table>
    <div class="topo">
    </div>
  </div>
  <div id="editorCategoria">
  </div>

  <?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php }
}
