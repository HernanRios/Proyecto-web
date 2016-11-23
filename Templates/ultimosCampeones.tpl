{include file="header.tpl"}
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
          <td>  <button type="button" class = "verComentario" data-idcm="{$campeon['id_campeonato']}" name="button">VERCOMENTRIO</button>
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
</div>
</div>

{include file="footer.tpl"}
