{foreach from=$campeonOrginal key=index item=campeon}
<form  action="editar_campeon" method="get" enctype="multipart/form-data">
  <div class="form-group">
    <input type="hidden" name="idcampeonato" value="{$campeon['id_campeonato']}">
    <label for="campeon">Campeon</label>
    <input type="text" class="form-control" name="campeon" value="{$campeon['campeon']}" required />
    <label for="Subcamepon">SubCampeon</label>
    <input type="text" class="form-control" name="subcampeon" value="{$campeon['subcampeon']}" required />
    <label for="grupo">Categoria</label>
    <select class="form-control selectpicker" data-style="btn-primary" name="categoria" >
      {foreach from=$categorias key=index item=categoria}
      <option value={$categoria['id_categoria']}> {$categoria['id_categoria']}</option>
      {/foreach}
    </select>
    <label for="grupo">Anio</label>
    <input type="text" class="form-control" name="anio" value="{$campeon['anio']}" required />
  </div>
  <div class="form-group">
    <input type="submit" name="editar" >
  </form>
  {/foreach}
