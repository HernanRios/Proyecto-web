  {foreach from=$campeones key=index item=campeon}
  <tr>
    <td>{$campeon['campeon']}</td>
    <td>{$campeon['subcampeon']}</td>
    <td>{$campeon['fk_id_categoria']}</td>
    <td>{$campeon['anio']}</td>
  </tr>
  {/foreach}
