<?php
$rol=$_SESSION['tipo'];
?>
<nav class="navbar navbar-default navbar-slide-top">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button class="btn btn-link btn-plus pull-right visible-xs sb-toggle-right"><span class="fa fa-plus fa-2x"></span></button>
      <button type="button" class="navbar-toggle pull-left visible-xs" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" style="margin-left: 15px;">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">WMAdmin</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li><a href="dashboard.php">Dashboard <span class="sr-only">(current)</span></a></li>
        <?php
        if($rol=="superusuario" || $rol=="administrador"){
        ?>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Secciones web <span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
          	<li><a href="homeweb.php">Portada web (imágenes)</a></li>
            <li><a href="frase_index.php">Frase incio</a></li>
          </ul>
        </li>
        <?php
        }
        if($rol=="superusuario"){
        ?>
        <li><a href="usuaris.php">Usuarios</a></li>
        <?php
        }
        if($rol=="superusuario" || $rol=="administrador"){
        ?>
        <li><a href="clientes.php">Clientes</a></li>
        <?php
        }
        if($rol=="superusuario" || $rol=="administrador"){
        ?>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Productos <span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="familias.php">Familias</a></li>
            <li><a href="productos.php">Productos</a></li>
          </ul>
        </li>
        <li><a href="blog.php">Blog</a></li>
        <?php
        }
        if($rol=="superusuario" || $rol=="comercial"){
        ?>
        <li><a href="ventas.php">Ventas</a></li>
        <?php
        }
        ?>
      </ul>
      <ul class="nav navbar-nav navbar-right hidden-sm">
        
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><?=$_SESSION['usuarioa']?> <span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="profile.php?id=<?=$_SESSION['id_usuarioa']?>">Profile</a></li>
            <li><a href="calendar.php">Calendar</a></li>
            <li><a href="index.php"><i class="fa fa-sign-out"></i> Log Out</a></li>
          </ul>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>