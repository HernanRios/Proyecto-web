{include file="header.tpl"}
<div class="col-md-8">
  <article class="contenedor">
    <h2>Ultimos Campeones</h2>
    <div class="contenedor">
      <h1>Filtro por categoria</h1>
      <select class="form-control selectpicker"id="select" data-style="btn-primary" name="categoria" >
        {foreach from=$categorias key=index item=categoria}
        <option id="filtroCategoria" value="{$categoria['id_categoria']}">{$categoria['id_categoria']}</option>
        {/foreach}
      </select>
       <button  class="btnFiltrarCategoria">Filtrar</button>
    </div>
    <table class="table table-stripper">
      <thead>
        <tr>
          <th>Campeon</th>
          <th>SubCampeon</th>
          <th>Categoria</th>
          <th>Año</th>
          <td>Fotos</td>
          <td>Comentarios</td>
          {if isset($permiso)}
          <th>
            PUNTUAR
          </th>
          {/if}
        </tr>
      </thead>
      <tbody id="mostrarTabla">
        {foreach from=$campeones key=index item=campeon}
        <tr>
          <td>{$campeon['campeon']}</td>
          <td>{$campeon['subcampeon']}</td>
          <td>{$campeon['fk_id_categoria']}</td>
          <td>{$campeon['anio']}</td>
          <td>  <button type="button" class = "verComentario" data-idcm="{$campeon['id_campeonato']}" name="button">VER COMENTARIOS ONLINE</button>
            <ul>
            {foreach from=$campeon['imagenes'] key=index item=imagen}
              <li><img src="{$imagen['path']}" alt="TareaImagen_{$campeon['campeon']}"  class="img-thumbnail"width="100" height="100"></li>
            {/foreach}
          </ul></td>
          <td><div class="acaVaElcomentario{$campeon['id_campeonato']}">
          </div></td>
        </tr>
        {/foreach}
      </tbody>
    </table>
  </article>
  <button type="button" class="pararReloj" name="button">PARAR RELOJ</button>
</div>
</div>

{include file="footer.tpl"}
