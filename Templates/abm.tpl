{include file="header.tpl"}
<div class="container ">
  <div class="contenedor">
  <form  action="guardar_campeon" method="post" enctype="multipart/form-data">
    <div class="form-group">
      <label for="campeon">Campeon</label>
      <input type="text" class="form-control" name="campeon" placeholder="Campeon" required />
      <label for="Subcamepon">SubCampeon</label>
      <input type="text" class="form-control" name="subcampeon" placeholder="SubCampeon" required />
      <label for="grupo">Categoria</label>
      <select class="form-control selectpicker" data-style="btn-primary" name="categoria" >
        {foreach from=$categorias key=index item=categoria}
        <option value={$categoria['id_categoria']}>{$categoria['id_categoria']}</option>
        {/foreach}
      </select>
      <label for="grupo">Anio</label>
      <input type="text" class="form-control" name="anio" placeholder="anio" required />
      <label for="imagenesCampeonato">Imagenes del Campeonato</label>
        <input type="file" name="imagenesCampeonato[]" id="imagenesCampeonato" multiple required="true">

    </div>
    <div class="form-group">
      <input type="submit" name="Agregar" id="agregarTareaBtn">
    </form>
    </div>
  </div>
  <div class="contenedor" id="editorCampeonato">
  </div>
  <div class="contenedor">
    <table class="table table-stripper">
      <thead>
        <tr>
          <th>Campeon</th>
          <th>SubCampeon</th>
          <th>Categoria</th>
          <th>A&ntildeo</th>
          <th>Borrar</th>
          <th>Editar</th>
          <th>FOTOS</th>
        </tr>
      </thead>
      <tbody id="mostrarTabla">
        {foreach from=$campeones key=index item=campeon}
        <tr>
          <td>{$campeon['campeon']}</td>
          <td>{$campeon['subcampeon']}</td>
          <td>{$campeon['fk_id_categoria']}</td>
          <td>{$campeon['anio']}</td>
          <td><a class="eliminarCampeon" href="#" data-idcampeonato="{$campeon['id_campeonato']}"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
          <td><a class="cargar_editorCampeon" href="#" data-idcampeonato="{$campeon['id_campeonato']}"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a></td>
          <th><ul>
          {foreach from=$campeon['imagenes'] key=index item=imagen}
            <li><img src="{$imagen['path']}" alt="TareaImagen_{$campeon['campeon']}"  class="img-thumbnail"width="100" height="100"></li>
            {/foreach}
          </ul> </td>
        </tr>
        {/foreach}
      </tbody>
    </table>
  </div>
  <div class="editorCampeon contenedor">
  </div>
  <div class="contenedor">
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
  </div class="contenedor">
  <div class="contenedor">
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
        {foreach from=$categorias key=index item=categoria}
        <tr>
          <td>{$categoria['id_categoria']}</td>
          <td>{$categoria['cilindrada']}</td>
          <td>{$categoria['zona']}</td>
          <td><a class="eliminarCategoria" href="#" data-idcategoria="{$categoria['id_categoria']}"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
          <td><a class="cargar_editorCategoria" href="#" data-idcategoria="{$categoria['id_categoria']}"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a></td>
        </tr>
        {/foreach}
      </tbody>
    </table>
  </div class="contenedor">
  <div id="editorCategoria" class="contenedor">
  </div>


  {include file="footer.tpl"}
