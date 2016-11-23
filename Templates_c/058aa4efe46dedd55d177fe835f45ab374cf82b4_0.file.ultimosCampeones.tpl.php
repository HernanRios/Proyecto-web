<?php
/* Smarty version 3.1.30, created on 2016-11-22 22:44:03
  from "C:\xampp\htdocs\proyectos\Proyecto\templates\ultimosCampeones.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5834bc23ade988_31085798',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '058aa4efe46dedd55d177fe835f45ab374cf82b4' => 
    array (
      0 => 'C:\\xampp\\htdocs\\proyectos\\Proyecto\\templates\\ultimosCampeones.tpl',
      1 => 1479851040,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5834bc23ade988_31085798 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="col-md-8">
  <article class="contenedor">
    <h2>Ultimos Campeones</h2>
    <table class="table table-stripper">
      <thead>
        <tr>
          <th>Campeon</th>
          <th>SubCampeon</th>
          <th>Categoria</th>
          <th>Año</th>
          <td>Fotos</td>
          <td>Comentarios</td>
          <?php if (isset($_smarty_tpl->tpl_vars['permiso']->value)) {?>
          <th>
            PUNTUAR
          </th>
          <?php }?>
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
          <td><?php echo $_smarty_tpl->tpl_vars['campeon']->value['anio'];?>
</td>
          <td><ul>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['campeon']->value['imagenes'], 'imagen', false, 'index');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['index']->value => $_smarty_tpl->tpl_vars['imagen']->value) {
?>
              <li><img src="<?php echo $_smarty_tpl->tpl_vars['imagen']->value['path'];?>
" alt="TareaImagen_<?php echo $_smarty_tpl->tpl_vars['campeon']->value['campeon'];?>
"  class="img-thumbnail"width="100" height="100"></li>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

          </ul></td>
          <td><ul>
          <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['campeon']->value['comentarios'], 'comentario', false, 'index');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['index']->value => $_smarty_tpl->tpl_vars['comentario']->value) {
?>
          <li>$comentario['comentario']</li>
          <?php if (isset($_smarty_tpl->tpl_vars['permiso']->value)) {?>
          <td>
              <select id="puntuarComentario">
                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="4">4</option>
                  <option value="5">5</option>
              </select>
            <button type="button" name="button">Puntuar</button>
          </td>
          <?php }?>
          <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

          </ul></td>
        </tr>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

      </tbody>
    </table>
  </article>
</div>
</div>

<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php }
}
