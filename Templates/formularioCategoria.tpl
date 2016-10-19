{foreach from=$categoria key=index item=category}
<h1>EDITOR DE CATEGORIA</h1>
<form  action="editar_categoria" method="post" enctype="multipart/form-data">
  <div class="form-group">
    <label for="categoria">Categoria</label>
    <input type="text" class="form-control" name="categoria" placeholder="Categoria" required value="{$category['id_categoria']}"/>
    <label for="cilindrada">cilindrada</label>
    <input type="text" class="form-control" name="cilindrada" placeholder="Cilindrada" required value="{$category['cilindrada']}"/>
    <label for="zona">Zona</label>
    <input type="text" class="form-control" name="zona" placeholder="Zona" required value="{$category['zona']}" />
    <input type="submit" name="Editar">
  </form>
{/foreach}
