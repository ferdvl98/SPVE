<?php

    session_start();
    include "conexion.php";

    $user = $_POST["usuario"];
    $pass = $_POST["pass"];
    $pass = hash('sha512', $pass);

    $validar_login = mysqli_query($conexion, "SELECT * FROM cuentas WHERE usuario = '$user' AND contrasena = '$pass'");
    
    if(mysqli_num_rows($validar_login) > 0){
        $_SESSION["usuario"] = $user;
        header("location: ../menu.php"); /* sustituir por mi archivo*/
        exit;
    }else{
        echo '
            <script>
                alert("¡Usuario o Contraseña incorrectos!");
                window.location ="../index.php";
            </script>
            ';
    }


?>