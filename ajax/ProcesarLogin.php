<?php
    session_start();
    $archivo = fopen("../usr/usuarios.json","r");
    $linea = "";
    while(($linea = fgets($archivo))){
        $usuarios = json_decode($linea,true);
        if($_POST["correo"] == $usuarios["correo"] && $_POST["password"] == $usuarios["password"]){
            $respuesta["codigo"] = 1;
            $respuesta["mensaje"] = "usuario y contraseña correcto..!";
            $_SESSION["nombre"] = $usuarios["nombre"];
            $_SESSION["correo"] = $usuarios["correo"];
            echo json_encode($respuesta);
            exit();
        }
    }
    fclose($archivo);
    $respuesta["codigo"] = 2;
    $respuesta["mensaje"] = "usuario o contraseña incorrecto..!";
    echo json_encode($respuesta);
    
?>