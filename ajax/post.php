<?php
    $archivo = fopen("../data/post.json","a+");

    fwrite($archivo,json_encode($_POST)."\n");

    fclose($archivo);

    $respuesta["codigo"]= 1;
    $respuesta["mensaje"]= "Post guardado exitosamente";

    echo json_encode($respuesta);
?>