{include file="header.tpl"}
{if isset($mensaje)}
      <div class="alert alert-{$tipoMensaje}" role="alert">{$mensaje}</div>
    {/if}
<form id="formulario-acceso" class="form-signin" method="POST" action="login">
      <h2 class="form-signin-heading">Acceso</h2>
      <label for="txtEmail" class="sr-only">Email</label>
      <input type="email" id="txtEmail" name="txtEmail" class="form-control" placeholder="Email" required autofocus>
      <label for="txtPassword" class="sr-only">Password</label>
      <input type="password" id="txtPassword" name="txtPassword" class="form-control" placeholder="Password" required>
      {if count($errores) gt 0}
        <div class="alert alert-danger" role="alert">
          <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
          <span class="sr-only">Error:</span>
          {foreach $errores as $error}
            {$error}
          {/foreach}
        </div>
      {/if}
      <button id="acceder" class="btn btn-lg btn-primary btn-block" type="submit">Acceder</button>
    </form>
    <div id="mensaje"></div>

  </div>

{include file="footer.tpl"}
