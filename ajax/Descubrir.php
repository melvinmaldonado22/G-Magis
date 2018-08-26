<?php include("seguridad.php"); ?>
<!doctype html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../img/favicon.ico" type="image/x-icon">

    <title>G-Magis - Descubrir</title>

    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/fontawesome/css/all.css" rel="stylesheet">
    <link href="../css/redefinir.css" rel="stylesheet">

    <style>
      .dropbtn {
          background-color: transparent !important;
          color: transparent !important;
          padding: 0px;
          font-size: 0px;
          border: none;
          cursor: pointer;

      }

      .dropbtn:hover, .dropbtn:focus {
          background-color: none;
      }

      .dropdown {
          float: right;
          position: relative;
          display: inline-block;
          right: -45px;
      }

      .img-thumbnail {
          padding: 0rem;
          background-color: #fff;
          border: 1px solid #dee2e6;
          border-radius: .25rem;
          max-width: 30%;
          height: auto;
      }
      .dropdown-content {
          display: none;
          position: absolute;
          background-color: #ffff;
          min-width: 160px;
          overflow: auto;
          box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
          right: 0;
          z-index: 1;
          padding: 7px;
      }

      .dropdown-content a {
          color: black;
          padding: 1px 1px;
          text-decoration: none;
          display: block;
      }

      .dropdown a:hover {background-color: #ddd;}

      .show {display: block;}

      .dropdown-content a:hover {background-color: #ddd;}

      .dropdown:hover .dropdown-content {display: block;}

      .dropdown:hover .dropbtn {background-color: #3e8e41;}

      .pl-3, .px-3 {
          padding-left: 0rem!important;
      }
      .pr-3, .px-3 {
          padding-right: 0rem!important;
      }
      .img-menu{
        height:65px;
        width: 65px;
      }
      #t-iconos td{
        padding:20px;
      }
      #t-usuario td{
        padding:2px;
      }
      .img-usr{
        height:20px;
        width: 20px;
      }
      .span0 {
        width: 0;
        margin-left: 0;
      }
      #barra contenedor {
        height: 200px;
        -webkit-transition: width 0.3s ease, margin 0.3s ease;
        -moz-transition: width 0.3s ease, margin 0.3s ease;
        -o-transition: width 0.3s ease, margin 0.3s ease;
        transition: width 0.3s ease, margin 0.3s ease;
      }
      .publicacion{
        background-color: white;
        width: 336px;
        height: 58px;
        padding: -10px;
        margin-bottom: 3px;
        border-radius: 8px
      }
      .caja-texto{
        width: 222px;
        border: none;
        height: 49px;
        margin-right: 9px;
        padding: 10px;
        font-size: 14px;
      }
      .tamanio2{
        margin-left: 7px;
        width: 40px;
        padding: -1px;
        margin-bottom: 14px;
      }
      .camara{
        font-size: 24px;
        color: grey;
        padding: -1px;
        margin-top: 15px;
      }
      .comentar{
        width: 164px;
        border: none;
      }
      .tamanio3{
        margin-left: 0px;
        width: 26px;
        margin-bottom: 10px;
        margin-right: 2px;
      }
      .nu{
        color: #39AE75;
        text-decoration:none;
      }
      .card-columns .card {
        display: inline-block;
        width: 67%;
      }
      .card-div{
        margin: 9px;
        padding: 0px;
        border-radius:9px;
        background-color: white;
      }
      .card-body-div{
        padding: 13px;
      }
      .card-img-top {
        width: 100%;
        border-top-left-radius: calc(0.25rem - 1px);
        border-top-right-radius: calc(0.25rem - 1px);
      }  
    </style>

  </head>
  
  <body>
    <nav class="navbar fixed-top bg-dark flex-md-nowrap p-0 shadow navbar-fixed-top">
      <a href="#" id="sidebar"><i id="font" class="fas fa-bars"></i></a>
      <a class="marginnav" href="PaginaPrincipal.php"><img src="../img/logo2.png"></a>
      <span>
        <strong class="marginnav" id="PaginaPrincipal" >Descubrir</strong>
      </span>
      <input id="txtBuscar" class="form-control form-control-dark w-100" 
      type="text" placeholder="Buscar en G-Magis" aria-label="Search">

        <div class="dropdown">
          <button class="dropbtn"><i id="inav" class="fas fa-th"></i></button>
          <div class="dropdown-content">
            <table id="t-iconos">
            <tr>
              <td><a href="" title="G-mail"><img src="../img/ico1.png" border="0" class="img-menu"></a></td>
              <td><a href="https://www.youtube.com/?hl=es-419" title="Youtube"><img src="../img/ico2.png" border="0" class="img-menu"></a></td>
              <td><a href="https://www.google.com/drive/" title="Google Drive"><img src="../img/ico3.png" border="0" class="img-menu"></a></td>
            </tr>
            <tr>
              <td><a href="https://www.google.hn/" title="Google"><img src="../img/ico4.png" border="0" class="img-menu"></a></td>
              <td><a href="#" title="ir a:"><img src="../img/ico5.png" border="0" class="img-menu"></a></td>
              <td><a href="#" title="ir a:"><img src="../img/ico6.png" border="0" class="img-menu"></a></td>
            </tr>
            <tr>
              <td><a href="#" title="ir a:"><img src="../img/ico7.png" border="0" class="img-menu"></a></td>
              <td><a href="https://chrome.google.com/webstore/category/extensions?hl=es-419" title="Crome Store"><img src="../img/ico8.png" border="0" class="img-menu"></a></td>
              <td><a href="#" title="ir a:"><img src="../img/ico9.png" border="0" class="img-menu"></a></td>
            </tr>
            </table>
          </div>
        </div>

        <ul class="navbar-nav px-3">
        <li class="nav-item text-nowrap">
          <div class="dropdown">
            <a class="dropbtn"><img src="../img/profile.jpg" class="img-fluid rounded-circle img-thumbnail tamanio"></a>
            <div class="dropdown-content">
              <table id="t-usuario">
                <tr>
                  <td><a href="#" title="Ver Perfil:"><img src="../img/perfil.png" border="0" class="img-usr"></a></td>
                  <td><a href="#">Ver Perfil</a></td>
                </tr>
                <tr>
                  <td><a href="#" title="Configuración:"><img src="../img/configuracion.png" border="0" class="img-usr"></a></td>
                  <td><a href="#">Configuración</a></td>
                </tr>
                <tr>
                  <td><a href="logout.php" title="Cerrar Sesión:"><img src="../img/cerrar-sesion.png" border="0" class="img-usr"></a></td>
                  <td><a href="logout.php">Cerrar Sesión</a></td>
                </tr>
              </table>
        </li>
      </ul>
    </nav>

    <div class="container-fluid">
      <div class="row">
        <nav id="barra" class="col-md-2 d-none d-md-block bg-light sidebar">
          <div class="sidebar-sticky">
            <ul class="nav flex-column">
              <li class="nav-item">
                <a class="nav-link active" href="PaginaPrincipal.php">
                  <span class="spannav" data-feather="home"><i class="fas fa-home"></i></span>
                  Página Principal <span class="sr-only">(current)</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="Descubrir.php">
                  <span class="spannav" data-feather="file"><i class="fas fa-compass"></i></span>
                  Descubrir<span class="sr-only">(current)</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="Comunidades.php">
                  <span class="spannav" data-feather="shopping-cart"><i class="fas fa-universal-access"></i></span>
                  Comunidades
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="Perfil.php">
                  <span class="spannav" data-feather="users"><i class="fas fa-user-circle"></i></span>
                  Perfil
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="Personas.php">
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
                <a class="nav-link" href="../html/Juego.html">
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
        
    <section id="contenido" class="seccion2Home">
    <div class="card-columns">> 
        <?php
          $archivo = fopen("../data/descubrir.json","r");
          $linea = "";
          while($linea = fgets($archivo)){
            $contenido = json_decode($linea,true);
            echo 
            '<div class="card">
              <img class="card-img-top" src="../img/descubrir/'.$contenido["imagen"].'" alt="Card image cap">
              <div class="card-body-div">
                <h6 class="card-title">'.$contenido["titulo"].'</h6>
                <p class="card-text">'.$contenido["descripcion"].'</p>
                <span><a class="dropbtn"><img src="../img/profile.jpg" class="img-fluid rounded-circle img-thumbnail tamanio2"></a></span>
                <span>'.$contenido["nombre"].'  '.$contenido["apellidos"].'</a></span>
              </div>
              </div>
            ';
          }
        ?>
      </div>
    </section><!--final card columns--> 
    <script src="../js/jquery-3.2.1.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script>
        $("#sidebar").click(function () {
          $('#contenido').toggleClass('span12 span9');
          $('#barra').toggleClass('span0 span3');
      });
    </script>
  </body>
</html>