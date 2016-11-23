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
          <td><ul>
            {foreach from=$campeon['imagenes'] key=index item=imagen}
              <li><img src="{$imagen['path']}" alt="TareaImagen_{$campeon['campeon']}"  class="img-thumbnail"width="100" height="100"></li>
            {/foreach}
          </ul></td>
          <td><ul>
          {foreach from=$campeon['comentarios'] key=index item=comentario}
          <li>$comentario['comentario']</li>
          {if isset($permiso)}
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
          {/if}
          {/foreach}
          </ul></td>
        </tr>
        {/foreach}
      </tbody>
    </table>
  </article>
</div>
</div>

{include file="footer.tpl"}
