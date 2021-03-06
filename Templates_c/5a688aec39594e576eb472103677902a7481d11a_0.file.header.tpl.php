<?php
/* Smarty version 3.1.30, created on 2016-11-23 00:24:55
  from "C:\xampp\htdocs\proyectos\Proyecto\templates\header.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5834d3c7e615c2_18517506',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5a688aec39594e576eb472103677902a7481d11a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\proyectos\\Proyecto\\templates\\header.tpl',
      1 => 1479857089,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5834d3c7e615c2_18517506 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<!-- Esta es la pagina principal, la cual solo contiene el head y una parte del body: el body contiene la nav, el footer y un div,
  en este ultimo se hara partial render y se cargara los distintos contenedores de la pagina. -->
  <html lang="en">
  <head>
    <link rel="shortcut icon" href="img/logo">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>rFactor Zonal Argentina</title>

    <!-- Bootstrap -->
    <link href="css/estilo.css" rel="stylesheet">

    <link href="css/bootstrap.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
<?php echo '<script'; ?>
 src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"><?php echo '</script'; ?>
>
<![endif]-->
</head>
<body class="fondo">
  <nav class="navbar navbar-custom">
    <div class="container-fluid">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand navItem" id ="navIndex" data-nombre-pagina="contIndex.html">RFZA</a>
      </div>
      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav">
          <li class="navItem" data-nombre-pagina="contQuienesSomos.html"><a href="#" id="navQuienesSomos">Quienes Somos</a></li>
          <li><a>Noticias</a></li>
          <li ><a>Miembros</a></li>
          <li ><a href="mostrar_campeones" data-nombre-pagina="vacio.html">Ultimos Campeones</a></li>
          <li class="navItem" data-nombre-pagina="contContacto.html"><a href="#">Contacto</a></li>
          <li><a href="#">Multimedia</a></li>
          <li><a href="abrir_abm" data-nombre-pagina="vacio.html">ABM</a></li>
          <li><a href="mostrar_login" data-nombre-pagina="vacio.html">Logueate!</a></li>
          <li><a href="mostrar_registrar" data-nombre-pagina="vacio.html">Registrate</a></li>
          <li><a href="logout" data-nombre-pagina="vacio.html">logout</a></li>
          <li><a href="servicios_administracion" data-nombre-pagina="vacio.html">Servicios</a></li>
          <li><a href="https://www.facebook.com/groups/rFzonal.arg/" target="_blank">Facebook</a></li>
        </ul>
      </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
  </nav>
<?php }
}
