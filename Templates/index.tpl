{include file="header.tpl"}
{if isset($mensaje)}
      <div class="alert alert-{$tipoMensaje}" role="alert">{$mensaje}</div>
    {/if}
<div class="container">
    <div class="row" id="mostrador">
      <!-- En esta seccion se cargaran los contenedores aue contienen codigo html de cada seccion! -->
    </div>
  </div>
{include file="footer.tpl"}
