<?php
    $host = "localhost";
    $user = "root";
    $pass = "";
    $db = "spv";

    $conexion = mysqli_connect($host, $user, $pass, $db);

    if($conexion){
    }else{
        echo "No se ha podido conectar a la Base de Datos $db";
    }


?>