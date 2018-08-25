<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>G-Magis - Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="icon" href="../img/favicon.ico" type="image/x-icon">
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/Estilos-Logins.css" rel="stylesheet">

</head>
<body>
    <div class="container">
        <div id="div-login" class="row">
            <div class="padingtext col-xl-12 sm ">
                <img src="../img/logo2Colores.png">
            </div>
            <div class="padingtext col-xl-12">
                <h4>Iniciar Sesión</h4>
            </div>
            <div class="padingtext col-xl-12">
                <h6>Utiliza tu cuenta de Google</h6>
            </div>
            <form id="formulario">
                <div class="col-xl-12 sm">
                    <input id="txt-correo" type="text" class="form-control input" placeholder="correo electrónico">
                </div>
                <div class="padingform col-xl-12">
                    <a class="a b" href="#">¿Haz olvidado tu correo electrónico?</a>
                </div>
                <div class="col-xl-12 sm">
                    <p class="padingform" >
                        ¿No es tu ordenador? Usa una ventana privada para iniciar sesión de forma privada
                        <a class="padingform a b" href="#">Mas información</a>
                    </p>
                </div>
                <div class="padingform col-xl-12 sm">
                    <span><a id="span" class="a b span" href="../html/Registro.html">Crear Cuenta</a></span>
                    <span><a id="btn-login" class="btns btn btn-primary">SIGUIENTE</a></span>
                </div>
            </form>
        </div>
        <div id="div-login2" class="row" style="display: none">
            <div class="padingtext col-xl-12 sm ">
                <img src="../img/logo2Colores.png">
            </div>
            <div class="padingtext col-xl-12">
                <h4>Nombre de Usuario</h4>
            </div>
            <div class="padingtext col-xl-12">
                <select class="form-control" name="slc-correo" id="slc-correo"></select>
            </div>
            <form id="formulario2">
                <div class="col-xl-12 sm">
                    <input id="txt-password" type="password" class="input form-control" placeholder="contraseña">
                </div>
                <div class="padingform col-xl-12 sm">
                    <span><a id="span2" class="a b" href="#">¿Haz olvidado tu contraseña?</a></span>
                    <span><a id="btn2-login" class="btns btn btn-primary">SIGUIENTE</a></span>
                </div>
            </form>
        </div>
        <footer id="div-footer" class="row">
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-3">
                <select class="form-control" name="slc-idioma" id="slc-idioma">
                    <option value="1">Español</option>
                    <option value="2">Inglés</option>
                    <option value="3">Arabe</option>
                    <option value="4">Francés</option>
                    <option value="5">Japones</option>
                </select>
            </div>
            <span class="col-xl-2 col-lg-2 col-md-2 col-sm-2 col-2"><a href="#" class="padingform b">Ayuda</a></span>
            <span class="col-xl-2 col-lg-2 col-md-2 col-sm-2 col-2"><a href="#" class="padingform b">Privacidad</a></span>
            <span class="col-xl-2 col-lg-2 col-md-2 col-sm-2 col-2"><a href="#" class="padingform b">Términos</a></span>
        </footer>
    </div>
    <script src="../js/jquery-3.2.1.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/ValidarLogin.js"></script>
</body>
</html>