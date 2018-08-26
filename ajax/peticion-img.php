<?php
    $archivo = fopen("../data/img.json", "r");
    $linea = "";
    $imagenes = array();
    while(($linea = fgets($archivo))){
        $contenido = json_decode($linea,true);
        $imagenes[] = $contenido;
    }
    echo json_encode($imagenes);
?>