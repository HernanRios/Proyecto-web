{include 'header.tpl'}
<div class="contenedor col-md-6">
  <h1>Administracion de Usuarios</h1>
  <h2>Modificar Permisos</h2>
  <select class="form-control selectpicker" id="selectUsuario" data-style="btn-primary" name="categoria" >
    {foreach from=$usuarios key=index item=usuario}
    <option value="{$usuario['email']}">{$usuario['email']}</option>
    {/foreach}
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
    {foreach from=$usuarios key=index item=usuario}
    <li>{$usuario['email']} , {$usuario['permiso']}
    </li>
    {/foreach}
  </ul>
</div>
{include 'footer.tpl'}
