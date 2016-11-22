{include file="header.tpl"}
{if isset($mensaje)}
      <div class="alert alert-danger" role="alert">{$mensaje}</div>
    {/if}
<form class="contenedor" action="registrar" method="post">
  <label for="txtEmail" class="sr-only">Email</label>
  <input type="email" id="txtEmail" name="txtEmail" class="form-control" placeholder="Email" required autofocus>
  <label for="txtPassword" class="sr-only">Password</label>
  <input type="password" id="txtPassword" name="txtPassword" class="form-control" placeholder="Password" required>
  <button id="acceder" class="btn btn-lg btn-primary btn-block" type="submit">Registrar</button>
</form>

{include file="footer.tpl"}
