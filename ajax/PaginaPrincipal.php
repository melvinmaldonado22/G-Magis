<?php include("seguridad.php"); ?>
<!doctype html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../img/favicon.ico" type="image/x-icon">

    <title>G-Magis - Página Principal</title>

    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/fontawesome/css/all.css" rel="stylesheet">
    <link href="../css/redefinir.css" rel="stylesheet">
    <style>
      .publicacion{
        background-color:white;
        width:180px;
      }
    </style>

  </head>
  
  <body>
    <nav class="navbar fixed-top bg-dark flex-md-nowrap p-0 shadow navbar-fixed-top">
      <span ><i id="font" class="fas fa-bars"></i></span>
      <a class="marginnav" href="PaginaPrincipal.php"><img src="../img/logo2.png"></a>
      <span>
        <strong class="marginnav" id="PaginaPrincipal" >Página Principal</strong>
      </span>
      <input id="txtBuscar" class="form-control form-control-dark w-100" 
      type="text" placeholder="Buscar en G-Magis" aria-label="Search">
      <i id="inav" class="fas fa-th"></i>
      <ul class="navbar-nav px-3">
        <li class="nav-item text-nowrap">
          <a href="logout.php" type="button" class="btn btn-primary" >Salir</a>
        </li>
      </ul>
    </nav>

    <div class="container-fluid">
      <div class="row">
        <nav class="col-md-2 d-none d-md-block bg-light sidebar">
          <div class="sidebar-sticky">
            <ul class="nav flex-column">
              <li class="nav-item">
                <a class="nav-link active" href="PaginaPrincipal.php">
                  <span class="spannav" data-feather="home"><i class="fas fa-home"></i></span>
                  Página Principal <span class="sr-only">(current)</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="../Descubrir.html">
                  <span class="spannav" data-feather="file"><i class="fas fa-compass"></i></span>
                  Descubrir<span class="sr-only">(current)</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="../Comunidades.html">
                  <span class="spannav" data-feather="shopping-cart"><i class="fas fa-universal-access"></i></span>
                  Comunidades
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <span class="spannav" data-feather="users"><i class="fas fa-user-circle"></i></span>
                  Perfil
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <span class="spannav" data-feather="bar-chart-2"><i class="fas fa-user-friends"></i></span>
                  Personas
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <span class="spannav" data-feather="layers"><i class="fas fa-bell"></i></span>
                  Notificaciones
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="../Juego.html">
                  <span class="spannav" data-feather="file-text"><i class="fas fa-gamepad"></i></span>
                  Jugar
                </a>
              </li>
            </ul>

            <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
              <span style="color: rgba(158, 158, 158, 0.322)">_______________________________________</span>
            </h6>
            <ul class="nav flex-column mb-2">
              <li class="nav-item">
                <a class="nav-link navlink" href="#">
                  <span class="spannav" data-feather="file-text"></span>
                  Configuración
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link navlink" href="#">
                  <span class="spannav" data-feather="file-text"></span>
                  Informar un problema
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link navlink" href="#">
                  <span class="spannav" data-feather="file-text"></span>
                  Ayuda
                </a>
              </li>
            </ul>
            <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
              <span id="derechos" class="navlink">
                ©2018 G-Magis • Política de privacidad • 
                Condiciones del servicio • Condiciones de Maps Marcas
              </span>
            </h6>
          </div>
        </nav>
        
    <section class="seccion2Home">
        <div class="publicacion">
          <span><input type="text"></span>
          <span><i class="fas fa-camera"></i></span>
        </div>
      <div class="card-columns">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Universo Obserbable</h5>
            <p class="card-text">Galaxia Mh-65482 a 600 años luz de la vía lactea</p>
          </div>
          <img class="card-img-top" src="../img/tarjeta.jpg" alt="Card image cap">
          <div class="card-body">
            <p class="card-text">
              únete a nuestra comunidad y disfruta de la mejor colección de imagenes HD 
              y 4K del universo y mas.
            </p>
          </div>
        </div>
      </div><!--final card columns--> 
    </section>
  </body>
</html>