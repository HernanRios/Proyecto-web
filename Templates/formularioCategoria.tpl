<form  action="editar_categoria" method="post" enctype="multipart/form-data">
  <div class="form-group">
    <label for="categoria">Categoria</label>
    <input type="text" class="form-control" name="categoria" placeholder="Categoria" required value="{$categoria['id_categoria']}"/>
    <label for="cilindrada">cilindrada</label>
    <input type="text" class="form-control" name="cilindrada" placeholder="Cilindrada" required value="{$categoria['cilindrada']}"/>
    <label for="zona">Zona</label>
    <input type="text" class="form-control" name="zona" placeholder="Zona" required value="{$categoria['zona']}" />
    <input type="submit" name="Editar">
  </form>
