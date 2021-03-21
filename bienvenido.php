<?php
    session_start();

    if(!isset($_SESSION["usuario"])){
        header("location: index.php");
        session_destroy();
        die();
        
    }
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenido</title>
</head>
<body>
    <p>Hola Mundo</p>
    <a href="php/cerrar_sesion.php">Cerrar Sesión</a>
</body>
</html>