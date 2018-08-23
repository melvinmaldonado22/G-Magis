<?php
if (isset($_POST)){
    $archivo=fopen("../usr/usuarios.json","a+");
    fwrite($archivo,json_encode($_POST)."\n");
    fclose($archivo);

    $respuesta["codigo"]=1; 
    $respuesta["mensaje"]="El archivo fue creado con éxito."; 
    echo json_encode($respuesta);
}
?>